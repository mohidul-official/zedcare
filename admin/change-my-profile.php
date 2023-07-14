<?php
include_once('db_connect.php');
extract($_POST);
	$sql="UPDATE `admin` SET `username`='$username',`email`='$email',`password`='$password' WHERE id='$id'";
	if($conn->query($sql)===true){
	    
        session_start();
        $_SESSION['username'] = $username;
        
		header('Location:my-profile.php');
		exit();
	}else {
	echo "sorry";
	}



?>