<!DOCTYPE html>
<html>

<head>
    <title>회원가입</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        input[type=text],
        input[type=password],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

    </style>
</head>

<body>
    <?php
        session_start();
        
       if (!isset($_SESSION["uid"])) {
          echo "<script>alert('로그인이 필요한 서비스입니다.')</script>";
          echo "<script>window.close();</script>";
       } else {
          $email = $_SESSION["uid"];
          include_once "../dbconn.php";
          $sql = "select * from member where email = '$email'";
          $result = $conn->query($sql);
          if (isset($result) && $result->num_rows) {
          $row = $result->fetch_assoc();
       }          
          ?>
    <h2>회원정보수정</h2>
    <hr>
    <div class="container">
        <form action="signmodproc.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="fname">이메일</label>
                </div>
                <div class="col-75">
                    <input type="text" name="email" value="<?= $row["email"] ?>" id="email" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">이름</label>
                </div>
                <div class="col-75">
                    <input type="text" name="uname" value="<?= $row["uname"] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">비밀번호</label>
                </div>
                <div class="col-75">
                    <input type="password" name="pwd" value="<?= $row["pwd"] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">전화번호</label>
                </div>
                <div class="col-75">
                    <input type="text" name="telno" value="<?= $row["telno"] ?>">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <?php
        }
        ?>
</body>

</html>
