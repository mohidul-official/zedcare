<?php
session_start();
//$supporterid=$_GET['supporterid'];
$id=$_GET['id'];
$serviceagreementid=$_GET['serviceagreementid'];
require_once('db_connect.php');
$sql="DELETE FROM `serviceagreementlist` WHERE id='$id' AND serviceagreementid='$serviceagreementid'";
	if($conn->query($sql)===true){
		header("Location: service-agreement-list.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}

?>