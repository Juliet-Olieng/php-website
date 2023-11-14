<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" type="module"></script>
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" nomodule></script>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Mediccal</title>
    <style>
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
    <div class="banner mb-4" style="background-image: url('./images/Rectangle\ 3.png'); background-size: cover; background-repeat: no-repeat; margin-top: -20px; color: #1F2B6C; height:200px">
    <p style="margin-left: 10%; padding-top: 5%; font-family: Work Sans; font-size: 18px; font-style: normal; font-weight: 400; line-height: 140%;">Home/Appoitment</p>
    <h1 style="margin-left: 10%; font-family: Yeseva One; font-size: 48px; font-style: normal; font-weight: 400; padding-top: 0%;">Book an appoitment</h1>
</div>
<!--  -->
<div class="row container">
    <div class="col banner2">
        <div class="col-md-10" id="banner2">
            <h5 style="color: #159EEC;">Book an Appointment</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit. Quisque placerat scelerisque tortor ornare<br>ornare. Convallis felis vitae tortor augue. Velit<br>nascetur proin massa in. Consequat faucibus<br>porttitor enim et.</p>
        </div>
        <div class="col-md-10 table" style="background-color: var(--primary-color); color:#FCFEFE; margin-left:3%;">
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
    <div class="col schedule" style="background-color: var(--primary-color); color:#FCFEFE;  text-align:center;">
        <h1>Schedule hours</h1>
        <div class="timing" style=" margin-left:15%">
            <div class="row" style="gap: 20px;">
                <p>Monday</p>
                <p>-</p>
                <p style="gap: 20px;">09.00AM - 07.00PM</p>
            </div>
            <div class="row" style="gap: 20px;">
                <p>Tuesday</p>
                <p>-</p>
                <p style="gap: 20px;">09.00AM - 07.00PM</p>
            </div>
            <div class="row" style="gap: 20px;">
                <p>Wednesday</p>
                <p>-</p>
                <p style="gap: 20px;">09.00AM - 07.00PM</p>
            </div>
            <div class="row" style="gap: 20px;">
                <p>Thursday</p>
                <p>-</p>
                <p style="gap: 20px;">09.00AM - 07.00PM</p>
            </div>
            <div class="row" style="gap: 20px;">
                <p>Friday</p>
                <p>-</p>
                <p style="gap: 20px;">09.00AM - 07.00PM</p>
            </div>
            <div class="row" style="gap: 20px;">
                <p>Saturday</p>
                <p>-</p>
                <p style="gap: 20px;">09.00AM - 07.00PM</p>
            </div>
            <div class="row" style="gap: 20px;">
                <p>Sunday</p>
                <p>-</p>
                <p >closed</p>
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
