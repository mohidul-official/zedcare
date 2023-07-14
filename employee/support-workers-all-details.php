<?php
session_start();
/*$adminloginid=$_SESSION['adminloginid'];
if($adminloginid==1){*/
    
require_once('db_connect.php');
$supporterid=$_GET['supporterid'];
$sid=$_GET['sid'];
$sql="SELECT * FROM supportworker WHERE id='$supporterid' AND sid='$sid' ORDER BY id DESC";
$result=$conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $id=$row['id'];
        $sid=$row['sid'];
        $status=$row['status'];
        $statuss=$row['status'];
        if($status==1){
            $status="Active";
        }else{
            $status="Inactive";
        }
        $prename=$row['prename'];
        $name=$row['name'];
        $fullname=$prename." ".$name;
        $address=$row['address'];
        }
}

    
/*$aid=$_SESSION['aid'];
$username=$_SESSION['username'];
$dp=$_SESSION['dp'];*/

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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('navbar.php'); ?>
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
                    <?php include('topbar.php'); ?>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Support Worker Name: <?php echo $fullname;?> & Support Worker ID: <?php echo $sid;?></h1>
                   

                    <!-- DataTales Example -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pending Timesheet</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTableone" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Delivery Day</th>
                                                    <th>Delivery Date</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Total Time</th>
                                                    <th></th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Delivery Day</th>
                                                    <th>Delivery Date</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Total Time</th>
                                                    <th></th>
                                                    <th>Action</th>
                                                </tr>
                                                
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                     $d="Pending";
                                                     $sql="SELECT * FROM supportertimesheet WHERE status='$d' AND sid='$sid' ORDER BY deliverydate DESC";
                                                     $result=$conn->query($sql);
                                                     if($result->num_rows > 0){
                                                         while($row = $result->fetch_assoc()){
                                                             $id=$row['id'];
                                                             $sid=$row['sid'];
                                                             $totaltime=$row['totaltime'];
                                                             $starttime=$row['starttime'];
                                                            $startampm=$row['startampm'];
                                                            $starttime1=$starttime." ".$startampm;
                                                            $endtime=$row['endtime'];
                                                            $endampm=$row['endampm'];
                                                            
                                                            $endtime1=$endtime." ".$endampm;
                                                            echo "<tr><td>".$row['day']."</td>";
                                                            echo "<td>".$row['deliverydate']."</td>";
                                                            echo "<td>".$starttime1."</td>";
                                                            echo "<td>".$endtime1."</td>";
                                                            echo "<td>".$row['totaltime']."</td>";
                                                            echo "<td>".$row['weekly']."</td>";
                                                            echo "<td style='text-align: center;'>"
                                            ?>
                                                            <a class="btn btn-primary mb-1" href="supporter-approvestatus-timesheet.php?id=<?php echo "$id"?>" >Approve</a>
                                                            <a href="supporter-change-declinestatus-timesheet.php?id=<?php echo "$id"?>"  class="btn btn-danger"  >Decline</i></a>
                                
                                

                                            <?php
                                                            echo "</td>";
                    
                                                            echo "</tr>";
                                                         }
                                                     }
                                                     
                                                ?>
                                            </tbody>
                                            
                                        </table>
                                            
                                        
                                    </div>
                                </div>
                                
                            </div>
                                
                            
                        </div>
                        <div class="col-sm-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Declined Timesheet</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Delivery Day</th>
                                                    <th>Delivery Date</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Total Time</th>
                                                    <th></th>
                                                    <th>Declined Cause</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Delivery Day</th>
                                                    <th>Delivery Date</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Total Time</th>
                                                    <th></th>
                                                    <th>Declined Cause</th>
                                                </tr>
                                                
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                     $d="Declined";
                                                     $sql="SELECT * FROM supportertimesheet WHERE status='$d' AND sid='$sid' ORDER BY deliverydate DESC";
                                                     $result=$conn->query($sql);
                                                     if($result->num_rows > 0){
                                                         while($row = $result->fetch_assoc()){
                                                             $id=$row['id'];
                                                             $sid=$row['sid'];
                                                             $totaltime=$row['totaltime'];
                                                             $starttime=$row['starttime'];
                                                            $startampm=$row['startampm'];
                                                            $starttime1=$starttime." ".$startampm;
                                                            $endtime=$row['endtime'];
                                                            $endampm=$row['endampm'];
                                                            
                                                            $endtime1=$endtime." ".$endampm;
                                                            echo "<tr><td>".$row['day']."</td>";
                                                            echo "<td>".$row['deliverydate']."</td>";
                                                            echo "<td>".$starttime1."</td>";
                                                            echo "<td>".$endtime1."</td>";
                                                            echo "<td>".$row['totaltime']."</td>";
                                                            echo "<td>".$row['weekly']."</td>";
                                                            echo "<td>".$row['declinecause']."</td></tr>";
                                                            
                                                         }
                                                     }
                                                     
                                                ?>
                                            </tbody>
                                            
                                        </table>
                                            
                                        
                                    </div>
                                </div>
                                
                            </div>
                                
                            
                        </div>
                        
                    </div>
                    
                    
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Approved Timesheet</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Delivery Day</th>
                                                    <th>Delivery Date</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Total Time</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Delivery Day</th>
                                                    <th>Delivery Date</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Total Time</th>
                                                    <th></th>
                                                </tr>
                                                
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                     $d="Approved";
                                                     $sql="SELECT * FROM supportertimesheet WHERE status='$d' AND sid='$sid' ORDER BY deliverydate DESC";
                                                     $result=$conn->query($sql);
                                                     if($result->num_rows > 0){
                                                         while($row = $result->fetch_assoc()){
                                                             $id=$row['id'];
                                                             $sid=$row['sid'];
                                                             $totaltime=$row['totaltime'];
                                                             $starttime=$row['starttime'];
                                                            $startampm=$row['startampm'];
                                                            $starttime1=$starttime." ".$startampm;
                                                            $endtime=$row['endtime'];
                                                            $endampm=$row['endampm'];
                                                            
                                                            $endtime1=$endtime." ".$endampm;
                                                            echo "<tr><td>".$row['day']."</td>";
                                                            echo "<td>".$row['deliverydate']."</td>";
                                                            echo "<td>".$starttime1."</td>";
                                                            echo "<td>".$endtime1."</td>";
                                                            echo "<td>".$row['totaltime']."</td>";
                                                            
                                                            echo "<td>".$row['weekly']."</td></tr>";
                                                            
                                                         }
                                                     }
                                                     
                                                ?>
                                            </tbody>
                                            
                                        </table>
                                            
                                        
                                    </div>
                                </div>
                                
                            </div>
                                
                            
                        </div>
                        <div class="col-sm-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Uploaded Timesheet</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable4" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>File Name</th>
                                                    <th>Upload Date</th>
                                                    <th>Download</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>File Name</th>
                                                    <th>Upload Date</th>
                                                    <th>Download</th>
                                                </tr>
                                                
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                     $d="Declined";
                                                     $sql="SELECT * FROM timesheetfile WHERE sid='$sid' ORDER BY id DESC";
                                                     $result=$conn->query($sql);
                                                     if($result->num_rows > 0){
                                                         while($row = $result->fetch_assoc()){
                                                             $id=$row['id'];
                                                             $sid=$row['sid'];
                                                            $file=$row['file'];
                                                             
                                                            echo "<tr><td>".$row['timesheetname']."</td>";
                                                            echo "<td>".$row['date']."</td>";
                                                            echo "<td>";
                                                        
                                            ?>
                                                            <a class="btn btn-primary" href="https://www.zedcare.com.au/zedcare/supportworkers/<?php echo "$file"?>" class="btn btn-primary" target="_blank">Download</a>

                                            <?php
                                                            echo "</td>";
                    
                                                            echo "</tr>";
                                                            
                                                         }
                                                     }
                                                     
                                                ?>
                                            </tbody>
                                            
                                        </table>
                                            
                                        
                                    </div>
                                </div>
                                
                            </div>
                                
                            
                        </div>
                        
                    </div>
                    
                    
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">All Doc</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable5" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Form Name</th>
                                                    <th>ID</th>
                                                    <th>Upload Date</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Form Name</th>
                                                    <th>ID</th>
                                                    <th>Upload Date</th>
                                                    <th>View</th>
                                                </tr>
                                                
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                     
                                                     $sql="SELECT * FROM supporterforms WHERE sid='$sid' ORDER BY id DESC";
                                                     $result=$conn->query($sql);
                                                     if($result->num_rows > 0){
                                                         while($row = $result->fetch_assoc()){
                                                             $id=$row['id'];
                                                            $formid=$row['formid'];
                                                            $file=$row['file'];
                                                            $name=$row['formname'];
                                                            echo "<tr><td style='text-align: left;'>".$name."</td>";
                                                            echo "<td>".$row['formid']."</td>";
                                                            echo "<td>".$row['date']."</td>";
                                                            echo "<td style='text-align: center;'>";
                                            ?>
                                                            <a class="btn btn-primary" href="https://www.zedcare.com.au/zedcare/supportworkers/<?php echo "$file" ;?>"  target="_blank" title="Download"><i class="fas fa-search-plus"></i></a>

                                            <?php
                    
                                                            echo "</td>";
                    
                                                            echo "</tr>";
                                                            
                                                         }
                                                     }
                                                     
                                                ?>
                                            </tbody>
                                            
                                        </table>
                                            
                                        
                                    </div>
                                </div>
                                
                            </div>
                                
                            
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        <div class="col-sm-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Availability</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable6" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Day</th>
                                                    <th>From Time</th>
                                                    <th>To Time</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Day</th>
                                                    <th>From Time</th>
                                                    <th>To Time</th>
                                                </tr>
                                                
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                     
                                                     $sql="SELECT * FROM setavailability WHERE sid='$sid' ORDER BY id DESC";
                                                     $result=$conn->query($sql);
                                                     if($result->num_rows > 0){
                                                         while($row = $result->fetch_assoc()){
                                                             $id=$row['id'];$fromtime=$row['fromtime'];
                                                            $fromampm=$row['fromampm'];
                                                            $fromtime1=$fromtime." ".$fromampm;
                                                            $totime=$row['totime'];
                                                            $toampm=$row['toampm'];
                                                            
                                                            $totime1=$totime." ".$toampm;
                                                            
                                                            echo "<tr><td style='text-align: left;'>".$row['date']."</td>";
                                                            echo "<td>".$row['day']."</td>";
                                                            echo "<td>".$fromtime1."</td>";
                                                            echo "<td>".$totime1."</td></tr>";
                                                          
                                                            
                                                         }
                                                     }
                                                     
                                                ?>
                                            </tbody>
                                            
                                        </table>
                                            
                                        
                                    </div><a class="mb-2 mt-3 btn btn-primary" href="support-workers-list.php">Back To Support Workers List</a>
                                </div>
                                
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
    <script src="vendor/jquery/jquery.min.js"></script>
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
        
