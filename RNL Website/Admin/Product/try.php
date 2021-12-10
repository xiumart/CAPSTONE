 <?php   
 include "config.php";  
 if (isset($_GET['pro_id'])) {  
      $id=$_GET['pro_id'];  
      $delete=mysqli_query($con,"delete from product where pro_id='$pro_id'");  
      if ($delete) {  
           header("location:adminproduct.php");  
           die();  
      }  
 }


 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Try</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
                font-family: 'verdana', sans-serif;  
           }  
           body{  
                display: flex;  
                justify-content: center;  
                align-items: center;  
                width: 100%;  
                height: 100vh;  
                background-color: #5d6d7d;  
           }  
           table{  
                border-collapse: collapse;  
           }  
           table th{  
                background-color: red;  
                padding: 8px 10px;  
                color: #fff;  
           }  
           table td{  
                background-color: #f3f3f3;  
                padding: 8px 10px;  
                color: #111;  
           }  
           .opt{  
                background-color: orange;  
                color: #fff;  
                font-size: 1em;  
                padding: 5px;  
                text-decoration: none;  
           }  
      </style>  
 </head>  
 <body>  
 <div class="container">  
      <table>
  <tr>
     <th>ID</th>
    <th>Brand Name</th>
    <th>Model</th>
    <th>Category</th>
    <th>Arrival</th>
    <th>Exp. Date</th>
    <th>Selling Price</th>
    <th>Original Price</th>
    <th>Profit</th>
    <th>Supplier</th>
    <th>Qty</th>
    <th>Actions</th>
  </tr>

  <?php


  include("config.php"); 
  $sql = "SELECT * from product";
  $result = $con->query($sql);

  if($result->num_rows > 0){
     while($row = $result -> fetch_assoc()){
          echo "
          <tr>
          <td>" . $row["pro_id"] . "</td>   
          <td>" . $row["brand"] . "</td>
          <td>" . $row["model"] . "</td>
          <td>" . $row["category"] . "</td>
          <td>" . $row["dateofarrival"] . "</td>
          <td>" . $row["expdate"] . "</td>
          <td>" . $row["sellingprice"] . "</td>
          <td>" . $row["origprice"] . "</td>
          <td>" . $row["profit"] . "</td>
          <td>" . $row["supplier"] . "</td>
          <td>" . $row["qty"] . "</td>  
          <td>
               <a href='?pro_id=".$row["pro_id"]."'class='opt'>Delete</a>
               <a href='' class='opt1'>Edit/Update</a>
          </td>
          </tr>";
     }
  } else {
     echo "NO RESULTS";
  }
  ?>
      </table>  
 </div>  
 </body>  
 </html>  