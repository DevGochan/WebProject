<!DOCTYPE html>
<html>

<head>
    <title>중복확인 페이지</title>
    <meta charset='utf-8'>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h3 {
            color: #333;
        }

        p {
            color: #555;
            margin-bottom: 10px;
        }

        li {
            list-style: none;
            margin-bottom: 5px;
        }

        #close {
            text-align: center;
            margin-top: 20px;
            cursor: pointer;
        }

        #close p {
            color: #777;
            font-size: 14px;
            text-decoration: underline;
        }

        #close p:hover {
            color: #333;
        }

    </style>
</head>

<body>
    <h3>아이디 중복체크</h3>
    <p>
        <?php
            $email = $_GET["email"];
            if ($email) {
                include_once('../dbconn.php');
                $sql = "select * from member where email = '$email'";
                $result = $conn -> query($sql);
                $num_record = mysqli_num_rows($result);

                if ($num_record) {
                    echo "<li>".$email." 아이디는 중복됩니다.</li>";
                    echo "<li>다른 아이디를 사용해주세요!</li>";
                    
                }
                else {
                    echo "<li>".$email." 아이디는 사용 가능합니다.</li>";
                }

                mysqli_close($conn);
    
            }
            
            
            ?>
    </p>
    <div id="close">
        <p onclick="javascript:self.close()">닫기</p>
    </div>
</body>

</html>
