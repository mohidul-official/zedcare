<?php
session_start();
//$supporterid=$_GET['supporterid'];
$id=$_GET['id'];
$participantiframeid=$_GET['participantiframeid'];
require_once('db_connect.php');
$sql="DELETE FROM `participantslist` WHERE id='$id' AND participantiframeid='$participantiframeid'";
	if($conn->query($sql)===true){
		header("Location: participants-list.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}

?>