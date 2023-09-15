<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page - Start Bootstrap Theme</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        #hero {
            width: 100%;
            height: 100vh;
            background: url("images/france/res.jpg") top center;
            background-size: cover;
            position: relative;
        }

        #hero:before {
            content: "";
            background: rgba(5, 13, 24, 0.3);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1;
        }

        #header2 {
            color: #fff;
            position: fixed;
            left: 0;
            top: 0;
            overflow-x: hidden;
            padding-top: 4rem;
            z-index: 10000;
        }

        #header2 .nav-link:hover {
            color: #000;
            background-color: #ffc107;
            font-weight: bold;
        }

        .navbar-toggler {
            padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
            font-size: var(--bs-navbar-toggler-font-size);
            line-height: 1;
            color: var(--bs-navbar-color);
            background-color: transparent;
            border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
            border-radius: var(--bs-navbar-toggler-border-radius);
            transition: var(--bs-navbar-toggler-transition);
            background-color: rgb(100, 100, 100);
            opacity: 0.5;
        }

        @media (prefers-reduced-motion: reduce) {
            .navbar-toggler {
                transition: none;
            }
        }

        .navbar-toggler:hover {
            text-decoration: none;
            opacity: 0.8;
        }

        .navbar-toggler:focus {
            text-decoration: none;
            outline: 0;
            box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            background-image: var(--bs-navbar-toggler-icon-bg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

        .nav {
            --bs-nav-link-padding-x: 1rem;
            --bs-nav-link-padding-y: 0.5rem;
            --bs-nav-link-font-weight: ;
            --bs-nav-link-color: var(--bs--link-light);
            --bs-nav-link-hover-color: var(--bs-link-hover-color);
            --bs-nav-link-disabled-color: #6c757d;
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .btn-close {
            border-radius: 5px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            border: 0;
            line-height: 0%;
            background: #495057;
        }

        /* 푸터 SNS 색상 변경 */
        a {
            color: grey;
            text-decoration: none;
        }

        footer.footer {
            padding-top: 1rem;
            padding-bottom: 1rem;
            background-color: #e9ecef;
        }

        /* 로그인, 회원가입 ,로그아웃 버튼 css 추가 */
        .btn:hover {
            color: var(--bs-btn-hover-color);
            background-color: var(--bs-btn-hover-bg);
            border-color: var(--bs-btn-hover-border-color);
            background-color: #89ade1;
            color: white;
        }

        .btn {
            --bs-btn-padding-x: 1rem;
            --bs-btn-padding-y: 0.75rem;
            --bs-btn-font-family: ;
            --bs-btn-font-size: 1rem;
            --bs-btn-font-weight: 400;
            --bs-btn-line-height: 1.5;
            --bs-btn-color: #212529;
            --bs-btn-bg: transparent;
            --bs-btn-border-width: 1px;
            --bs-btn-border-color: transparent;
            --bs-btn-border-radius: 0.375rem;
            --bs-btn-hover-border-color: transparent;
            --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
            --bs-btn-disabled-opacity: 0.65;
            --bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
            display: inline-block;
            padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
            font-family: var(--bs-btn-font-family);
            font-size: var(--bs-btn-font-size);
            font-weight: var(--bs-btn-font-weight);
            line-height: var(--bs-btn-line-height);
            color: var(--bs-btn-color);
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
            border-radius: var(--bs-btn-border-radius);
            background-color: var(--bs-btn-bg);
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

    </style>
</head>


<body>
    <!-- side bar-->
    <header id="header2">
        <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-arrow-left" color="white"></i></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home" />
                            </svg>
                            <i class="bi bi-book"></i>
                            <span style="margin-left: 5px;">Introduce</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#community" />
                            </svg>
                            <i class="bi bi-chat-dots"></i>
                            <span style="margin-left: 5px;">Coummunity</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../ProSup.php">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2" />
                            </svg>
                            <i class="bi bi-info-circle"></i>
                            <span style="margin-left: 5px;">Procedure & Supplies</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Currency.html">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#grid" />
                            </svg>
                            <i class="bi bi-currency-dollar"></i>
                            <span style="margin-left: 5px;">Exchange</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <!-- 5.11목 22:20 해찬 작업내용 (회원정보 수정 - 회원탈퇴 기능구현) -->
                        <a class="nav-link active" aria-current="page" href="../mypage.php">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home" />
                            </svg>
                            <i class="bi bi-book"></i>
                            <span style="margin-left: 5px;">My page</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header><!-- End Header -->



    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top" style="z-index: 100;">
        <nav class="navbar navbar-dark ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <b>It's Europe</b>
            </a>
            <div>
                <?php
              $logged = false;
              if (isset($_SESSION["uid"])) {
                $uname = $_SESSION["uname"];
                echo "<span>$uname 환영합니다.</span>&nbsp&nbsp&nbsp"; 
                $logged = true;
                echo '<a class="btn" onclick="location.href=(\'../signout.php\')">Sign Out</a>';
              } else {
                echo '<a class="btn" onclick="window.open(\'../signin.html\', \'sign in\', \'width=600, height=400\')">Sign In</a>';
                echo '<a class="btn" onclick="window.open(\'../signup.html\', \'sign up\', \'width=600, height=400\')">Sign Up</a>'; 
              }
              ?>
            </div>
        </div>
    </nav>


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="">
        <div class="hero-container" data-aos="fade-in">
            <h1>France</h1>
            <p><span class="typed" data-typed-items="Ratatouille, Escargot, Gratin Dauphinois, Bœuf bourguignon, Bouillabaisse"></span></p>
        </div>
    </section><!-- End Hero -->


    <main id="main">
        <!-- ======= About Section ======= -->
        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Ratatouille</h2>
                    <p><strong>Ratatouille is a vegetable stew made by boiling eggplant, zucchini, bell peppers, tomatoes, etc. in herbs and olive oil.</strong></p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <!-- Carousel -->
                        <div id="slideshow" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideshow" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#slideshow" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#slideshow" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#slideshow" data-bs-slide-to="3"></button>
                            </div>

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/france/Ratatouille (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/france/Ratatouille (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/france/Ratatouille (3).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/france/Ratatouille (4).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                            </div>
                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#slideshow" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slideshow" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>

                    </div>
                    <div class="col-lg-8 pt-4 content" data-aos="fade-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>France-Provence</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Vegetables such as eggplant, zucchini, green peppers, and tomatoes, herbs, and olive oil</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Caponata, Pisto, Briám, Imam Bayildi</span></li>
                                </ul>
                            </div>
                            <p>
                                Ratatouille is a representative dish of Provence, France, and is a vegetable stew made by boiling vegetables such as eggplant, zucchini, green peppers, and tomatoes in herbs and olive oil. You can either add all the vegetables at once and cook them, or cook them separately and mix them together. It is estimated to have originated in Nice around the 18th century, and became more famous around the world in 2007 when an animated film of the same name became a hit. Ratatouille is served as a side dish to a main dish or served as an appetizer or light meal. It is especially enjoyed in summer, and in Provence, it is traditionally served with rosé wine.
                            </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Escargot</h2>
                    <p><strong>Escargot is a French dish made with edible snails.</strong></p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <!-- Carousel -->
                        <div id="slideshow2" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideshow2" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#slideshow2" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#slideshow2" data-bs-slide-to="2"></button>
                            </div>

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/france/Escargot (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/france/Escargot (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/france/Escargot (3).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                            </div>
                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#slideshow2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slideshow2" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8 pt-4 content" data-aos="fade-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>France</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Edible Snails, Butter, Garlic, Parsley</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span> - </span></li>
                                </ul>
                            </div>
                            <p>
                                Escargot is one of France's representative dishes and is a dish made with edible snails. The French snail dish became famous around the world in the early 19th century, when chef Antonin Carem introduced a Burgundy-style snail dish made with butter with garlic and herbs. Most of the snails consumed in France today are wild-caught, and can only be safely eaten after careful pre-processing. Snail dishes are served on a special plate with a small round groove to hold the snail in, and are eaten using special tongs and a special fork with two split ends. Snail dishes are known as a healthy food that is high in protein, minerals, vitamins and essential unsaturated fatty acids, as well as taste.
                            </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Gratin Dauphinois</h2>
                    <p><strong>Gratin dauphinois is a traditional dish from the Dauphiné region in southeastern France made with potatoes and fresh cream.</strong></p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <!-- Carousel -->
                        <div id="slideshow3" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="3"></button>
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="4"></button>
                            </div>
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/france/Gratin (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/france/Gratin (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/france/Gratin (3).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/france/Gratin (4).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/france/Gratin (5).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                            </div>
                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#slideshow3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slideshow3" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8 pt-4 content" data-aos="fade-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>French-Dauphine</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Potatoes, whipped cream, nutmeg, salt, pepper, etc.</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Scalloped potatoes, Potato au gratin</span></li>
                                </ul>
                            </div>
                            <p>
                                Gratin Dauphinois is a traditional dish from the Dauphiné region in southeastern France. Potatoes, originally from South America, were introduced to Europe through Spain in the mid-16th century and settled for food in France at the end of the 18th century. In particular, the Dauphine region was a place where potato and cream production developed, so it had the right conditions for the birth of gratin dauphinois, a dish using these as the main ingredients.

                                Various recipe variations have been attempted by adding eggs or cheese, but traditionally, it is mainly made by adding only whipped cream to potatoes. It is served with a main dish or eaten as a light meal with a salad. It is usually grilled generously in a large gratin bowl, placed on the table, and shared by several people.
                            </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Bœuf bourguignon</h2>
                    <p><strong>Boeuf bourguignon is a representative dish of the Burgundy region of France. It is a stew made by boiling beef in red wine produced in the region.</strong></p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <!-- Carousel -->
                        <div id="slideshow4" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideshow4" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#slideshow4" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#slideshow4" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#slideshow4" data-bs-slide-to="3"></button>
                                <button type="button" data-bs-target="#slideshow4" data-bs-slide-to="4"></button>
                            </div>
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/france/bourguignon (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/france/bourguignon (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/france/bourguignon (3).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/france/bourguignon (4).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/france/bourguignon (5).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                            </div>
                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#slideshow4" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slideshow4" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8 pt-4 content" data-aos="fade-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>France-Burgundy</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Beef, red wine, pearl onion, mushroom, bouquet garni, beef broth, etc.</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Beef stew, Coq au vin</span></li>
                                </ul>
                            </div>
                            <p>
                                Beef Bourguignon is a beef stew dish representing the Burgundy region of France. Charolais beef, recognized as the best quality in France, is simmered for a long time in red wine produced in Burgundy, and then flavored with garlic, onion, mushrooms, and bouquet garni (a bundle of various herbs and spices). make by adding The exact origins of boeuf bourguignon are unknown, but it is assumed that it developed naturally from simple dishes made by farmers' families using ingredients abundantly produced in the Burgundy region, including beef and red wine. The person who first established the recipe for boeuf bourguignon was Auguste Escoffier, a French chef in the early 20th century, and Julia Child (1912-2004), who contributed greatly to introducing French cuisine to the United States. ) became more widely known. In the Burgundy region, it is usually eaten in winter with potatoes, rice, and pasta, and eaten with Burgundy red wine made from Pinot Noir. </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Bouillabaisse</h2>
                    <p><strong>Bouillabaisse is a Mediterranean-style fish stew made with fish and other seafood, garlic, onions, and potatoes, and is a traditional dish from Marseille, France.</strong></p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <!-- Carousel -->
                        <div id="slideshow5" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideshow5" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#slideshow5" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#slideshow5" data-bs-slide-to="2"></button>
                            </div>
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/france/bouillabaisse (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/france/bouillabaisse (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/france/bouillabaisse (3).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                            </div>
                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#slideshow5" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slideshow5" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8 pt-4 content" data-aos="fade-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Western Europe-France-Provence-Marseille</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Fish, seafood, potatoes, tomatoes, garlic, onions, saffron, fennel, herbs and spices, olive oil</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Fish soup (stew), Fish stew</span></li>
                                </ul>
                            </div>
                            <p>
                                Bouillabaisse is a Mediterranean fish stew, a traditional dish from Marseille, France. There is a theory that it originated from a fish stew introduced by the Greeks when they built a city in Marseille around 600 BC. It is an opinion. Today, it has become a luxury dish sold in restaurants in Provence's Mediterranean port cities, including Marseille. The true taste of bouillabaisse lies in the combination of fresh, bone-in fish, high-quality olive oil, and a variety of herbs and spices from Provence. Because various fish and seafood are included, a large amount of 8 to 10 servings is cooked at once. Traditionally, it is served in 2 courses: fish broth and fish broth, served with crispy bread and rouille (rouille), a spicy garlic sauce. </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

    </main>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>




    <!-- Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#!">About</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Contact</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="../웹+프로젝트+홈페이지+개인정보+처리방침.html">Privacy Policy</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2023. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-twitter fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
