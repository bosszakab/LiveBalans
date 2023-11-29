<?php 
include 'condb.php';
session_start();
$sql="SELECT * FROM tb_order Where order_id='".$_SESSION['order_id']."'";
$result = mysqli_query($conn,$sql);
$rs = mysqli_fetch_array($result);
$total_price=$rs['total_price'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="assets/images/LOGO.png">
    
    <title>LiveBalans Website</title>
    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style2.css">
  </head>

  <body>

    <header class="navbar navbar-expand-lg">
      
        <div  class="container">
        
          <a class="navbar-brand" href="index_logout.php"><h2><img width="80px" height="80px" src="assets/images/LOGO.png" alt=""> Live Balans <em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

    </header>
    <br>
    <br>
   
  <div class="container">
  <div class="row">
    <div class="col-md-20">
    <div class="alert alert-success text-center h4 mt-4" role="alert">ใบสั่งซื้อ</div>
    เลขที่ใบสั่งซื้อ :<?=$rs['order_id'] ?><br>
    ชื่อ-นามสกุล :<?=$rs['us_name'] ?><br>
    ที่อยู่ :<?=$rs['address'] ?><br>
    เบอร์โทรศัพท์ :<?=$rs['telephone'] ?><br>
    <div class="card mb-4 mt-4">
      <div class="card-body">
    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>รหัสสินค้า</th>
      <th>ชื่อสินค้า</th>
      <th>ราคา</th>
      <th>จำนวนที่สั่ง</th>
      <th>ราคารวม</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $sql1="SELECT * FROM order_detail,product Where order_detail.pro_id = product.pro_id and order_detail.order_id = '".$_SESSION['order_id']."'";  
     $result1 = mysqli_query($conn,$sql1);
     while($row = mysqli_fetch_array($result1)){
    ?>
    <tr>
      <td><?=$row['pro_id']?></td>
      <td><?=$row['pro_name']?></td>
      <td><?=$row['orderprice']?></td>
      <td><?=$row['qtyorder']?></td>
      <td><?=$row['total']?></td>
      
    </tr>
  </tbody>
 
<?php 
     }
?>
</table>
<h5 class="text-end">ราคารวมสุทธิ <?=number_format($total_price,2)?> บาท</h5>
    </div>
    </div>
    <h5>***สามารถโอนเงินเข้ามาที่บัญชี กสิกร 125-147-1240 นายปิยพนธ์ อ่วมเปี่ยม เพื่อยืนยันการชำระเงิน 
    หรือสามารถเลือกชำระเงินปลายทางได้***</h5><br>
  </div>
    </div>
    <div class="text-center">
    <a class="btn btn-outline-primary" href="packages_logout.php" role="button">Cancle</a>
  <button onclick="window.print()" class="btn btn-outline-primary">Print</button>
  </div>
</div>
 
  </body>
</html>