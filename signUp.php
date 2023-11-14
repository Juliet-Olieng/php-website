<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="signUp.css">
</head>
<body>
    <?php
    if (isset($_POST["submit"])) {
        $Fullname=$_POST["Fullname"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $confirmpassword=$_POST["confirmpassword"];
        // encryption
        $passwordhash=password_hash($password,PASSWORD_DEFAULT); 
        // validationation
        $errors=array();
        if (empty($Fullname) OR empty($email) OR empty( $password) OR empty($confirmpassword)) {
            array_push($errors,"All fields are required");    
        }

    // email
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        array_push($errors,"Email is not valid");
    }
    // password length
    if(strlen($password)<8){
        array_push($errors,"Password must be atleast 8 characters");
    }
    if($password!==$confirmpassword){
        array_push($errors,"Password doesn't much");
    }
    // checking if an email exist in the db
    require_once"database.php";
    $sql="SELECT * FROM users WHERE email= '$email'";
    $result=mysqli_query($conn,$sql);
    $rowCount=mysqli_num_rows($result);
    if ($rowCount>0) {
        array_push($errors,"Email already exist!");
    }

    if (count($errors)>0) {
        foreach($errors as $error){
            echo $error;
        }
    }else {
        // inserting database
        $sql="INSERT INTO users(full_name,email,password) VALUES(?,?,?)";
        $stmt=mysqli_stmt_init($conn);
        $preparestmt=mysqli_stmt_prepare($stmt,$sql);
        if ( $preparestmt) {
            mysqli_stmt_bind_param($stmt,"sss",$Fullname,$email,$passwordhash);
            mysqli_stmt_execute($stmt);
            // echo "you are registered successfull";
            echo "<div>you are registered successfully</div>";

            # code...
        }else {
            die("something went wrong");
        }
    }
    }
     ?>
    <form action="signUp.php" method="post">
        <h1>welcome to Meddical</h1>
        <div>
            <input type="text" name="Fullname"  placeholder="Input your Fullname">
        </div>
        <div>
            <input type="email" name="email" placeholder="Input your email">
        </div>
        <div>
            <input type="text" name="password" placeholder="Input your password">
        </div>
        <div >
            <input type="text" name="confirmpassword" placeholder="confirm your password">
        </div>
        <div class="button">
            <input type="submit" value="Register" name="submit">
        </div>
        <!-- <a href="localhost/PHP/personal_project/PHP_WEBSITE/login.php"><button>signUp</button></a> -->
        <p>already have an account <a class="a" href="login.php">Login</a></p>
    </form> 
    </form>
    
</body>
</html>