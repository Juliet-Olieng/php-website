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
    <title>Login</title>
    <link rel="stylesheet" href="signUp.css">
</head>
<body>

<?php
if (isset($_POST["login"])) {
    $email=$_POST["email"];
    $password=$_POST["password"];  
    
    require_once"database.php";
    $sql="SELECT * FROM users WHERE email= '$email'";
    $result=mysqli_query($conn,$sql);
    $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if ($user) {
        if(password_verify($password,$user["password"])){
            session_start();
            $_SESSION["user"]="yes";
            header("Location:home.php");
        }else{
           echo "password doesn't match";
        }
    }else{
        array_push($errors,"Email already exist!");
    }

}
?>



    <form action="login.php" method="post">
        <p>login</p>
        <div>
            <input type="email" placeholder="input your email" name="email">
        </div>
        <div>
            <input type="password" placeholder="input your password" name="password">
        </div>
        <div>
            <input type="submit" placeholder="Login" name="login">
        </div>
        <!-- <a class="button" href="home.php" >Login</a> -->
        <!-- <a href="./page.php"><button>Login</button></a> -->
    </form>

</body>
</html>