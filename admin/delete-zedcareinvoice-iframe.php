<?php
session_start();
//$supporterid=$_GET['supporterid'];
$id=$_GET['id'];
$invoiceid=$_GET['invoiceid'];
require_once('db_connect.php');
$sql="DELETE FROM `zedcareinvoice` WHERE id='$id' AND invoiceid='$invoiceid'";
	if($conn->query($sql)===true){
		header("Location: zedcare-invoice.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}

?>