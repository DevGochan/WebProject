<?php
session_start();
include_once "../dbconn.php";
$email = $_POST["email"];
$uname = $_POST["uname"];
$pwd = $_POST["pwd"];
$telno = $_POST["telno"];

$sql = "UPDATE member SET pwd = '$pwd', uname = '$uname', telno = '$telno' 
        WHERE email = '$email'";
if ($conn->query($sql)) {
  $_SESSION["uname"] = $uname;
  echo "<script>alert('회원정보 변경에 성공하였습니다.')</script>";
  echo "<script>window.opener.location.reload();</script>";
  echo "<script>window.close();</script>";
} else {
  echo "회원정보수정 중에 오류가 발생했습니다." . $conn->error;
}
?>
