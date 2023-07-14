<?php
require_once('db_connect.php');
extract($_POST);
//$id=$_GET['id'];
//$sid=$_GET['sid'];
$status="Declined";

    $sql="UPDATE `supportertimesheet` SET `status`='$status', `declinecause`='$declinecause' WHERE id='$id'";
    if($conn->query($sql)===true){
		header("Location: supporter-pending-timesheet.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
    


?>