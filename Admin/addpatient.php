<?php
session_start();

    include("config.php");
    // include("function.php");

    if(isset($_POST['btnadd']))
    {
        /// something was posted
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $address = $_POST['address'];
        $contactno = $_POST['contactno'];
        $medhx = $_POST['medhx'];
        //$date = $_POST['date'];
        $oldOD = $_POST['oldOD'];
        $oldOS = $_POST['oldOS'];
        $oldODVA = $_POST['oldOD_VA'];
        $oldOSVA = $_POST['oldOS_VA'];
        //newrx of sph
        $newDODSPH = $_POST['newD_OD_SPH'];
        $newDOSSPH = $_POST['newD_OS_SPH'];
        $newCLODSPH = $_POST['new_CL_OD_SPH'];
        $newCLOSSPH = $_POST['newCL_OS_SPH'];
        $newRODSPH = $_POST['newR_OD_SPH'];
        $newROSSPH = $_POST['newR_OS_SPH'];
        //newrx of cyl
        $newDODCYL = $_POST['new_D_OD_CYL'];
        $newDOSCYL = $_POST['new_D_OS_CYL'];
        $newCLODCYL = $_POST['new_CL_OD_CYL'];
        $newCLOSCYL = $_POST['new_CL_OS_CYL'];
        $newRODCYL = $_POST['new_R_OD_CYL'];
        $newROSCYL = $_POST['new_R_OS_CYL'];
        //newrx of axis
        $newDODAXIS = $_POST['new_D_OD_AXIS'];
        $newDOSAXIS = $_POST['new_D_OS_AXIS'];
        $newCLODAXIS = $_POST['new_CL_OD_AXIS'];
        $newCLOSAXIS = $_POST['new_CL_OS_AXIS'];
        $newRODAXIS = $_POST['new_R_OD_AXIS'];
        $newROSAXIS = $_POST['new_R_OS_AXIS'];
        //newrx distance va
        $newDODVA = $_POST['new_D_OD_VA'];
        $newDOSVA = $_POST['new_D_OS_VA'];
        //newrx distance add
        $newDODADD = $_POST['new_D_OD_ADD'];
        $newDOSADD = $_POST['new_D_OS_ADD'];
        //newrx contact lense 
        $newCLMONOOD = $_POST['new_CL_MONO_OD'];
        $newCLPDOS = $_POST['new_CL_PD_OS'];
        //newrx reading
        $newRSEGHTOD = $_POST['new_R_SEGHT_OD'];
        $newRVERHTOS = $_POST['new_R_VERHT_OS'];
        //bp
        $bp = $_POST['bp'];
        //ishihara
        $ishiharaCYL = $_POST['ishihara_CYL'];
        $ishiharaAXIS = $_POST['ishihara_AXIS'];
        $ishiharaPD = $_POST['ishihara_PD'];

            // save to database
            // $user_id = random_num(20);
            //$query = "insert into `patients`(`pat_id`, `pat_last`, `pat_first`, `pat_middle`, `pat_age`, `pat_sex`, `pat_address`, `pat_contact`, `pat_medhx`, `pat_date`) values ('','$lastname','$firstname','$middlename','$age','$sex','$address','$contactno','$medhx','$date')";
            $query1="INSERT INTO `patient_records`(`pat_last`, `pat_first`, `pat_middle`, `pat_age`, `pat_sex`, `pat_address`, `pat_medhx`, `pat_date`, `old_od`, `old_os`, `old_od_add`, `old_os_add`, `distance_od_sph`, `distance_os_sph`, `distance_od_cyl`, `distance_os_cyl`, `distance_od_axis`, `distance_os_axis`, `distance_od_va`, `distance_os_va`, `distance_od_add`, `distance_os_add`, `lense_od_sph`, `lendse_os_sph`, `lense_od_cyl`, `lense_os_cyl`, `lense_od_axis`, `lense_os_axis`, `lense_mono_od`, `lense_pd_os`, `reading_od_sph`, `reading_os_sph`, `reading_od_cyl`, `reading_os_cyl`, `reading_od_axis`, `reading_os_axis`, `reading_seght_od`, `reading_seght_os`, `bp`, `Isihara.cyl`, `Isihara.axis`, `Isihara.pd`, `contact`) VALUES ('$lastname','$firstname','$middlename','$age','$sex','$address','$medhx',now(),'$oldOD', '$oldOS', '$oldODVA', '$oldOSVA', '$newDODSPH', '$newDOSSPH', '$newDODCYL', '$newDODCYL', '$newDODAXIS', ' $newDOSAXIS', '$newDODVA','$newDOSVA', '$newDODADD', '$newDOSADD', '$newCLODSPH', '$newCLOSSPH', '$newCLODCYL', '$newCLOSCYL', '$newCLODAXIS', '$newCLOSAXIS', '$newCLMONOOD', '$newCLPDOS', '$newRODSPH', '$newRODSPH', '$newRODCYL', '$newROSCYL', '$newRODAXIS', '$newROSAXIS', '$newRSEGHTOD', '$newRVERHTOS', '$bp', '$ishiharaCYL', '$ishiharaAXIS', '$ishiharaPD', '$contactno') ";

            //mysqli_query($con, $query);
            mysqli_query($con, $query1);

            echo "<script>confirm('Are you sure you want to add the patient?');</script>";
            
            echo "<script>document.location='patient_records.php';</script>";
            
        
        }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/CDRGenerarReporte.css">
    <link rel="stylesheet" href="assets/css/Multi-step-form.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Search-Input-responsive.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(26,38,50);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><img src="assets/img/Untitled-1.png" width="55" height="55"></div>
                    <div class="sidebar-brand-text mx-3"><span>RNL</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar-1">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="patient_records.php"><i class="fa fa-files-o"></i>Patient Records</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="POS.php"><i class="fas fa-shopping-cart"></i>Point of Sale</a><a class="nav-link" href="Sales.php"><i class="fa fa-money"></i>Sales</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php"><i class="fas fa-glasses"></i>Product</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="supplier.php"><i class="fa fa-cab"></i>Supplier</a></li>
                    <li class="nav-item"><a class="nav-link" href="reports.php"><i class="fas fa-table"></i>Reports</a><a class="nav-link" href="manage_users.php"><i class="fa fa-group"></i><span>Manage Users</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="audittrails.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-file-post">
                                <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-8z"></path>
                                <path fill-rule="evenodd" d="M4 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"></path>
                                <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"></path>
                            </svg>Audit Trail</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle-1" type="button"></button></div><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <ul class="navbar-nav flex-nowrap ml-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                        <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <span id='time' style="margin-top:23px;"></span>
                            <script src="assets/js/datentime.js"></script>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 12, 2019</span>
                                            <p>A new monthly report is ready to download!</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 7, 2019</span>
                                            <p>$290.29 has been deposited into your account!</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 2, 2019</span>
                                            <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Dr. Coco Melon</span><img class="border rounded-circle img-profile" src="assets/img/dogs/image3.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profile.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Theme</a><a class="dropdown-item" href="#"><i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Change Password</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4" style="margin-top: 30px;">
                        <h1 class="text-info mb-0">Add Patient</h1>
                        <a href="patient_records.php">←BACK</a>
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <style type="text/css">
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 900px;
  color: #000;
  
}

