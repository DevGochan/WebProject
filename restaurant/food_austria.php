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
    <link href="../css/style.css" rel="stylesheet">

    <style>
        #hero {
            width: 100%;
            height: 100vh;
            background: url("images/austria/res.jpg") top center;
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
            <h1>Austria</h1>
            <p><span class="typed" data-typed-items="Martinigans, Tiroler Grostl, Austria Knodel, Kaiserschmarrn, Apricot dumplings"></span></p>
        </div>
    </section><!-- End Hero -->


    <main id="main">
        <!-- ======= About Section ======= -->
        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Martinigans</h2>
                    <p><strong>Martinigans is one of Austria's traditional dishes. This dish is mainly prepared to commemorate St. Martin's Day, November 11th, and is a special dish enjoyed throughout Austria.</strong></p>
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
                            </div>

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/Austria/Martinigans (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/Austria/Martinigans (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/Austria/Martinigans (3).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Austria</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Goose, chestnuts, dried plums, walnuts, gravy sauce</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Christmas Turkey, French Confit de Canard</span></li>
                                </ul>
                            </div>
                            <p>
                                Martin Gians is a roast goose (or duck), known for its fatty meat and tender skin. The preparation is done by chopping the goose and cooking it with onions, vegetables and herbs, and using special methods such as grated potatoes at the end to tenderize the roasted skin.

                                Martin Gians is also an opportunity to gather with family and friends to enjoy a special meal. People often enjoy it with red cabbage, roasted potatoes, and sachler sauce, along with fatty goose. These combinations provide a rich taste and a variety of textures to create a unique culinary experience.

                                Martin Gians is one of Austria's traditional favorite dishes during the fall and winter seasons, and is a must-try dish if you want to experience Austrian culture and gastronomy. </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Tiroler Grostl</h2>
                    <p><strong>Tiroler Gröstl is a traditional dish from the Austrian Alps, especially popular in the Tyrol region. Gröschl is a stir-fry dish of boiled potatoes and beef or sausage. The dish originated as a simple yet nutritious food eaten by workers in the mountain environments of the Tyrolean Alps for energy.</strong></p>
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
                                    <img src="images/austria/Grostl (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/austria/Grostl (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/austria/Grostl (3).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Austria</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Potato, Bacon, Onion, Butter</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Bratkartoffeln, Rösti</span></li>
                                </ul>
                            </div>
                            <p>
                                Gröschl is usually made using leftover potatoes and meat from the previous day, which is cut into small pieces and pan-fried to a crisp. Beef or sausage is cooked, minced and sautéed with potatoes to create a rich flavor and texture. During the cooking process, you can also add various ingredients such as onions, herbs, and cheongyang peppers to add flavor.

                                Tyrolean gröschl is usually eaten for breakfast, often served with eggs. This food is popular with those looking for a simple yet satisfying meal. Gröschl is one of the dishes representing Austria's regional characteristics and Tyrolean culture, and is a must-try dish when visiting the Alps or experiencing Austrian food. </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Austria Knodel</h2>
                    <p><strong>Knödel in Austria is a traditional dish, made mainly of potatoes, bread or dough. Knutels often have a mild, nutty taste, and there are many varieties of knutels.</strong></p>
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
                            </div>
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/austria/Knodel (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/austria/Knodel (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/austria/Knodel (3).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Austria</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Potato Dough, Minced Meat</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Gnocchi, Klöße, Dumplings</span></li>
                                </ul>
                            </div>
                            <p>
                                Knudel is one of the most common dishes in Austria, both in home cooking and in restaurants. It offers a unique taste and texture with a variety of knudel varieties to create a rich dining experience. If you are visiting Austria or want to experience Austrian food, I recommend trying Knudel. </p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Kaiserschmarrn</h2>
                    <p><strong>Kaiserschmaren is an Austrian pancake dessert that tastes like torn hot cakes, but is crispy on the outside and soft on the inside and eaten with apple mousse.</strong></p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <!-- Carousel -->
                        <div id="slideshow4" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/austria/Kaiserschmarrn.jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 pt-4 content" data-aos="fade-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Austria</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>flour, sugar, eggs, milk</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Pancakes, Waffles</span></li>
                                </ul>
                            </div>
                            <p>
                                Kaiserschmarrn is a traditional Austrian dessert known for its fluffy and crispy pancakes. Kaiserschmarn is usually made from a salted dough, beaten by separating eggs.

                                Pancakes baked in a pan are greatly torn and divided into small pieces that are soft and airy. These little pieces are baked to a golden brown, giving them a crispy outside and soft inside. It is often served with pistachios, powdered sugar, jam, fruit, etc., most commonly with pistachios.

                                Kaiserschmarn is mostly eaten as a dessert, but is sometimes eaten for breakfast or as a light meal. You can make it at home in Austria or order it in a cafe or restaurant, and I highly recommend giving it a try if you are visiting Austria or want to experience Austrian food. Kaiserschmarn offers a delicious meal or dessert experience with its rich, sweet taste and unique texture.</p>
                        </div>
                    </div> <!-- row -->
                </div>
        </section><!-- End About Section -->

        <section class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Apricot dumplings</h2>
                    <p><strong>Apricot dumplings are a type of Austrian and Czech fruit dumplings in which fruits such as plums, strawberries, and apricots are steamed in flour dough mixed with potato flour.</strong></p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <!-- Carousel -->
                        <div id="slideshow5" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideshow5" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#slideshow5" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#slideshow5" data-bs-slide-to="1"></button>
                            </div>
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/austria/dumplings (1).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/austria/dumplings (2).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/austria/dumplings (3).jpg" alt="" class="d-block" style="border-radius:40px; width:100%; height : 500px;">
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
                                    <li><i class="bi bi-chevron-right"></i> <strong>Origin of food:</strong> <span>Austria</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ingredient:</strong> <span>Potato flour, dough, plum, strawberry, apricot, etc.</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>similar food:</strong> <span>Knudel, Dumblelings</span></li>
                                </ul>
                            </div>
                            <p>
                                Apricot Dumplings are a traditional Austrian dessert made by wrapping cherries in soft dough. Cherry Knudel is prepared mainly in summer, when cherries are plentiful, and has a sweet, juicy taste.
                                Cherry knudel is prepared by wrapping cherries in knudel dough and then boiling or baking them. It is often served seasoned with sugar and cinnamon, and can also be served with pistachio, cream or vanilla sauce. Cherry Knudel is famous as a summer dessert in Austria, and it is a special dish that allows you to enjoy its unique taste and rich fruit aroma. </p>
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
