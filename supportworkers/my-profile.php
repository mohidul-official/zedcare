<?php

require_once('db_connect.php');

    session_start();
$sid=$_SESSION['sid'];
$supporterid=$_SESSION['id'];
$supportername=$_SESSION['supportername'];
$profilepic=$_SESSION['profilepic'];

$sql="SELECT * FROM supportworker WHERE id='$supporterid'";
$result=$conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $email= $row['email'];
    $password= $row['password'];
    $prename= $row['prename'];
    $name= $row['name'];
    $fullname=$prename." ".$name;
    $mobile= $row['mobile'];
    $phone= $row['phone'];
    $dob= $row['dob'];
    $address= $row['address'];
    $gender= $row['gender'];
}

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
                    <i class="fas fa-calendar-alt"></i>
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
                        <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
                        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                    </div>

                    <!-- Content Row -->
                    

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">My Details</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <p style="text-align:center;"><img style="width:200px; height:200px;" class="img-profile rounded-circle"
                                    src="<?php echo $profilepic;?>"></p>
                                                 <p style="text-align:center;">
                                                     <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">Change Profile Picture</button>
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Change Profile Picture</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <form action="change-dp.php" method="post" enctype="multipart/form-data">
                                                                        <div class="modal-body">
                                                                            <input type="file" class="form-control" name="file"  accept="image/*">
                                                                            <input type="hidden" class="form-control" name="id" value="<?php echo $supporterid;?>">
                                                                            <input type="hidden" class="form-control" name="sid" value="<?php echo $sid;?>">
                                                        
                                                    
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <input type="submit" class="btn btn-primary" value="Upload" name="updatedp">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                 
                                                 
                                                 </p>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Id</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="name" class="form-control" id="" placeholder="" value="<?php echo $sid;?>" readonly>
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Name</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="name" class="form-control" id="" placeholder="" value="<?php echo $fullname;?>" readonly>
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Mobile</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="name" class="form-control" id="" placeholder="" value="<?php echo $mobile;?>" readonly>
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Phone</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="name" class="form-control" id="" placeholder="" value="<?php echo $phone;?>" readonly>
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Address</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="name" class="form-control" id="" placeholder="" value="<?php echo $address;?>" readonly>
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Date Of Birth</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="name" class="form-control" id="" placeholder="" value="<?php echo $dob;?>" readonly>
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Gender</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="name" class="form-control" id="" placeholder="" value="<?php echo $gender;?>" readonly>
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Email</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="name" class="form-control" id="" placeholder="" value="<?php echo $email;?>" readonly>
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Password</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="name" class="form-control" id="" placeholder="" value="<?php echo $password;?>" readonly>
                                                
                                            </div>
                                        </div>
                                    </form>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            
                                        </div>
                                        <div class="col-md-4">
                                                 <p style="text-align:center;">
                                                     <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal2">Change Details & Password</button>
                                                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Change Details & Password</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <form action="change-my-profile.php" method="post" enctype="multipart/form-data">
                                                                        <div class="modal-body">
                                                                         
                                                                         <div class="form-row">
                                            
                                        </div><div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for=""><b>Title</b></label>
                                                <select id="" class="form-control" name="prename">
                                            <option value="<?php echo $prename;?>"><?php echo $prename;?></option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Doctor">Doctor</option>
                                            <option value="Them">Them</option>
                                            <option value="They">They</option>
                                        </select>
      
                                            </div>
                                            <div class="form-group col-md-9">
                                                <label for=""><b>Name</b></label>
                                                <input type="text" name="name" class="form-control" id="" placeholder="" value="<?php echo $name;?>">
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Mobile</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="mobile" class="form-control" id="" placeholder="" value="<?php echo $mobile;?>" >
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Phone</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="phone" class="form-control" id="" placeholder="" value="<?php echo $phone;?>" >
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Address</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="address" class="form-control" id="" placeholder="" value="<?php echo $address;?>">
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Date Of Birth</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="date" name="dob" class="form-control" id="" placeholder="" value="<?php echo $dob;?>">
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Gender</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="gender" class="form-control" id="" placeholder="" value="<?php echo $gender;?>">
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Email</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="email" name="email" class="form-control" id="" placeholder="" value="<?php echo $email;?>">
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for=""><b>Password</b></label>
      
                                            </div>
                                            <div class="form-group col-md-10">
                                                <input type="text" name="password" class="form-control" id="" placeholder="" value="<?php echo $password;?>">
                                                
                                            </div>
                                        </div>   
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $supporterid;?>">
                                                                            <input type="hidden" class="form-control" name="sid" value="<?php echo $sid;?>">
                                                            
                                                        
                                                    
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <input type="submit" class="btn btn-primary" value="Update" name="updatedetails">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                 
                                                 
                                                 </p>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Area Chart -->

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

</body>

</html>