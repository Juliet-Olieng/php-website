<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" type="module"></script>
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" nomodule></script>
    <!-- <script src="script.js" defer></script> -->
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Mediccal</title>
    <style>
      /* #1F2B6C */
        /* Add your custom colors here */
        :root {
            --primary-color: #1F2B6C;
            --secondary-color: #159EEC;
            --accent-color: #BFD2F8;
            --white: #FCFEFE;
        }
    </style>
</head>
<body style="overflow-x: hidden;">
<div class="container">
        <div class="row topPage" style="gap: 10%;">
        <div>
            <h1 style="color: #1F2B6C;" class="mt-3">MEDICCAL</h1>
            </div>
            <!--  -->
            <div class="d-flex mt-3">
                <ion-icon name="call-outline" style="color: #1F2B6C; height: 30px;width: 30px;"></ion-icon>
                <div style="padding-bottom:-50px;">
                    <p style="color: #1F2B6C;">EMERGENCY</p>
                    <p class="text-primary">+254718492299</p>
                </div>
            </div>
            <!--  -->
            <div class="d-flex mt-3">
                <ion-icon name="time-outline" style="color: #1F2B6C; height: 30px;width: 30px;"></ion-icon>
                <div>
                    <p style="color: #1F2B6C;">Work Hour</p>
                    <p class="text-primary">09:00 AM - 08:00 PM Every day</p>
                </div>
            </div>
            <!--  -->
            <div class="d-flex mt-3">
                <ion-icon name="location-outline"style="color: #1F2B6C;height: 30px;width: 30px;"></ion-icon>
                <div>
                    <p style="color: #1F2B6C;">LOCATION</p>
                    <p class="text-primary">616 KORONGO ROAD</p>
                </div>
            </div>
        </div>
    </div>
<!--  -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: var(--primary-color);">
        <a class="navbar-brand" href="#">MEDDICCAL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page.php">Doctor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            <div class="search">
                <a href="Appointment.php">
                    <input type="search" placeholder="Appointment" style="background-color: var(--accent-color); color: var(--primary-color);">
                    <ion-icon name="search-outline" style="color: var(--primary-color);"></ion-icon>
                </a>
            </div>
        </div>
    </nav>
    <div class="banner" style="background-image: url('./images/landing.png'); background-size: cover; background-repeat: no-repeat; margin-top: -20px; text-align: center; height: 550px;">
    <p style="margin-left: 10%; padding-top: 5%; font-family: Work Sans; font-size: 18px; font-style: normal; font-weight: 400; line-height: 140%;color:#159EEC;">CARING FOR LIFE</p>
    <h1 style="margin-left: 10%; font-family: Yeseva One; font-size: 48px; font-style: normal; font-weight: 400; padding-top: 0%; color:#1F2B6C;">Leading the way<br>in medical Excellence</h1>
    <button class="btn btn-primary btn-banner" >our services</button>
</div>
<!--  -->
<div class=" row b-card " style="gap: 20px;margin-left: 10%;margin-top: -50px;">
    <div id="b-card1" class="text-white" style="background-color:#1F2B6C; display: inline-flex;padding: 45px 20px;justify-content: center;align-items: center;gap: 56px;border-radius: 5px;">
        <p>Book an Appointment</p>
        <ion-icon name="calendar-outline" class="text-primary"></ion-icon>
    </div>
    <div id="b-card2" style="background-color:#BFD2F8; display: inline-flex;padding: 25px 20px;justify-content: center;align-items: center;gap: 56px;border-radius: 5px;">
        <p>Book an Appointment</p>
        <ion-icon name="people-outline" class="text-primary"></ion-icon>
    </div>
    <div id="b-card3" class="text-white" style="background-color:#159EEC; display: inline-flex;padding: 25px 20px;justify-content: center;align-items: center;gap: 56px;border-radius: 5px;">
        <p>Book an Appointment</p>
        <ion-icon name="cash-outline" class="text-white"></ion-icon>
    </div>
