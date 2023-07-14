<?php

require_once('db_connect.php');
    extract($_POST);
	$date = date('mdY');
	$date1 = date('m-d-Y');
	$status=1;
	$fullname=$nametitle." ".$name;

	$r=rand(1,9999);
	$c="C";
	$clientid=$c.$r.$date;
	
	$sql2="INSERT INTO `clients`(`clientsid`, `prename`, `firstname`, `middlename`, `lastname`, `displayname`, `gender`, `dob`, `age`, `address`, `mobile`, `phone`, `email`, `religion`, `maritalstatus`, `nationality`, `languagespoken`) VALUES ('$clientid','$prename','$firstname','$middlename','$lastname','$displayname','$gender','$dob','$age','$address','$mobile','$phone','$email','$religion','$maritalstatus','$nationality','$languagespoken')";
	if($conn->query($sql2)===true){
		header("Location: client-list.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}


?>