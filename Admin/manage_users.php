<?php   
 include "config.php";  
 if (isset($_GET['users_id'])) {  
	 
      $userid=$_GET['users_id'];  
      $delete=mysqli_query($con,"delete from users where users_id='$userid'");  
      if ($delete) {  
           header("location:manage_users.php");

           die();  
      }  
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
                    <li class="nav-item"><a class="nav-link" href="patient_records.php"><i class="fa fa-files-o"></i>Patient Records</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="POS.php"><i class="fas fa-shopping-cart"></i>Point of Sale</a><a class="nav-link" href="Sales.php"><i class="fa fa-money"></i>Sales</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php"><i class="fas fa-glasses"></i>Product</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="supplier.php"><i class="fa fa-cab"></i>Supplier</a></li>
                    <li class="nav-item"><a class="nav-link" href="reports.php"><i class="fas fa-table"></i>Reports</a><a class="nav-link active" href="manage_users.php"><i class="fa fa-group"></i><span>Manage Users</span></a></li>
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
                    <h1 class="text-info mb-4" style="margin-top: 30px;">Manage Users</h1>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Users Info</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <!-- New User Modal-->
                                <div id="modal-open">
                        <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">ADD USER</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: black;"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                       <form method="post" enctype="multipart/form-data" action="manageuserhandler.php">

                                        <label style="color: #000; padding-right: 10%;">Last Name:</label>
                                            <input type="text" id="fname" name="lname" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required" >
                                            <br><br>
                                        <label style="color: #000; padding-right: 11%;">Firs Name:</label>
                                            <input type="text" id="fname" name="fname" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <br><br>
                                        <label style="color: #000; padding-right: 6%;">Middle Name:</label>
                                            <input type="text" id="fname" name="mname" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <br><br>
                                        <label style="color: #000; padding-right: 11%;">Username:</label>
                                        <input type="text" id="fname" name="username" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <br><br>
                                        <label style="color: #000; padding-right: 11%;">Password:</label>
                                            <input type="password" id="fname" name="password" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <br><br>
                                        <label style="color: #000; padding-right: 18%;">Email:</label>
                                            <input type="email" id="fname" name="email" style="border: #000 2px;  border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <br><br>
                                        <label style="color: #000; padding-right: 8.7%;">Contact No.:</label>
                                            <input type="tel" pattern="[0-9]{11}" id="fname" name="contact" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <br><br>
                                        <label style="color: #000; padding-right: 19.5%;">Role:</label>
                                        <select name="position" id="Category" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <option value="Administrator">Administrator</option>
                                            <option value="Doctor">Doctor</option>
                                        </select>
                                        <br><br>
                                            <button type="submit" name="btnsubmit" onclick="return confirm('Are you sure')" 
                                            style="background-color: #1566a8; color: white; padding: 15px 20px; margin: 8px 0;
                                            border: none; border-radius: 10px; cursor: pointer; position: relative; top: 5px; margin-left: 25.9%; font-size: large; 
                                            width: 250px; height:43px; padding-top: 10px;">Add User</button>
                                        </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table>
                                <div class="col-md-6">
                                <div class="form-group pull-right col-lg-4"><input type="text" name="searchlname" class="search form-control" placeholder="Search by lastname"></div><span class="counter pull-right"></span>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" type="button" style="margin-bottom: 16px; margin-left: 43%;">
                                <i class="far fa-plus-square" style="font-size: 15px;margin-right: 7px;margin-top: -4px;"></i>Add new user</button> 
                                </div>
                                </div>
                            </div>

                            <!-- Update User Modal-->
                            <div id="modal-open">
                        <div class="modal fade" role="dialog" tabindex="-1" id="updateModal" aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">UPDATE USER</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: black;"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                       <form method="post" enctype="multipart/form-data" action="manage_users_update.php">
                                        
                                        <label style="color: #000; padding-right: 10%;">Last Name:</label>
                                            <input type="text" id="fname" name="lname" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required" >
                                            <br><br>
                                        <label style="color: #000; padding-right: 11%;">Firs Name:</label>
                                            <input type="text" id="fname" name="fname" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <br><br>
                                        <label style="color: #000; padding-right: 6%;">Middle Name:</label>
                                            <input type="text" id="fname" name="mname" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <br><br>
                                        <label style="color: #000; padding-right: 11%;">Username:</label>
                                        <input type="text" id="fname" name="username" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <br><br>
                                        <label style="color: #000; padding-right: 11%;">Password:</label>
                                            <input type="password" id="fname" name="password" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <br><br>
                                        <label style="color: #000; padding-right: 18%;">Email:</label>
                                            <input type="email" id="fname" name="email" style="border: #000 2px;  border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <br><br>
                                        <label style="color: #000; padding-right: 8.7%;">Contact No.:</label>
                                            <input type="contact" id="fname" name="contact" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <br><br>
                                        <label style="color: #000; padding-right: 19.5%;">Role:</label>
                                        <select name="position" id="Category" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                                            <option value="Administrator">Administrator</option>
                                            <option value="Doctor">Doctor</option>
                                        </select>
                                        <br><br>
                                            <button type="submit" name="btn_submit" onclick="return confirm('Are you sure')" 
                                            style="background-color: #1566a8; color: white; padding: 15px 20px; margin: 8px 0;
                                            border: none; border-radius: 10px; cursor: pointer; position: relative; top: 5px; margin-left: 25.9%; font-size: large; 
                                            width: 250px; height:43px; padding-top: 10px;">Update</button>
                                        </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Role</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        $con = mysqli_connect("localhost", "root", "", "capstone");
                                        // Check connection
                                            if ($con->connect_error) {
                                                die("Connection failed: " . $con->connect_error);
                                            }
                                            error_reporting(0);
                                            $search=$_POST['searchlname'];
                                            $sql = "SELECT * FROM `users` WHERE `users_last`LIKE '%$search%'";
                                            $result = $con->query($sql);
                                            
                                                if ($result->num_rows > 0) {
                                            // output data of each row
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "<tr><td>" . $row["users_last"]. "</td><td>" . $row["users_first"] . "</td><td>" . $row["users_mid"]. "</td><td>" . $row["users_username"] . "</td><td>"
                                                    . $row["users_email"]. "</td><td>". $row["users_contact"]. "</td><td>". $row["user_role"]. "</td> 
                                                    <td><form method='post' action='manage_users_update.php?users_id=".$row["users_id"]."'>"?>
  		                                            </form>
                                                    <button class="btn btn-success" data-target="#updateModal" style="margin-left: 38px;">UPDATE</button>
                                                    <form method='post' action='?users_id=<?php echo $row["users_id"]; ?>'>
                                                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')" style="margin-left: 38px;margin-top: 5px;">REMOVE</button>
		                                        </form><?php "</tr>";
                                            }
                                                echo "</table>";
                                            } else { echo "0 results"; }
                                            $con->close();
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
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
    </div><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
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