$(document).ready(function() {
    $('#dataTableone').dataTable( {
  "searching": false,
  "ordering": false,
  "pageLength": 7,
  "lengthMenu": [[7,10, 25, 50, -1], [7,10, 25, 50, "All"]]
} ); 
    $('#dataTable2').dataTable( {
  "searching": false,
  "ordering": false,
  "pageLength": 7,
  "lengthMenu": [[7, 10, 25, 50, -1], [7, 10, 25, 50, "All"]]
} ); 
$('#dataTable3').dataTable( {
  "searching": false,
  "ordering": false,
  "pageLength": 7,
  "lengthMenu": [[7, 10, 25, 50, -1], [7, 10, 25, 50, "All"]]
} );
$('#dataTable4').dataTable( {
  "searching": false,
  "ordering": false,
  "pageLength": 7,
  "lengthMenu": [[7, 10, 25, 50, -1], [7, 10, 25, 50, "All"]]
} );
$('#dataTable5').dataTable( {
  "searching": false,
  "ordering": false,
  "pageLength": 7,
  "lengthMenu": [[7, 10, 25, 50, -1], [7, 10, 25, 50, "All"]]
} );
$('#dataTable6').dataTable( {
  "searching": false,
  "ordering": false,
  "pageLength": 7,
  "lengthMenu": [[7, 10, 25, 50, -1], [7, 10, 25, 50, "All"]]
} );
} );
    </script>
</body>

</html>
<?php
/*}else{
   $message=" Please Login First";
        header("Location:login.php?message=".$message);
        exit(); 
}*/
?>