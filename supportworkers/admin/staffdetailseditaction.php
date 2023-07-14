<?php
require_once('db_connect.php');
    extract($_POST);

    $sql="UPDATE `staff` SET `prename`='$prename',`name`='$name',`email`='$email',`mobile`='$mobile',`phone`='$phone',`gender`='$gender',`dob`='$dob',`address`='$address',`languagespoken`='$languagespoken' WHERE id='$id'";
    if($conn->query($sql)===true){
		header("Location: view-staff.php?id=".$id);
		exit();
	}else{
		echo "error:".$conn->error;
	}
    


?>