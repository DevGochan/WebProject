<meta charset='utf-8'>
<?php
    $num = $_GET["num"];
    $mode = $_GET["mode"];

	include_once'../dbconn.php';

	$sql = "delete from message where num=$num";
	mysqli_query($conn, $sql);

	mysqli_close($conn);                // DB 연결 끊기

	if($mode == "send")
		$url = "message_box.php?mode=send";
	else
		$url = "message_box.php?mode=rv";

	echo "
	   <script>
	    location.href = '$url';
	   </script>
	";
?>