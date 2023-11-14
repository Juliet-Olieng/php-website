<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" type="module"></script>
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" nomodule></script>
    <script src="path/to/bootstrap.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
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
    <!--  -->
    <div class="banner" style="background-image: url('./images/news.png'); background-size: cover; background-repeat: no-repeat; margin-top: -20px; color: #1F2B6C; height:300px;">
    <p style="margin-left: 10%; padding-top: 5%; font-family: Work Sans; font-size: 18px; font-style: normal; font-weight: 400; line-height: 140%;">Home/Blog</p>
    <h1 style="margin-left: 10%; font-family: Yeseva One; font-size: 48px; font-style: normal; font-weight: 400; padding-top: 0%;">Blogs and Posts</h1>
</div>
<!--  -->
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-top: 20px;">
                <div class="blogs">
                    <!-- Blog Post 1 -->
                    <div class="bog mb-1" style="background-color: gray; padding:5%;width:530px;">
                        <img class="image mb-3" src="./images/image.png" alt="">
                        <div class="icons row " style="gap: 1%;">
                            <ion-icon style="color:#1F2B6C; margin-top:2px;" name="calendar-number-outline"></ion-icon>
                            <p>Monday 05, September 2023</p>
                            <ion-icon style="color:#159EEC; margin-top:2px;" name="person-outline"></ion-icon>
                            <p>By Author</p>
                            <ion-icon style="color:#159EEC; margin-top:2px;" name="eye-outline"></ion-icon>
                            <p>68</p>
                            <ion-icon style="color:#E2315C; margin-top:2px;" name="heart-outline"></ion-icon>
                            <p>86</p>
                        </div>
                        <h5 id="h" class="text-primary">A passion for putting patients first</h5>
                        <p style="font-size: 11px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat<br>
            scelerisque tortor ornare ornare. Quisque placerat scelerisque tortor<br>
            ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin massa<br>
            in. Consequat faucibus porttitor enim Lorem ipsum dolor sit amet,<br>
            consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare<br>
            ornare. Quisque placerat scelerisque tortor ornare ornare Convallis felis<br>
            vitae tortor augue. Velit nascetur proin massa in. Consequat faucibus<br>
            porttitor enim Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
            Quisque placerat scelerisque tortor ornare ornare. Quisque placerat<br>
            scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit<br>
            nascetur proin massa in. Consequat faucibus porttitor enim Lorem ipsum<br>
            dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque<br>
            tortor ornare ornare. Quisque placerat scelerisque tortor ornare ornare<br>
            Convallis felis vitae tortor augue. Velit nascetur proin massa in. Consequat<br>
            faucibus porttitor enim Lorem ipsum dolor sit amet, consectetur<br>
            adipiscing elit. Quisque placerat scelerisque tortor ornare ornare. Quisque<br>
            placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue.<br>
            Velit nascetur proin massa in. Consequat faucibus porttitor enim Lorem<br>
            ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat<br>
            scelerisque tortor ornare ornare. Quisque placerat scelerisque tortor<br>
            ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin massa<br>
            in. Consequat faucibus porttitor enim et.</p>
                        <button class="btn btn-primary" style="display: flex; gap:10px;">
                            <p>Read More</p>
                            <ion-icon name="arrow-forward-outline" style="margin-top:10px;"></ion-icon>
                        </button>
                    </div>
                    <!--  -->
                    <!-- <div class="bog mb-5">
                        <img class="image mb-3" style="width: 400px;" src="./images/doc 13.png" alt="">
                        <div class="icons row " style="gap: 1%;">
                            <ion-icon style="color:#1F2B6C; margin-top:2px;" name="calendar-number-outline"></ion-icon>
                            <p>Monday 05, September 2023</p>
                            <ion-icon style="color:#159EEC; margin-top:2px;" name="person-outline"></ion-icon>
                            <p>By Author</p>
                            <ion-icon style="color:#159EEC; margin-top:2px;" name="eye-outline"></ion-icon>
                            <p>68</p>
                            <ion-icon style="color:#E2315C; margin-top:2px;" name="heart-outline"></ion-icon>
                            <p>86</p>
                        </div>
                        <h5 id="h" class="text-primary">A passion for putting patients first</h5>
                        <p style="font-size: 11px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat<br>scelerisque tortor ornare ornare. Quisque placerat scelerisque tortor ornare ornare<br>Convallis felis vitae tortor augue. Velit nascetur proin massa in. Consequat faucibus<br>porttitor enim et....</p>
                        <button class="btn btn-primary" style="display: flex; gap:10px;">
                            <p>Read More</p>
                            <ion-icon name="arrow-forward-outline" style="margin-top:10px;"></ion-icon>
                        </button>
                    </div> -->
                    <!--  -->
                    <!-- <div class="bog mb-5">
                        <img class="image mb-3" style="width: 400px;" src="./images/doc14.png" alt="">
                        <div class="icons row " style="gap: 1%;">
                            <ion-icon style="color:#1F2B6C; margin-top:2px;" name="calendar-number-outline"></ion-icon>
                            <p>Monday 05, September 2023</p>
                            <ion-icon style="color:#159EEC; margin-top:2px;" name="person-outline"></ion-icon>
                            <p>By Author</p>
                            <ion-icon style="color:#159EEC; margin-top:2px;" name="eye-outline"></ion-icon>
                            <p>68</p>
                            <ion-icon style="color:#E2315C; margin-top:2px;" name="heart-outline"></ion-icon>
                            <p>86</p>
                        </div>
                        <h5 id="h" class="text-primary">A passion for putting patients first</h5>
                        <p style="font-size: 11px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat<br>scelerisque tortor ornare ornare. Quisque placerat scelerisque tortor ornare ornare<br>Convallis felis vitae tortor augue. Velit nascetur proin massa in. Consequat faucibus<br>porttitor enim et....</p>
                        <button class="btn btn-primary" style="display: flex; gap:10px;">
                            <p>Read More</p>
                            <ion-icon name="arrow-forward-outline" style="margin-top:10px;"></ion-icon>
                        </button>
                    </div> -->
                    <!--  -->
                    <!-- <div class="bog mb-5">
                        <img class="image mb-3 " style="width: 400px;" src="./images/doc15.png" alt="">
                        <div class="icons row " style="gap: 1%;">
                            <ion-icon style="color:#1F2B6C; margin-top:2px;" name="calendar-number-outline"></ion-icon>
                            <p>Monday 05, September 2023</p>
                            <ion-icon style="color:#159EEC; margin-top:2px;" name="person-outline"></ion-icon>
                            <p>By Author</p>
                            <ion-icon style="color:#159EEC; margin-top:2px;" name="eye-outline"></ion-icon>
                            <p>68</p>
                            <ion-icon style="color:#E2315C; margin-top:2px;" name="heart-outline"></ion-icon>
                            <p>86</p>
                        </div>
                        <h5 id="h" class="text-primary">A passion for putting patients first</h5>
                        <p style="font-size: 11px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat<br>scelerisque tortor ornare ornare. Quisque placerat scelerisque tortor ornare ornare<br>Convallis felis vitae tortor augue. Velit nascetur proin massa in. Consequat faucibus<br>porttitor enim et....</p>
                        <button class="btn btn-primary" style="display: flex; gap:10px;">
                            <p>Read More</p>
                            <ion-icon name="arrow-forward-outline" style="margin-top:10px;"></ion-icon>
                        </button>
                    </div> -->

                </div>
                <div class="row slide" style="gap: 30px;">
                <div style="display: flex; gap:10px;">
                <ion-icon name="arrow-back-outline" style="margin-top:9px;"></ion-icon>
                        <p>Read More</p>
                     </div>
                    <div class="row number" style="gap: 5px;">
                        <p>1</p>
                        <p>-</p>
                        <p style="color:#159EEC;">2</p>
                        <p>-</p>
                        <p style="color:#159EEC;">3</p>
                        <p>-</p>
                        <p style="color:#159EEC;">4</p>
                        <p>-</p>
                        <p style="color:#159EEC;">5</p>
                    </div>
                    <div style="display: flex; gap:10px;">
                        <p>Next</p>
                        <ion-icon name="arrow-forward-outline" style="margin-top:9px;"></ion-icon>
                     </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="d-flex bg-primary p-1 mt-5">
    <input type="search" class="form-control form-control-sm border-0" placeholder="Search...">
    <span class="input-group-text border-0">
    <ion-icon name="search-outline"></ion-icon>
    </span>
