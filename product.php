
<?php
include "conn.php";
error_reporting(0);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>RNL Vision Care | Product</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="shorcut icon" type="img/png" href="assets\images\logo.png">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark stroke">
      <h1>
        <a class="navbar-brand" href="index.php">
          <img src="assets\images\logo.png" height="80px">RNL Vision Care</span></a>
      </h1>

      <!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-lg-auto">
          <li class="nav-item @@home__active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@about__active">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="product.php">Product</a>
          </li>
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>

        <!--/search-right-->
        <div class="search-right">
         
        </div>
        <div class="top-quote mr-lg-2 text-center">
          <a href="login.php" class="btn login mr-2"><span class="fa fa-user"></span> login</a>
        </div>
      </div>
      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container py-1">
                <i class="gg-sun" style="cursor:pointer;"></i>
                <i class="gg-moon" style="cursor: pointer;"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>
<!--/header-->
<!-- about breadcrumb -->
<section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container pt-lg-5 pt-3 p-lg-4 pb-3">
            <h2 class="title mt-5 pt-lg-5 pt-sm-3">Product</h2>
            <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-md-5">
                <li><a href="index.php">Home</a></li>
                <li class="active"> / Product </li>
            </ul>
        </div>
    </div>
    <div class="waveWrapper waveAnimation">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none;"></path>
        </svg>
    </div>
