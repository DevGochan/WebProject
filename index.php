<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Main</title>
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
</head>
<style>
    .my-button {
        all: unset;
        width: 150px;
    }

    .my-button:hover {
        transform: scale(1.1);
    }

    .text {
        text-align: center;
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
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-4">Welcome to Europe!</h1>
                        <!-- to get an API token!-->
                        <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- country address input-->
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" id="countryName" type="text" placeholder="The name of a European country.." onkeydown="return event.key != 'Enter';" />
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-secondary" id="searchButton" type="button"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                            <script>
                                const countryLinks = {
                                    "스위스": "https://www.mongtravel.net/",
                                    "이탈리아": "https://www.mongtravel.net/italy",
                                    "프랑스": "https://www.mongtravel.net/france",
                                    "헝가리": "https://kr.trip.com/travel-guide/destination/hungary-100101/",
                                    "체코": "https://kr.trip.com/travel-guide/destination/czech-republic-100094/",
                                    "오스트리아": "https://kr.trip.com/travel-guide/destination/austria-100027/"
                                };

                                function getCountryLink(country) {
                                    return countryLinks[country] || null;
                                }

                                const searchButton = document.getElementById("searchButton");
                                const countryInput = document.getElementById("countryName");

                                // 검색 버튼 클릭 이벤트 핸들러
                                searchButton.addEventListener("click", () => {
                                    const country = countryInput.value.trim(); // 입력된 나라 이름을 가져옴
                                    const link = getCountryLink(country); // 해당 나라의 링크를 가져옴
                                    if (link) {
                                        window.location.href = link; // 링크로 이동
                                    }
                                });

                                // Enter 키 이벤트 핸들러
                                countryInput.addEventListener("keyup", (event) => {
                                    if (event.keyCode === 13) { // Enter 키 눌렸을 때
                                        //                                    event.preventDefault();
                                        //                                    alert("엔터키를 눌렀습니다.")
                                        const country = countryInput.value.trim(); // 입력된 나라 이름을 가져옴
                                        const link = getCountryLink(country); // 해당 나라의 링크를 가져옴
                                        if (link) {
                                            window.location.href = link; // 링크로 이동
                                        }
                                    }
                                });

                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="text">
        <p class="lead mb-0">Look around!<br> the pictures, restaurants, and accommodations you need for your trip to Europe.</p>
    </div>

    <!-- Icons Grid-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <button class="my-button" onclick="window.location.href = 'photo/wallpaper.html'">
                            <div class="image-box">
                                <img src="assets/img/photo.jpg" width="330px" height="330px" alt="이미지_설명">
                                <div class="text-box">
                                    <p>Photo</p>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <button class="my-button" onclick="window.location.href = 'restaurant/food.php'">
                            <div class="image-box">
                                <img src="assets/img/restaurant.jpg" width="330px" height="330px" alt="이미지_설명">
                                <div class="text-box">
                                    <p>Cuisine</p>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <button class="my-button" onclick="window.location.href = 'hotel/hotel.php'">
                            <div class="image-box">
                                <img src="assets/img/hotel.jpg" width="330px" height="330px" alt="이미지_설명">
                                <div class="text-box">
                                    <p>Hotel</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</body>

</html>
