<?php
session_start();
$vet_id=$_SESSION['vet_id'];
$mysqli = new mysqli('localhost', 'root', '', 'gestion_veterinaire');
if(isset($_GET['date'])){
    $date = $_GET['date'];
    $stmt=$mysqli->prepare('SELECT * from intervention where date=? and veterinaire=?');
  $stmt->bind_param('si',$date,$vet_id);
  $bookings=array();
  if($stmt->execute()){
    $result =$stmt->get_result();
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        $bookings[]=$row['timeslot'];
      }
      $stmt->close();
    }
  }
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $timeslot = $_POST['timeslot'];
    $stmt=$mysqli->prepare('SELECT * from intervention where date=? AND timeslot=? AND veterinaire=?');
  $stmt->bind_param('ssi',$date,$timeslot,$vet_id);
  if($stmt->execute()){
    $result =$stmt->get_result();
    if($result->num_rows>0){
       $msg = "<div class='alert alert-danger'>Déjà Réservé</div>";
    }else{
      $stmt = $mysqli->prepare("INSERT INTO intervention (beneficiaire, timeslot, veterinaire, date) VALUES (?,?,?,?)");
      $stmt->bind_param('ssss', $name, $timeslot, $vet_id, $date);
      $stmt->execute();
      $msg = "<div class='alert alert-success'>Réservation Accomplie</div>";
      $bookings[]=$timeslot;
      $stmt->close();
      $mysqli->close();
    }
  }
    
  
}
    


$duration=240;
$transport=120;
$start="08:00";
$end="18:00";


function timeslots($duration,$transport,$start,$end){
  $start= new DateTime($start);
  $end= new DateTime($end);
  $interval = new DateInterval("PT".$duration."M");
  $transportInterval= new DateInterval("PT".$transport."M");
  $slots=array();

  for($intStart=$start;$intStart<$end;$intStart->add($interval)->add($transportInterval))
  {
    $endPeriod= clone $intStart;
    $endPeriod->add($interval);
    if($endPeriod>$end){
      break;
    }

    $slots[]=$intStart->format("H:iA")."-".$endPeriod->format("H:iA");
  }

  return $slots;
}


?>

<html >

  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Firma</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/Asset1.png">
    <!-- Vendor CSS (Icon Font) -->

    <!-- 
<link rel="stylesheet" href="assets/css/vendor/fontawesome.min.css" />
<link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.min.css" /> 
-->


    <!-- Plugins CSS (All Plugins Files) -->


    <!-- 
<link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
<link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
<link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css" />
<link rel="stylesheet" href="assets/css/plugins/aos.min.css" />
<link rel="stylesheet" href="assets/css/plugins/nice-select.min.css" />
-->


    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body>
 <!-- Header Section Start -->
 <div class="header section">

<!-- Header Top Start -->
<div class="header-top bg-success">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Top Message Start -->
            <div class="col-md-12 col-lg-6 text-lg-start text-center">
                <div class="header-top-msg-wrapper">
                    <p class="header-top-message">Welcome to Firma online store</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 text-end d-none d-lg-block">
                <div class="header-top-settings">
                    <ul class="nav align-items-center justify-content-end">
                        <li class="curreny-wrap">
                            $ Currency
                            <i class="fa fa-angle-down"></i>
                            <ul class="dropdown-list curreny-list">
                                <li><a href="#">$ USD</a></li>
                                <li><a href="#">€ EURO</a></li>
                            </ul>
                        </li>
                        <li class="language"> English<i class="fa fa-angle-down"></i>
                            <ul class="dropdown-list">
                                <li><a href="#">english</a>
                                </li>
                                <li><a href="#">french</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header Top Message End -->

        </div>
    </div>
</div>
<!-- Header Top End -->

<!-- Header Bottom Start -->
<div class="header-bottom">
    <div class="header-sticky">
        <div class="container">
            <div class="row align-items-center position-relative">

                <!-- Header Logo Start -->
                <div class="col-md-6 col-lg-3 col-xl-2 col-6">
                    <div class="header-logo">
                        <a href="../index.php"><img src="images/Asset1.png" alt="Site Logo" style="width: 70%"  /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Menu Start -->
                <div class="col-lg-6 d-none d-lg-block">

                    <div class="main-menu">
                        <ul>
                            <li class="has-children">
                                <a href="index.php">Home </a>
                            </li>
                            <li class="has-children position-static">
                                <a href="#">Shop <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                <li><a href="shop.php">shop</a></li>
                                    <li><a href="index-2.html">shop</a></li>         
                                </ul>
                            </li>
                        
                            
                            <li><a href="about.html">About</a></li>
                            <li><a href="../Web-x-GestionContact/index.php">Contact</a></li>
                            <li><a href="http://localhost/github/frontendyoussef/views/shop.php">Event</a></li>
                        </ul>
                    </div>

                    </div>
                <!-- Header Menu End -->

                <!-- Header Action Start -->
                <div class="col-md-6 col-lg-3 col-xl-4 col-6 justify-content-end">
                    <div class="header-actions">
                       
                        <div class="dropdown-user d-none d-lg-block">
                            <a href="javascript:void(0)" class="header-action-btn"><i class="pe-7s-user"></i></a>
                            <ul class="dropdown-menu-user">
                                <li><a class="dropdown-item" href="../front-client/login.php">login</a></li>
                                <li><a class="dropdown-item" href="../front-client/register.php">register</a></li>
                                
                            </ul>
                        </div>
                      
                        
                        <!-- Mobile Menu Hambarger Action Button Start -->
                        <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-lg-none d-md-block">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Mobile Menu Hambarger Action Button End -->

                    </div>
                </div>
                <!-- Header Action End -->

            </div>
        </div>
    </div>