</div>
                <div style="border:solid gray; padding:2%;margin-top:10px;">
                    <h2 style="color:#1F2B6C;font-size:20px;text-align:center; ">Recent Posts</h2>
                    <div style="display: flex; margin-bottom:10px; gap:10px;">
                        <img src="./images/Rectangle 34.png" style="width: 60px; height:70px;" alt="">
                        <div id="cont3">
                            <p style="color: #159EEC; font-size:11px;">Monday 05, September 2021 | By<br>Author</p>
                            <p style="font-size: 12px; margin-top:-10px;">This Article’s Title goes Here,<br>but not too long.</p>
                        </div>
                    </div>
                    <!--  -->
                    <div style="display: flex; margin-bottom:10px;gap:10px;">
                        <img src="./images/Rectangle 34.png" style="width: 60px; height:70px;" alt="">
                        <div id="cont3">
                            <p style="color: #159EEC; font-size:11px;">Monday 05, September 2021 | By<br>Author</p>
                            <p style="font-size: 12px; margin-top:-10px;">This Article’s Title goes Here,<br>but not too long.</p>
                        </div>
                    </div>
                    <!--  -->
                    <div style="display: flex; margin-bottom:10px;gap:10px;">
                        <img src="./images/Rectangle 34.png" style="width: 60px; height:70px;" alt="">
                        <div id="cont3">
                            <p style="color: #159EEC; font-size:11px;">Monday 05, September 2021 | By<br>Author</p>
                            <p style="font-size: 12px; margin-top:-10px;">This Article’s Title goes Here,<br>but not too long.</p>
                        </div>
                    </div>
                    <!--  -->
                    <div style="display: flex; margin-bottom:10px; gap:10px;">
                        <img src="./images/Rectangle 34.png" style="width: 60px; height:70px;" alt="">
                        <div id="cont3">
                            <p style="color: #159EEC; font-size:11px;">Monday 05, September 2021 | By<br>Author</p>
                            <p style="font-size: 12px; margin-top:-10px;">This Article’s Title goes Here,<br>but not too long.</p>
                        </div>
                    </div>
                    <!--  -->
                    <div style="display: flex; margin-bottom:10px; gap:10px;">
                        <img src="./images/Rectangle 34.png" style="width: 60px; height:70px;" alt="">
                        <div id="cont3">
                            <p style="color: #159EEC; font-size:11px;">Monday 05, September 2021 | By<br>Author</p>
                            <p style="font-size: 12px; margin-top:-10px;">This Article’s Title goes Here,<br>but not too long.</p>
                        </div>
                    </div>
                    <!--  -->
                    <div style="display: flex; margin-bottom:10px; gap:10px;">
                        <img src="./images/Rectangle 34.png" style="width: 60px; height:70px;" alt="">
                        <div id="cont3">
                            <p style="color: #159EEC; font-size:11px;">Monday 05, September 2021 | By<br>Author</p>
                            <p style="font-size: 12px; margin-top:-10px;">This Article’s Title goes Here,<br>but not too long.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="post" style="border: solid gray; padding:2%; text-align:center;margin-top:10px;">
                    <h2>Categories</h2>
                    <div class="row num1" style="gap:60%; margin-left:5%;">
                        <p>Surgery</p>
                        <p id="num" style="border-radius: 100%; background:#159EEC;padding:1%;">3</p>
                    </div>
                    <!--  -->
                    <div class="row num1" style="gap:60%; margin-left:5%;">
                        <p>Surgery</p>
                        <p id="num" style="border-radius: 100%; background:#159EEC;padding:1%;">3</p>
                    </div>
                    <!--  -->
                    <div class="row num1" style="gap:60%; margin-left:5%;">
                        <p>Surgery</p>
                        <p id="num" style="border-radius: 100%; background:#159EEC;padding:1%;">3</p>
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
