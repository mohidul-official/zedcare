<?php

require_once('db_connect.php');
$start=0;
$clientsql="SELECT * FROM client";
$clientresult=$conn->query($clientsql);
$clientend=mysqli_num_rows($clientresult);

$supportersql="SELECT * FROM supporter";
$supporterresult=$conn->query($supportersql);
$supporterend=mysqli_num_rows($supporterresult);

$jobsql="SELECT * FROM jobs";
$jobresult=$conn->query($jobsql);
$jobend=mysqli_num_rows($jobresult);
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                    </div>

                    <!-- Content Row
                    <div class="row">

                       
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                TOTAL SUPPORT WORKERS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$supporterend"; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                TOTAL CLIENTS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$clientend"; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                TOTAL JOBS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$jobend"; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Content Row -->
                    <?php
                    if($role=="1Manager"){
                        
                    ?>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">RESENT SUPPORT WORKERS</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="mytable">
                                        <tr>
                                            <th>Supporter Id</th>
                                            <th>Supporter Name</th>
                                            <th>Location</th>
                                            <th>View</th>
                                        </tr>
                                         <?php
                                                $sql="SELECT * FROM supporter ORDER BY id DESC LIMIT 4";
                                                $aid="A1234567890";
                                                //$sql="SELECT cid, id,date, clientname FROM ctoainbox WHERE aid='$aid' GROUP BY cid HAVING COUNT(cid) > 0 ORDER BY id DESC";
                                                $result=$conn->query($sql);
                                                    if($result->num_rows > 0){
                                                        while($row = $result->fetch_assoc()){
                                                            $id=$row['id'];
                                                            $sid=$row['sid'];
                                                            $first_name=$row['first_name'];
                                                            $last_name=$row['last_name'];
                                                            $suburb=$row['suburb'];
                                                            $state=$row['state'];
                                                            $postcode=$row['postcode'];
                                                            $gender=$row['gender'];
                                                            $location=$suburb.", ".$state.", ".$postcode;
                                                            $supportername=$first_name." ".$last_name;
                                                            echo "<tr><td>".$row['sid']."</td>";
                                                            echo "<td>".$supportername."</td>";
                                                            echo "<td>".$location."</td>";
                                                            echo "<td style='text-align: center;'>";
                                            ?>
                                                            <a class="btn btn-primary" href="view-supporter.php?id=<?php echo "$id" ;?>&sid=<?php echo "$sid" ;?>&supportername=<?php echo "$supportername" ;?>"  target="_blank"><i class="fas fa-search-plus"></i></a>

                                            <?php
                                                            echo "</td>";
                    
                                                            echo "</tr>";

                                                        }

                                                    }
                                            ?>
                                    </table>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4 mt-4"><a href="" class="form-control btn btn-primary">View All</a></div>
                                        <div class="col-md-4"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">RESENT CLIENTS</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="mytable">
                                        <tr>
                                            <th>Client Id</th>
                                            <th>Client Name</th>
                                            <th>Location</th>
                                            <th>View</th>
                                        </tr>
                                        <?php
                                                $sql="SELECT * FROM client ORDER BY id DESC LIMIT 4";
                                                $aid="A1234567890";
                                                //$sql="SELECT cid, id,date, clientname FROM ctoainbox WHERE aid='$aid' GROUP BY cid HAVING COUNT(cid) > 0 ORDER BY id DESC";
                                                $result=$conn->query($sql);
                                                    if($result->num_rows > 0){
                                                        while($row = $result->fetch_assoc()){
                                                            $id=$row['id'];
                                                            $cid=$row['cid'];
                                                            $clientfname=$row['clientfname'];
                                                            $clientlname=$row['clientlname'];
                                                            $suburb=$row['suburb'];
                                                            $state=$row['state'];
                                                            $postcode=$row['postcode'];
                                                            $gender=$row['gender'];
                                                            $location=$suburb.", ".$state.", ".$postcode;
                                                            $clientname=$clientfname." ".$clientlname;

                                                            echo "<tr><td>".$row['cid']."</td>";
                                                            echo "<td>".$clientname."</td>";
                                                            echo "<td>".$location."</td>";
                                                            echo "<td style='text-align: center;'>";
                                            ?>
                                                            <a class="btn btn-primary" href="#"><i class="fas fa-search-plus"></i></a>

                                            <?php
                                                            echo "</td>";
                    
                                                            echo "</tr>";

                                                        }

                                                    }
                                            ?>
                                        
                                    </table>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4 mt-4"><a href="" class="form-control btn btn-primary">View All</a></div>
                                        <div class="col-md-4"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">RESENT JOBS</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="mytable">
                                        <tr>
                                            <th>Job Id</th>
                                            <th>Job Title</th>
                                            <th>Location</th>
                                            <th>View</th>
                                        </tr>

                                        <?php
                                                $sql="SELECT * FROM jobs ORDER BY id DESC LIMIT 4";
                                                $aid="A1234567890";
                                                //$sql="SELECT cid, id,date, clientname FROM ctoainbox WHERE aid='$aid' GROUP BY cid HAVING COUNT(cid) > 0 ORDER BY id DESC";
                                                $result=$conn->query($sql);
                                                    if($result->num_rows > 0){
                                                        while($row = $result->fetch_assoc()){
                                                            $id=$row['id'];
                                                            $suburb=$row['suburb'];
                                                            $state=$row['state'];
                                                            $postcode=$row['postcode'];
                                                            $location=$suburb.", ".$state.", ".$postcode;

                                                            echo "<tr><td>".$row['jid']."</td>";
                                                            echo "<td>".$row['jobtitle']."</td>";
                                                            echo "<td>".$location."</td>";
                                                            echo "<td style='text-align: center;'>";
                                            ?>
                                                            <a class="btn btn-primary" href="#"><i class="fas fa-search-plus"></i></a>

                                            <?php
                                                            echo "</td>";
                    
                                                            echo "</tr>";

                                                        }

                                                    }
                                            ?>
                                    </table>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4 mt-4"><a href="" class="form-control btn btn-primary">View All</a></div>
                                        <div class="col-md-4"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    }
                    
                    ?>

                    <!-- Content Row -->
                    <?php
                    if($role=="1Editor"){
                        
                    ?>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">CHAT WITH SUPPORT WORKERS</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="mytable">
                                        <tr>
                                            <th>Supporter Id</th>
                                            <th>Supporter Name</th>
                                            <th>Date</th>
                                            <th>View</th>
                                        </tr>
                                         <?php
                                                
                                                
                                                $aid="A1234567890";
                                                $sql="SELECT sid, id,date, supportername FROM stoainbox WHERE aid='$aid' GROUP BY sid HAVING COUNT(sid) > 0 ORDER BY id DESC LIMIT 4";
                                                $result=$conn->query($sql);
                                                    if($result->num_rows > 0){
                                                        while($row = $result->fetch_assoc()){
                                                            $id=$row['id'];
                                                            $sid=$row['sid'];
                                                            $supportername=$row['supportername'];
                                                            echo "<tr><td>".$row['sid']."</td>";
                                                            echo "<td>".$row['supportername']."</td>";
                                                            echo "<td>".$row['date']."</td>";
                                                            echo "<td style='text-align: center;'>";
                                            ?>
                                                            <a class="btn btn-primary" href="reply-message.php?id=<?php echo $id;?>&aid=<?php echo $aid;?>&supportername=<?php echo $supportername;?>&sid=<?php echo $sid;?>" target="_blank"><i class="fas fa-comment-dots"></i></a>

                                            <?php
                                                            echo "</td>";
                    
                                                            echo "</tr>";

                                                        }

                                                    }
                                            ?>
                                    </table>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4 mt-4"><a href="chat-with-supporter.php" class="form-control btn btn-primary">View All</a></div>
                                        <div class="col-md-4"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">CHAT WITH  CLIENTS</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="mytable">
                                        <tr>
                                            <th>Client Id</th>
                                            <th>Client Name</th>
                                            <th>Date</th>
                                            <th>View</th>
                                        </tr>
                                        
                                         <?php
                                                
                                                
                                                $aid="A1234567890";
                                                $sql="SELECT cid, id,date, clientname FROM ctoainbox WHERE aid='$aid' GROUP BY cid HAVING COUNT(cid) > 0 ORDER BY id DESC LIMIT 4";
                                                $result=$conn->query($sql);
                                                    if($result->num_rows > 0){
                                                        while($row = $result->fetch_assoc()){
                                                            $id=$row['id'];
                                                            $cid=$row['cid'];
                                                            $clientname=$row['clientname'];
                                                            echo "<tr><td>".$row['cid']."</td>";
                                                            echo "<td>".$row['clientname']."</td>";
                                                            echo "<td>".$row['date']."</td>";
                                                            echo "<td style='text-align: center;'>";
                                            ?>
                                                            <a class="btn btn-primary" href="reply-message.php?id=<?php echo $id;?>&aid=<?php echo $aid;?>&clientname=<?php echo $clientname;?>&cid=<?php echo $cid;?>" target="_blank"><i class="fas fa-comment-dots"></i></a>

                                            <?php
                                                            echo "</td>";
                    
                                                            echo "</tr>";

                                                        }

                                                    }
                                            ?>
                                        
                                    </table>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4 mt-4"><a href="chat-with-client.php" class="form-control btn btn-primary">View All</a></div>
                                        <div class="col-md-4"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <?php
                    }
                    
                    ?>

                    

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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>