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
            background: url("images/italy/res.jpg") top center;
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
            <h1>Italy</h1>
            <p><span class="typed" data-typed-items="lasagna, Risotto, Brustchetta, Carbonara, Pizza, Pasta, Minestrone"></span></p>
        </div>
    </section><!-- End Hero -->


    <main id="main">
        <!-- ======= About Section ======= -->
        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>lasagna</h2>
                    <p><strong>Lasagna is a popular Italian pasta dish. It consists of layers of wide rectangular pasta sheets that are alternated with various ingredients and baked in an oven.</strong></p>
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
                                <button type="button" data-bs-target="#slideshow" data-bs-slide-to="4"></button>
                            </div>

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/italy/lasagna.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/italy/lasagna2.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/italy/lasagna3.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/italy/lasagna4.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/italy/lasagna5.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Italy Emilia-Romagna</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Pasta (lasagne), Parmigiano Reggiano cheese, ragu sauce, bechamel sauce</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Casserole, Timballo, Texaslsagna</span></li>
                                </ul>
                            </div>
                            <p>
                                Lasagna is one of the Italian pasta dishes, where the dough is rolled out thinly and cut into wide rectangles. It is layered alternately with fillings such as ragu alla bolognese, bechamel sauce, and Parmigiano Reggiano cheese, then baked in the oven. bake it Lasagna is a pasta that has a long history, and it is estimated that the recipe in the form of layering as it is today was developed around the 14th century. Currently, lasagna has developed its own recipes throughout Italy, and among them, lasagna alla bolognese from Emilia-Ramagna is the most widely known. Lasagna is a dish that takes a long time to make and is made for Christmas, birthdays, wedding receptions and special guests. However, as it was introduced to the United States, the recipe changed to become simpler.
                            </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Risotto</h2>
                    <p><strong>Risotto is an Italian rice dish with a soft texture that is lightly fried in butter or olive oil, then poured with broth, and boiled down with vegetables, spices, meat, and seafood.</strong></p>
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
                                <button type="button" data-bs-target="#slideshow2" data-bs-slide-to="3"></button>
                                <button type="button" data-bs-target="#slideshow2" data-bs-slide-to="4"></button>
                            </div>

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/italy/risotto.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/italy/risotto2.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/italy/risotto3.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/italy/risotto4.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/italy/risotto5.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Italy</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Rice, Butter, Broth, Cheese</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Paella, Pilaff</span></li>
                                </ul>
                            </div>
                            <p>
                                Risotto is a rice dish in which rice is lightly fried in butter or olive oil, poured with broth, and boiled down with vegetables, spices, meat, and seafood. It is a dish that originated around the 16th century in Milan, in the Po Valley region of northern Italy, where rice production was developed.

                                Risotto is an al dente (a cooking method in which ingredients such as vegetables or pasta are cooked to a medium level to give them a chewy taste) ' Boil it in the state and it's complete. The basic recipe is simple, but various types of risotto are made depending on what ingredients are added other than rice, such as vegetables, mushrooms, meat, fish, seafood, cheese, and fruit.
                            </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Brustchetta</h2>
                    <p><strong>Brustchetta is an appetizer served with various ingredients on top of flat-cut toasted bread.</strong></p>
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
                                    <img src="images/italy/brustchetta.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/brustchetta2.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/brustchetta3.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/brustchetta4.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/brustchetta5.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Italy</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Bread, olive oil, garlic, salt, etc.</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Crostini, Open sandwich</span></li>
                                </ul>
                            </div>
                            <p>
                                Brustchetta is one of Italy's leading antipasti dishes. It is not known exactly when they started eating it. However, judging from the tradition of using bruschetta for tasting the quality of olive oil, it is estimated since ancient Rome that olive oil began to be eaten as a food. Traditionally, it can be made simply with roasted bread, garlic, olive oil, and salt, so it was a snack that poor farmers ate to appease their hunger while working in the fields. Today, it has become one of the representative dishes of Italy as numerous recipes with various toppings have been developed according to the region or taste.
                            </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Carbonara</h2>
                    <p><strong>Carbonara is an Italian pasta made with boiled spaghetti noodles, guanciale or pancetta, eggs, cheese, and pepper.</strong></p>
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
                                    <img src="images/italy/carbonara.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/carbonara2.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/carbonara3.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/carbonara4.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/carbonara5.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Italy Lazio</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Spaghetti noodles, guanciale, egg, pecorino romano cheese, pepper, olive oil</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Cacio e uova, Cacio e pepe, Pasta alla gricia</span></li>
                                </ul>
                            </div>
                            <p>
                                Carbonara is a typical Italian pasta. Guanciale (pork chin or cheek meat preserved in salt, sugar, spices, etc.) or pancetta (pork belly meat preserved in salt, similar to bacon), egg, cheese , pepper, etc. to make it. Although the history of carbonara is relatively short, and its origins are not accurately recorded, it is widely known today and can be found in almost every Italian restaurant in the world. Traditional Roman-style carbonara is characterized by a savory and light taste of spaghetti noodles mixed with eggs and cheese.
                            </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Pizza</h2>
                    <p><strong>Pizza is an Italian dish that is baked in an oven or oven with cheese, sauce, and other toppings on a dough made of dough.</strong></p>
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
                                <button type="button" data-bs-target="#slideshow5" data-bs-slide-to="3"></button>
                                <button type="button" data-bs-target="#slideshow5" data-bs-slide-to="4"></button>
                            </div>
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/italy/pizza.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/pizza2.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/pizza3.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/pizza4.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/pizza5.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Southern Italy</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Pizza dough (flour, water, yeast, salt, olive oil), cheese, tomatoes, and many other toppings</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Focaccia, Flatbread</span></li>
                                </ul>
                            </div>
                            <p>
                                Pizza is a dish that is baked with cheese, sauce, and toppings on a flat dough. Pizza is an Italian national dish with a history dating back thousands of years. However, it was not until the end of the 19th century that a recipe based on dough, tomatoes, and cheese, like today's pizza, was born. Since then, it has been introduced to the United States by immigrants from southern Italy, and numerous variations of the recipe have been attempted. Today, pizza is eaten by people of almost all cultures, enough to say that it is not an Italian dish, but a global dish.
                            </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Pasta</h2>
                    <p><strong>Pasta is a generic term for dishes made mainly by boiling it in salt water as a representative dish of Italy.</strong></p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <!-- Carousel -->
                        <div id="slideshow6" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideshow6" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#slideshow6" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#slideshow6" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#slideshow6" data-bs-slide-to="3"></button>
                                <button type="button" data-bs-target="#slideshow6" data-bs-slide-to="4"></button>
                            </div>
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/italy/pasta.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/pasta2.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/pasta3.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/pasta4.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/pasta5.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                            </div>
                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#slideshow6" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slideshow6" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8 pt-4 content" data-aos="fade-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Italy</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Flour (grain flour), water, various sauces</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Noodles</span></li>
                                </ul>
                            </div>
                            <p>
                                Pasta is an Italian food that is made by boiling flour and water dough in salt water. There is a record of eating lasagna from around the 1st century B.C., and as pictures related to pasta are found in materials from earlier times, it is estimated that pasta in Italy has been eaten for a very long time. Pasta is a food that has played an important role in dietary culture as a staple food of Italians since the ancient Roman era, and the time when pasta with tomato sauce that we are familiar with today was developed after the 18th century. It began to be known to many countries by Italian immigrants at the end of the 19th century, and today it has become a dish enjoyed by people all over the world.
                            </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Minestrone</h2>
                    <p><strong>Minestrone is an Italian vegetable soup made by boiling pasta or rice until thick.</strong></p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <!-- Carousel -->
                        <div id="slideshow7" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideshow7" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#slideshow7" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#slideshow7" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#slideshow7" data-bs-slide-to="3"></button>
                                <button type="button" data-bs-target="#slideshow7" data-bs-slide-to="4"></button>
                            </div>
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/italy/minestrone.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/minestrone2.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/minestrone3.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/minestrone4.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/italy/minestrone5.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                            </div>
                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#slideshow7" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slideshow7" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8 pt-4 content" data-aos="fade-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Italy</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>A variety of vegetables (beans, onions, celery, carrots, tomatoes, etc.), herbs, pasta, broth, etc.</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Soup, Zuppa</span></li>
                                </ul>
                            </div>
                            <p>
                                Minestrone is a thick soup made by adding pasta or rice to various ingredients such as various vegetables, herbs, beans, meat, fish, and seafood. It seems that similar recipes have existed since the days of the ancient Roman Empire, but it is known that today's recipes were prepared around the beginning of the 19th century. Minestrone is a dish as common as pasta in Italy, and is enjoyed all year round, especially in winter, made warm to appease the cold. Minestrone is made with vegetables and other available ingredients that are easy to find by season or region without any specific ingredients. As a result, the perception was strong that it was a simple dish of poor farmers, but recently, as the health benefits of minestrone have been highlighted, it is newly recognized as a Mediterranean meal.
                            </p>
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
