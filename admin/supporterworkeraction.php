<?php

require_once('db_connect.php');
    extract($_POST);
	$date = date('mdY');
	$date1 = date('m-d-Y');
	$status=1;
	$prename="";
	$mobile=$phone;

	$r=rand(1,9999);
	$c="S";
	$staffid=$c.$r.$date;
	$sql2="INSERT INTO `supportworker`(`sid`, `prename`, `name`, `email`, `password`, `mobile`, `phone`, `gender`, `dob`, `address`) VALUES ('$staffid','$prename','$name','$email','$password','$mobile','$phone','$gender','$dob','$address')";
	if($conn->query($sql2)===true){
		header("Location: support-workers-list.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}


?>