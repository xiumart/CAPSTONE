<?php
session_start();
include('connect.php');
$a = $_POST['invoice'];
$c = $_POST['date'];
$d = $_POST['ptype'];
$e = $_POST['amount'];
$z = $_POST['profit'];
$cname = $_POST['cname'];
if($d=='credit') {
$f = $_POST['due'];
$sql = "INSERT INTO sales (order_no,date,type,amount,profit,due_date,name) VALUES (:a,:c,:d,:e,:z,:f,:g)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':f'=>$f,':g'=>$cname));
header("location: preview.php?invoice=$a");
exit();
}
if($d=='cash') {
$f = $_POST['cash'];
if($f>=$_POST['amount']){
    $sql = "INSERT INTO sales (order_no,date,type,amount,profit,due_date,name) VALUES (:a,:c,:d,:e,:z,:f,:g)";
    $q = $db->prepare($sql);
    $q->execute(array(':a'=>$a,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':f'=>$f,':g'=>$cname));
    header("location: preview.php?invoice=$a");
    exit();
}
else{
    echo "<script>alert('Cash is insufficient')
        window.location.href='point-of-sale.php?id=cash&invoice=$a'
        </script>";
}

}
// query



?>