<?php
require_once('db_connect.php');
$id=$_GET['id'];
//$sid=$_GET['sid'];
$archived="Yes";

    $sql="UPDATE `clients` SET `archived`='$archived' WHERE id='$id'";
    if($conn->query($sql)===true){
		header("Location: client-archived.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
    


?>