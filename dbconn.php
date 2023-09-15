<?php
    # Database Connection
    $server = "localhost";
    $user = "root";
    $passwd = "";
    $dbname = "web_project";
    $conn = new mysqli($server, $user, $passwd, $dbname);
   
    if($conn -> connect_error) {
        die ("데이터베이스 연결 오류 : ". $conn -> error);
    }
?>
