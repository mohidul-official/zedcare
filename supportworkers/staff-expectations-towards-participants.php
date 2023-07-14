<?php
session_start();
$loginid=$_SESSION['loginid'];
if($loginid==1){
    


require_once('db_connect.php');

    
$sid=$_SESSION['sid'];
$supporterid=$_SESSION['id'];
$supportername=$_SESSION['supportername'];
$profilepic=$_SESSION['profilepic'];

$start=0;
$clientsql="SELECT * FROM client";
$clientresult=$conn->query($clientsql);
$clientend=mysqli_num_rows($clientresult);

$staffrole="Carer";
$supportersql="SELECT * FROM staff WHERE role='$staffrole'";
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
            <li class="nav-item active">
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


            

            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAavailability"
                    aria-expanded="true" aria-controls="collapseAavailability">
                    <i class="fab fa-wpforms"></i>
                    <span>Aavailability</span>
                </a>
                <div id="collapseAavailability" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="add-availability.php"> Add Availability</a>
                        <a class="collapse-item " href="support-workers-availability.php">My Availability</a>
                    </div>
                </div>
            </li>

            <!--<li class="nav-item ">
                <a class="nav-link" href="support-workers.php">
                    <i class="fas fa-user-md"></i>
                    <span>Support Workers</span></a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo12staff"
                    aria-expanded="true" aria-controls="collapseTwo12staff">
                    <i class="fas fa-user-friends"></i>
                    <span>Staff</span>
                </a>
                <div id="collapseTwo12staff" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="staff-list.php">List</a>
                        <a class="collapse-item " href="staff-archived.php">Archived</a>
                        <a class="collapse-item" data-toggle="collapse" href="#staffdoc" role="button" aria-expanded="false" aria-controls="staffdoc">Document Hub</a>
                        
                            <div class="collapse" id="staffdoc">
                                <div class="card card-body" style="margin-left:10px;">
                                    <a class="collapse-item " href="staffdoc-shared.php">Shared</a>
                                    <a class="collapse-item " href="staffdoc-expired.php">Expired</a>
                                </div>
                            </div>
                        
                        
                        <a class="collapse-item " href="staff-new.php">New</a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo12client"
                    aria-expanded="true" aria-controls="collapseTwo12client">
                    <i class="fas fa-user-friends"></i>
                    <span>Client</span>
                </a>
                <div id="collapseTwo12client" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="client-list.php">List</a>
                        <a class="collapse-item " href="client-archived.php">Archived</a>
                       
                        
                        
                        <a class="collapse-item " href="clent-expried-doc.php">Expired Documents</a>
                        <a class="collapse-item " href="client-new.php">New</a>
                    </div>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="participants.php">
                    <i class="fas fa-user-friends"></i>
                    <span>Participants </span></a>
            </li>


            

            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo12"
                    aria-expanded="true" aria-controls="collapseTwo12">
                    <i class="fab fa-wpforms"></i>
                    <span>Forms</span>
                </a>
                <div id="collapseTwo12" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="your-forms.php">Your's Forms</a>
                        <a class="collapse-item " href="client-forms.php">Client's Forms</a>
                        <a class="collapse-item " href="upload-forms.php">Forms Upload</a>
                        <a class="collapse-item " href="find-forms.php">Find Client's Forms</a>
                    </div>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="contract-invoice.php">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>Contract/Invoice</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="clients-care-plan.php">
                    <i class="fas fa-file-invoice"></i>
                    <span>Clients Care Plan</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1"
                    aria-expanded="true" aria-controls="collapseTwo1">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Inbox</span>
                </a>
                <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="chat-with-client.php">Chat With Client</a>
                        <a class="collapse-item" href="chat-with-supporter.php">Chat With Supporter</a>
                    </div>
                </div>
            </li>-->
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Staff Expectations Towards Participants</h1>
                        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- DataTales Example-->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Staff Expectations Towards Participants</h6>
                                </div>
                                <div class="card-body">
                                    
                                    
                                    <p><b><u>Individual Client Plans</u></b></p>
                                    
                                        <ul>
                                            <li>During your induction meeting you will be given a copy of your client’s Care Plan as well as Behavioural Plan. Please read through these carefully as these plans will provide you with an insight of the client as well as provide you goals to work towards during your shift.</li>
                                            <li>You are required to leave detailed notes in relation to the goals you were working on and how the client responded to these goals. You may wish to anything else which you may think is relevant. Please ensure these notes are completed by the end of the week. </li>
                                            <li>On the fridge located in the kitchen are meal plans for each individual client. It is your responsibility to follow these meal plans. Do not alter the food as this may agitate some clients or cause an allergic reaction. Please also note down the time the meal was given on the form on the fridge. </li>
                                            <li>If you or your client has an accident/incident during your shift, please make you fill in the Accident/Incident form in as much detail and as soon as possible. If you require assistance with this please call the Operational Manager. </li>
                                        </ul>
                                        <p>These forms are located at the Innovative Centre in the Office.</p>
                                        
                                    <p><b><u>Weekly Schedule</u></b></p>
                                        <ul>
                                            <li>Please ensure you familiarise yourself with the Weekly Schedule. The Weekly Schedule outlines activities and experiences our clients will be participating in throughout the week. Familiarising yourself with this schedule will ensure our clients don’t miss out on any important planned activities.</li>
                                        </ul>
                                    <p><b><u>Administration of Medication</u></b></p>
                                    <ul>
                                        <li>If you are required to administer medication make sure the Client/Guardian signs the Consent Form. These forms are located in the Office.</li>
                                    </ul>
                                    <p>Once you have administered the medication you <b>MUST</b> note the following details:</p>
                                    <ul>
                                        <li><b>Name of medication</b></li>
                                        <li><b>Dosage given</b></li>
                                        <li><b>Time medication was administered</b></li>
                                        <li><b>Your name and signature</b></li>
                                    </ul>
                                    <p><b><u>Confidentiality</u></b></p>
                                    <ul>
                                        <li>All our staff are required to maintain confidentiality at all times. You need to respect the privacy of all our clients and therefore our any information regarding our clients is <b>not</b> to be discussed with the wider community or within themselves.</li>
                                    </ul>
                                    <a href="index.php" class="btn btn-primary mt-3">Back To Dashboard</a>
                                



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
                        <span>Copyright &copy; ZedCare 2021</span>
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
<?php
}else{
   $message=" Please Login First";
        header("Location:login.php?message=".$message);
        exit(); 
}
?>
