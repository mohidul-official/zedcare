<?php
require_once('db_connect.php');
$id=$_GET['id'];
//$sid=$_GET['sid'];
$archived="No";

    $sql="UPDATE `staff` SET `archived`='$archived' WHERE id='$id'";
    if($conn->query($sql)===true){
		header("Location: staff-list.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
    


?>