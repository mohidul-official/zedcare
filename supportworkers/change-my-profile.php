<?php
include_once('db_connect.php');
extract($_POST);
	$sql="UPDATE `supportworker` SET `prename`='$prename',`name`='$name',`email`='$email',`password`='$password',`mobile`='$mobile',`phone`='$phone',`gender`='$gender',`dob`='$dob',`address`='$address' WHERE id='$id' AND sid='$sid'";
	if($conn->query($sql)===true){
	    
        session_start();
        $_SESSION['supportername'] = $name;
        
		header('Location:my-profile.php');
		exit();
	}else {
	echo "sorry";
	}



?>