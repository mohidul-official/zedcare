<?php
session_start();
//$supporterid=$_GET['supporterid'];
$id=$_GET['id'];
$formid=$_GET['formid'];
require_once('db_connect.php');
$sql="DELETE FROM `supporterforms` WHERE id='$id' AND formid='$formid'";
	if($conn->query($sql)===true){
		header("Location: your-forms.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}

?>