<?php
require_once('db_connect.php');
$id=$_GET['id'];
$eid=$_GET['eid'];
$status=$_GET['status'];

if($status==1){
    $sql="UPDATE `employees` SET `status`='0' WHERE id='$id' AND  eid='$eid'";
    if($conn->query($sql)===true){
		header("Location: employee.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
    
}else{
    $sql="UPDATE `employees` SET `status`='1' WHERE id='$id' AND  eid='$eid'";
    if($conn->query($sql)===true){
		header("Location: employee.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
    
}

?>