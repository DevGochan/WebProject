<?php 
session_start();

$postTitle = $_GET['title'];

include_once('../dbconn.php');

$sql = "DELETE from posts where title = '$postTitle'";   //삭제하는 구문
if($conn->query($sql)) {
    echo "<script>alert('게시물이 삭제되었습니다..')</script>";
    echo "<script>location.replace('../CommunityMain.php')</script>";  // 메소드
}

$conn->close();     // DB연결 종료
?>
