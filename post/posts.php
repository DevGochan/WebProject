<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Community - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .form-label {
            font-weight: bold;
            font-size: 20px;
        }

        .form-control {
            margin-bottom: 20px;
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            font-size: 20px;
            font-weight: bold;
            padding: 10px 15px;
        }

        .btn:hover {
            background-color: #89ade1;
            color: white;
        }

    </style>
</head>

<body>
    <div class="container">
        <?php
        session_start();
        include_once('../dbconn.php');

        // POST 요청 처리
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $name = $_SESSION["uname"];
            $content = $_POST['content'];

            // 입력값이 모두 채워져 있는지 확인
            if (!$title || !$name || !$content) {
                echo "<script>alert('입력항목을 모두 채워주세요.')</script>";
                echo "<script>location.replace('posts.php')</script>";
                exit;
            }

            // 현재 날짜 및 시간 가져오기
            $pdate = date('Y-m-d H:i:s');

            // 데이터베이스에 저장
            $sql = "INSERT INTO posts (title, name, content, pdate) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $title, $name, $content, $pdate);

            if ($stmt->execute()) {
                echo "<script>alert('게시물이 등록되었습니다.')</script>";
                echo "<script>location.replace('../communityMain.php')</script>";
                exit;
            } else {
                echo "<script>alert('게시물 등록에 실패하였습니다.')</script>";
                echo "<script>location.replace('posts.php')</script>";
                exit;
            }
        }
        $conn->close();     // DB연결 종료
        ?>
        <form method="POST" action="posts.php">
            <div class="mb-3">
                <label for="title" class="form-label">제목</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="제목을 입력해주세요.." required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">내용</label>
                <textarea class="form-control" id="content" name="content" rows="15" placeholder="내용을 입력해주세요.." required></textarea>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn">등록</button>
                <a class="btn" href="../CommunityMain.php">목록</a>
            </div>
        </form>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
