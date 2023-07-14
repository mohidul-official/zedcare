<?php
require_once('db_connect.php');
if(isset($_POST['Submit'])){
	extract($_POST);
	$cid="null";
	$date = date('mdY');

	$r=rand(1,9999);
	$c="TS";
	$tsid=$c.$r.$date;
	$status="Pending";
	$sql2="INSERT INTO `supportertimesheet`(`tsid`, `sid`, `cid`, `day`, `deliverydate`, `starttime`, `totaltime`, `rate`, `status`) VALUES ('$tsid','$sid','$cid','$day','$deliverydate','$starttime','$totaltime','$rate','$status')";
	if($conn->query($sql2)===true){
		header("Location: pending-timesheet.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
}

?>