</div>
<!--  -->
<div style=" text-align: center; margin-top:20px;">
    <h5 class="text-primary" style="font-family: Work Sans;font-size: 18px;">WELCOME TO MEDDICAL</h5>
    <h2 style="color: var(--Primary, #1F2B6C);font-family: Yeseva One;font-size: 32px;">A Great Place to Receive Care</h2>
    <p style="font-family: Work Sans;font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat<br>scelerisque tortor ornare ornare. Convallis felis vitae tortor augue. Velit nascetur<br>proin massa in. Consequat faucibus porttitor enim et.</p>
    <div class="icons d-flex align-items-center" style="margin-left: 50%;">
        <p class="text-primary">learn more</p>
        <ion-icon name="arrow-forward-outline" class="ion-icon"></ion-icon>
    </div>
</div>
<!--  -->
<div class="container" >
    <img src="./images/Rectangle 3.png" alt="" style="width:100%; opacity: 6.7;">
</div>
<!--  -->

<div class="container mb-4 mt-4">
        <h5 id="s-h5" class="text-primary text-center text-uppercase">CARE YOU CAN BELIEVE IN</h5>
        <h2 id="s-p" class="text-dark text-center">Our Services</h2>
        <div class="services d-flex flex-wrap mt-3 " style="gap: 5%;" >
            <div class="service-item" style="width: 157px; text-align: center; height: 450px; border-radius: 5px; border: 1px solid var(--Primary, #1F2B6C);">
                <div id="serve">
                    <img src="./images/medical 1.png" alt="">
                    <p>Free Checkup</p>
                </div>
                <div class="cardio" style="padding-top: 4%; text-align: center; width: 157px; height: 100px; background: var(--Primary, #1F2B6C); margin-bottom: 4%;">
                    <img src="./images/lovep.png" alt="">
                    <p class="text-light">Cardiogram</p>
                </div>
                <div>
                    <img src="./images/Vector.png" alt="">
                    <p>DNA Testing</p>
                </div>
                <div>
                    <img src="./images/drip.png" alt="">
                    <p>Blood Bank</p>
                </div>
                <div class="col text-center">
                <p class="view">View All</p>
            </div>
            </div>
        <div id="container1">
            <h5 class="text-primary">A passion for putting patients first.</h5>
            <div style="display: flex; gap: 20%;">
                <div class="about">
                    <div class="points d-flex"style="gap:1%;">
                        <span class="dot" style="margin-top: 1%; width: 10px; height: 10px; border-radius: 50px; background-color: #159EEC;"></span>
                        <p>A passion for healing</p>
                    </div>
                    <div class="points d-flex" style="gap:1%;">
                        <span class="dot" style="margin-top: 1%; width: 10px; height: 10px; border-radius: 50px; background-color: #159EEC;"></span>
                        <p>All our best</p>
                    </div>
                    <div class="points d-flex" style="gap:1%;">
                        <span class="dot" style="margin-top: 1%; width: 10px; height: 10px; border-radius: 50px; background-color: #159EEC;"></span>
                        <p>Always Caring</p>
                    </div>
                </div>
                <div class="about">
                    <div class="points d-flex"style="gap:1%;">
                        <span class="dot" style="margin-top: 1%; width: 10px; height: 10px; border-radius: 50px; background-color: #159EEC;"></span>
                        <p>5-Star Care</p>
                    </div>
                    <div class="points d-flex"style="gap:1%;">
                        <span class="dot" style="margin-top: 1%; width: 10px; height: 10px; border-radius: 50px; background-color: #159EEC;"></span>
                        <p>Believe in us</p>
                    </div>
                    <div class="points d-flex" style="gap:1%;">
                        <span class="dot" style="margin-top: 1%; width: 10px; height: 10px; border-radius: 50px; background-color: #159EEC;"></span>
                        <p>A Legacy of Excellence</p>
                    </div>
                </div>
            </div>
            <p class="p1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque<br>
                placerat scelerisque tortor ornare ornare. Quisque placerat scelerisque<br>
                tortor ornare ornare Convallis felis vitae tortor augue. Velit nascetur<br>
                proin massa in. Consequat faucibus porttitor enim et.
            </p>
            <p class="p1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque <br> scelerisque. Convallis felis vitae tortor augue. Velit nascetur<br>proin massa in.</p>
        </div>
        <div style="display: grid;">
            <img src="./images/doc1.png" alt="">
            <img src="./images/ladies.png" alt="">
        </div>
        </div>
    </div>
    <!--  -->
    <div class="container">
        <h5 id="s-h5" class="text-primary" style="text-align:center;">ALWAYS CARING</h5>
        <h2 id="s-p" style="text-align:center;">Our Specialties</h2>
        <div class="d-flex flex-wrap justify-content-center" style="gap: 5%;">
            <div class="heart-box">
                <div id="heart"  style="width: 230px;">
                    <img src="./images/heart.png" alt="">
                    <p>Neurology</p>
                </div>
            </div>
            <div class="heart-box">
                <div id="hearts"  style="width: 230px; background-color:#1F2B6C;color:#159EEC;text-align:center; padding-top: 5%;border-radius:5px;">
                    <img src="./images/heart.png" alt="">
                    <p>Bones</p>
                </div>
            </div>
            <div class="heart-box">
                <div id="heart"  style="width: 230px;">
                    <img src="./images/heart.png" alt="">
                    <p>Oncology</p>
                </div>
            </div>
            <div class="heart-box">
                <div id="heart"  style="width: 230px;">
                    <img src="./images/heart.png" alt="">
                    <p>otorhinolaryngology</p>
                </div>
            </div>
            <div class="heart-box">
                <div id="heart"  style="width: 230px;">
                    <img src="./images/heart.png" alt="">
                    <p>Ophthalmology</p>
                </div>
            </div>
            <div class="heart-box">
                <div id="heart"  style="width: 230px;">
                    <img src="./images/heart.png" alt="">
                    <p>Cardiovascular</p>
                </div>
            </div>
            <div class="heart-box">
                <div id="heart"  style="width: 230px;">
                    <img src="./images/heart.png" alt="">
                    <p>Pulmonology</p>
                </div>
            </div>
            <div class="heart-box">
                <div id="heart"  style="width: 230px;">
                    <img src="./images/heart.png" alt="">
                    <p>Renal Medicine</p>
                </div>
            </div>
            <div class="heart-box">
                <div id="heart" style="width: 230px;">
                    <img src="./images/heart.png" alt="">
                    <p>Gastroenterology</p>
                </div>
            </div>
            <div class="heart-box">
                <div id="heart" style="width: 230px;">
                    <img src="./images/heart.png" alt="">
                    <p>urology</p>
                </div>
            </div>
            <div class="heart-box">
                <div id="heart" style="width: 230px;">
                    <img src="./images/heart.png" alt="">
                    <p>Dermatology</p>
                </div>
            </div>
            <div class="heart-box">
                <div id="heart" style="width: 230px;">
                    <img src="./images/heart.png" alt="">
                    <p>Gynaecology</p>
                </div>
            </div>
        </div>
    </div>



