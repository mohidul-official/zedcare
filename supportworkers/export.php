<?php
session_start();
$loginid=$_SESSION['loginid'];
if($loginid==1){
    


require_once('db_connect.php');

    
$sid=$_SESSION['sid'];
$supporterid=$_SESSION['id'];
$supportername=$_SESSION['supportername'];
$profilepic=$_SESSION['profilepic'];
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  /*border-collapse: collapse;*/
}
</style>
</head>
<body>
<?php
$html="<table><tr style='border:1px solid #000;'><td>Supporter Id</td><td>Delivery Date</td><td>Delivery Day</td><td>Start Time</td><td>End Time</td><td>Total Time</td><td>Status</td></tr>";
$d="Approved";
$sql="SELECT * FROM supportertimesheet WHERE status='$d' AND sid='$sid' ORDER BY id DESC";
$result=$conn->query($sql); 
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $starttime=$row['starttime'];
                                                            $startampm=$row['startampm'];
                                                            $starttime1=$starttime." ".$startampm;
                                                            $endtime=$row['endtime'];
                                                            $endampm=$row['endampm'];
                                                            
                                                            $endtime1=$endtime." ".$endampm;
        $html.='<tr><td>'.$row['sid'].'</td><td>'.$row['deliverydate'].'</td><td>'.$row['day'].'</td><td>'.$starttime1.'</td><td>'.$endtime1.'</td><td>'.$row['totaltime'].'</td><td>'.$row['status'].'</td></tr>';
        }
    }
    $html.='</table>';
    date_default_timezone_set("Australia/Sydney");
//echo date_default_timezone_get();
$dt= date("d-m-y_h:i:s-A");
    header('Content-Type:application/xls');
   header('Content-Disposition:attachment;filename='.$sid.'_'.$dt.'_timesheet.xls');
    echo $html;
?>
</body>
</html>
<?php
}else{
   $message=" Please Login First";
        header("Location:login.php?message=".$message);
        exit(); 
}

?>