<?php
require_once('db_connect.php');
    extract($_POST);

    $sql="UPDATE `staff` SET `role`='$role',`notifyattendance`='$notifyattendance',`availablerostering`='$availablerostering',`noaccess`='$noaccess' WHERE id='$id'";
    if($conn->query($sql)===true){
		header("Location: view-staff.php?id=".$id);
		exit();
	}else{
		echo "error:".$conn->error;
	}
    


?>