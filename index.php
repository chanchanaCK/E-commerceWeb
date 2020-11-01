
<?php
session_start();
error_reporting(0);
//require_once 'check-session.php';
//require_once 'connect/connect.php';
?>

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ร้าน Uncommon</title>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#top">ร้าน Uncommon</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
         aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          เมนู
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#top">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#item">สินค้าทั้งหมด</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">ติดต่อ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user.php">แก้ไขข้อมูลส่วนตัว</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">สมัคสมาชิก</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="login.php">เข้าสู่ระบบ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in"></div>
          <div class="intro-heading text-uppercase">WELCOME TO UNCOMMON </div>

        </div>
      </div>
    </header>


    <!-- สินค้า -->
    <section class="bg-light" id="item">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">สินค้าทั้งหมด</h2><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/product/01ip.jpg" alt="">
            </a>
            <div class="portfolio-caption"><br>
              <h4>iPhone X</h4>
              <p class="text-muted">ราคา 26,000 บ</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">

                </div>
              </div>
              <img class="img-fluid" src="img/product/02s92.jpg" alt="">
            </a>
            <div class="portfolio-caption"><br>
              <h4>Samsung Galaxy S9</h4>
              <p class="text-muted">ราคา 25,000 บาท</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">

                </div>
              </div>
              <img class="img-fluid" src="img/product/03pixel.jpg" alt="">
            </a>
            <div class="portfolio-caption"><br><br>
              <h4>GOOGLE PIXEL 2 XL</h4>
              <p class="text-muted">ราคา 27,800 บาท</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
              </div>
              </div>
              <img class="img-fluid" src="img/product/04v302.jpg" alt="">
            </a>
            <div class="portfolio-caption"><br>
              <h4>LG V30</h4>
              <p class="text-muted">ราคา 23,900 บาท</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">

                </div>
              </div>
              <img class="img-fluid" src="img/product/05p20.png" alt="">
            </a>
            <div class="portfolio-caption"><br>
              <h4>Huawei P20 Pro</h4>
              <p class="text-muted">ราคา 27,900 บาท</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/product/06mate.jpg" alt="">
            </a>
            <div class="portfolio-caption"><br>
              <h4>HUAWEI MATE 10 PRO</h4>
              <p class="text-muted">ราคา 19,900 บาท</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">ติดต่อเรา</h2><br>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="ใส่ชื่อ *" required="required" data-validation-required-message="โปรดใส่ชื่อของคุณ">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="ใส่ Email *" required="required" data-validation-required-message="โปรดใส่ email ของคุณ ">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="ใส่เบอร์มือถือ *" required="required" data-validation-required-message="โปรดใส่เบอร์มือถือของคุณ ">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="เขียนข้อความ *" required="required" data-validation-required-message="โปรดใสข้อความ"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">ส่ง</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- product Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!--  Details -->
                  <h2 class="text-uppercase">IPHONE X</h2><br>
                  <img class="img-fluid d-block mx-auto" src="img/product/01ip.jpg" alt="">
                  <p>

                       Weight: 174g | Dimensions: 143.6 x 70.9 x 7.7mm | OS: iOS 11
                       | Screen size: 5.8-inch | Resolution: 1125×2436 | CPU: A11 Bionic
                       | RAM: 3GB | Storage: 64/256GB | Battery: 2716mAh | Rear camera: 12MP+12MP
                       | Front camera: 7MP


                  </p>

                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    หยิบใส่ตระกร้า</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Details -->
                  <h2 class="text-uppercase">SAMSUNG GALAXY S9</h2><br>
                  <img class="img-fluid d-block mx-auto" src="img/product/02s92.jpg" alt="">
                  <p>
                       Weight: 163g | Dimensions: 147.7 x 68.7 x 8.5mm | OS: Android 8
                        | Screen size: 5.8-inch | Resolution: 1440 x 2960 | CPU: Snapdragon 845 / Exynos 9810
                        | RAM: 4GB | Storage: 64GB/128GB | Battery: 3,000mAh | Rear camera: 12MP | Front camera: 8MP

                  </p>

                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                  หยิบใส่ตระกร้า</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Details -->
                  <h2 class="text-uppercase">GOOGLE PIXEL 2 XL</h2><br>

                  <img class="img-fluid d-block mx-auto" src="img/product/03pixel.jpg" alt="">
                  <p>
                     Weight: 175g | Dimensions: 157.9 x 76.7 x 7.9mm | OS: Android 8 | Screen size: 6-inch
                     | Resolution: 1440 x 2880
                     | CPU: Snapdragon 835 | RAM: 4GB | Storage: 64GB/128GB | Battery: 3,520mAh
                     | Rear camera: 12MP | Front camera: 8MP

                  </p>

                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                  หยิบใส่ตระกร้า</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Details  -->
                  <h2 class="text-uppercase">LG V30</h2><br>

                  <img class="img-fluid d-block mx-auto" src="img/product/04v302.jpg" alt="">
                  <p>
                    Weight: 158g | Dimensions: 151.7 x 75.4 x 7.3mm | OS: Android 7 | Screen size: 6.0-inch
                    | Resolution: 1440 x 2880 | CPU: Snapdragon 835 | RAM: 4GB | Storage: 64/128GB
                    | Battery: 3300mAh | Rear camera: 16MP+16MP | Front camera: 5MP

                  </p>

                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    หยิบใส่ตระกร้า</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!--  Details -->
                  <h2 class="text-uppercase">Huawei P20 Pro</h2><br>

                  <img class="img-fluid d-block mx-auto" src="img/product/05p20.png" alt="">
                  <p>
                    Weight: 165g | Dimensions: 149.1 x 70.8 x 7.7 mm | OS: Android 8.1 | Screen size: 5/8-inch
                    | Resolution: 1080 x 2240  | CPU: Kirin 970 | RAM: 4GB | Storage: 128GB
                    | Battery: 3,400mAh | Rear camera: 12MP + 20MP | Front camera: 24MP
                  </p>

                  <button class="btn btn-primary" data-dismiss="modal" type="button">

                    หยิบใส่ตระกร้า</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!--  Details  -->
                  <h2 class="text-uppercase">HUAWEI MATE 10 PRO</h2><br>

                  <img class="img-fluid d-block mx-auto" src="img/product/05p20.png"  alt="">
                  <p>
                       Weight: 178g | Dimensions: 154.2 x 74.5 x 7.9mm | OS: Android 8 | Screen size: 6-inch
                       | Resolution: 1080 x 2160 | CPU: Kirin 970 | RAM: 6GB | Storage: 128GB | Battery: 4,000mAh
                       | Rear camera: 20MP+12MP | Front camera: 8MP

                  </p>

                  <button class="btn btn-primary" data-dismiss="modal" type="button">

                      หยิบใส่ตระกร้า</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>
</html>
