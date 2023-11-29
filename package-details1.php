<?php  include 'condb.php'; ?>
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
            <li><a href="login.php" style="color: red;">ลงชื่อเข้าใช้</a></li>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
        
          <a class="navbar-brand" href="index.php"><h2><img width="80px" height="80px" src="assets/images/LOGO.png" alt=""> Live Balans <em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">หน้าหลัก</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="packages.php">สินค้า
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">ข่าวสาร</a>
              </li>
              <li class="nav-item dropdown">
              <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">เกี่ยวกับ</a>
              
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="about.php">เกี่ยวกับ พวกเรา</a>
                  <a class="dropdown-item" href="testimonials.php">ข้อความรับรอง</a>
                  <a class="dropdown-item" href="terms.php">เงื่อนไข</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">ติดต่อเรา</a>
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
    
    <div class="container">
  <div class="row">
  
    <?php 
    $ids=$_GET['id'];
    $sql="SELECT * FROM product,type where product.type_id = type.type_id and product.pro_id='$ids' ";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $price = $row['price'];
    ?>
    <form align="center">
      <table align="center" border="0">
      <tr>
        <td width="100">
    <div class="col-md-4">
        <img src="image/<?=$row['image']?> " width="350px" class="mt-5 p-2 my-2 border"> 
    </div>
</td>
<td class="text-start" width="1000">
    <div class="col-md-5 mt-5">
    <h5 style='font-size:30px' class="text-primary"><?=$row['pro_name']?></h5>
      <h5 style='font-size:20px'>ID: <?=$row['pro_id']?></h5>
      <h4 style='font-size:20px'>ประเภท: <?=$row['type_name']?><br><br></h4>
      <h4 style='font-size:25px'>รายละเอียดสินค้า: <?=$row['pro_detail']?></h4><br>
      <h4 style='font-size:25px'>ราคา <b class="text-success"><?=number_format($price,2)?></b> บาท </h4><br>
      <?php if ($row['amount'] > 0) { ?>
            <a class="btn btn-outline-primary" href="login.php?id=<?=$row['pro_id']?>" role="button">เพิ่มสินค้าในตะกร้า</a>
        <?php } else { ?>
            <button class="btn btn-outline-danger" disabled>สินค้าหมด</button>
        <?php } ?>
    </div>
</td>
</table>
</tr>
    </form>
    <br>

        <div class="row">
          <div class="col-lg-9">
            <div class="tabs-content" style="display: block;">
              <h4>แผนที่</h4>

              <img src="assets/img/map.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3">
            <div class="tabs-content">
              <h4>รายละเอียดติดต่อ</h4>

              <p>
                <span>ชื่อ</span>
              
                <br>
              
                <strong>นายธนวัฒน์ เจนแพทย์</strong>
              </p>
              
              <p>
                <span>มือถือ</span>
              
                <br>
                
                <strong>
                  <a href="tel:093-762-1390">0937621390</a>
                </strong>
              </p>
              
              <p>
                <span>โทรศัพท์มือถือ</span>
              
                <br>
                
                <strong>
                  <a href="tel:093-762-1390">0937621390</a>
                </strong>
              </p>
              
              <p>
                <span>Email</span>
              
                <br>
                
                <strong>
                  <a href="mailto:LiveBalans.com">LiveBalans@gmail.com</a>
                </strong>
              </p>
            </div>
          </div>
        </div>

        <br>
  </div>
</div>

<br>
<br>
<br>
<br>

<?php 
mysqli_close($conn);
?>          
          
       

    

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>หน้าเพิ่มเติม</h4>
            <p>   
            <li><a href="about.php">เกี่ยวกับเรา</a></li>
              <li><a href="blog.php">ข่าวสาร</a></li>
              <li><a href="testimonials.php">ข้อความรับรอง</a></li>
              <li><a href="contact.php">คิดค่อเรา</a></li>
              <li><a href="terms.php">เงื่อนไข</a></li>
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
                - Template by: <a href="index.php">LiveBalans.com</a>
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