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
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ZedCare - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
          var html= '<tr><td><input type="hidden" class="form-control" id="" name="sid[]" value="<?php echo $sid;?>" ><input type="text" class="form-control" name="date[]" placeholder="ex:2021-12-20 (YYYY-MM-DD)" required></td><td><input type="text" class="form-control" id="" name="day[]" placeholder="ex:Sunday" required></td><td><input type="text" class="form-control" id="" name="starttime[]" placeholder="Ex: 12:00 AM" required></td><td><input type="text" class="form-control" id="" name="totaltime[]" placeholder="" required></td><td><input type="button" class="form-control btn btn-danger" id="remove" name="remove" value="Remove"></td></tr>';
          var max=5;
          var x=1;
          
            $("#add").click(function(){
                if(x<=max){
                    $("#table_field").append(html);
                    x++;
                }
    
  });
          
            $("#table_field").on('click','#remove',function(){
    $(this).closest('tr').remove();
    x--;
  });
          
      });
  </script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><img src="https://www.zedcare.com.au/wp-content/uploads/2020/09/lOGO-SITE.png" width="120px" ></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            

            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Time Sheet</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="add-timesheet.php">Add Timesheet</a>
                        <a class="collapse-item " href="approved-timesheet.php">Approved Timesheet</a>
                        <a class="collapse-item" href="pending-timesheet.php">Pending Timesheet</a>
                        <a class="collapse-item" href="declined-timesheet.php">Declined Timesheet</a>
                        <a class="collapse-item " href="upload-timesheet.php">Upload Timesheet</a>
                    </div>
                </div>
            </li>


            

            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo12"
                    aria-expanded="true" aria-controls="collapseTwo12">
                    <i class="fab fa-wpforms"></i>
                    <span>Forms</span>
                </a>
                <div id="collapseTwo12" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="your-forms.php">My Forms</a>
                        <a class="collapse-item " href="upload-forms.php"> Upload Forms</a>
                    </div>
                </div>
            </li>


            

            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAavailability"
                    aria-expanded="true" aria-controls="collapseAavailability">
                    <i class="fab fa-wpforms"></i>
                    <span>Aavailability</span>
                </a>
                <div id="collapseAavailability" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="support-workers-availability.php">My Availability</a>
                        <a class="collapse-item active" href="add-availability.php"> Add Availability</a>
                    </div>
                </div>
            </li>
            <!-- Divider
            <hr class="sidebar-divider">-->

            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $supportername;?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo $profilepic;?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="my-profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add Availability</h1>
                   

                    <!-- DataTales Example-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Details</h6>
                        </div>
                        <div class="card-body">
                            <form class="insert-form" id="insert_form" method="post" action="">
                                <div class="input-field">
                                    <table class="table table-bordered" id="table_field">
                                        <tr>
                                            <th>Date</th>
                                            <th>Day</th>
                                            <th>Start Time</th>
                                            <th>Total Time (Hours)</th>
                                            <th>Add or Remove</th>
                                        </tr>
                                        <?php
                                        if(isset($_POST['save'])){
                                            $cid="null";
	$date = date('mdY');

	$r=rand(1,9999);
	$c="TS";
	$tsid=$c.$r.$date;
	$status="Pending";
	$rate="null";
                                            /*$sid=$_POST['sid'];
                                            $supporterid=$_POST['supporterid'];
                                            $supportername=$_POST['supportername'];*/
                                            $date=$_POST['date'];
                                            $day=$_POST['day'];
                                            $starttime=$_POST['starttime'];
                                            $totaltime=$_POST['totaltime'];
                                            foreach($day as $key=>$value){
                                                $save="INSERT INTO `supportertimesheet`(`tsid`, `sid`, `cid`, `day`, `deliverydate`, `starttime`, `totaltime`, `rate`, `status`) VALUES ('".$tsid."','".$sid."','".$cid."','".$value."','".$date[$key]."','".$starttime[$key]."','".$totaltime[$key]."','".$rate."','".$status."')";
                                                //echo "$save";
                                                	$query=mysqli_query($conn,$save);
                                                	
                                            }
                                            
                                        }
                                        ?>
                                        <tr>
                                            <td><input type="hidden" class="form-control" id="" name="sid[]" value="<?php echo $sid;?>" ><input type="text" class="form-control" name="date[]" placeholder="ex:2021-12-20 (YYYY-MM-DD)" required></td>
                                            <td><input type="text" class="form-control" id="" name="day[]" placeholder="ex:Sunday" required></td>
                                            <td><input type="text" class="form-control" id="" name="starttime[]" placeholder="Ex: 12:00 AM" required></td>
                                            <td><input type="text" class="form-control" id="" name="totaltime[]" placeholder="" required></td>
                                            <td><input type="button" class="form-control btn btn-warning" id="add" name="add" value="Add"></td>
                                        </tr>
                                    </table>
                                    <center>
                                        <input type="submit" class=" btn btn-success" id="save" name="save" value="Save Data">
                                        <!--<button id="btn1">Append text</button>
                                        <p id="pa1">This is a paragraph.</p>-->
                                    </center>
                                </div>
                            </form>
                            <?php
                            $date = date('Y-m-d', strtotime("+1 day"));
                            ?>
                            <!--<form method="post" action="availabilityaction.php">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <input type="hidden" class="form-control" id="" name="sid" value="<?php echo $sid;?>" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="hidden" class="form-control" id="" name="supporterid" value="<?php echo $supporterid;?>" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="hidden" class="form-control" id="" name="supportername" value="<?php echo $supportername;?>" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="">Select Date</label>
                                        
                                        <input type="text" class="form-control" id="" name="date" placeholder="ex:2021-12-20 (YYYY-MM-DD)">
                                        
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Day</label>
                                        
                                        <input type="text" class="form-control" id="" name="day" placeholder="ex:Sunday">
                                        
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">From Time</label>
                                        <input type="text" class="form-control" id="" name="fromtime" placeholder="Ex: 12:00 AM">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">To Time</label>
                                        <input type="text" class="form-control" id="" name="totime" placeholder="Ex: 12:00 AM">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 mt-2">
                                        <label for=""></label>
                                        <input type="submit" class="form-control btn btn-primary" id="" value="Submit" name="Submit">
                                    </div>
                                </div>
                           </form>-->
                        </div>
                    </div>
                    
                    
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">My Availability</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Day</th>
                                            <th>Date</th>
                                            <th>From Time</th>
                                            <th>To Time</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Day</th>
                                            <th>Date</th>
                                            <th>From Time</th>
                                            <th>To Time</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                                $sql="SELECT * FROM setavailability WHERE sid='$sid' AND supporterid='$supporterid' ORDER BY id DESC";
                                                $aid="A1234567890";
                                                //$sql="SELECT cid, id,date, clientname FROM ctoainbox WHERE aid='$aid' GROUP BY cid HAVING COUNT(cid) > 0 ORDER BY id DESC";
                                                $result=$conn->query($sql);
                                                    if($result->num_rows > 0){
                                                        while($row = $result->fetch_assoc()){
                                                            $id=$row['id'];
                                                            
                                                            echo "<tr><td style='text-align:center'>".$row['day']."</td>";
                                                            echo "<td style='text-align:center'>".$row['date']."</td>";
                                                            echo "<td style='text-align:center'>".$row['fromtime']."</td>";
                                                            echo "<td style='text-align:center'>".$row['totime']."</td></tr>";
                                                           

                                                        }

                                                    }
                                            ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                        

                    
                    

                </div>
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <!-- Bootstrap core JavaScript-->
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
<script>
</script>
</body>

</html>
<?php
}else{
   $message=" Please Login First";
        header("Location:login.php?message=".$message);
        exit(); 
}
?>