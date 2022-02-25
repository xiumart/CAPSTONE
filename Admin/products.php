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
                    <li class="nav-item"><a class="nav-link active" href="products.php"><i class="fas fa-glasses"></i>Product</a></li>
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
                    <h1 class="text-info mb-4" style="margin-top: 30px;color: rgb(22,40,160);">Products</h1>
                </div>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("con11").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<?php
                                error_reporting(0);
                                if(isset($_POST['btnrefresh']))
                                    {
                                        header("Location: products.php");
                                    }
?>
                <div class="col-md-12 search-table-col" style="margin-top: 40px;">
                    <div class="form-group pull-right col-lg-4"><input type="text" name="searchproduct" class="search form-control" placeholder="Search by typing here.."></div><span class="pull-right"><form method="post"><a href="javascript:Clickheretoprint()"  class="btn btn-dark btn-mini"> <i class="fa fa-print" style="font-size: 15px;"></i></a>

                        <button class="btn btn-primary" style="margin-left: 5px;" type="submit" name="btnrefresh"><i class="fa fa-refresh" style="font-size: 15px;"></i></button></form>
                    </span> <div id="modal-open">
                        <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">New Product</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: black;"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                       <form method="post" enctype="multipart/form-data" action="">
                                      
                <label style="color: #000; padding-right: 15%;">Brand Name:</label>
                <input type="text" id="fname" name="bname" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required" >
                <br><br>
                <label style="color: #000; padding-right: 24.7%;">Model:</label>
                <input type="text" id="fname" name="model" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                <br><br>
                <label style="color: #000; padding-right: 20.3%;">Category:</label>
                <select name="category" id="Category" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                    <option value="Frame">Frame</option>
                    <option value="Lens">Lens</option>
                  </select>
                  <br><br>
                <label style="color: #000; padding-right: 11.8%;">Date of Arrival:</label>
                <input type="date" id="fname" name="dateofarrival" style="border: #000 2px;  border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                <br><br>
                <label style="color: #000; padding-right: 10.5%;">Expiration Date:</label>
                <input type="date" id="fname" name="expirationdate" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                <br><br>
                <label style="color: #000; padding-right: 15.2%;">Selling Price:</label>
                <input type="text" id="fname" name="sellingprice" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                <br><br>
                <label style="color: #000; padding-right: 13.7%;">Original Price:</label>
                <input type="text" id="fname" name="originalprice" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                <br><br>
                <label style="color: #000; padding-right: 21.5%;">Supplier:</label>
                <select name="supplier" id="Category" style="border: #000 2px; border-style: solid; font-size: 18px; border-radius: 8px; padding: 3px;" required="required">
                    <option style="font-size: 18px;"value="Supplier1">Supplier1</option>
                    <option style="font-size: 18px;"value="Supplier2">Supplier2</option>
                  </select>
                  <br><br>
                <label style="color: #000; padding-right: 27.9%;">QTY:</label>
                <input type="number" id="tentacles" name="qty" min="1" max="10000" placeholder="Quantity" style="background-color: white; font-size: 18px; border: solid black 2px; width: 200px; height:43px; text-transform: lowercase; padding-left: 10px; border-radius: 8px; padding: 3px;">
                <br><br>
                <label for="photo" style="color: #000;padding-right: 116.9px;">Image:</label>
                <input type="file" id="uploadfile" name="picture" accept="image/*" style="font-size: 13px; ">
                <br>
                
                <center>
                    <button type="submit" name="btnsubmit" onclick="return confirm('Are you sure')" style="background-color: #1566a8; color: white; padding: 15px 20px; margin: 8px 0; border: none; border-radius: 10px; cursor: pointer; position: relative; top: 5px; margin-left: 25.9%; font-size: large; width: 250px; height:43px; padding-top: 10px;">Submit</button>
                </center>
                </form>
                </div>
                    </div>
                            </div>
                        </div><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" type="button">Add products</button>
                    </div>
                    <table>
                        <tr><th><center>Sort by Date of Arrival</center></th></tr>
                        <tr><td>
                     <form method="post">To:&nbsp<input type="date" name="txtto">&nbsp&nbsp&nbspFrom:&nbsp<input type="date" name="txtfrom"></td><td><button class="btn btn-primary" style="margin-left: 5px;" type="submit" name="btngenerate">GENERATE</button></td></form>
                     </tr>
                    </table>
                    <div class="table-responsive table-bordered table table-hover table-bordered results">
                        <div id="con11">
                        <table class="table table-bordered table-hover">
                            <thead class="bill-header cs">
                                <tr>
                                    <th>Image</th>
                                    <th id="trs-hd" class="col-lg-1">Brand name</th>
                                    <th id="trs-hd" class="col-lg-2">Model</th>
                                    <th id="trs-hd" class="col-lg-3">Category</th>
                                    <th id="trs-hd" class="col-lg-2">Arrival</th>
                                    <th id="trs-hd" class="col-lg-2">Exp. Date</th>
                                    <th>Selling price</th>
                                    <th>Original price</th>
                                    <th>Profit</th>
                                    <th>Supplier</th>
                                    <th>Quantity</th>
                                    <th id="trs-hd" class="col-lg-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                </div>
                                 <?php
  error_reporting(0);
  include('config.php');

  $search=$_POST['searchproduct'];
  $to=$_POST['txtto'];
  $from=$_POST['txtfrom'];
   $del_id=$_GET['pro_id'];