<!-- <div class="row container"> -->
    <div class="d-flex flex-wrap pt-3 mb-3" style="background-image: url(./images/download.jpg); background-repeat:no-repeat; background-size:cover;  width:100%; height:400px;" >
        <div class="col ml-5" id="banner2">
            <h5 style="color: #159EEC;">Book an Appointment</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit. Quisque placerat scelerisque tortor ornare<br>ornare. Convallis felis vitae tortor augue. Velit<br>nascetur proin massa in. Consequat faucibus<br>porttitor enim et.</p>
        </div>
        <div class="col-md-4 table mr-5" style="background-color: var(--primary-color); color:#FCFEFE; margin-left:3%;">
            <table class="table  table-bordered"style="color:#FCFEFE; padding:8px;" >
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Email</td>
                        <td>Phone</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>Time</td>
                    </tr>
                    <tr>
                        <td>Doctor</td>
                        <td>Department</td>
                    </tr>
                </tbody>
            </table>
            <p id="p"  style="color:#FCFEFE; border:solid; padding: 8px; margin-top:-16px;">Message</p>
            <button id="submit" class="btn btn-primary mb-3 ml-4">Submit</button>
        </div>
    </div>
<!--  -->
    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style=" color:#1F2B6C">
                <img src="./images/doc1.jpg" class="card-img-top" alt="Doctor Image">
                <div class="card-body">
                    <p class="card-text">Doctor's Name</p>
                    <h5 class="card-title">NEUROLOGY</h5>
                    <div class="icons">
                        <ion-icon name="logo-linkedin"></ion-icon>
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-instagram"></ion-icon>
                    </div>
                    <a href="#" class="btn btn-primary">View Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style=" color:#1F2B6C">
                <img src="./images/doc1.jpg" class="card-img-top" alt="Doctor Image">
                <div class="card-body">
                    <p class="card-text">Doctor's Name</p>
                    <h5 class="card-title">NEUROLOGY</h5>
                    <div class="icons">
                        <ion-icon name="logo-linkedin"></ion-icon>
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-instagram"></ion-icon>
                    </div>
                    <a href="#" class="btn btn-primary">View Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style=" color:#1F2B6C">
                <img src="./images/doc1.jpg" class="card-img-top" alt="Doctor Image">
                <div class="card-body">
                    <p class="card-text">Doctor's Name</p>
                    <h5 class="card-title">NEUROLOGY</h5>
                    <div class="icons">
                        <ion-icon name="logo-linkedin"></ion-icon>
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-instagram"></ion-icon>
                    </div>
                    <a href="#" class="btn btn-primary">View Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!--  -->
