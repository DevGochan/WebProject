<meta charset='utf-8'>
<?php
    $send_id = $_GET["send_id"];

    $rv_id = $_POST['rv_id'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
	$subject = htmlspecialchars($subject, ENT_QUOTES);
	$content = htmlspecialchars($content, ENT_QUOTES);

	$regist_day_temp = new DateTime();   // 현재의 '년-월-일-시-분'을 저장
	$regist_day_temp->modify('+7 hours');  // sql시간과 로컬 시간의 차이 메꿈
	$regist_day = $regist_day_temp->format('Y-m-d (H:i)');
	

	if(!$send_id) {
		echo("
			<script>
			alert('로그인 후 이용해 주세요! ');
			history.go(-1)
			</script>
			");
		exit;
	}
    include_once '../dbconn.php';

	$sql = "select * from member where email='$rv_id'";
	$result = mysqli_query($conn, $sql);
	$num_record = mysqli_num_rows($result);

	if($num_record)
	{
		$sql = "insert into message (send_id, rv_id, subject, content,  regist_day) ";
		$sql .= "values('$send_id', '$rv_id', '$subject', '$content', '$regist_day')";
		mysqli_query($conn, $sql);  // $sql 에 저장된 명령 실행
	} else {
		echo("
			<script>
			alert('수신 아이디가 잘못 되었습니다!');
			history.go(-1)
			</script>
			");
		exit;
	}

	mysqli_close($conn); // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'message_box.php?mode=send';
	   </script>
	";
?>