</div>
<!-- Header Bottom End -->

<!-- Offcanvas Search Start -->
<div class="offcanvas-search">
    <div class="offcanvas-search-inner">

        <!-- Button Close Start -->
        <div class="offcanvas-btn-close">
            <i class="pe-7s-close"></i>
        </div>
        <!-- Button Close End -->

        <!-- Offcanvas Search Form Start -->
        <form class="offcanvas-search-form" action="#">
            <input type="text" placeholder="Search Product..." class="offcanvas-search-input">
        </form>
        <!-- Offcanvas Search Form End -->

    </div>
</div>
<!-- Offcanvas Search End -->

<!-- Cart Offcanvas Start -->
<div class="cart-offcanvas-wrapper">
    <div class="offcanvas-overlay"></div>

    <!-- Cart Offcanvas Inner Start -->
    <div class="cart-offcanvas-inner">

        <!-- Button Close Start -->
        <div class="offcanvas-btn-close">
            <i class="pe-7s-close"></i>
        </div>
        <!-- Button Close End -->

        <!-- Offcanvas Cart Content Start -->
        <div class="offcanvas-cart-content">

            <!-- Cart Product/Price Start -->
            <div class="cart-product-wrapper mb-4 pb-4 border-bottom">

                <!-- Single Cart Product Start -->
                <div class="single-cart-product">
                    <div class="cart-product-thumb">
                        <a href="single-product.html"><img src="assets/images/products/small-product/1.jpg" alt="Cart Product"></a>
                    </div>
                    <div class="cart-product-content">
                        <h3 class="title"><a href="single-product.html">New badge product</a></h3>
                        <div class="product-quty-price">
                            <span class="cart-quantity">3 <strong> × </strong></span>
                            <span class="price">
          <span class="new">$70.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Single Cart Product End -->

                <!-- Product Remove Start -->
                <div class="cart-product-remove">
                    <a href="#"><i class="pe-7s-close"></i></a>
                </div>
                <!-- Product Remove End -->

            </div>
            <!-- Cart Product/Price End -->

            <!-- Cart Product/Price Start -->
            <div class="cart-product-wrapper mb-4 pb-4 border-bottom">

                <!-- Single Cart Product Start -->
                <div class="single-cart-product">
                    <div class="cart-product-thumb">
                        <a href="single-product.html"><img src="assets/images/products/small-product/2.jpg" alt="Cart Product"></a>
                    </div>
                    <div class="cart-product-content">
                        <h3 class="title"><a href="single-product.html">Soldout new product</a></h3>
                        <div class="product-quty-price">
                            <span class="cart-quantity">4 <strong> × </strong></span>
                            <span class="price">
          <span class="new">$80.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Single Cart Product End -->

                <!-- Product Remove Start -->
                <div class="cart-product-remove">
                    <a href="#"><i class="pe-7s-close"></i></a>
                </div>
                <!-- Product Remove End -->

            </div>
            <!-- Cart Product/Price End -->

            <!-- Cart Product/Price Start -->
            <div class="cart-product-wrapper mb-4 pb-4 border-bottom">

                <!-- Single Cart Product Start -->
                <div class="single-cart-product">
                    <div class="cart-product-thumb">
                        <a href="single-product.html"><img src="assets/images/products/small-product/1.jpg" alt="Cart Product"></a>
                    </div>
                    <div class="cart-product-content">
                        <h3 class="title"><a href="single-product.html">New badge product</a></h3>
                        <div class="product-quty-price">
                            <span class="cart-quantity">2 <strong> × </strong></span>
                            <span class="price">
          <span class="new">$50.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Single Cart Product End -->

                <!-- Product Remove Start -->
                <div class="cart-product-remove">
                    <a href="#"><i class="pe-7s-close"></i></a>
                </div>
                <!-- Product Remove End -->

            </div>
            <!-- Cart Product/Price End -->

            <!-- Cart Product Total Start -->
            <div class="cart-product-total mb-4 pb-4 border-bottom">
                <span class="value">Total</span>
                <span class="price">220$</span>
            </div>
            <!-- Cart Product Total End -->

            <!-- Cart Product Button Start -->
            <div class="cart-product-btn mt-4">
                <a href="cart.html" class="btn btn-light btn-hover-success w-100"><i class="fa fa-shopping-cart"></i> View cart</a>
                <a href="checkout.html" class="btn btn-light btn-hover-success w-100 mt-4"><i class="fa fa-share"></i> Checkout</a>
            </div>
            <!-- Cart Product Button End -->

        </div>
        <!-- Offcanvas Cart Content End -->

    </div>
    <!-- Cart Offcanvas Inner End -->
