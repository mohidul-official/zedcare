<?php
$host='zedcareportal';
$user='zedcareportal';
$pass='zedcareportal';
$db='zedcareportal';
$conn = new mysqli($host, $user, $pass);
mysqli_select_db($conn, $db);
$d="Approved";
$setSql = "SELECT * FROM supportertimesheet";
$setRec = mysqli_query($conn, $setSql);
$columnHeader = '';
$columnHeader = "Id" . "\t" . "Timesheet Id" . "\t"  . "Supporter Id" . "\t"  . "cid" . "\t"  . "day" . "\t"  . "date" . "\t"  . "Supporter Id" . "\t" . "Phone" . "\t" . "Email" . "\t" . "Age";
$setData = '';
while ($rec = mysqli_fetch_row($setRec))
{
    $rowData = '';
    foreach ($rec as $value)
    {
        $value = '"' . $value . '"' . "\t";
        $rowData .= $value;
    }
    $setData .= trim($rowData) . "\n";
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=onkar_jha.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($columnHeader) . "\n" . $setData . "\n";

?>
