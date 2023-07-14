<?php
require_once('db_connect.php');
	extract($_POST);

	$sql2="INSERT INTO `staffbooking`(`staffid`, `slotid`, `date`) VALUES ('$staffid','$slotid','$date')";
	if($conn->query($sql2)===true){
	    
		//header("Location: add-event.php?staffid=".$staffid."&date=".$date);
		header("Location: add-event.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}


?>