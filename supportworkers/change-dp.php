<?php
include_once('db_connect.php');
extract($_POST);
$target_dir="profilepic/";
$target_file=$target_dir . basename($_FILES["file"]["name"]);
$picture = $target_file;
date_default_timezone_set('Australia/Melbourne');

if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
	$sql="UPDATE `supportworker` SET `profilepic`='$picture' WHERE id='$id' AND sid='$sid'";
	if($conn->query($sql)===true){
	    
        session_start();
        $_SESSION['profilepic'] = $picture;
        
		header('Location:my-profile.php');
		exit();
	}
}
else {
	echo "sorry";
	}


/*echo $sql="INSERT INTO `product`(`pizza_name`, `price`, `quantity`, `picture`) VALUES ('$pizza_name','$price','$quantity','$file')";*/

?>