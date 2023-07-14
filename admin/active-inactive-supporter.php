<?php
require_once('db_connect.php');
$id=$_GET['id'];
$sid=$_GET['sid'];
$status=$_GET['status'];

if($status==1){
    $sql="UPDATE `supportworker` SET `status`='0' WHERE id='$id' AND  sid='$sid'";
    if($conn->query($sql)===true){
		header("Location: support-workers-list.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
    
}else{
    $sql="UPDATE `supportworker` SET `status`='1' WHERE id='$id' AND  sid='$sid'";
    if($conn->query($sql)===true){
		header("Location: support-workers-list.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
    
}

?>