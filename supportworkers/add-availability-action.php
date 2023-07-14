<?php
require_once('db_connect.php');
	extract($_POST);
	if(isset($_POST['monday'])){
	    $monday="1";
	}else{
	    $monday="0";
	}
	if(isset($_POST['tuesday'])){
	    $tuesday="1";
	}else{
	    $tuesday="0";
	}
	if(isset($_POST['wednesday'])){
	    $wednesday="1";
	}else{
	    $wednesday="0";
	}
	if(isset($_POST['thursday'])){
	    $thursday="1";
	}else{
	    $thursday="0";
	}
	if(isset($_POST['friday'])){
	    $friday="1";
	}else{
	    $friday="0";
	}
	if(isset($_POST['saturday'])){
	    $saturday="1";
	}else{
	    $saturday="0";
	}
	if(isset($_POST['sunday'])){
	    $sunday="1";
	}else{
	    $sunday="0";
	}

	$sql2="INSERT INTO `supporteavailability`(`sid`, `supporterid`, `sunday`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `date`) VALUES ('$sid','$supporterid','$sunday','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$date')";
	if($conn->query($sql2)===true){
	    
		//header("Location: add-event.php?staffid=".$staffid."&date=".$date);
		header("Location: support-workers-availability.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}


?>