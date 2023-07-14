<?php
require_once('db_connect.php');
if(isset($_POST['Submit'])){
	extract($_POST);
	$date = date('mdY');

	$r=rand(1,9999);
	$c="NDIS";
	$ndisid=$c.$r.$date;
	$sql2="INSERT INTO `ndisplanmanager`(`ndisid`, `organisationname`, `phone`, `email`) VALUES ('$ndisid','$organisationname','$phone','$email')";
	if($conn->query($sql2)===true){
		header("Location: clients-care-plan.php");
		exit();
	}else{
		echo "error:".$conn->error;
	}
}

?>