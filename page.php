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
<body>
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
    <div class="banner" style="background-image: url('./images/Rectangle 3.png'); background-size: cover; background-repeat: no-repeat; margin-top: -20px; color: #1F2B6C; height:200px;">
    <p style="margin-left: 10%; padding-top: 5%; font-family: Work Sans; font-size: 18px; font-style: normal; font-weight: 400; line-height: 140%;">Home/Doctors</p>
    <h1 style="margin-left: 10%; font-family: Yeseva One; font-size: 48px; font-style: normal; font-weight: 400; padding-top: 0%;">Our Doctors</h1>
</div>

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

<div class="container2" style="background-image: url(./images/Rectangle\ 53.png); background-repeat: no-repeat; background-size: cover; height: 441px; text-align: center;">
    <img src="./images/left-qoute.png" alt="">
    <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare. Quisque placerat scelerisque felis vitae tortor augue. Velit nascetur Consequat faucibus porttitor enim et.
    </p>
    <hr style="width: 221.5px; height: 0px;">
    <p>John Doe</p>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<div class="container text-center" style="margin-top: 20px;">
    <h1 style=" color:#159EEC" id="h1">BETTER INFORMATION, BETTER HEALTH</h1>
    <h1  style=" color:#1F2B6C" id="news">News</h1>

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

<div class="container">
    <h1 id="h1" class="text-center " style=" color:#159EEC">GET IN TOUCH</h1>
    <h1 id="news" class="text-center " style="color:#1F2B6C">Contact</h1>
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
<footer  style="background-color: #1F2B6C;">
    <div class="container">
        <div class="row foot" style="color: white;">
            <div class="col-md-3 col-6">
                <h1 class="text-primary">MEDICAL</h1>
                <p>Leading the way in medical <br> Excellence, Trusted Care</p>
            </div>
            <div class="col-md-3 col-6">
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