td, th {
  border: 1px solid #ffff;
  text-align: left;
}
</style>
<form method="post">
    <table>
        <tr>
<td><label>LASTNAME : </label><input type="text" name="lastname" required=""></td>
<td><label>FIRST NAME :</label><input type="text" name="firstname" required=""></td>
<td><label>MIDDLE NAME :</label><input type="text" name="middlename"> </td>
<td><label>AGE :</label><input type="number" name="age" style="width:100%" required=""></td>
<td><label>SEX :</label><select name ="sex" required="">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
        </select></td>
        </tr>
        <tr>
        <td><label>CONTACT #:</label>
        <input type="text" name="contactno" required=""></td>

        <td><label>ADDRESS:</label>
        <textarea name="address" style="" required=""> </textarea></td>

         <td><label>MEDICAL Hx:</label>
        <textarea name="medhx" style="width: 200%"></textarea></td>
        </tr></table><br>
                                <table >
             <tr>
    <th rowspan="3" >OLD RX</th>
  </tr>
  <tr>
    <td >OD</td>
    <td style="width: 400px;padding: 0; margin: 0;"><input type="text" style="font-size: 20px; padding: 10px;width: 400px; height: 40px;" name="oldOD"></td>
    <td>VA</td>
    <td>ADD</td>
    <td style="width: 100px; padding: 0; margin: 0;"><input type="text" style="font-size: 20px; padding: 5px; width: 110px; height: 40px;" name="oldOD_VA"></td>
  </tr>
  <tr>
    <td>OS</td>
    <td style="width: 200px;padding: 0; margin: 0;"><input type="text" style="font-size: 20px; padding: 10px;width: 400px; height: 40px;" name="oldOS"></td>
    <td>VA</td>
    <td>ADD</td>
    <td style="width: 100px; padding: 0; margin: 0;"><input type="text" style="font-size: 20px; padding: 5px; width: 110px; height: 40px;" name="oldOS_VA"></td>
  </tr>
        </table><br>

        <table>
            <tr>
              <th colspan="3">&nbsp</th>
              <th>SPH</th>
              <th>CYL</th>
              <th>AXIS</th>
              <th>VA</th>
              <th>ADD</th>
            </tr>
            <tr><th rowspan="6" style="width: 5px; text-align:">NEW<br> RX</th>
              <td rowspan="2" style="width: 2px;">DISTANCE</td>
              <td style="width: 2px;">OD</td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="newD_OD_SPH"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OD_CYL"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OD_AXIS"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OD_VA"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OD_ADD"></td>
            </tr>
            <tr>
              <td>OS</td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="newD_OS_SPH"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OS_CYL"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OS_AXIS"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OS_VA"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_D_OS_ADD"></td>
            </tr>
            <tr>
               <td rowspan="2">CONTACT LENS<br> RX</td>
              <td>OD</td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_CL_OD_SPH"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_CL_OD_CYL"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_CL_OD_AXIS"></td>
              <td>MONO</td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;">OD:<input type="text" style="font-size: 20px; padding: 5px; width: 85px;height: 43px;" name="new_CL_MONO_OD"></td>
            </tr>
            <tr>
              <td >OS</td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="newCL_OS_SPH"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_CL_OS_CYL"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_CL_OS_AXIS"></td>
              <td>PD</td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;">OS:<input type="text" style="font-size: 20px; padding: 5px; width: 86px;height: 43px;" name="new_CL_PD_OS"></td>
            </tr>
            <tr>
               <td rowspan="2">READING<br> RX</td>
              <td>OD</td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="newR_OD_SPH"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_R_OD_CYL"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_R_OD_AXIS"></td>
              <td>SEG HT</td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;">OD:<input type="text" style="font-size: 20px; padding: 5px; width: 85px;height: 43px;" name="new_R_SEGHT_OD"></td>
            </tr>
            <tr>
              <td>OS</td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="newR_OS_SPH"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_R_OS_CYL"></td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="new_R_OS_AXIS"></td>
              <td>VER HT</td>
              <td style="width: 100px;height:45px;padding: 0; margin: 0;">OS:<input type="text" style="font-size: 20px; padding: 5px; width: 86px;height: 43px;" name="new_R_VERHT_OS"></td>
            </tr>
            <tr>
            <td>B.P.</td>
            <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 170px; height: 45px;font-size: 20px; padding: 5px;" name="bp"></td>
            <td colspan="2">Ishihara</td>
            <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="ishihara_CYL"></td>
            <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="ishihara_AXIS"></td>
            <td>PD</td>
            <td style="width: 100px;height:45px;padding: 0; margin: 0;"><input type="text" style="width: 120px; height: 45px;font-size: 20px; padding: 5px;" name="ishihara_PD"></td>
            </tr>
            
          </table>
          <br>
          <center>
        <!--add button-->
          <button class="btn btn-success" style="margin-left: 5px;" type="submit" name="btnadd">ADD PATIENT</button>
          <!--cancel button-->
          <button class="btn btn-danger" style="margin-left: 5px;" type="submit" name="btnadd" onclick="return confirm('Are you sure you want to cancel the patient?')">CANCEL</button>
<!--<input type="submit" value="ADD PATIENT" name="btnadd" onclick="return confirm('Are you sure you want to add the patient?')">-->
   </center> </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © RNL2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Multi-step-form.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>