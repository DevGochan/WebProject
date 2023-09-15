<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- AOS CSS -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
</head>
<style>
    .col-md-6 {
        margin: 100px auto;
    }

    body {
        overflow-x: hidden;
    }

</style>

<body>
    <!-- side bar-->
    <header id="header">
        <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-arrow-left" color="white"></i></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="introduce.php">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home" />
                            </svg>
                            <i class="bi bi-book"></i>
                            <span style="margin-left: 5px;">Introduce</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="CommunityMain.php">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#community" />
                            </svg>
                            <i class="bi bi-chat-dots"></i>
                            <span style="margin-left: 5px;">Community</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ProSup.php">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2" />
                            </svg>
                            <i class="bi bi-info-circle"></i>
                            <span style="margin-left: 5px;">Procedure & Supplies</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Currency.html">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#grid" />
                            </svg>
                            <i class="bi bi-currency-dollar"></i>
                            <span style="margin-left: 5px;">Exchange</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <!-- 5.11목 22:20 해찬 작업내용 (회원정보 수정 - 회원탈퇴 기능구현) -->
                        <a class="nav-link active" aria-current="page" href="mypage.php">
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
    <nav class="navbar navbar-light bg-light static-top">
        <nav class="navbar navbar-dark ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <b>It's Europe</b>
            </a>
            <div>
                <?php
        //$_SESSION['uid'] = "test";
        $logged = false;
        if (isset($_SESSION["uid"])) {
            $uname = $_SESSION["uname"];
            echo "<span>$uname 환영합니다.</span>&nbsp&nbsp&nbsp"; 
            $logged = true;
            echo '<a class="btn" onclick="location.href=(\'sign/signout.php\')">Sign Out</a>';
        } else {
            echo '<a class="btn" onclick="openCenteredPopup(\'sign/signin.html\', \'sign in\', 700, 450)">Sign In</a>';
            echo '<a class="btn" onclick="openCenteredPopup(\'sign/signup.html\', \'sign up\', 700, 450)">Sign Up</a>'; 
        }
        ?>

                <script>
                    function openCenteredPopup(url, title, w, h) {
                        // Screen width and height
                        const screenWidth = window.innerWidth;
                        const screenHeight = window.innerHeight;

                        // Calculate the position
                        const left = (screenWidth - w) / 2;
                        const top = (screenHeight - h) / 2;

                        // Open the window
                        window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
                    }

                </script>

            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 data-aos="fade-up" style="font-size: 70px;">Let me introduce our website.</h1>
                        <!-- to get an API token!-->
                        <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <h2 style="text-align: center; margin: 50px auto;">Below are the functions of our website.</h2>
    <!-- Other code truncated for brevity -->
    <main class="container-fluid mt-3">
        <div class="row justify-content-center">
            <section class="col-lg-10">
                <div class="row align-items-center mt-5 mb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-md-6">
                        <img src="assets/img/sidebar.jpg" class="img-fluid" alt="Image description">
                    </div>
                    <div class="col-md-6 text-center">
                        <h2 data-aos="fade-up" data-aos-delay="300">Side Bar</h2>
                        <p>우리 사이트의 사이드바는 다양한 섹션으로의 빠른 접근을 제공합니다. 이곳에서 커뮤니티 페이지로 이동하거나, 절차 및 준비물을 확인하거나, 환전 섹션에 접근하거나, 개인 페이지를 업데이트 할 수 있습니다.</p>
                    </div>
                </div>

                <div class="row align-items-center mt-5 mb-5" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-md-6 text-center">
                        <h2 data-aos="fade-up" data-aos-delay="400">Search Capability</h2>
                        <p>메인 페이지에는 유럽의 국가 이름을 입력할 수 있는 검색 기능을 제공합니다. 검색 버튼을 클릭하거나 Enter를 누르면 해당 국가에 대한 정보가 제공되는 전용 페이지로 리디렉션됩니다.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/img/search.jpg" class="img-fluid" alt="Image description">
                    </div>
                </div>

                <div class="row align-items-center mt-5 mb-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-md-6">
                        <img src="assets/img/button.jpg" class="img-fluid" alt="Image description">
                    </div>
                    <div class="col-md-6 text-center">
                        <h2 data-aos="fade-up" data-aos-delay="500">Button Features</h2>
                        <p>검색 기능 아래에는 사진, 식당, 호텔 버튼으로 대표되는 세 가지 주요 기능이 있습니다. 이 버튼들을 클릭하면 각각의 섹션으로 이동하여 다음과 같은 작업을 수행할 수 있습니다:</p>
                        <ul>
                            <li><b>사진:</b> 유럽의 다양한 명소의 고화질 사진을 탐색할 수 있습니다.</li>
                            <li><b>식당:</b> 유럽의 다양한 도시에서 추천하는 식당과 현지 음식을 발견할 수 있습니다.</li>
                            <li><b>호텔:</b> 예산과 선호에 맞는 이상적인 숙박 시설을 찾을 수 있습니다.</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Other code truncated for brevity -->


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
                        <li class="list-inline-item"><a href="웹+프로젝트+홈페이지+개인정보+처리방침.html">Privacy Policy</a></li>
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
    <!-- Code truncated for brevity -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>
</body>

</html>
