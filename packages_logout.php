<?php 
include 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="assets/images/LOGO.png">
    
    <title>LiveBalans Website</title>
   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="style4.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>

  <body>

    
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
  

    
    <div class="sub-header">
      <div class="container">
        <div class="row">

          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
            <li><a href="mailto:LiveBalans.com"><i class="fa fa-envelope"></i>LiveBalans@gmail.com</a></li>
              <li><a href="tel:093-762-1390"><i class="fa fa-phone"></i>093-762-1390</a></li>
              <li class="nav-item"><a aria-current="page" href="admin/login.php">Admin</a></li>

            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="bi bi-line"></i></a></li>
              <li><a href="#"><i class="bi bi-instagram"></i></a></li>
              
            </ul>
            <li><a href="login.php?logout='1'" style="color: red;">ออกจากระบบ</a></li>
          </div>
        </div>
      </div>
    </div>
    
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
        
          <a class="navbar-brand" href="index_logout.php"><h2><img width="80px" height="80px" src="assets/images/LOGO.png" alt=""> Live Balans <em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index_logout.php">หน้าหลัก</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="packages_logout.php">สินค้า
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog_logout.php">ข่าวสาร</a>
              </li>
              <li class="nav-item dropdown">
              <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">เกี่ยวกับ</a>
              
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="about_logout.php">เกี่ยวกับ พวกเรา</a>
                  <a class="dropdown-item" href="testimonials_logout.php">ข้อความรับรอง</a>
                  <a class="dropdown-item" href="terms_logout.php">เงื่อนไข</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_logout.php">ติดต่อเรา</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.php">ตะกร้าสินค้า</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>ผลิตภัณฆ์สินค้า</h1>
            <span>ทางบริษัทเราได้คัดสรรเลือกผลิตภัณฆ์ที่ดีที่สุดสำหรับคุณ</span>
          </div>
        </div>
      </div>
    </div>

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>คุณต้องการให้เราช่วยหรือไม่ ?</h4>
            <span>คุณสามารถติดต่อสอบถามเพิ่มเติมเกี่ยวกับผลิตภัณฑ์หรือต้องการความช่วยเหลือสามารถติดต่อสอบถามได้ทางลิงค์นี้!</span>
          </div>
          <div class="col-md-4">
            <a href="contact.php" class="border-button">ติดต่อเรา</a>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <form align="right" class="d-flex" method="POST" action="packages_logout.php">
        <input class="form-control me-2" type="search"name="keyword" placeholder="พิมเพื่อค้นหาสินค้า" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">ค้นหาสินค้า</button>
    </form>

   <div class="container mt-4">
   <div class="row">
    <?php
        // เปลี่ยนหน้า
        $changpage = 4;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $start = ($page - 1) * $changpage;

        // แสดงสินค้า
        $keyword = @$_POST['keyword'];
        if($keyword != ""){
            $sql = "SELECT * FROM product
            INNER JOIN type ON product.type_id = type.type_id
            WHERE type.type_name LIKE '%$keyword%'
               OR product.pro_id = '$keyword'
               OR product.pro_name LIKE '%$keyword%'
               OR product.price <= '$keyword'
            LIMIT {$start}, {$changpage}";
        } else {
            $sql = "SELECT * FROM product, type WHERE product.type_id = type.type_id LIMIT {$start},{$changpage}";
        }
        $hand = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($hand)) {
            $price = $row['price'];
    ?>
   
    <div class="col-md-3">
        <div class="text-center">
        <img src="image/<?=$row['image']?>" width="250" height="250" class="mt-5 p-1 my-2 border"><br>
        ID: <?=$row['pro_id']?><br>
        ประเภท: <?=$row['type_name']?><br>
        <h5 class="text-primary"><?=$row['pro_name']?></h5>
        <h4 class="text-success">ราคา <b class="text-danger"><?=number_format($price, 2)?></b> บาท</h4> 
        <?php if ($row['amount'] > 0) { ?>
            <a class="btn btn-outline-primary" href="order.php?id=<?=$row['pro_id']?>" role="button">เพิ่มสินค้าในตะกร้า</a>
        <?php } else { ?>
            <button class="btn btn-outline-danger" disabled>สินค้าหมด</button>
        <?php } ?>
        <a class="btn btn-outline-success" href="package-details1.1.php?id=<?=$row['pro_id']?>" role="button">รายละเอียด</a>
    </div>
    </div>
        
        <br>
        <br>
    <?php 
        }
        // Close the result set
        mysqli_free_result($hand);
    ?>
  </div><!--endrow-->

<?php 
$sql1 = "SELECT * FROM product";
$query1 = mysqli_query($conn, $sql1);
$total_recoard = mysqli_num_rows($query1);
$total_page = ceil($total_recoard / $changpage);
?>
<nav aria-label="Page navigation example" class="mt-5">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="packages_logout.php?page=1">Previous</a></li>
    <?php for($i=1; $i<=$total_page; $i++) { ?>
    <li class="page-item"><a class="page-link" href="packages_logout.php?page=<?=$i?>"><?= $i ?></a></li>
    <?php } ?>
    <li class="page-item"><a class="page-link" href="packages_logout.php?page=<?=$total_page?>">Next</a></li>
  </ul>
</nav>

   </div><!--container-->
</body>
</html>
<?php
// Close the database connection
mysqli_close($conn);
?>
<br>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>หน้าเพิ่มเติม</h4>
            <p>   
            <li><a href="about_logout.php">เกี่ยวกับเรา</a></li>
              <li><a href="blog_logout.php">ข่าวสาร</a></li>
              <li><a href="testimonials_logout.php">ข้อความรับรอง</a></li>
              <li><a href="contact_logout.php">คิดค่อเรา</a></li>
              <li><a href="terms_logout.php">เงื่อนไข</a></li>
            </p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>ติดต่อพวกเรา</h4>
            <div class="contact-form">
              
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="ชื่อจริง-นามกสุล" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="ที่อยู่ E-Mail" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="ข้อความของคุณ" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">ส่งข้อความ</button>
                    </fieldset>
                  </div>
                </div>
             
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
            Copyright © 2023 Company Name
                - Template by: <a href="index_logout.php">LiveBalans.com</a>
          </div>
        </div>
      </div>
    </div>

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                   
      if(! cleared[t.id]){                      
          cleared[t.id] = 1;  
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>