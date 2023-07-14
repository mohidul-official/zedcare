<?php
include_once('db_connect.php');
extract($_POST);
$target_dir="uploads/";
$target_file=$target_dir . basename($_FILES["file"]["name"]);
$picture = $target_file;
date_default_timezone_set('Australia/Melbourne');
$date1 = date('mdY');
$date = date('d-m-Y');

$r=rand(1,9999);
$c="FORM";
$formid=$c.$r.$date1;
if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
	$sql="INSERT INTO `employeeforms`(`formid`, `formname`, `file`, `employeename`, `eid`, `employeeid`, `date`) VALUES ('$formid','$formname','$picture','$employeename','$eid','$employeeid','$date')";
	if($conn->query($sql)===true){
		header('Location:your-forms.php');
		exit();
	}
}
else {
	echo "sorry";
	}



?>