</div>
<!-- Cart Offcanvas End -->

</div>
<!-- Header Section End -->


<!-- Breadcrumb Section Start -->
<div class="section">

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-success">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li>
                    <a href="index.html"><i class="fa fa-home"></i> </a>
                </li>
                <li class="active"> Shop</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

</div>

    <center>
    <div class="container">
        <h1 class="text-center">Réserver pour le: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
        <div class="row">
          <div class="col-md-12">
            <?php echo(isset($msg))?$msg:"";?>
          </div>
           <?php $timeslots=timeslots($duration,$transport,$start,$end);
            foreach($timeslots as $ts){
            ?>
            <div class="center">
            <div class="form-group">
              <?php if(in_array($ts, $bookings)){ ?>
                <button class="btn btn-danger"><?php echo$ts;?></button>
              <?php }else{ ?>
                <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo$ts;?></button>
              <?php } ?>

             
            </div>
            </div>
            <?php } ?>    
        </div>
    </div>
  </center>
  <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Réservation pour le: <span id="slot"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post">
                               <div class="form-group">
                                    <label for="">Séance</label>
                                    <input readonly type="text" class="form-control" id="timeslot" name="timeslot">
                                </div>
                                <div class="form-group">
                                    <label for="">Bénéficiaire</label>
                                    <input required type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group pull-right">
                                    <button name="submit" type="submit" class="btn btn-primary">Confirmer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
$(".book").click(function(){
    var timeslot = $(this).attr('data-timeslot');
    $("#slot").html(timeslot);
    $("#timeslot").val(timeslot);
    $("#myModal").modal("show");
});
</script>
<form action="">
<div class="container">
<div class="single-input-item mb-3">
<br>
                                <a href="nessim.php"class="btn btn btn-dark btn-hover-success rounded-0">Back</a>
                            </div>
                            </div>
                            </form>
<footer class="section footer-section">
        <!-- Footer Top Start -->
        <div class="footer-top bg-success section-padding">
            <div class="container">
                <div class="row mb-n8">
                    <div class="col-12 col-sm-6 col-lg-3 mb-8">
                        <div class="single-footer-widget">
                            <h1 class="widget-title">About Us</h1>
                            <p class="desc-content">We are a team of designers and developers that create high quality wordpress, shopify, Opencart</p>
                            <!-- Soclial Link Start -->
                            <div class="widget-social justify-content-start mb-n2">
                                <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                            <!-- Social Link End -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-8">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Planning</h2>
                            <ul class="contact-links">
                                <li><i class="pe-7s-home"></i> <span>Your address goes here</span> </li>
                                <li><i class="pe-7s-mail"></i><a href="mailto:info@example.com"> info@example.com</a></li>
                                <li><i class="pe-7s-call"></i><a href="tel:+012-3456-789"> +012 3456 789</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-8">
                        <div class="single-footer-widget aos-init aos-animate">
                            <h2 class="widget-title">Information</h2>
                            <ul class="widget-list">
                                <li><a href="contact.html">Terms & Conditions</a></li>
                                <li><a href="contact.html">Payment Methode</a></li>
                                <li><a href="contact.html">Product Warranty</a></li>
                                <li><a href="contact.html">Return Process</a></li>
                                <li><a href="contact.html">Payment Security</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-8">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Signup for newsletter</h2>
                            <div class="widget-body">
                                <!-- Newsletter Form Start -->
                                <div class="newsletter-form-wrap pt-1">
                                    <form id="mc-form" class="mc-form">
                                        <input type="email" id="mc-email" class="form-control email-box mb-4" placeholder="demo@example.com" name="EMAIL">
                                        <button id="mc-submit" class="newsletter-btn" type="submit">Subscribe</button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                                <!-- Newsletter Form End -->
                                <p class="desc-content mb-0">Join over 1,000 people who get free and fresh content delivered automatically each time we publish</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom bg-warning pt-4 pb-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <div class="copyright-content">
                            <p class="mb-0">© 2021 <strong>Firma </strong> Made with <i class="fa fa-heart text-danger"></i> by <a href="https://web-x.com/">Web-x.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>


  </body>

</html>