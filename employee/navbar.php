<?php

require_once('db_connect.php');
//$id=1;
//$eid="E1234567890";

session_start();

$id=$_SESSION["id"];
$eid=$_SESSION["eid"];
$sql="SELECT * FROM employees WHERE id='$id' AND eid='$eid'";
$result=$conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $role=$row['role'];
        $_SESSION["role"]=$role;
        $_SESSION["name"]=$row['name'];
        $employeeid=$row['id'];
        $eid=$row['eid'];
        $employeename=$row['name'];
    }
}
//$role="Editor";
?>

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
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSupportertimesheet"
                    aria-expanded="true" aria-controls="collapseSupportertimesheet">
                    <i class="fas fa-user-md"></i>
                    <span>Support Workers</span>
                </a>
                <div id="collapseSupportertimesheet" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="support-workers-list.php">List</a>
                        <!--<a class="collapse-item " href="support-workers-forms.php">Forms</a>-->
                        <a class="collapse-item" data-toggle="collapse" href="#supportertimesheet" role="button" aria-expanded="false" aria-controls="supportertimesheet">Timesheet</a>
                        
                            <div class="collapse" id="supportertimesheet">
                                <div class="card card-body" style="margin-left:10px;">
                                    <a class="collapse-item " href="supporter-pending-timesheet.php">Pending</a>
                                    <a class="collapse-item " href="supporter-approved-timesheet.php">Approved</a>
                                    <a class="collapse-item " href="supporter-declined-timesheet.php">Declined</a>
                                </div>
                            </div>
                        
                        
                        <!--<a class="collapse-item " href="supporter-availability.php">Availability</a>-->
                        
                        
                        <!--<a class="collapse-item " href="supporter-new.php">New</a>-->
                    </div>
                </div>
            </li>


            

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


            <!--

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
            -->
            <li class="nav-item ">
                <a class="nav-link" href="my-profile.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span></a>
            </li>
            <?php
            if ($role=="Manager") {
               
            ?>

            <li class="nav-item ">
                <a class="nav-link" href="support-workers.php">
                    <i class="fas fa-user-md"></i>
                    <span>Support Workers</span></a>
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

            <?php
             # code...
            }
            ?>

            <?php
            if ($role=="Manager" || $role=="1Editor") {
               
            ?>

            <li class="nav-item ">
                <a class="nav-link" href="clients-care-plan.php">
                    <i class="fas fa-file-invoice"></i>
                    <span>Clients Care Plan</span></a>
            </li>

            <!--<li class="nav-item active">
                <a class="nav-link" href="time-sheet.php">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Time Sheet</span></a>
            </li>-->

            

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


            <?php
             # code...
            }
            ?>

            <?php
            if ($role=="Admin") {
               
            ?>


            <li class="nav-item ">
                <a class="nav-link" href="employee.php">
                    <i class="fas fa-users"></i>
                    <span>Employee</span></a>
            </li>


            <?php
             # code...
            }
            ?>

            <?php
            if ($role=="Manager") {
               
            ?>
            <li class="nav-item ">
                <a class="nav-link" href="service-agreement.php">
                    <i class="fas fa-handshake"></i>
                    <span>Service & Agreement</span></a>
            </li>


            <?php
             # code...
            }
            ?>

            <!-- Divider
            <hr class="sidebar-divider">-->

            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>

            

        </ul>
        <!-- End of Sidebar -->