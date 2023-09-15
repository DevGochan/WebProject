<?php
    include_once('../dbconn.php');

    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $telno = $_POST['telno'];
    $regdate = date('y/m/d');

    // 입력항목이 모두 채워졌는지 검사
    if (!$email || !$uname || !$pwd || !$telno) {
        echo "<script>alert('입력항목을 모두 채워주세요.')</script>";
        echo "<script>location.replace('signup.html')</script>";
        exit;  // 코드 실행 중지
    }

    $sql = "insert into member values('$email', '$uname', '$pwd', '$telno', '$regdate')";
    if ($conn -> query($sql)) {
        echo "<script>alert('회원가입에 성공하였습니다.')</script>";
        echo "<script>window.close();</script>"; // 윈도우 창을 닫는 코드 
    } else {
        echo "<script>alert('회원가입에 실패하였습니다.')</script>";
        echo "<script>location.replace('signup.html')</script>";
    } 
?>
