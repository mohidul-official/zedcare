<?php
session_start();
//$supporterid=$_GET['supporterid'];
$id=$_GET['id'];
$iframeid=$_GET['iframeid'];
require_once('db_connect.php');
$sql="DELETE FROM `adminforms` WHERE id='$id' AND iframeid='$iframeid'";
	if($conn->query($sql)===true){
		header("Location: your-forms-iframe.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}

?>