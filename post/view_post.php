<!DOCTYPE html>
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
    body {
        background-color: #f8f9fa;
    }

    .container {
        max-width: 800px;
        margin: 100px auto;
        margin-bottom: 20px;
        padding: 100px 100px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .content {
        padding: 10px;
        margin-top: 20px;
        line-height: 1.5;
    }

    .btn-container {
        text-align: center;
    }

    .btn {
        font-size: 20px;
        font-weight: bold;
    }

</style>

<body>
    <?php
    include_once('../dbconn.php');

    // 게시물 title 가져오기
        $postTitle = $_GET['title'];

        // 데이터베이스에서 게시물 가져오기
        $query = "SELECT title, content FROM posts WHERE title = '$postTitle'";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            $post = $result->fetch_assoc();
        }
            $conn->close();     // DB연결 종료
    ?>
    <div class="container">
        <h1 class="display-4"><?php echo $post['title']; ?></h1>
        <div class="content">
            <?php echo $post['content']; ?>
        </div>
    </div>
    <div class="btn-container">
        <a class="btn" onclick="history.go(-1)">목록</a>
        <a class="btn" href="postsmodify.php?title=<?php echo urlencode($post['title']); ?>">수정</a>
        <a class="btn" href="posts_del.php?title=<?php echo urlencode($post['title']); ?>">삭제</a>
    </div>
</body>

</html>
