<?php 
session_start();
include 'condb.php';
if (!isset($_SESSION['sum_price'])) {
    $_SESSION['sum_price'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

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
    <link rel="stylesheet" href="style3.css">
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
              <li class="nav-item">
                <a class="nav-link" href="packages_logout.php">สินค้า
                  
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
              <li class="nav-item active">
                <a class="nav-link" href="cart.php">ตะกร้าสินค้า</a>
                <span class="sr-only">(current)</span>
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


            <h1 style='font-size:40px'>
            ตะกร้าสินค้า
            </h1>
          </div>
        </div>
      </div>
    </div>

                   
    <div class="container mt-5">
        <form id="from1" method="POST" action="insert_cart.php">
            <div class="row">
                <div class="col-md-20">
                    <div class="alert alert-warning text-center" role="alert"><h4>สินค้าในตะกร้าของคุณ</h4></div>
                    <table class="table table-hover">
                        <tr>  
                            <th>ลำดับที่</th>
                            <th>รูปสินค้า</th>
                            <th>ชื่อสินค้า</th>
                            <th>ราคา</th>
                            <th>จำนวน</th>
                            <th>ราคารวม</th>
                            <th>ลด - เพิ่่ม</th>
                            <th>ลบ</th>
                        </tr>
                        <?php 
                        $total = 0;
                        $sumprice = 0;
                        $m = 1;  
                        
                        if (isset($_SESSION["intLine"]) && isset($_SESSION["strProductID"]) && isset($_SESSION["strQty"])) {
                            for ($i = 0; $i <= (int)$_SESSION["intLine"]; $i++) {
                                if (isset($_SESSION["strProductID"][$i]) && $_SESSION["strProductID"][$i] != "") {

                                    $sql1 = "SELECT * FROM product WHERE pro_id = '".$_SESSION["strProductID"][$i]."' ";
                                    $result1 = mysqli_query($conn, $sql1);
                                    $row_pro = mysqli_fetch_array($result1);

                                    if (is_numeric($row_pro['price'])) {
                                        // Ensure that $_SESSION["strQty"][$i] is numeric
                                        if (is_numeric($_SESSION["strQty"][$i])) {
                                            // Check if the selected quantity exceeds the available quantity
                                            $selectedQuantity = min($_SESSION["strQty"][$i], $row_pro['amount']);

                                            // Calculate the total price
                                            $total = $selectedQuantity;
                                            $sum = $total * $row_pro['price'];

                                            // Ensure that $sumprice is numeric or initialize it to 0
                                            $sumprice = is_numeric($sumprice) ? $sumprice + $sum : $sum;
                                            $_SESSION['sum_price'] = $sumprice;
                                            // Do not format $sumprice here
                                        } else {
                                            // Handle the case where $_SESSION["strQty"][$i] is not numeric
                                            echo "Quantity is not numeric!";
                                        }
                                    } else {
                                        // Handle the case where $row_pro['price'] is not numeric
                                        echo "Price is not numeric!";
                                    }
                                ?>
                                <tr>
                                    <td><?=$m?></td>
                                    <td> <img src="image/<?=$row_pro['image']?>" width="100px" height="100px" ></td>
                                    <td><?=$row_pro['pro_name']?></td>
                                    <td><?=$row_pro['price']?></td>
                                    <td><?=$selectedQuantity?></td>
                                    <td><?=$sum=number_format($sum, 2);?></td>
                                    <td>
                                        <?php if ($selectedQuantity > 1): ?>
                                            <a href="order_minus.php?id=<?=$row_pro['pro_id']?>" class="btn btn-outline-primary">-</a>
                                        <?php endif; ?>
                                        <?php if ($selectedQuantity < $row_pro['amount']): ?>
                                            <a href="order.php?id=<?=$row_pro['pro_id']?>" class="btn btn-outline-primary">+</i></a>
                                        <?php endif; ?>
                                    </td>
                                    <td><a href="pro_delete.php?Line=<?=$i?>"><i class="bi bi-trash3"></i></a></td>
                                </tr>

                                <?php 
                                $m = $m + 1;
                                }
                            }
                        }
                        ?>
                        
                        <tr>
                            <td colspan="5" class="text-end">รวมเป็นเงิน</td>
                            <td class="text-center"><?=$sumprice=number_format($sumprice, 2);?></td>
                            <td>บาท</td>
                        </tr>
                    </table>
                    <div style="text-align:right"><br>
                        <a class="btn btn-outline-success" href="packages_logout.php" role="button">เลือกสินค้าเพิ่มเติม</a> |
                        <button type="submit" class="btn btn-outline-primary">ยืนยันการสั่งซื้อ</button>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-20-mt-5"><br><br>
                        <div class="alert alert-warning text-center" role="alert"><h4>ข้อมูลการจัดส่ง</h4></div>
                    </div><br>
                    ชื่อ-นามสกุล:
                    <input type="text" name="us_name" class="form-control" required placeholder="ใส่ชื่อ-นามสกุล"><br>
                    ที่อยู๋:
                    <textarea name="us_adrs" rows="3" class="form-control" required placeholder="ใส่ที่อยู่"></textarea><br>
                    เบอร์โทรศัพท์:
                    <input type="number" name="us_tel" class="form-control" required placeholder="ใส่เบอร์โทรศัพท์">
                </div>
            </div>
        </form><br><br><br>
    </div>


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
            </p>
          </div>
        </div>
      </div>
    </div>

    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#" id="contact">
                <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Enter full name" required="">
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Enter email address" required="">
                        </div>
                     </div>
                </div>

                <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Enter phone" required="">
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="From date" required="">
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="To date" required="">
                              </div>
                           </div>
                        </div>
                     </div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Send Request</button>
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