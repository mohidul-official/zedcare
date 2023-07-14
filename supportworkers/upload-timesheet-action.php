<?php
include_once('db_connect.php');
extract($_POST);
date_default_timezone_set('Australia/Melbourne');
$date1 = date('mdY');
$date = date('d-m-Y');

$r=rand(1,9999);
$c="TSE";
$formid=$c.$r.$date1;
$imgname=$_FILES["file"]["name"];
$extension = pathinfo($imgname,PATHINFO_EXTENSION);
$oldfilename = pathinfo($imgname,PATHINFO_FILENAME);
$randomno=rand(0,100000);
$rename=$sid."_timesheet_".date('Ymdhis');
$newname=$rename.".".$extension;
$target_dir="timesheetfile/";

$picture=$target_dir.$newname;
$filename=$_FILES["file"]["tmp_name"];
if(move_uploaded_file($filename, 'timesheetfile/'.$newname)){
	$sql="INSERT INTO `timesheetfile`(`fileid`, `timesheetname`, `file`, `supportername`, `sid`, `supporterid`, `date`) VALUES ('$formid','$oldfilename','$picture','$supportername','$sid','$supporterid','$date')";
	if($conn->query($sql)===true){
		header('Location:upload-timesheet.php');
		//header('Location:index.php');
		exit();
	}
}else{
    echo " Not uploaded";
}
/*$target_dir="uploads/";
$target_file=$target_dir . basename($_FILES["file"]["name"]);
$picture = $target_file;
date_default_timezone_set('Australia/Melbourne');
$date1 = date('mdY');
$date = date('d-m-Y');

$r=rand(1,9999);
$c="FORM";
$formid=$c.$r.$date1;
if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
	$sql="INSERT INTO `supporterforms`(`formid`, `formname`, `file`, `supportername`, `sid`, `supporterid`, `date`) VALUES ('$formid','$formname','$picture','$supportername','$sid','$supporterid','$date')";
	if($conn->query($sql)===true){
		header('Location:your-forms.php');
		//header('Location:index.php');
		exit();
	}
}
else {
	echo "sorry";
	}


/*echo $sql="INSERT INTO `product`(`pizza_name`, `price`, `quantity`, `picture`) VALUES ('$pizza_name','$price','$quantity','$file')";*/

?>