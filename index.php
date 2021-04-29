<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog using PHP & MySQL</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico">

  


    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">





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
                    <p class="header-top-message"></p>
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
                        <a href="index.html"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Menu Start -->
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="main-menu">
                        <ul>
                            <li class="has-children">
                                <a href="#">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                </ul>
                            </li>
                            <li class="has-children position-static">
                                <a href="#">Shop <i class="fa fa-angle-down"></i></a>
                                <ul class="mega-menu row">
                                    <li class="col-3">
                                        <h4 class="mega-menu-title">Shop Layout</h4>
                                        <ul class="mb-n2">
                                            <li><a href="shop.html">Shop Grid</a></li>
                                            <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="shop-list-fullwidth.html">List Fullwidth</a></li>
                                            <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">List Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-3">
                                        <h4 class="mega-menu-title">Product Layout</h4>
                                        <ul class="mb-n2">
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                            <li><a href="single-product-group.html">Single Product Group</a></li>
                                            <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                            <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                            <li><a href="single-product-slider.html">Single Product Slider</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-3">
                                        <h4 class="mega-menu-title">Product Layout</h4>
                                        <ul class="mb-n2">
                                            <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                            <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                            <li><a href="single-product-tab-style-left.html">Tab Style Left</a></li>
                                            <li><a href="single-product-tab-style-right.html">Tab Style Right</a></li>
                                            <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                            <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-3">
                                        <h4 class="mega-menu-title">Other Pages</h4>
                                        <ul class="mb-n2">
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login.html">Loging | Register</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Menu End -->

                <!-- Header Action Start -->
                <div class="col-md-6 col-lg-3 col-xl-4 col-6 justify-content-end">
                    <div class="header-actions">
                        <a href="javascript:void(0)" class="header-action-btn header-action-btn-search d-none d-lg-block"><i class="pe-7s-search"></i></a>
                        <div class="dropdown-user d-none d-lg-block">
                            <a href="javascript:void(0)" class="header-action-btn"><i class="pe-7s-user"></i></a>
                            <ul class="dropdown-menu-user">
                                <li><a class="dropdown-item" href="#">Usd</a></li>
                                <li><a class="dropdown-item" href="#">Pound</a></li>
                                <li><a class="dropdown-item" href="#">Taka</a></li>
                            </ul>
                        </div>
                        <a href="wishlist.html" class="header-action-btn header-action-btn-wishlist">
                            <i class="pe-7s-like"></i>
                        </a>
                        <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart">
                            <i class="pe-7s-cart"></i>
                            <span class="header-action-num">3</span>
                        </a>
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
                    <a href="index.html"><i class="fa fa-blog"></i> </a>
                </li>
                <li class="active"> Blog</li>
                
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

</div>
 <!-- Contact Us Section Start -->
 <div class="section section-margin">
        <div class="">
            <div class="">
                <div class="">
                   
                    
                
                    

    <div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    blog has been added successfully
                </div>
            <?php }?>
        <?php } ?>

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">+ Create a new blog</a>
        </div>

        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-success mt-5" style="width: 18rem;">
                        <div class="card-body">
                           <center> <h1 class="btn btn primary"><?php echo $q['title'];?></h1></center>
                            <p class="card-text"><?php echo substr($q['content'], 0, 10);?>...</p>
                            <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
       
    </div>
    <p class="container"></p>
    <br><br>
                        <center>

                        <h2 class="title"></h2></center>

                        
                        
                    </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
                    </div>
                    <!-- Contact Form Wrapper End -->
                </div>
               
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- Contact us Section End -->

    <!-- Footer Section Start -->
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
                            <h2 class="widget-title">Contact Us</h2>
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
                                        <input type="email" id="mc-email" class="form-control email-box mb-4" placeholder="fray@example.com" name="EMAIL">
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
                            <p class="mb-0">© 2021 <strong>LafirmA </strong> Made with WebX <i class="fa fa-heart text-danger"></i> by <a href="https://hasthemes.com/">HasThemes.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer Section End -->


    <a href="#" class="" id="scroll-top">
        <i class=""></i>
        <i class=""></i>
    </a>

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Mobile Menu Inner Wrapper Start -->
            <div class="mobile-menu-inner-wrapper">
                <!-- Mobile Menu Search Box Start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input class="search-input-offcanvas" type="text" placeholder="Search product...">
                        <button class="search-btn"><i class="pe-7s-search"></i></button>
                    </form>
                </div>
                <!-- Mobile Menu Search Box End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="has-children">
                                <a href="#">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                    <li><a href="index-3.html">Home Three</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="shop.html">Shop Grid</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-fullwidth.html">Shop List Fullwidth</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="">Single Product</a></li>
                                    <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                    <li><a href="single-product-group.html">Single Product Group</a></li>
                                    <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                    <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                    <li><a href="single-product-slider.html">Single Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                    <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                    <li><a href="single-product-tab-style-left.html">Tab Style Left</a></li>
                                    <li><a href="single-product-tab-style-right.html">Tab Style Right</a></li>
                                    <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login.html">Loging | Register</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->

                <!-- Language, Currency & Link Start -->
                <div class="offcanvas-lag-curr mb-6">
                    <div class="header-top-lan-curr-link">
                        <div class="header-top-lan dropdown">
                            <h4 class="title">Language:</h4>
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Japanese</a></li>
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                                <li><a class="dropdown-item" href="#">Romanian</a></li>
                            </ul>
                        </div>
                        <div class="header-top-curr dropdown">
                            <h4 class="title">Currency:</h4>
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="#">USD</a></li>
                                <li><a class="dropdown-item" href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Language, Currency & Link End -->

                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto bottom-0">

                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                        <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                    </ul>
                    <!-- Contact Links End -->

                    <!-- Social Widget Start -->
                    <div class="widget-social">
                        <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                    <!-- Social Widget Ende -->
                </div>
                <!-- Contact Links/Social Links End -->
            </div>
            <!-- Mobile Menu Inner Wrapper End -->

        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->

    <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->

    <!-- 
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script> 
    -->


    <!-- Plugins JS -->

    <!-- 
    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/countdown.min.js"></script>
    <script src="assets/js/plugins/lightgallery-all.min.js"></script> 
    -->


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!--Main JS-->
    <script src="assets/js/main.js"></script>
</body>
</html>


