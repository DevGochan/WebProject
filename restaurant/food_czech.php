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
            background: url("images/czech/res.jpg") top center;
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
            <h1>Czech</h1>
            <p><span class="typed" data-typed-items="Svickova, Veproknedlozelo, Bramboraky, Palacinky"></span></p>
        </div>
    </section><!-- End Hero -->


    <main id="main">
        <!-- ======= About Section ======= -->
        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Svickova</h2>
                    <p><strong>Svickova, a traditional Czech food along with Colleno, is a Czech dish that means beef sirloin and cream sauce.</strong></p>
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
                                    <img src="images/czech/svickova (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/czech/svickova (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/czech/svickova (3).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/czech/svickova (4).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/czech/svickova (5).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Czech</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Beef, butter, garlic, etc.</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Roast beef, Brasiola, Brazille</span></li>
                                </ul>
                            </div>
                            <p>
                                Beef stewed with species spices is served with a creamy or cranberry sauce called smetana and sauerkraut. It is common to eat svickova with Czech dumplings (a type of bread popular in Eastern Europe, called knoedel in the local language) in which bread called knedliky is put and boiled in water.
                            </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Veproknedlozelo</h2>
                    <p><strong>Roasted pork, knedliky bread, cabbage pickled in salt and vinegar, and pickled onions are eaten together with the Czech national dish, which is considered the best light meal.</strong></p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <!-- Carousel -->
                        <div id="slideshow2" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideshow2" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#slideshow2" data-bs-slide-to="1"></button>
                            </div>

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/czech/Veproknedlozelo (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/czech/Veproknedlozelo (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Czech</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Pork, Kyselé zelí, Bread</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Liška, Kuře na kyselo</span></li>
                                </ul>
                            </div>
                            <p>
                                Best friend knedlo jello is a common dish in Czech homes. Bestro refers to pork, knedul refers to dumplings, and jello refers to pickled cabbage. In other words, it is a simple food that is served with grilled pork, knedliky bread, and pickled cabbage on one plate and sprinkled with broth. Cabbage eaten in the Czech Republic is sauerkraut, which means sour cabbage. It was started to be eaten to supplement vitamin C, which is lacking in cold regions of Europe, and can now be found in many Czech home-cooked meals. Because of this, Knedlo Jell-O as a best friend is a heart-warming dish to eat when it's cold.
                            </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Bramboraky</h2>
                    <p><strong>Bramboraki is a traditional Czech potato pancake, similar to rosti made of ground raw potatoes, flour, carrots or cabbages, and various herbs. It is a type of oil-baked pancake similar to Korean potato pancakes.</strong></p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <!-- Carousel -->
                        <div id="slideshow3" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#slideshow3" data-bs-slide-to="1"></button>
                            </div>
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/czech/Bramboraky (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/czech/Bramboraky (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Czech</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Bread, olive oil, garlic, salt, etc.</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Crostini, Open sandwich</span></li>
                                </ul>
                            </div>
                            <p>
                                Bramboraki is a mixture of potato dough, flour, milk, and sausage that is baked and is similar to Korean potato pancakes. Among the meat-loving Czech cuisine, it is made mainly of vegetables rather than meat. It is seasoned with salt, pepper, and garlic and eaten as a side dish. You can eat it by ordering it at most restaurants.
                            </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Palacinky</h2>
                    <p><strong>Palachinki are Czech thin pancakes similar to crepes, but with a bit more variety. The visuals such as jam, fruit, cream, and nuts are also great. If you are a person who likes sweets, this is a food that will be enthusiastic. Most cafes sell it, and you can also buy it on the street. </strong></p>
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
                                    <img src="images/czech/Palacinky (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/czech/Palacinky (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/czech/Palacinky (3).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/czech/Palacinky (4).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/czech/Palacinky (5).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Balkans</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Flour, Eggs, Milk, Sugar, Butter</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Crepe, Spangle, Blini brush</span></li>
                                </ul>
                            </div>
                            <p>
                                A Czech pancake dessert dish similar to a crepe. It is a dessert that is eaten with fruit ice cream, chocolate nuts, etc. on a thin pancake or frozen... These are Czech pancakes similar to French crepes. After frying, it is rolled with fruit, jam, cream, or sweet ingredients such as Nutella.
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
