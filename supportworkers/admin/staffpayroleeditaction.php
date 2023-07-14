<?php
require_once('db_connect.php');
    extract($_POST);

    $sql="UPDATE `staff` SET `paygroup`='$paygroup',`allowances`='$allowances',`dailyhours`='$dailyhours',`weeklyhours`='$weeklyhours',`externalsystemidentifier`='$externalsystemidentifier' WHERE id='$id'";
    if($conn->query($sql)===true){
		header("Location: view-staff.php?id=".$id);
		exit();
	}else{
		echo "error:".$conn->error;
	}
    


?>