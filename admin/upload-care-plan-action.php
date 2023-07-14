<?php
include_once('db_connect.php');
extract($_POST);
/*$target_dir="uploads/";
$target_file=$target_dir . basename($_FILES["file"]["name"]);
$picture = $target_file;*/
date_default_timezone_set('Australia/Melbourne');
$date1 = date('mdY');
$date = date('d-m-Y');

$r=rand(1,9999);
$c="CP";
$formid=$c.$r.$date1;
$sql="INSERT INTO `careplanlist`(`careplanid`, `name`, `url`, `date`) VALUES ('$formid','$formname','$url','$date')";
	if($conn->query($sql)===true){
		header('Location:care-plan-list.php');
		exit();
	}else {
	echo "sorry";
	}
/*
if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
	$sql="INSERT INTO `adminforms`(`formid`, `name`, `file`, `date`) VALUES ('$formid','$formname','$picture','$date')";
	if($conn->query($sql)===true){
		header('Location:your-forms.php');
		exit();
	}
}
else {
	echo "sorry";
	}

*/
/*echo $sql="INSERT INTO `product`(`pizza_name`, `price`, `quantity`, `picture`) VALUES ('$pizza_name','$price','$quantity','$file')";*/

?>