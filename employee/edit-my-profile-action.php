<?php
require_once('db_connect.php');
extract($_POST);
//$id=$_GET['id'];
//$eid=$_GET['eid'];
//$status="Approved";

    $sql="UPDATE `employees` SET `email`='$email', `password`='$password', `name`='$name', `suburb`='$suburb', `state`='$state', `postcode`='$postcode' WHERE id='$id'";
    //echo $sql;
    if($conn->query($sql)===true){
		header("Location: my-profile.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
    


?>