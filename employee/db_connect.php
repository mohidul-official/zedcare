<?php
$servername="localhost";
$username="zedcareportal";
$password="zedcareportal";
$db="zedcareportal";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
	die("connection faild:".$conn->connect_error);
	}

?>