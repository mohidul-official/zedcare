<?php
$staffid="S382507022021";
$date="2021-07-08";
require_once('db_connect.php');
$sql2="SELECT FROM staffbooking WHERE staffid='$staffid' AND date='$date'";
                                                            //echo "$sql2";
                                                            $result2=$conn->query($sql2);
                                                            echo "$result2";
                                                            if($result2->num_rows > 0){
                                                                while($row = $result2->fetch_assoc()){
                                                                    $id=$row['id'];
                                                                    echo "$id";
                                                                }
                                                            }else{
                                                                echo "err";
                                                            }

?>