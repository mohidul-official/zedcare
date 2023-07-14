<?php
session_start();
//$supporterid=$_GET['supporterid'];
$id=$_GET['id'];
$careplanid=$_GET['careplanid'];
require_once('db_connect.php');
$sql="DELETE FROM `careplanlist` WHERE id='$id' AND careplanid='$careplanid'";
	if($conn->query($sql)===true){
		header("Location: care-plan-list.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}

?>