<?php

require_once('db_connect.php');

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
            <li class="nav-item ">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!--<li class="nav-item ">
                <a class="nav-link" href="support-workers.php">
                    <i class="fas fa-user-md"></i>
                    <span>Support Workers</span></a>
            </li>-->
            
            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSupportertimesheet"
                    aria-expanded="true" aria-controls="collapseSupportertimesheet">
                    <i class="fas fa-user-md"></i>
                    <span>Support Workers</span>
                </a>
                <div id="collapseSupportertimesheet" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="support-workers-list.php">List</a>
                        <a class="collapse-item " href="support-workers-forms.php">Forms</a>
                        <a class="collapse-item" data-toggle="collapse" href="#supportertimesheet" role="button" aria-expanded="false" aria-controls="supportertimesheet">Timesheet</a>
                        
                            <div class="collapse" id="supportertimesheet">
                                <div class="card card-body" style="margin-left:10px;">
                                    <a class="collapse-item " href="supporter-pending-timesheet.php">Pending</a>
                                    <a class="collapse-item " href="supporter-approved-timesheet.php">Approved</a>
                                    <a class="collapse-item " href="supporter-declined-timesheet.php">Declined</a>
                                </div>
                            </div>
                        
                        
                        <a class="collapse-item " href="supporter-availability.php">Availability</a>
                        
                        
                        <a class="collapse-item " href="supporter-new.php">New</a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo12staff"
                    aria-expanded="true" aria-controls="collapseTwo12staff">
                    <i class="fas fa-user-friends"></i>
                    <span>Staff</span>
                </a>
                <div id="collapseTwo12staff" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="staff-list.php">List</a>
                        <a class="collapse-item active" href="staff-archived.php">Archived</a>
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
                        <!--<a class="collapse-item" data-toggle="collapse" href="#staffdoc" role="button" aria-expanded="false" aria-controls="staffdoc">Document Hub</a>
                        
                            <div class="collapse" id="staffdoc">
                                <div class="card card-body" style="margin-left:10px;">
                                    <a class="collapse-item " href="staffdoc-shared.php">Shared</a>
                                    <a class="collapse-item " href="staffdoc-expired.php">Expired</a>
                                </div>
                            </div>-->
                        
                        
                        <a class="collapse-item " href="clent-expried-doc.php">Expired Documents</a>
                        <a class="collapse-item " href="client-new.php">New</a>
                    </div>
                </div>
            </li>

            <!--<li class="nav-item ">
                <a class="nav-link" href="participants.php">
                    <i class="fas fa-user-friends"></i>
                    <span>Participants </span></a>
            </li>-->


            

            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseParticipants"
                    aria-expanded="true" aria-controls="collapseParticipants">
                    <i class="fab fa-wpforms"></i>
                    <span>Participants</span>
                </a>
                <div id="collapseParticipants" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="participants-list.php">List</a>
                        <a class="collapse-item " href="upload-participants.php"> Upload</a>
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
                        <a class="collapse-item " href="your-forms.php">Your's Forms</a>
                        <a class="collapse-item" href="your-forms-iframe.php">Your's Forms (One Drive)</a>
                        <a class="collapse-item " href="upload-forms.php"> Upload Forms</a>
                        <a class="collapse-item " href="upload-forms-iframe.php">Upload Forms (One Drive)</a>
                        <a class="collapse-item " href="client-forms.php">Client's Forms</a>
                        <a class="collapse-item " href="employee-forms.php">Employee's Forms</a>
                        <!--<a class="collapse-item " href="find-forms.php">Find Client's Forms</a>-->
                    </div>
                </div>
            </li>

            <!--<li class="nav-item ">
                <a class="nav-link" href="contract-invoice.php">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>Contract/</span></a>
            </li>-->


            

            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInvoice"
                    aria-expanded="true" aria-controls="collapseInvoice">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>ZedCare Invoice</span>
                </a>
                <div id="collapseInvoice" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="zedcare-invoice.php">List</a>
                        <a class="collapse-item " href="upload-zedcare-invoice.php"> Upload</a>
                    </div>
                </div>
            </li>

            <!--<li class="nav-item ">
                <a class="nav-link" href="clients-care-plan.php">
                    <i class="fas fa-file-invoice"></i>
                    <span>Clients Care Plan</span></a>
            </li>-->


            

            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCarePlan"
                    aria-expanded="true" aria-controls="collapseCarePlan">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>Clients Care Plan</span>
                </a>
                <div id="collapseCarePlan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="care-plan-list.php">List</a>
                        <a class="collapse-item " href="upload-care-plan.php"> Upload</a>
                    </div>
                </div>
            </li>
            
            <!--<li class="nav-item ">
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

            

            <!--<li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Time Sheet</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="approved-timesheet.php">Approved Timesheet</a>
                        <a class="collapse-item" href="pending-timesheet.php">Pending Timesheet</a>
                        <a class="collapse-item" href="declined-timesheet.php">Declined Timesheet</a>
                    </div>
                </div>
            </li>-->

            <li class="nav-item ">
                <a class="nav-link" href="employee.php">
                    <i class="fas fa-users"></i>
                    <span>Employee</span></a>
            </li>

            <!--<li class="nav-item ">
                <a class="nav-link" href="service-agreement.php">
                    <i class="fas fa-handshake"></i>
                    <span>Service & Agreement</span></a>
            </li>-->


            

            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAgreement"
                    aria-expanded="true" aria-controls="collapseAgreement">
                    <i class="fas fa-handshake"></i>
                    <span>Service & Agreement</span>
                </a>
                <div id="collapseAgreement" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="service-agreement-list.php">List</a>
                        <a class="collapse-item " href="upload-service-agreement.php"> Upload</a>
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

                        

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
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
                    <h1 class="h3 mb-2 text-gray-800">Archived Staff</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Archived Staffs</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                                $archived="Yes";
                                                $sql="SELECT * FROM staff WHERE archived='$archived' ORDER BY id DESC";
                                               
                                                $result=$conn->query($sql);
                                                    if($result->num_rows > 0){
                                                        while($row = $result->fetch_assoc()){
                                                            $id=$row['id'];
                                                            $prename=$row['prename'];
                                                            $name=$row['name'];
                                                            $fullname=$prename." ".$name;
                                                            
                                                            echo "<tr><td>".$fullname."</td>";
                                                            echo "<td>".$row['role']."</td>";
                                                            echo "<td>".$row['email']."</td>";
                                                            echo "<td>".$row['mobile']."</td>";
                                                            echo "<td>".$row['address']."</td>";
                                                            echo "<td style='text-align: center;'>";
                                            ?>
                                                            <a class="btn btn-primary" href="staff-unarchive.php?id=<?php echo "$id" ;?>"  >Unarchive</a>

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

</body>

</html>