<div class="container text-center" style="margin-top: 20px;">
    <h1 style="font-size: 14px; color:#159EEC" id="h1">BETTER INFORMATION, BETTER HEALTH</h1>
    <h1  style="font-size: 32px; color:#1F2B6C" id="news">News</h1>

    <div class="row justify-content-between cont2" style="margin-left: 5%; margin-right: 5%; margin-bottom: 20px;">
        <div class="col-12 col-md-6 cont3 d-flex">
            <img src="./images/Rectangle 34.png" alt="" class="img-fluid" style="width: 160px; height: 154px;">
            <div>
                <p style=" color:#159EEC">Monday 05, September 2021 | By Author</p>
                <p class="title">This Article's Title goes Here, but not too long.</p>
                <div id="cons" class="d-flex justify-content-start align-items-center">
                <ion-icon name="eye-outline" class="eye text-primary mx-2"></ion-icon>
                <p class="text-primary mx-2">68</p>
                <ion-icon name="heart-outline" class="love text-danger mx-2"></ion-icon>
                <p class="text-danger mx-2">86</p>
            </div>
            </div>
        </div>

        <div class="col-12 col-md-6 cont3 d-flex">
            <img src="./images/Rectangle 34.png" alt="" class="img-fluid" style="width: 160px; height: 154px;">
            <div>
                <p style=" color:#159EEC">Monday 05, September 2021 | By Author</p>
                <p class="title">This Article's Title goes Here, but not too long.</p>
                <div id="cons" class="d-flex justify-content-start align-items-center">
                <ion-icon name="eye-outline" class="eye text-primary mx-2"></ion-icon>
                <p class="text-primary mx-2">68</p>
                <ion-icon name="heart-outline" class="love text-danger mx-2"></ion-icon>
                <p class="text-danger mx-2">86</p>
            </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-between cont2" style="margin-left: 5%; margin-right: 5%; margin-bottom: 20px;">
        <div class="col-12 col-md-6 cont3 d-flex">
            <img src="./images/Rectangle 34.png" alt="" class="img-fluid" style="width: 160px; height: 154px;">
            <div>
                <p style=" color:#159EEC">Monday 05, September 2021 | By Author</p>
                <p class="title">This Article's Title goes Here, but not too long.</p>
                <div id="cons" class="d-flex justify-content-start align-items-center">
                <ion-icon name="eye-outline" class="eye text-primary mx-2"></ion-icon>
                <p class="text-primary mx-2">68</p>
                <ion-icon name="heart-outline" class="love text-danger mx-2"></ion-icon>
                <p class="text-danger mx-2">86</p>
            </div>
            </div>
        </div>

        <div class="col-12 col-md-6 cont3 d-flex">
            <img src="./images/Rectangle 34.png" alt="" class="img-fluid" style="width: 160px; height: 154px;">
            <div>
                <p style=" color:#159EEC">Monday 05, September 2021 | By Author</p>
                <p class="title">This Article's Title goes Here, but not too long.</p>
                <div id="cons" class="d-flex justify-content-start align-items-center">
                <ion-icon name="eye-outline" class="eye text-primary mx-2"></ion-icon>
                <p class="text-primary mx-2">68</p>
                <ion-icon name="heart-outline" class="love text-danger mx-2"></ion-icon>
                <p class="text-danger mx-2">86</p>
            </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="container"style="margin-top: 20px;">
    <h1 id="h1" class="text-center " style="font-size: 14px; color:#159EEC">GET IN TOUCH</h1>
    <h1 id="news" class="text-center " style="font-size: 32px; color:#1F2B6C">Contact</h1>
    <div class="d-flex flex-wrap justify-content-center cards">
        <div class="custom-card card text-center m-3" style="background-color: var(--accent-color); padding: 20px; color: var(--primary-color);">
            <ion-icon name="call-outline" class="mb-3"></ion-icon>
            <h5>EMERGENCY</h5>
            <p>(+254) 718492299</p>
            <p>(+254) 68424743</p>
        </div>
        <!--  -->
        <div class="custom-card card text-center m-3" style="background-color: var(--primary-color); padding: 20px; color:var(--accent-color);">
            <ion-icon name="location-outline" class="mb-3 "></ion-icon>
            <h5>LOCATION</h5>
            <p>616 KORONGO</p>
            <p>01 NAIROBI</p>
        </div>
        <!--  -->
        <div class="custom-card card text-center m-3" style="background-color: var(--accent-color); padding: 20px;color: var(--primary-color);">
            <ion-icon name="mail-outline" class="mb-3"></ion-icon>
            <h5>EMAIL</h5>
            <p>anyangojolieng@gmail.com</p>
            <p>anyangoolieng@gmail.com</p>
        </div>
        <!--  -->
        <div class="custom-card card text-center m-3" style="background-color: var(--accent-color); padding: 20px;color: var(--primary-color);">
            <ion-icon name="time-outline" class="mb-3"></ion-icon>
            <h5>WORKING HOURS</h5>
            <p>Mon-Sat 09.00-20.00</p>
            <p>Sunday Emergency only</p>
        </div>
    </div>
