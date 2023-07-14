<?php

require_once('db_connect.php');
$id=$_GET['id'];
$sql="SELECT * FROM clients WHERE id='$id'";
$result=$conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $id=$row['id'];
        $prename=$row['prename'];
        $firstname=$row['firstname'];
        $middlename=$row['middlename'];
        $lastname=$row['lastname'];
        $fullname=$prename." ".$firstname." ".$middlename." ".$lastname;
        $mobile=$row['mobile'];
        $phone=$row['phone'];
        $email=$row['email'];
        $gender=$row['gender'];
        $dob=$row['dob'];
        $religion=$row['religion'];
        $maritalstatus=$row['maritalstatus'];
        $nationality=$row['nationality'];
        $languagespoken=$row['languagespoken'];
        $address=$row['address'];
        $clientprofile=$row[clientprofile];
        $ndia=$row['ndia'];
        $agecarerecipientid=$row['agecarerecipientid'];
        $pricebook=$row['pricebook'];
        $clienttype=$row['clienttype'];
        $refnum=$row['refnum'];
        $ponum=$row['ponum'];
        $shareprogressnotes=$row['shareprogressnotes'];
        $privateinfo=$row['privateinfo'];
        $publicinfo=$row['publicinfo'];
        $notifyattendance=$row['notifyattendance'];
        $availablerostering=$row['availablerostering'];
        $noaccess=$row['noaccess'];
        $kinname=$row['kinname'];
        $kinrelation=$row['kinrelation'];
        $kincontact=$row['kincontact'];
        $kinemail=$row['kinemail'];
        $paygroup=$row['paygroup'];
        $allowances=$row['allowances'];
        $dailyhours=$row['dailyhours'];
        $weeklyhours=$row['weeklyhours'];
        $externalsystemidentifier=$row['externalsystemidentifier'];
        $privateinfo=$row['privateinfo'];
        $archived=$row['archived'];
        $y="Yes";
        $n="No";
        
        if($archived==$y){
            $archivestatus="Unarchive";
        }else{
            
            $archivestatus="Archive";
        }
    }
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
    <style>
        .img-thumbnail {
    padding: 4px;
    line-height: 1.42857143;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-radius: 4px;
    -webkit-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    display: inline-block;
    max-width: 100%;
    height: auto;
}
.el-tag {
    background-color: #ecf5ff;
    display: inline-block;
    height: 32px;
    padding: 0 10px;
    line-height: 30px;
    font-size: 12px;
    color: #409eff;
    border: 1px solid #d9ecff;
    border-radius: 4px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    white-space: nowrap;
}
.el-tag.el-tag-warning {
    background-color: #fdf6ec;
    border-color: #faecd8;
    color: #e6a23c;
}
    </style>

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
            
            <li class="nav-item active">
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
            </li>

            <li class="nav-item ">
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
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="employee.php">
                    <i class="fas fa-users"></i>
                    <span>Employee</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="service-agreement.php">
                    <i class="fas fa-handshake"></i>
                    <span>Service & Agreement</span></a>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo "$fullname";?>'s Details</h1>
                        <!--<a href="staff-new.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>-->
                    </div>
                   

                    <!-- DataTales Example -->
                 <div class="row">
                   <div class="col-sm-8">
                         
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Demographic Detail <span style="float:right;"><a  data-toggle="collapse" href="#collapseExampleedit" role="button" aria-expanded="false" aria-controls="collapseExampleedit">Edit</a></h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                              
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-sm-3 font-weight-bold">
                                            Name:
                                        </div>
                                        <div class="col-sm-9 mb-2">
                                            <?php echo "$fullname";?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 font-weight-bold">
                                            Contact:
                                        </div>
                                        <div class="col-sm-9 mb-2">
                                            <i class="fas fa-mobile-alt"></i> <?php echo "$mobile";?>  &nbsp;<i class="fas fa-phone"></i> <?php echo "$phone";?>  &nbsp;<i class="fas fa-envelope"></i> <?php echo "$email";?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 font-weight-bold">
                                            Address:
                                        </div>
                                        <div class="col-sm-9 mb-2">
                                            <?php echo "$address";?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 font-weight-bold">
                                            Gender:
                                        </div>
                                        <div class="col-sm-9 mb-2">
                                            <?php echo "$gender";?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 font-weight-bold">
                                            DOB:
                                        </div>
                                        <div class="col-sm-9 mb-2">
                                            <?php echo "$dob";?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 font-weight-bold mb-1">
                                            Marital Status:
                                        </div>
                                        <div class="col-sm-9 mb-2">
                                            <?php echo "$maritalstatus";?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 font-weight-bold mb-1">
                                            Religion:
                                        </div>
                                        <div class="col-sm-9 mb-2">
                                            <?php echo "$religion";?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 font-weight-bold mb-1">
                                            Nationality:
                                        </div>
                                        <div class="col-sm-9 mb-2">
                                            <?php echo "$nationality";?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 font-weight-bold">
                                            Language Spoken:
                                        </div>
                                        <div class="col-sm-9 mb-2">
                                            <?php echo "$languagespoken";?>
                                        </div>
                                    </div>
                                
                                </div>
                              
                                <div class="col-sm-3">
                                    <img src="https://www.zedcare.com.au/zedcare/admin/<?php echo $clientprofile;?>" alt="staff profile picture" class="img-fluid img-thumbnail img-rectangle"><br>
                                    <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">Change Profile Picture</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Change Profile Picture</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form action="clientdpaction.php" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <input type="file" class="form-control" name="file">
                                                    <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                                                        
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-primary" value="Upload" name="updatedp">
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                          <div class="collapse mt-5" id="collapseExampleedit">
                            <div class="row">
                              
                                <div class="card-body">
                                    <form method="post" action="staffdetailseditaction.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-12"
                                            style="margin-bottom:0;"><label for="">Name</label></div>
                                            <div class="form-group col-md-4">
                                                <select id="" class="form-control" name="prename">
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Doctor">Doctor</option>
                                            <option value="Them">Them</option>
                                            <option value="They">They</option>
                                        </select>
      
                                            </div>
                                            <div class="form-group col-md-8">
                                                <input type="text" name="name" class="form-control" id="" placeholder="Enter Name" value='<?php echo "$name";?>' required>
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12"
                                            style="">
                                                <label for="">Email</label>
                                                <input type="email" name="email" class="form-control" id="" placeholder="Enter email" value='<?php echo "$email";?>' required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12"
                                            style="margin-bottom:0;">
                                                <label for="">Contact</label>
                                            </div>
                                            <div class="form-group col-md-6"
                                            style="">
                                                <input type="tel" name="mobile" class="form-control" id="" placeholder="Enter Mobile Number" value='<?php echo "$mobile";?>' required>
                                            </div>
                                            <div class="form-group col-md-6"
                                            style="">
                                                <input type="tel" name="phone" class="form-control" id="" placeholder="Enter Phone Number"  value='<?php echo "$phone";?>'>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6"
                                            style="">
                                                <label for="">Gender</label>
                                                <select id="" class="form-control" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Intersex">Intersex</option>
                                            <option value="Unspecified">Unspecified</option>
                                        </select>
                                            </div>
                                            <div class="form-group col-md-6"
                                            style="">
                                                <label for="">Date Of Birth</label>
                                                <input type="date" name="dob" class="form-control" id="" required >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6"
                                            style="">
                                                <label for="">Address</label>
                                                <input type="text" name="address" class="form-control" id="" palceholder="Enter Address"  value='<?php echo "$address";?>' required>
                                            </div>
                                            <div class="form-group col-md-6"
                                            style="">
                                                <label for="">Language Spoken</label>
                                                <input type="text" name="languagespoken" class="form-control" id="" palceholder="Language Spoken"  value='<?php echo "$languagespoken";?>' required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-4"
                                            style="">
                                                <input type="hidden" value='<?php echo "$id";?>' name="id">
                                                <input type="submit" class="btn btn-success form-control" value="Update">
                                                
                                            </div>
                                            <div class="form-group col-md-4"
                                            style="">
                                                
                                            </div>
                                            <div class="form-group col-md-4"
                                            style="">
                                                <button class="btn btn-danger form-control" type="button" data-toggle="collapse" data-target="#collapseExampleedit" aria-expanded="false" aria-controls="collapseExampleedit">Cancle</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                          </div>
                            
                            
                          
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Funds<span style="float:right;"><a href="#">VIEW BILLING</a> &nbsp;&nbsp;<a href="#">ADD FUND</a></span></h6>
                        </div>
                        <div class="card-body">
                            <table style="width:100%;text-align:center;">
                                <thead style="background:#e8e8e9; padding-bottom:10px; padding-top:10px; height:70px;margin-bottom:10px;">
                                    <tr style="margin-bottom:10px;">
                                        <th style="text-align:center;">Name</th>
                                        <th style="text-align:center;">Starts</th>
                                        <th style="text-align:center;">Expires</th>
                                        <th style="text-align:center;">Amount</th>
                                        <th style="text-align:center;">Balance</th>
                                        <th style="text-align:center;">Default</th>
                                    </tr>
                                    
                                </thead>
                                
                                
                                
                                <tr style="margin-top:10px;margin-bottom:10px;">
                                    <td></td>
                                    <td></td>
                                    <td>No Data</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Documents <span style="float:right;"><a href="#">View All</a></span></h6>
                        </div>
                        <div class="card-body">
                            <table style="width:100%;text-align:center;">
                                <thead style="background:#e8e8e9; padding-bottom:10px; padding-top:10px; height:70px;margin-bottom:10px;">
                                    <tr style="margin-bottom:10px;">
                                        <th style="text-align:center;">Name</th>
                                        <th style="text-align:center;">Category</th>
                                        <th style="text-align:center;">Staff Visibility</th>
                                        <th style="text-align:center;">Expires At</th>
                                        <th style="text-align:center;">No Expiration</th>
                                        <th style="text-align:center;">Last Update</th>
                                    </tr>
                                    
                                </thead>
                                
                                <tr style="margin-top:10px;margin-bottom:10px;">
                                    <td></td>
                                    <td></td>
                                    <td>No Data</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Invoices <span style="float:right;"><a href="#">View All</a></span></h6>
                        </div>
                        <div class="card-body">
                            <table style="width:100%;text-align:center;">
                                <thead style="background:#e8e8e9; padding-bottom:10px; padding-top:10px; height:70px;margin-bottom:10px;">
                                    <tr style="margin-bottom:10px;">
                                        <th style="text-align:center;">Invoice Number</th>
                                        <th style="text-align:center;">Issued Date</th>
                                        <th style="text-align:center;">To</th>
                                        <th style="text-align:center;">Amount</th>
                                        <th style="text-align:center;">Tax</th>
                                        <th style="text-align:center;">Balance</th>
                                        <th style="text-align:center;">Due Date</th>
                                        <th style="text-align:center;">Status</th>
                                    </tr>
                                    
                                </thead>
                                
                                <tr style="margin-top:10px;margin-bottom:10px;">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>No Data</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                    
                   </div>
                   <div class="col-sm-4">
                         
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Additional Contacts<span style="float:right;">ADD</span></h6>
                        </div>
                    </div>
                         
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Settings <span style="float:right;"><a data-toggle="collapse" href="#collapseExamplesetting" role="button" aria-expanded="false" aria-controls="collapseExamplesetting">Edit</a></span></h6>
                        </div>
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-sm-4 font-weight-bold">
                                    NDIA Number:
                                </div>
                                <div class="col-sm-8 mb-3">
                                    <p class="el-ta"><?php echo $ndia; ?></p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-4 font-weight-bold">
                                    Reference Number:
                                </div>
                                <div class="col-sm-8 mb-3">
                                    <p class="el-ta"><?php echo $refnum; ?></p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-4 font-weight-bold">
                                    PO. Number:
                                </div>
                                <div class="col-sm-8 mb-3">
                                    <p class="el-ta"><?php echo $ponum; ?></p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-4 font-weight-bold">
                                    Client Type:
                                </div>
                                <div class="col-sm-8 mb-3">
                                    <p class="el-tag"><?php echo $clienttype; ?></p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-4 font-weight-bold">
                                    Default Price Book:
                                </div>
                                <div class="col-sm-8 mb-3">
                                    <p class="el-tag"><?php echo $pricebook; ?></p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-4 font-weight-bold mb-2">
                                   Share Progress Notes:
                                </div>
                                <div class="col-sm-8 mb-3">
                                    <?php
                                    if($shareprogressnotes==$y){
                                    ?>
                                    <i class="fas fa-check"></i>
                                    <?php
                                    }else{
                                    ?>
                                    <i class="fas fa-times"></i>
                                    <?php
                                    }
                                
                                    
                                    ?>
                                </div>
                            </div>
                            <div class="collapse mt-5" id="collapseExamplesetting">
                            <div class="row">
                              
                                <div class="card-body">
                                    <form method="post" action="staffsettingeditaction.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-12"
                                            style="">
                                                
                                                <label for="">Role</label>
                                                
                                                
                                                <select id="" class="form-control" name="role">
                                            <option value="Admin">Admin</option>
                                            <option value="Coordinator">Coordinator</option>
                                            <option value="HR">HR</option>
                                            <option value="Office Support">Office Support</option>
                                            <option value="Ops">Ops</option>
                                            <option value="Kiosk">Kiosk</option>
                                            <option value="Carer">Carer</option>
                                        </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12"
                                            style="">
                                                
                                                <label for="">Notify Attendance Approval</label>
                                                
                                                
                                                <select id="" class="form-control" name="notifyattendance">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12"
                                            style="">
                                                
                                                <label for="">Available For Rostering</label>
                                                
                                                
                                                <select id="" class="form-control" name="availablerostering">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12"
                                            style="">
                                                
                                                <label for="">No Access</label>
                                                
                                                
                                                <select id="" class="form-control" name="noaccess">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-4"
                                            style="">
                                                <input type="hidden" value='<?php echo "$id";?>' name="id">
                                                <input type="submit" class="btn btn-success form-control" value="Update">
                                            </div>
                                            <div class="form-group col-md-4"
                                            style="">
                                                
                                            </div>
                                            <div class="form-group col-md-4"
                                            style="">
                                                <button class="btn btn-danger form-control" type="button" data-toggle="collapse" data-target="#collapseExamplesetting" aria-expanded="false" aria-controls="collapseExamplesetting">Cancle</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                         
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Additional Information <span style="float:right;"><a data-toggle="collapse" href="#collapseExamplenote" role="button" aria-expanded="false" aria-controls="collapseExamplenote">Edit</a></span></h6>
                        </div>
                        <div class="card-body">
                            <?php echo $privateinfo; ?>
                            <div class="collapse mt-1" id="collapseExamplenote">
                            <div class="row">
                              
                                <div class="card-body">
                                    <form method="post" action="staffprivateinfoeditaction.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-12"
                                            style="">
                                                
                                               
                                                
                                                
                                                <textarea class="form-control" placeholder="Enter Private Info" rows="3"  value="<?php echo $privateinfo; ?>" name="privateinfo"></textarea>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-4"
                                            style="">
                                                <input type="hidden" value='<?php echo "$id";?>' name="id">
                                                <input type="submit" class="btn btn-success form-control" value="Update">
                                            </div>
                                            <div class="form-group col-md-4"
                                            style="">
                                                
                                            </div>
                                            <div class="form-group col-md-4"
                                            style="">
                                                <button class="btn btn-danger form-control" type="button" data-toggle="collapse" data-target="#collapseExamplenote" aria-expanded="false" aria-controls="collapseExamplenote">Cancle</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                         
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Additional Information <span style="float:right;"><a data-toggle="collapse" href="#collapseExamplenote" role="button" aria-expanded="false" aria-controls="collapseExamplenote">Edit</a></span></h6>
                        </div>
                        <div class="card-body">
                            <?php echo $publicinfo; ?>
                            <div class="collapse mt-1" id="collapseExamplenote">
                            <div class="row">
                              
                                <div class="card-body">
                                    <form method="post" action="staffprivateinfoeditaction.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-12"
                                            style="">
                                                
                                               
                                                
                                                
                                                <textarea class="form-control" placeholder="Enter Private Info" rows="3"  value="<?php echo $publicinfo; ?>" name="privateinfo"></textarea>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-4"
                                            style="">
                                                <input type="hidden" value='<?php echo "$id";?>' name="id">
                                                <input type="submit" class="btn btn-success form-control" value="Update">
                                            </div>
                                            <div class="form-group col-md-4"
                                            style="">
                                                
                                            </div>
                                            <div class="form-group col-md-4"
                                            style="">
                                                <button class="btn btn-danger form-control" type="button" data-toggle="collapse" data-target="#collapseExamplenote" aria-expanded="false" aria-controls="collapseExamplenote">Cancle</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                   </div>
                 </div>
                   

                
                   

                    <!-- DataTales Example -->
                 <div class="row">
                   <div class="col-sm-12">
                         
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Archive Client</h6>
                        </div>
                        <div class="card-body">
                            <p>This will archive the Client and you will not able to see Client in your list. If you do wish to access the Client, please go to  <a href="client-archived.php">Archived menu</a>.</p>
                            
                             <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><?php echo $archivestatus;?></button>
                            
                            
                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <!--<h4 class="modal-title">Archive Staff</h4>-->
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                Are You Sure...
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <a href="client-archive.php?id=<?php echo $id;?>" class="btn btn-success">Yes</a>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

  
  
      
        
        
        
        
        
        
        
        
          
        
        
      
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script type="text/javascript">
    function showme(){
         document.getElementById('myhide').style.visibility="visible";
    }
   
        
    </script>

</body>

</html>