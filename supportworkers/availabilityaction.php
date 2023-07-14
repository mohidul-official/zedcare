<?php
require_once('db_connect.php');
	extract($_POST);

/*$dt="2021-09-22";
echo date('l', strtotime('09/22/2021'));
echo "<br>";*/
$day1=date("l", strtotime("$date"));
	$sql2="INSERT INTO `setavailability`(`sid`, `supporterid`, `supportername`, `date`, `day`, `fromtime`, `totime`) VALUES ('$sid','$supporterid','$supportername','$date','$day1','$fromtime','$totime')";
	if($conn->query($sql2)===true){
	    
		//header("Location: add-event.php?staffid=".$staffid."&date=".$date);
		header("Location: support-workers-availability.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}


?>