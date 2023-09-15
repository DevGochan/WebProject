<?php
  session_start();
  include_once "../dbconn.php";
  $id = $_SESSION["uid"]; // 3번. id 가져오기
# id가 있는지 없는지 검사

    
    if (!isset($_SESSION["uid"])) {
      echo "<script>alert('로그인이 필요한 서비스입니다.')</script>";
      echo "<script>location.href='../mypage.php'</script>";
    } else {
      $sql = "DELETE FROM member WHERE email = '$id'"; # 4번
      if ($conn->query($sql) === true) {
      echo "<script>alert('회원탈퇴가 완료되었습니다')</script>";
      echo "<script>location.href = '../index.php'</script>";

      #세션 데이터 삭제
      unset($_SESSION["uid"]);
      unset($_SESSION["uname"]);
      session_destroy();
      echo "<script>history.go(-1)</.script>";
      } else {
      echo "회원탈퇴 실패 : " . $conn->error;
       }
    }
  
?>