</div>
<!--  -->
<footer  style="background-color: #1F2B6C;">
    <div class="container">
        <div class="row foot" style="color: white;">
            <div class="col-md-3 col-5">
                <h1 class="text-primary">MEDICAL</h1>
                <p>Leading the way in medical <br> Excellence, Trusted Care</p>
            </div>
            <div class="col-md-2 col-5">
                <h5 class="text-white">Important Links</h5>
                <p>Appointment</p>
                <p>Doctors</p>
                <p>Services</p>
                <p>About Us</p>
            </div>
            <div class="col-md-3 col-6">
                <h5 class="text-white">Contact Us</h5>
                <p>Call:(+254) 718492299</p>
                <p>Email:anyangojolieng@gmail.com</p>
                <p>Address:616 Korongo</p>
                <p>County:Nairobi</p>
            </div>
            <div class="col-md-3 col-6">
                <h5 class="text-white">Newsletter</h5>
                <div class="message">
                    <input type="text" class="form-control" placeholder="Enter your email address">
                    <ion-icon name="send-outline" class="text-primary"></ion-icon>
                </div>
            </div>
        </div>
    </div>
    <hr class="border border-primary">
    <div class="container copy" style="display:flex; gap:350px">
        <p class="text-white">© 2021 Hospital's name All Rights Reserved by PNTEC-LTD</p>
        <div class="icons">
            <ion-icon name="logo-linkedin" class="text-primary"></ion-icon>
            <ion-icon name="logo-facebook" class="text-primary"></ion-icon>
            <ion-icon name="logo-instagram" class="text-primary"></ion-icon>
        </div>
    </div>
</footer>

</body>
</html>
