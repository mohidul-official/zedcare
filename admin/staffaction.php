<?php

require_once('db_connect.php');
    extract($_POST);
	$date = date('mdY');
	$date1 = date('m-d-Y');
	$status=1;

	$r=rand(1,9999);
	$c="S";
	$staffid=$c.$r.$date;
	if($selectcando=='Carer'){
	    $role="Carer";
	
	$sql2="INSERT INTO `staff`(`staffid`, `prename`, `name`, `email`, `mobile`, `phone`, `gender`, `dob`, `address`, `role`) VALUES ('$staffid','$prename','$name','$email','$mobile','$phone','$gender','$dob','$address','$role')";
	if($conn->query($sql2)===true){
		header("Location: staff-list.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
	}else{
	$sql2="INSERT INTO `staff`(`staffid`, `prename`, `name`, `email`, `mobile`, `phone`, `gender`, `dob`, `address`, `role`) VALUES ('$staffid','$prename','$name','$email','$mobile','$phone','$gender','$dob','$address','$role')";
	if($conn->query($sql2)===true){
		header("Location: staff-list.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
	}


?>