$sql2 = "DELETE FROM `product` WHERE `pro_id`='$del_id' ";
                                    $result = $con->query($sql2);
  if (isset($_POST['btngenerate'])) {
      $sql1 = "SELECT * FROM `product` WHERE `dateofarrival` BETWEEN '$to' AND '$from'";
  }
  else{
  $sql1 = "SELECT * FROM `product` WHERE `brand`LIKE '%$search%'";
  }
  $result1 = $con->query($sql1);
  if($result1->num_rows > 0){
    while($row = $result1 -> fetch_assoc()){
        ?>
        

                                <tr>

                                    <td><img src='RNL Website/Admin/Product/productImage/<?php echo $row['image'];?>' style='width:100px; height:100px; border:groove #000' ></td>
                                    <td><?php echo $row["brand"]; ?></td>
                                    <td><?php echo $row["model"]; ?></td>
                                    <td><?php echo $row["category"]; ?></td>
                                    <td><?php echo $row["dateofarrival"]; ?></td>
                                    <td><?php echo $row["expdate"]; ?></td>
                                    <td><?php echo $row["sellingprice"]; ?></td>
                                    <td><?php echo $row["origprice"]; ?></td>
                                    <td><?php echo $row["profit"]; ?></td>
                                    <td><?php echo $row["supplier"]; ?></td>
                                    <td><?php echo $row["qty"]; ?></td>

                                    <td> <!--update--->
                    <form method='post' action='updateproduct.php?pro_id=<?php echo $row["pro_id"]; ?>'>
                    <div class="btnedit">
                    <button class="btn btn-success" style="margin-left: 5px;margin-bottom: 5px;" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-pencil" style="font-size: 15px;">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                                <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                            </svg></button>
                    </div>
                    </form>
                                            <!--delete--->
                                            <form method='post' action='products.php?pro_id=<?php echo $row["pro_id"]; ?>'>
                    <button class="btn btn-danger" style="margin-left: 5px;" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button>
                    </form></td>
                                </tr>
<?php
}}
?>
</div>
                            </tbody>
                        </table>
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
<?php
include("config.php");  

if (isset($_POST['btnsubmit'])) {
        //something was posted
        $brandname = $_POST['bname'];
        $model = $_POST['model'];
        $category = $_POST['category'];
        $dateofarrival = $_POST['dateofarrival'];
        $expirationdate = $_POST['expirationdate'];
        $sellingprice = $_POST['sellingprice'];
        $originalprice = $_POST['originalprice'];
        $profit = $sellingprice - $originalprice;
        $supplier = $_POST['supplier'];
        $qty = $_POST['qty'];   
        //picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
    if($picture_size<=50000000)
    
        $pic_name=time()."_".$picture_name;
        move_uploaded_file($picture_tmp_name,"productImage/".$pic_name);
        
        
    
            //save to database
            //$user_id = random_num(20);
            $query = "insert into product (brand,model,category,dateofarrival,expdate,sellingprice,origprice,profit,supplier,qty,image) values ('$brandname','$model','$category','$dateofarrival','$expirationdate','$sellingprice','$originalprice','$profit','$supplier','$qty','$pic_name')";

            mysqli_query($con, $query);
            move_uploaded_file($tempname, $folder);

            header("Location: products.php");
            die;
        
}
        
    } ?>