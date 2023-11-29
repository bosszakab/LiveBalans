<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="assets/images/LOGO.png">
    
    <title>LiveBalans Website</title>

    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
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
            <li><a href="index.php?logout='1'" style="color: red;">ออกจากระบบ</a></li>
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
              <li class="nav-item active">
                <a class="nav-link" href="index_logout.php">หน้าหลัก
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="packages_logout.php">สินค้า</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog_logout.php">ข่าวสาร</a>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="about_logout.php" role="button" aria-haspopup="true" aria-expanded="false">เกี่ยวกับ</a>
              
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="about_logout.php">เกี่ยวกับ พวกเรา</a>
                    <a class="dropdown-item" href="testimonials_logout.php">ข้อความรับรอง</a>
                    <a class="dropdown-item" href="terms_logout.php">เงื่อนไข</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_logout.php">ติดต่อเรา</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.php">ตะกร้าสินค้า</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <br><br>
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="success">
                      <h3>
                        <?php
                          echo $_SESSION['success'];
                          unset($_SESSION['success']);
                          ?>
                      </h3>
                    </div>
                    <?php endif ?>

                <?php if (isset($_SESSION['username'])) : ?>
            <p>ยินดีต้อนรับ<strong><?php echo $_SESSION['username']; ?></strong></p>
            <?php endif ?>
        <h6>Welcome to LiveBalans</h6>
                  <h4>จุดหมายปลายทางครบวงจร <br>สำหรับผลิตภัณฑ์เสริมอาหารระดับพรีเมียม!</h4>
                  <p>เติมพลังการเดินทางของคุณเพื่อสุขภาพที่ดีและมีความสุขมากขึ้นด้วยผลิตภัณฑ์เสริมอาหารคุณภาพสูงที่คัดสรรมาอย่างพิถีพิถัน ตั้งแต่วิตามินและแร่ธาตุไปจนถึงส่วนผสมเฉพาะทางเรามุ่งมั่นที่จะสนับสนุนความเป็นอยู่ที่ดีของคุณ สำรวจกลุ่มผลิตภัณฑ์ของเราซึ่งสนับสนุนโดยวิทยาศาสตร์และสร้างสรรค์ด้วยความใส่ใจโอบรับวิถีชีวิตที่ดีต่อสุขภาพมากขึ้นด้วย LiveBalans เพราะสุขภาพของคุณคือสิ่งที่เราให้ความสำคัญเป็นอันดับแรก</p>
                  <a href="packages_logout.php" class="filled-button">เลือกดูสินค้า</a>
                </div>
            </div>
          </div>
        
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Unlock your best self today!</h6>
                  <h4>ปลดล็อกตัวตนที่ดีที่สุดของคุณวันนี้!</h4>
                  <p>ยกระดับสุขภาพของคุณด้วยผลิตภัณฑ์เสริมอาหารระดับพรีเมียมของเรา – มีหลักวิทยาศาสตร์สนับสนุนและขับเคลื่อนด้วยผลลัพธ์ รับพลังแห่งความมีสุขภาพที่ดี ช้อปตอนนี้และลงทุนในผลิตภัณฑ์เสริมอาหารที่ดีต่อสุขภาพและมีความสุขมากขึ้น!</p>
                  <a href="packages_logout" class="filled-button">เลือกซื้อสินค้า</a>
                </div>
            </div>
          </div>
          
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Release your identity!</h6>
                  <h4>ปลดปล่อยตัวตนของคุณ!</h4>
                  <p>ค้นพบพลังของโภชนาการที่เหมาะสมและเปิดรับความมีชีวิตชีวา ข้อเสนอที่มีระยะเวลาจำกัด – ดูแลสุขภาพของคุณและรับส่วนลด 25% วันนี้! เส้นทางสู่การมีสุขภาพที่ดีขึ้นและมีความสุขมากขึ้นที่คุณเริ่มต้น ที่นี่ ช้อปเลย!</p>
                  <a href="packages_logout" class="filled-button">เลือกซื้อสินค้า</a>
                </div>
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

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>แพ็คเกจ <em>แนะนำ!</em></h2>
            </div>
          </div>
          <div class="col-md-4">
          <div class="service-item">
              <img src="assets/images/Packwhey3.png" alt="">
              <div class="down-content">
                <h4>Whey Protein Muscle Mass 670g</h4>
                <div style="margin-bottom:10px;">
                  <span> <sup>฿</sup>3,099.00</span>
                </div>

                <p>เป็นสิ่งสำคัญมากสำหรับนักกีฬาที่จะได้รับโปรตีนที่เพียงพอ เนื่องจากโปรตีนมีส่วนทำให้มวลกล้ามเนื้อเพิ่มขึ้น ความเร็วที่โปรตีนถูกดูดซึมจากอาหารขึ้นอยู่กับประเภทของโปรตีนและประเภทของอาหาร โปรตีนที่ดูดซึมได้เร็วที่สุดคือเวย์โปรตีน</p>

                <a href="packages_logout.php" class="filled-button">ดูรายละเอียดเพิ่มเติม</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product7.jpg" alt="">
              <div class="down-content">
              <h4>MATELL Soy Protein Isolate Plant Based ถั่วเหลือง ซอย โปรตีน ไอโซเลท (Non Whey เวย์ )</h4>
                <div style="margin-bottom:10px;">
                  <span> <sup>฿</sup>299.00</span>
                </div>

                <p>  โปรตีนถั่วเหลืองปลอดจีเอ็มโอไอโซเลทเป็นแหล่งผักที่ดีซึ่งมีโปรตีนสมบูรณ์คุณภาพสูงซึ่งมีโปรไฟล์กรดอะมิโนที่ดีเยี่ยม ผลิตภัณฑ์จากถั่วเหลือง รวมถึงโปรตีนจากถั่วเหลือง มีไฟโตเอสโตรเจนที่เกิดขึ้นตามธรรมชาติและโปรตีนที่เป็นประโยชน์ เช่น เจนิสทีน และเดดซีน ตรวจสอบให้แน่ใจว่าคุณได้รับองค์ประกอบพื้นฐานของการมีสุขภาพที่ดีด้วยโปรตีนถั่วเหลืองไอโซเลทคุณภาพสูงจาก MATELL</p>

                <a href="packages_logout.php" class="filled-button">ดูรายละเอียดเพิ่มเติม</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product8.jpg" alt="">
              <div class="down-content">
                <h4>Scitec 100% Whey Protein - 920g เวย์โปรตีนเสริมสร้างกล้ามเนื้อ</h4>
                <div style="margin-bottom:10px;">
                  <span> <sup>฿</sup>1,090 </span>
                </div>

                <p>เวย์โปรตีนจากนมเป็นโปรตีนที่เรียกได้ว่าอุดมสมบูรณ์ เนื่องจากมีกรดอะมิโนกรดอะมิโน 9 ชนิด ซึ่งร่างกายไม่สามารถสังเคราะห์ได้ทั้งหมด และ ต้องได้จากอาหาร (เช่น Histidine, Isoleucine, Leucine, Lysine, Methionine, Phenylalanine, Threonine, Tryptophan, Valine).</p>

                <a href="packages_logout.php" class="filled-button">ดูรายละเอียดเพิ่มเติม</a>
              </div>
            </div>

            <br>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/Lean.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <h2>ทำความรู้จักกับ <em>บริษัทของเรา</em></h2>
                <p>บริษัทเรานำเสนอต้นแบบเกี่ยวกับบริษัทเคลือใหญ่หลายที่ ที่นำเข้าผลิตภัณฑ์ Whey protein จากหลายบริษัทชั้นนำมารวมอยู่ในบริษัทเราเพื่อสร้างทางเลือกให้แก่ผู้บริโภค</p>
                <a href="about_logout.php" class="filled-button">อ่าน เพิ่มเติม</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="section-heading">
          <h2>อ่านข่าวสาร <em>ของเรา</em></h2>
          <span>เป็นข้อมูลข่าวสารประจำวันและความคืบหน้าของเรา</span>
        </div>

        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'>เครื่องกลที่ได้รับรองจากหลายบริษัทชั้นนำและหลายมหาวิทยาลัย <br> <small> 27.12.2023 10:10</small></a></li>
              <li><a href='#tabs-2'>ผลการวิจัยรายวันและรายสัปดาห์ ของทาง liveBalans <br> <small> 27.12.2023 13:10</small></a></li>
              <li><a href='#tabs-3'>ขั้นตอนการผิตตัวต้นแบบของทาง Whey protein LiveBalans <br> <small> 27.12.2023 15:10</small></a></li>
            </ul>

            <br>

            <div class="text-center">
              <a href="blog_logout.php" class="filled-button">อ่านเพิ่มเติม</a>
            </div>

            <br>
          </div>

          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/Machine.jpg" alt="">
                <h4><a href="blog-details1.1.php">เครื่องกลที่ได้รับรองจากหลายบริษัทชั้นนำและหลายมหาวิทยาลัย</a></h4>
                <p>โรงงานรับผลิตอาหารเสริม BIOTICON รับผลิตอาหารเสริม ขั้นต่ำน้อย คุณภาพดี ราคาถูก ถูกหลักสากล พร้อมดูแลลูกค้าจนผลิตสินค้าออกขายสู่ท้องตลาด</p>
              </article>
              <article id='tabs-2'>
                <img src="assets/images/Machine2.jpg" alt="">
                <h4><a href="blog-details2.1.php">ผลการวิจัยรายวันและรายสัปดาห์ ของทาง liveBalans</a></h4>
                <p>สร้างแบรนด์ อาหารเสริม ครีม เครื่องสำอาง สมุนไพร กาแฟ สบู่ และ ผลิตภัณฑ์เกี่ยวกับสุขภาพและความสวยความงามอื่นๆอีกมากมายกับ Bioticon บริษัทผู้รับผลิตที่ดีที่สุด</p>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/Machine3.jpg" alt="">
                <h4><a href="blog-details3.1.php">ขั้นตอนการผิตตัวต้นแบบของทาง Whey protein LiveBalans</a></h4>
                <p>เป็นบริษัทรับผลิตเครื่องสำอาง อาหารเสริม และสกินแคร์ทุกชนิด เรารับวางแผนการตลาด สร้างแบรนด์ เรียกได้ว่าบริษัทของเรามีบริการแบบ One Stop Service ดูแลคุณตั้งแต่เริ่มอยากผลิตสินค้า
                </p>
              </article>
            </section>
          </div>
        </div>

        
      </div>
    </div>

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>ทำความรู้จัก <em>เกี่ยวกับพวกเรา</em></h2>
              <span>ข้อมูลเบื้องต้นสำหรับบุคลากร LiveBalans</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Piyapon Aumpiam</h4>
                  <span>Business owner</span>
                </div>
                <img src="assets/images/Ice1.png" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Thanawat Jenphaet</h4>
                  <span>Manager</span>
                </div>
                <img src="assets/images/boss1.png" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>ตอบกลับ <em>พวกเรา</em></h2>
              <span>สามารถส่งข้อมูลเพิ่มเติ่มเพื่อให้เราแก้ไขและปรับปรุงได้</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="ชื่อจริง-นามกสุล" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="ที่อยู่ E-Mail" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="เรื่อง" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="ข้อความของคุณ" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button">ส่งข้อความ</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <br>
      </div>
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
              <form id="contact footer-contact" action="" method="post">
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
              </form>
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