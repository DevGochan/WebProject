<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MyPage</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .my-button {
            all: unset;
            width: 150px;
        }

        .my-button:hover {
            transform: scale(1.2);
        }

        .features-icons {
            padding-top: 16.5rem;
            padding-bottom: 16.3rem;
        }

    </style>
</head>

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
    <!-- Icons Grid-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <button class="my-button" onclick="confirmModal()">
                            <div class="features-icons-icon d-flex"><i class="bi bi-person-x-fill m-auto text-primary"></i></div>
                            <h3>회원탈퇴</h3>
                        </button>
                        <script>
                            function confirmModal() {
                                if (window.confirm("정말 회원 탈퇴를 하시겠습니까?")) {
                                    window.location.href = "sign/signdel.php";
                                } else {
                                    window.location.href = "mypage.php";
                                }
                            }

                        </script>
                        <p class="lead mb-0"></p>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <button class="my-button" onclick="window.open('message/message_form.php', '_blank', 'width=900,height=650')">
                            <div class="features-icons-icon d-flex"><i class="bi bi-envelope m-auto text-primary"></i></div>
                            <h3>쪽지함</h3>
                            <p class="lead mb-0"></p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <button class="my-button" onclick="window.open('sign/signmodify.php', '_blank', 'width=600,height=400')">
                            <!-- 회원정보수정 기능추가 5.15 월 해찬 -->
                            <div class="features-icons-icon d-flex"><i class="bi-house m-auto text-primary"></i></div>
                            <h3>정보수정</h3>
                            <p class="lead mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer bg-light">
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
