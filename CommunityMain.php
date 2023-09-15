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
</head>
<style>
    .content-cell {
        max-width: 100px;
        /* Adjust this value to suit your needs */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
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
                            <span style="margin-left: 5px;">Coummunity</span>
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

                    function writePost() {
                        // PHP에서 설정된 로그인 상태를 체크합니다.
                        const logged = "<?php echo $logged; ?>";

                        // 로그인 상태가 아니면 알림을 표시하고 아무 동작도 수행하지 않습니다.
                        if (logged == false) {
                            alert("로그인이 필요한 기능입니다.");
                        } else {
                            // 로그인 상태라면 글쓰기 페이지로 이동합니다.
                            location.href = "post/posts.php";
                        }
                    }

                </script>
                <a class="btn" onclick="writePost()">글쓰기</a>
            </div>
        </div>
    </nav>
    <h2 style="text-align: center; margin-top: 20px; margin-right: 58%">Community</h2>
    <!-- Page Content -->
    <div class="container mt-3">
        <table class="table">
            <thead style="background-color: #89ade1; color: white;">
                <tr>
                    <th>NO</th>
                    <th>Title</th>
                    <th>Content </th>
                    <th>Name</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>

                <script>
                    const logged = "<?php echo $logged; ?>";

                </script>
                <?php
                include_once('dbconn.php');

                // 데이터베이스에서 게시물 가져오기
                $query = 'SELECT * FROM posts';
                $result = $conn->query($query);

                if ($result && $result->num_rows > 0) {
                    $no = 0;
                    while ($post = $result->fetch_assoc()) {
                        $no++;
                        ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>
                        <script>
                            // 로그인 상태가 아니면 알림을 표시하고 아무 동작도 수행하지 않습니다.
                            if (logged == true) {
                                document.write('<a href="post/view_post.php?title=<?= urlencode($post['title']); ?>"><?= $post['title']; ?></a>');
                            } else {
                                document.write('<?= $post['title']; ?>');
                            }

                        </script>
                    </td>
                    <td class="content-cell"><?php echo $post['content']; ?></td>
                    <td><?php echo $post['name']; ?></td>
                    <td><?php echo $post['pdate']; ?></td>
                </tr>
                <?php
                    }
                } else {
                    echo '<tr><td colspan="5" class="text-center">게시물이 없습니다.</td></tr>';
                }

                // 연결 종료
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
