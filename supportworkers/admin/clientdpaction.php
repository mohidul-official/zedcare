<?php
include_once('db_connect.php');
extract($_POST);
$target_dir="clientdp/";
$target_file=$target_dir . basename($_FILES["file"]["name"]);
$picture = $target_file;
date_default_timezone_set('Australia/Melbourne');
$date1 = date('mdY');
$date = date('d-m-Y');

$r=rand(1,9999);
$c="FORM";
$formid=$c.$r.$date1;
if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
	$sql="UPDATE `clients` SET `clientprofile`='$picture' WHERE id='$id'";
	if($conn->query($sql)===true){
		header('Location:view-client.php?id='.$id);
		exit();
	}
}
else {
	echo "sorry";
	}


/*echo $sql="INSERT INTO `product`(`pizza_name`, `price`, `quantity`, `picture`) VALUES ('$pizza_name','$price','$quantity','$file')";*/

?>