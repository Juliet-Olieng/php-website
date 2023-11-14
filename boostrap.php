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

<!-- <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="cont p-2 mb-3" style="background-color:#BFD2F8; ">
                    <img src="./images/Rectangle 20.png" alt="" class="w-100 img-fluid">
                    <h5 class=" mt-3" style="color: #1F2B6C; font: size 14px;">Free Checkup</h5>
                    <p class="text-dark" style="font-size: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing Quisque placerat Convallis felis vitae tortor augue. Velit nascetur massa in.</p>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <p class="text-primary">Learn more</p>
                        <ion-icon name="arrow-forward-outline" class="text-primary"></ion-icon>
                    </div>
                </div>
            </div> -->
            <!--  -->
            <!-- <div class="col-md-4">
                <div class="cont p-2"  style="background-color:#BFD2F8;">
                    <img src="./images/Rectangle 20.png" alt="" class="w-100 img-fluid">
                    <h5 class=" mt-3" style="color: #1F2B6C; font: size 14px;">Free Checkup</h5>
                    <p class="text-dark" style="font-size: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing Quisque placerat Convallis felis vitae tortor augue. Velit nascetur massa in.</p>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <p class="text-primary">Learn more</p>
                        <ion-icon name="arrow-forward-outline" class="text-primary"></ion-icon>
                    </div>
                </div>
            </div> -->
            <!--  -->
            <!-- <div class="col-md-4">
                <div class="cont p-2" style="background-color:#BFD2F8;">
                    <img src="./images/Rectangle 20.png" alt="" class="w-100 img-fluid">
                    <h5 class=" mt-3" style="color: #1F2B6C; font: size 14px;">Free Checkup</h5>
                    <p class="text-dark" style="font-size: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing Quisque placerat Convallis felis vitae tortor augue. Velit nascetur massa in.</p>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <p class="text-primary">Learn more</p>
                        <ion-icon name="arrow-forward-outline" class="text-primary"></ion-icon>
                    </div>
                </div>
            </div> -->
            <!--  -->
            <!-- <div class="col-md-4">
                <div class="cont p-2" style="background-color:#BFD2F8;">
                    <img src="./images/Rectangle 20.png" alt="" class="w-100 img-fluid">
                    <h5 class="mt-3" style="color: #1F2B6C; font: size 14px;">Free Checkup</h5>
                    <p class="text-dark" style="font-size: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing Quisque placerat Convallis felis vitae tortor augue. Velit nascetur massa in.</p>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <p class="text-primary">Learn more</p>
                        <ion-icon name="arrow-forward-outline" class="text-primary"></ion-icon>
                    </div>
                </div>
            </div>
            <!--  -->
            <!-- <div class="col-md-4">
                <div class="cont p-2" style="background-color:#BFD2F8;">
                    <img src="./images/Rectangle 20.png" alt="" class="w-100 img-fluid">
                    <h5 class="mt-3" style="color: #1F2B6C; font: size 14px;">Free Checkup</h5>
                    <p class="text-dark" style="font-size: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing Quisque placerat Convallis felis vitae tortor augue. Velit nascetur massa in.</p>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <p class="text-primary">Learn more</p>
                        <ion-icon name="arrow-forward-outline" class="text-primary"></ion-icon>
                    </div>
                </div>
            </div> --> 
            <!--  -->
            <!-- <div class="col-md-4">
                <div class="cont p-2" style="background-color:#BFD2F8;">
                    <img src="./images/Rectangle 20.png" alt="" class="w-100 img-fluid">
                    <h5 class=" mt-3" style="color: #1F2B6C; font: size 14px;">Free Checkup</h5>
                    <p class="text-dark" style="font-size: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing Quisque placerat Convallis felis vitae tortor augue. Velit nascetur massa in.</p>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <p class="text-primary">Learn more</p>
                        <ion-icon name="arrow-forward-outline" class="text-primary"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!--  -->
<!-- <div class="container" >
    <img src="./images/Rectangle 3.png" alt="" style="width:100%; opacity: 6.7;">
</div> -->
<!--  -->
<!-- 
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
    </div> -->
    <!--  -->
    <!-- <div class="container">
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
    </div> -->



<!-- <div class="row container"> -->
    <!-- <div class="d-flex flex-wrap pt-3 mb-3" style="background-image: url(./images/download.jpg); background-repeat:no-repeat; background-size:cover;  width:100%; height:400px;" >
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
    </div> -->
    <!-- <div class="col schedule" style="background-color: var(--primary-color); color:#FCFEFE;  text-align:center;">
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
    </div> -->
<!-- </div>  -->

<!--  -->
<!-- <div class="container1 row mb-3">
    <div class="col-md-6">
        <img id="image" src="./images/image.png" alt="">
    </div>
    <div class="col-md-6 pt-4 pl-2">
        <h1 class="h1" style=" color:#159EEC ; font-size:18px;" >WELCOME TO MEDICAL</h1>
        <h2 class="h2" style=" color:#1F2B6C; font-size:48px;">Best Care for Your Good Health</h2>
        <div class="about">
            <div class="row">
                <div class="col-12 col-md-4 points">
                    <span class="dot" style="width: 16px;height: 16px;border-radius: 50px; background-color:#159EEC;"></span>
                    <p>A passion for healing</p>
                </div>
                <div class="col-12 col-md-4 points">
                    <span class="dot"></span>
                    <p>All our best</p>
                </div>
                <div class="col-12 col-md-4 points">
                    <span class="dot"></span>
                    <p>Always Caring</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 points">
                    <span class="dot"></span>
                    <p>5-Star Care</p>
                </div>
                <div class="col-12 col-md-4 points">
                    <span class="dot"></span>
                    <p>Believe in us</p>
                </div>
                <div class="col-12 col-md-4 points">
                    <span class="dot"></span>
                    <p>A Legacy of Excellence</p>
                </div>
            </div>
        </div>
        <p class="p1" style="font-size: 15px;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare. Quisque
            placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin massa in. Consequat
            faucibus porttitor enim et.
        </p>
        <p class="p1">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.Quisque scelerisque. Convallis felis vitae tortor augue. Velit
            nascetur proin massa in.
        </p>
    </div>
</div> -->
<!--  -->
<!-- <div class="container2" style="background-image: url(./images/Rectangle\ 53.png); background-repeat: no-repeat; background-size: cover; height: 441px; text-align: center;margin-bottom:2%;">
    <img src="./images/left-qoute.png" alt="">
    <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Quisque placerat scelerisque tortor ornare ornare. Quisque<br> placerat scelerisque felis vitae tortor augue. Velit nascetur Consequat faucibus porttitor enim et.
    </p>
    <hr style="width: 221.5px; height: 0px;">
    <p>John Doe</p>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div> -->

<!--  -->
    <!-- <div class="container">
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
        </div> -->
        <!-- <div class="col-md-4">
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
        </div> -->
        <!-- <div class="col-md-4">
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
        </div> -->
        <!-- <div class="col-md-4">
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
        </div> -->
    <!-- </div>
</div> -->
<!--  -->

<!--  -->
<!-- <div class="container text-center" style="margin-top: 20px;">
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
</div> -->
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
