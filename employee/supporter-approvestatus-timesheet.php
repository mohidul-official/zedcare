<?php
require_once('db_connect.php');
$id=$_GET['id'];
//$sid=$_GET['sid'];
$status="Approved";

    $sql="UPDATE `supportertimesheet` SET `status`='$status' WHERE id='$id'";
    if($conn->query($sql)===true){
		header("Location: supporter-approved-timesheet.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
    


?>