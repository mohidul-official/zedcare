<?php
require_once('db_connect.php');
extract($_POST);
$sql="SELECT * FROM admin WHERE email='$email' and password='$password'";
//echo "$sql";
$result=$conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['eid'] = $row['eid'];
    $_SESSION['aid'] = $row['aid'];
    $_SESSION['dp'] = $row['dp'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['adminloginid'] = 1;
    //$_SESSION['id'] = $row['id'];
    $status=$row['status'];
    if($status==1){
        header('Location:index.php');
        exit();
    }else{
        $message="Inactive User.. Please Contact Admin";
        header("Location:login.php?message=".$message);
        exit();
        }
}else{
        $message="Invalied Email Or Password.. Please Try Again";
        header("Location:login.php?message=".$message);
	exit();
	}
?>