</section>
  <!---Side bar-->
  <section class="category">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div>
            <aside class="side-area product-side side-shadow mt-5">
              <div class="side-title">
                <h4>Product Categories</h4><br>

              </div>
              <div class="side-content">
                <form method="post">
                <ul class="list">
                  <li>
                    <a href="?sort=<?php echo $_GET['sort'] ?>&prod=ALL">ALL</a>
                  </li>
                  <li>
                    <a href="?sort=<?php echo $_GET['sort'] ?>&prod=Accessories">Accessories</a>
                  </li>
                  <li>
                    <a href="?sort=<?php echo $_GET['sort'] ?>&prod=Contact Lenses">Contact Lenses</a>
                  </li>
                  <li>
                    <a href="?sort=<?php echo $_GET['sort'] ?>&prod=Eyewear for Adults">Eyewear for Adults</a>
                  </li>
                  <li>
                    <a href="?sort=<?php echo $_GET['sort'] ?>&prod=Eyewear for Kids">Eyewear for Kids</a>
                  </li>
                  <li>
                    <a href="?sort=<?php echo $_GET['sort'] ?>&prod=Seen Wear">Seen Wear</a>
                  </li>
                  <li>
                    <a href="?sort=<?php echo $_GET['sort'] ?>&prod=Sunglasses">Sunglasses</a>
                  </li>
                </ul>
                </form>
              </div>
            </aside>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row">
            <div id="prd-header" style="margin-bottom:50px;">
              <form id="my-form" method="post">
              <label>Sort by:</label>
              <select name='sort' id="price-sort" onchange="location = this.value;">
                <option value='0' disabled >Price</option>
                <option value='?sort=DESC&prod=<?php echo $_GET['prod']; ?>' <?php if($_GET['sort']=='DESC'){
                  echo "selected";
                } ?>>Price Highest to Lowest</option>
                <option value='?sort=ASC&prod=<?php echo $_GET['prod']; ?>' <?php if($_GET['sort']=='ASC'){
                  echo "selected";
                } ?>>Price Lowest to Highest</option>
              </select>
            
              </form>
              <a href="?sort=New&prod=<?php echo $_GET['prod']; ?>" id="newest" ><button style="color:#00c2cb;">Newest</button></a>
              <a href="?sort=default&prod=<?php echo $_GET['prod']; ?>" id="default" style="color:#000"><button>Default</button></a>
              <a href="?sort=Popular&prod=<?php echo $_GET['prod']; ?>" id="oldest" style="color:#000"><button>Popular</button></a>
              
            </div>
           
              <!--prod-->
              <?php
              $limit=9;
              $cat=$_GET['prod'];
              $page=isset($_GET['page']) ? $_GET['page']:1;
               $start=($page-1)*$limit;
                if ($_GET['prod']=='Accessories') {
                //open
               if(isset($_GET['sort'])){  
               if ($_GET['sort']=='ASC') {
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='DESC') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='New') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='Popular') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `qty` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `qty` ASC LIMIT $start, $limit ";
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }
                
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }
               //end
               }
               elseif ($_GET['prod']=='Contact Lenses') {
                //open
                 if(isset($_GET['sort'])){  
               if ($_GET['sort']=='ASC') {
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='DESC') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='New') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='Popular') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `qty` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `qty` ASC LIMIT $start, $limit ";
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }
                
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }
               //end
               }
               elseif ($_GET['prod']=='Eyewear for Adults') {
                //open
                   if(isset($_GET['sort'])){  
               if ($_GET['sort']=='ASC') {
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='DESC') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='New') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='Popular') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `qty` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `qty` ASC LIMIT $start, $limit ";
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }
                
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }

            //end

               }
               elseif ($_GET['prod']=='Eyewear for Kids') {
                //open
                if(isset($_GET['sort'])){  
               if ($_GET['sort']=='ASC') {
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='DESC') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='New') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='Popular') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `qty` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `qty` ASC LIMIT $start, $limit ";
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }
                
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }
               //end
               }
               elseif ($_GET['prod']=='Seen Wear') {
                //open
                 if(isset($_GET['sort'])){  
               if ($_GET['sort']=='ASC') {
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='DESC') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='New') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='Popular') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `qty` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `qty` ASC LIMIT $start, $limit ";
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }
                
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }
              //end
              }
              elseif ($_GET['prod']=='Sunglasses') {
                //open
                if(isset($_GET['sort'])){  
               if ($_GET['sort']=='ASC') {
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='DESC') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='New') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='Old') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` ASC LIMIT $start, $limit ";
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }
                
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }
               //end
              }
              elseif ($_GET['prod']=='ALL') {
                //open
                if(isset($_GET['sort'])){  
               if ($_GET['sort']=='ASC') {
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` ORDER BY `sellingprice` ASC");
                    $sql1 = "SELECT * FROM `product` ORDER BY `sellingprice` ASC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='DESC') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` ORDER BY `sellingprice` DESC");
                    $sql1 = "SELECT * FROM `product` ORDER BY `sellingprice` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='New') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` ORDER BY `dateofarrival` DESC");
                    $sql1 = "SELECT * FROM `product` ORDER BY `dateofarrival` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='Popular') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` ORDER BY `qty` ASC");
                    $sql1 = "SELECT * FROM `product` ORDER BY `qty` ASC LIMIT $start, $limit ";
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product`");
                   $sql1 = "SELECT * FROM `product` LIMIT $start,$limit ";
               }
                
               }
               else{
                 $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product`");
                    $sql1 = "SELECT * FROM `product` LIMIT $start, $limit ";
               }
               //end
              }

              else if(isset($_GET['sort'])){  
                //open
                 if ($_GET['sort']=='ASC') {
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` ASC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='DESC') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `sellingprice` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='New') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `dateofarrival` DESC LIMIT $start, $limit ";
               }
               elseif ($_GET['sort']=='Popular') {
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat' ORDER BY `qty` ASC");
                    $sql1 = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `qty` ASC LIMIT $start, $limit ";
               }
               else{
                  $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product` WHERE `category`='$cat'");
                   $sql1 = "SELECT * FROM `product`WHERE `category`='$cat' LIMIT $start,$limit ";
               }
                //end
               }
               
               else{
                $sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product`");
                    $sql1 = "SELECT * FROM `product` LIMIT $start, $limit ";
               }
                $result2 = $sql2->fetch_all(MYSQLI_ASSOC);
                $total=$result2[0]['id'];
                $pages=ceil($total/$limit);
                $prev=$page-1;
                $next=$page+1;
                
           

                $result = $conn->query($sql1);


                                    if($result->num_rows > 0){
                                        while($row = $result -> fetch_assoc()){
              ?>
            <div class="col-lg-4 col-sm-6">
              <div class="product-cate">
                <div>
                  <img src="admin/images/product_img/<?php echo $row['image'];?>" alt="<?php echo $row['image'];?>" style="width: 200px; height: 200px;margin-bottom:10px;border:solid 1px #00c2cb;box-shadow:1px 1px 3px grey;" >
                  <div class="product-des">
                    <h6><?php echo $row['brand'];?><br><?php echo $row['model'];?>&nbsp <br>(<?php echo $row['category'];?>)</h6>
                    <p>₱<?php echo $row['sellingprice'];?>.00</p><br>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }}
            ?>
            <!--prod-->
          </div>
        </div>
      </div>
      <!-- pagination -->
            <div class="pagination-wrapper mt-5 pt-lg-3 text-center">
                <ul class="page-pagination">
                  <?php if ($_GET['page']==1) {
                    ?>
                     <style type="text/css">
                       #pre{
                        pointer-events: none;
                       }
                     </style>
                    <?php
                     }
                    else{
                      ?>
                      <style type="text/css">
                       #pre{
                        pointer-events: auto;
                       }
                     </style>
                      <?php
                      }
                   ?>
                    <li><a class="next" id="pre" href="product.php?sort=<?php echo $_GET['sort'] ?>&prod=<?php echo $_GET['prod']; ?>&page=<?=$prev; ?>"><span class="fa fa-angle-left"></span> Prev</a></li>

                    
                      <?php  for($i=1; $i <=$pages ; $i++): ?>
                            <li>
                               <a class="page-numbers" href="product.php?sort=<?php echo $_GET['sort'] ?>&prod=<?php echo $_GET['prod']; ?>&page=<?=$i; ?>"><?=$i; ?></a>
                            </li>
                      <?php endfor; 
                          if ($_GET['page']==$pages) {
                      ?>
                        <style type="text/css">
                       #pnext{
                        pointer-events: none;
                       }
                     </style>
                    <?php } else{ ?>
                    <style type="text/css">
                       #pnext{
                        pointer-events: auto;
                       }
                     </style>

                    <?php } ?>
                    <li><a class="next" id="pnext" href="product.php?sort=<?php echo $_GET['sort'] ?>&prod=<?php echo $_GET['prod']; ?>&page=<?=$next; ?>">Next <span class="fa fa-angle-right"></span></a></li>
                </ul>
            </div>
            <!-- //pagination -->
    </div>

  </section>
  <!--End of Sidebar-->
<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-md-4">
      <div class="row footer-top-29">
        <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
          <h6 class="footer-title-29">Contact Info </h6>
          <p>Address : Stall #13 2nd floor Inno Block Mall Zabarte Road Cor Camarin-Susano Road, North Caloocan City</p>
          <p class="my-2">Phone : <a href="tel:(+63)998 218 1412">(+63)998 218 1412</a></p>
          <p>Email : <a href="mailto:rnlvisioncare@gmail.com">rnlvisioncare@gmail.com</a></p>
          <div class="main-social-footer-29 mt-4">
            <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

          <ul>
            <h6 class="footer-title-29">RNL Vision Care</h6>
            <li><a href="about.php">About company</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
        
       
      </div>
    </div>
  </div>
  <!-- copyright -->
  <section class="w3l-copyright text-center">
    <div class="container">
      <p class="copy-footer-29">© 2022 RNL Vision Care. All rights reserved. </p>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //copyright -->
</section>
<!-- //footer -->

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script>

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
          loop: true,
          margin: 20,
          nav: false,
          responsiveClass: true,
          responsive: {
              0: {
                  items: 1,
                  nav: false
              },
              768: {
                  items: 2,
                  nav: false
              },
              1000: {
                  items: 3,
                  nav: false,
                  loop: false
              }
          }
      })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>


</body>

</html>