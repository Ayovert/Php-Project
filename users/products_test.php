<?php require("php/connect_to_db.php");?>
<!DOCTYPE html>
<html lang="en">


<!--php
require("php/connect_to_products.php"); 
    if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $sql = "SELECT * FROM products ORDER BY date_added ";
    $result = $mysqli->query($sql);

    if ($result = $mysqli->query($sql) && (count($result)) == 1) {
        $row = mysqli_fetch_row($result);
        $product_id = $row['product_id'];
        $product_type = $row['product_type'];
        $product_name = $row['product_name'];
        $product_price = $row['product_price'];
        $product_status = $row['product_status'];
        $last_added = date("Y-m-d H:i:s");

    }
}
//$mysqli->close();
?>-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>E-come | Multi-Purpose HTML Template for Electronics Store</title>
    <?php include("styles.php") ?>
</head>

<body>
    <!-- push menu-->
    <div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="icon-close f-20"></i></span>
            <div class="clearfix"></div>
            <form role="search" method="get" id="searchform" class="searchform" action="/search">
                <div>
                    <label class="screen-reader-text" for="q"></label>
                    <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                    <input type="hidden" name="type" value="product">
                    <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
                </div>
            </form>
            <ul class="nav-home5 js-menubar">
                <li class="level1 active dropdown"><a href="#">Home</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="home1.html" title="">Demo 1</a></li>
                        <li class="level2"><a href="home2.html" title="">Demo 2</a></li>
                        <li class="level2"><a href="home3.html" title="">Demo 3</a></li>
                        <li class="level2"><a href="home4.html" title="">Demo 4</a></li>
                        <li class="level2"><a href="home5.html" title="">Demo 5</a></li>
                        <li class="level2"><a href="#" title="">Demo 6</a></li>
                    </ul>
                </li>
                <li class="level1 active dropdown"><a href="#">Shop</a>
                    <span class="icon-sub-menu"></span>
                    <div class="menu-level1 js-open-menu">
                        <ul class="level1">
                            <li class="level2">
                                <a href="#">Shop Layout</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="shop_full.html" title="">shop Full Width</a></li>
                                    <li class="level3"><a href="shopgrid_v1.html" title="">Shop Grid v.1</a></li>
                                    <li class="level3"><a href="shopgrid_v2.html" title="">Shop Grid v.2</a></li>
                                    <li class="level3"><a href="shoplist.html" title="">Shop List</a></li>
                                    <li class="level3"><a href="shopleft_sidebar.html" title="">Shop Left Sidebar</a></li>
                                    <li class="level3"><a href="shopright_sidebar.html" title="">Shop Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Categories</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="cat_fullwidth.html" title="">Categories Full Width</a></li>
                                    <li class="level3"><a href="cat_left_sidebar.html" title="">Categories Left Sidebar</a></li>
                                    <li class="level3"><a href="cat_right_sidebar.html" title="">Categories Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Single Product Type</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="bundle.html" title="">Bundle</a></li>
                                    <li class="level3"><a href="pin_product.html" title="">Pin Product</a></li>
                                    <li class="level3"><a href="360degree.html" title="">360 Degree</a></li>
                                    <li class="level3"><a href="feature_video.html" title="">Featued video</a></li>
                                    <li class="level3"><a href="simple.html">Simple</a></li>
                                    <li class="level3"><a href="variable.html">Variable</a></li>
                                    <li class="level3"><a href="affilate.html">External / Affiliate</a></li>
                                    <li class="level3"><a href="grouped.html">Grouped</a></li>
                                    <li class="level3"><a href="outofstock.html">Out of stock</a></li>
                                    <li class="level3"><a href="onsale.html">On sale</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Single Product Layout</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="product_extended.html" title="">Product Extended</a></li>
                                    <li class="level3"><a href="product_sidebar.html" title="">Product Left Sidebar</a></li>
                                    <li class="level3"><a href="product_right_sidebar.html" title="">Product Right Sideba</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Other Pages</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="shop_full.html" title="">Shop</a></li>
                                    <li class="level3"><a href="cart.html" title="">Cart</a></li>
                                    <li class="level3"><a href="wishlist.html" title="">My Wishlist</a></li>
                                    <li class="level3"><a href="checkout.html" title="">Checkout</a></li>
                                    <li class="level3"><a href="myaccount.html" title="">My Account</a></li>
                                    <li class="level3"><a href="track.php" title="">Track Your Order</a></li>
                                    <li class="level3"><a href="quickview.html" title="">Quick View</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="level1 active dropdown"><a href="#">Mega Menu</a></li>
                <li class="level1">
                    <a href="#">Pages</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="aboutus.html" title="About Us ">About Us </a></li>
                        <li class="level2"><a href="contactus.html" title="Contact">Contact</a></li>
                        <li class="level2"><a href="faq.html" title="FAQs">FAQs</a></li>
                        <li class="level2"><a href="404.html" title="404">404</a></li>
                        <li class="level2"><a href="commingsoon.html" title="Coming Soon">Coming Soon</a></li>
                    </ul>
                </li>
                <li class="level1">
                    <a href="#">Blog</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="blog-standar.html" title="Blog Standar">Blog Standar</a></li>
                        <li class="level2"><a href="blog_grid.html" title="Blog Gird">Blog Gird</a></li>
                        <li class="level2"><a href="blog-standar.html" title="Blog Sidebar">Blog Sidebar</a></li>
                        <li class="level2"><a href="blog-single-post.html" title="Blog Single Post">Blog Single Post</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- end push menu-->
    <div class="wrappage">
        <header id="header" class="header-v1">
            <div class="header-top-banner">
                <a href="#"><img src="img/banner-top1.jpg" alt="" class="img-reponsive"></a>
            </div>
            <div class="topbar">
                <div class="container container-240">
                    <div class="row flex">
                        <div class="col-md-6 col-sm-6 col-xs-4 flex-left">
                            <div class="topbar-left">
                                <div class="element element-store hidden-xs hidden-sm">
                                    <a id="label1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/icon-map.png" alt="">
                                      <span>Store Location</span>
                                      
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="label1">
                                        <li><a href="#">New York</a></li>
                                        <li><a href="#">California</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                                <div class="element hidden-xs hidden-sm">
                                    <a href="track.php"><img src="img/icon-track.png" alt=""><span>Track Your Order</span></a>
                                </div>
                                <div class="element element-account hidden-md hidden-lg">
                                    <a href="#">My Account</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-8 flex-right">
                            <div class="topbar-right">
                                <div class="element hidden-xs hidden-sm">
                                    <a href="#">Buyer Protection </a>
                                </div>
                                <div class="element hidden-xs hidden-sm">
                                    <a href="#">Help</a>
                                </div>
                                <div class="element hidden-xs hidden-sm">
                                    <a href="#"><img src="img/icon-phone.png" alt=""><span>Save big on our app!</span></a>
                                </div>
                                <div class="element element-leaguage">
                                    <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/icon-l.png" alt="">
                                      <span>English</span>
                                      <span class="ion-ios-arrow-down f-10 e-arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="label2">
                                        <li><a href="#">EN</a></li>
                                        <li><a href="#">DE</a></li>
                                        <li><a href="#">FR</a></li>
                                    </ul>
                                </div>
                                <div class="element element-currency">
                                    <a id="label3" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    
                                      <span>USD</span>
                                      <span class="ion-ios-arrow-down f-10 e-arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="label3">
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">AUD</a></li>
                                        <li><a href="#">EUR</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-center">
                <div class="container container-240">
                    <div class="row flex">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 v-center header-logo">
                            <a href="#"><img src="img/logo.png" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="col-lg-7 col-md-7 v-center header-search hidden-xs hidden-sm">
                            <form method="get" class="searchform ajax-search" action="/search" role="search">
                                <input type="hidden" name="type" value="product">
                                <input type="text" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" name="q" class="form-control" placeholder="i’m shoping for...">
                                <ul class="list-product-search hidden-xs hidden-sm">
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/iphonex.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/sound.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Smartphone 6S 64GB LTE</h3>
                                        </a>
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/phone4.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/phone5.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Smartphone 6S 64GB LTE </h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/phone1.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                        </a>
                                    </li>
                                </ul>
                                <div class="search-panel">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href='#'>All categories <span class="fa fa-caret-down"></span></a>
                                    <ul id="category" class="dropdown-menu dropdown-category">
                                        <li><a href="#">TV & Video</a></li>
                                        <li><a href="#">Home Audio & Theater</a></li>
                                        <li><a href="#">Camera, Photo & Video</a></li>
                                        <li><a href="#">Cell Phones & Accessories</a></li>
                                        <li><a href="#">Headphones</a></li>
                                        <li><a href="#">Car Electronics</a></li>
                                        <li><a href="#">Electronics Showcase</a></li>
                                    </ul>
                                </div>
                                <span class="input-group-btn">
                                          <button class="button_search" type="button"><i class="ion-ios-search-strong"></i></button>
                                </span>
                            </form>
                            <div class="tags">
                                <span>Most searched :</span>
                                <a href="#">umbrella</a>
                                <a href="#">hair accessories </a>
                                <a href="#">diamond</a>
                                <a href="#"> painting slime</a>
                                <a href="#">sunglasses</a>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6 v-center header-sub">
                            <div class="right-panel">
                                <div class="header-sub-element hidden-xs hidden-sm">
                                    <div class="sub-left">
                                        <img src="img/icon-call.png" alt="">
                                    </div>
                                    <div class="sub-right">
                                        <span>Call Us Free</span>
                                        <div class="phone">(+123) 456 789 </div>
                                    </div>
                                </div>
                                <div class="header-sub-element row">
                                    <a class="hidden-xs hidden-sm" href=""><img src="img/icon-user.png" alt=""></a>
                                    <a href="#"><img src="img/icon-heart.png" alt=""></a>
                                    <div class="cart">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="label5">
                                            <img src="img/icon-cart.png" alt="">
                                            <span class="count cart-count">0</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-cart">
                                            <ul class="mini-products-list">
                                                <li class="item-cart">
                                                    <div class="product-img-wrap">
                                                        <a href="#"><img src="img/cart1.jpg" alt="" class="img-reponsive"></a>
                                                    </div>
                                                    <div class="product-details">
                                                        <div class="inner-left">
                                                            <div class="product-name"><a href="#">Harman Kardon Onyx Studio </a></div>
                                                            <div class="product-price">
                                                                $ 60.00 <span>( x2)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>
                                                </li>
                                                <li class="item-cart">
                                                    <div class="product-img-wrap">
                                                        <a href="#"><img src="img/cart1.jpg" alt="" class="img-reponsive"></a>
                                                    </div>
                                                    <div class="product-details">
                                                        <div class="inner-left">
                                                            <div class="product-name"><a href="#">Harman Kardon Onyx Studio </a></div>
                                                            <div class="product-price">
                                                                $ 60.00 <span>( x2)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>
                                                </li>
                                            </ul>
                                            <div class="bottom-cart">
                                                <div class="cart-price">
                                                    <span>Subtotal</span>
                                                    <span class="price-total">$ 120.00</span>
                                                </div>
                                                <div class="button-cart">
                                                    <a href="#" class="cart-btn btn-viewcart">View Cart</a>
                                                    <a href="#" class="cart-btn e-checkout btn-gradient">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="hidden-md hidden-lg icon-pushmenu js-push-menu">
                                        <i class="fa fa-bars f-15"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom hidden-xs hidden-sm">
                <div class="container container-240">
                    <div class="row flex lr2">
                        <div class="col-lg-3 widget-verticalmenu">
                            <div class="navbar-vertical">
                                <button class="navbar-toggles"><span>All Departments</span></button>
                            </div>
                            <div class="vertical-wrapper">
                                <ul class="vertical-group">
                                    <li class="vertical-item level1 mega-parent"><a href="#">New Arrivals</a></li>
                                    <li class="vertical-item level1 mega-parent"><a href="#">Top 100 Best Seller <span class="h-ribbon e-red mg-l10">Hot</span></a></li>
                                    <li class="vertical-item level1 vertical-drop"><a href="#">TV & Video</a>
                                        <div class="menu-level-1 dropdown-menu vertical-menu v2 tvbg pd2 style1">
                                            <ul class="level1">
                                                <li class="level2 col-md-5">
                                                    <a href="#">TVs by Type</a>
                                                    <ul class="menu-level-2">
                                                        <li class="level3"><a href="#" title="">4K Ultra HD</a></li>
                                                        <li class="level3"><a href="#" title="">Smart TVs</a></li>
                                                        <li class="level3"><a href="#" title="">LED & LCD TVs & amplifiers</a></li>
                                                        <li class="level3"><a href="#" title="">OLED TVs</a></li>
                                                        <li class="level3"><a href="#" title="">QLED/Quantum Dot TVs  </a></li>
                                                    </ul>
                                                    <a href="#">Blu-ray & DVD Players</a>
                                                    <ul class="menu-level-2">
                                                        <li class="level3"><a href="#" title="">4K Blu-ray Players</a></li>
                                                        <li class="level3"><a href="#" title="">Streaming Blu-ray Players</a></li>
                                                        <li class="level3"><a href="#" title="">3D Blu-ray Players</a></li>
                                                        <li class="level3"><a href="#" title="">Portable Blu-ray Players</a></li>
                                                        <li class="level3"><a href="#" title="">DVD Recorders</a></li>
                                                    </ul>
                                                </li>
                                                <li class="level2 col-md-7">
                                                    <a href="# ">Home Audio</a>
                                                    <ul class="menu-level-2">
                                                        <li class="level3"><a href="#" title="">Home Theater Systems</a></li>
                                                        <li class="level3"><a href="#" title="">Soundbars</a></li>
                                                        <li class="level3"><a href="#" title="">Speakers</a></li>
                                                        <li class="level3"><a href="#" title="">Receivers & Amplifiers</a></li>
                                                        <li class="level3"><a href="#" title="">Premium Audio</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="vertical-item level1 vertical-drop"><a href="#">Home Audio & Theater</a>
                                        <div class="menu-level-1 dropdown-menu vertical-menu v2 homebg pd2 style1">
                                            <ul class="level1">
                                                <li class="level2 col-md-4">
                                                    <a href="#">Home theater</a>
                                                    <ul class="menu-level-2">
                                                        <li class="level3"><a href="#" title="">Sound bars</a></li>
                                                        <li class="level3"><a href="#" title="">Speakers</a></li>
                                                        <li class="level3"><a href="#" title="">Receivers & amplifiers</a></li>
                                                        <li class="level3"><a href="#" title="">Equalizers</a></li>
                                                        <li class="level3"><a href="#" title="">Phono preamps  </a></li>
                                                    </ul>
                                                </li>
                                                <li class="level2 col-md-4">
                                                    <a href="# ">Speakers</a>
                                                    <ul class="menu-level-2">
                                                        <li class="level3"><a href="#" title="">Bluetooth speakers</a></li>
                                                        <li class="level3"><a href="#" title="">Ceiling & in-wall speakers</a></li>
                                                        <li class="level3"><a href="#" title="">Digital music systems</a></li>
                                                        <li class="level3"><a href="#" title="">Outdoor</a></li>
                                                        <li class="level3"><a href="#" title="">Satellite speakers</a></li>
                                                    </ul>
                                                </li>
                                                <li class="level2 col-md-4">
                                                    <a href="#">Accessories</a>
                                                    <ul class="menu-level-2">
                                                        <li class="level3"><a href="#" title="">Receivers & amplifiers</a></li>
                                                        <li class="level3"><a href="#" title="">Cd & tape players</a></li>
                                                        <li class="level3"><a href="#" title="">Tuners</a></li>
                                                        <li class="level3"><a href="#" title="">Curntables</a></li>
                                                        <li class="level3"><a href="#" title="">Receivers & adapters</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="vertical-item level1 vertical-drop"><a href="#">Camera, Photo & Video</a>
                                        <div class="menu-level-1 dropdown-menu vertical-menu">
                                            <ul class="vertical-menu1">
                                                <li><a href="#">Car Audio</a></li>
                                                <li><a href="#">Radar Detectors</a></li>
                                                <li><a href="#">Car Safety & Security</a></li>
                                                <li><a href="#">Car Video</a></li>
                                                <li><a href="#">Two-Way Radios</a></li>
                                                <li><a href="#">CB Radios & Scanners</a></li>
                                                <li><a href="#">In-Dash Mounting Kits</a></li>
                                                <li><a href="#">Installation Accessories.</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="vertical-item level1 vertical-drop"><a href="#">Cell Phones & Accessories</a>
                                        <div class="menu-level-1 dropdown-menu vertical-menu v2 phonebg pd2 style1">
                                            <ul class="level1">
                                                <li class="level2 col-md-4">
                                                    <a href="#">Cell Phones</a>
                                                    <ul class="menu-level-2">
                                                        <li class="level3"><a href="#" title="">Samsung Galaxy S8</a></li>
                                                        <li class="level3"><a href="#" title="">iPhone 7/7 Plus</a></li>
                                                        <li class="level3"><a href="#" title="">iPhone 6</a></li>
                                                        <li class="level3"><a href="#" title="">Samsung Galaxy S7</a></li>
                                                        <li class="level3"><a href="#" title="">Unlocked Phones</a></li>
                                                    </ul>
                                                    <a href="#">Cases</a>
                                                    <ul class="menu-level-2">
                                                        <li class="level3"><a href="#" title="">4Armbands</a></li>
                                                        <li class="level3"><a href="#" title="">Armbands</a></li>
                                                        <li class="level3"><a href="#" title="">Cases</a></li>
                                                        <li class="level3"><a href="#" title="">Flip Cases</a></li>
                                                        <li class="level3"><a href="#" title="">Holsters & Clips</a></li>
                                                    </ul>
                                                </li>
                                                <li class="level2 col-md-8">
                                                    <a href="# ">Accessories</a>
                                                    <ul class="menu-level-2">
                                                        <li class="level3"><a href="#" title="">Batteries</a></li>
                                                        <li class="level3"><a href="#" title="">Bluetooth Headsets</a></li>
                                                        <li class="level3"><a href="#" title="">Bluetooth Speakers</a></li>
                                                        <li class="level3"><a href="#" title="">Car Accessories</a></li>
                                                        <li class="level3"><a href="#" title="">Chargers</a></li>
                                                    </ul>
                                                    <a href="# ">Connected Devices</a>
                                                    <ul class="menu-level-2">
                                                        <li class="level3"><a href="#" title="">Tablets</a></li>
                                                        <li class="level3"><a href="#" title="">Mobile Hotspots</a></li>
                                                        <li class="level3"><a href="#" title="">Smart Watches</a></li>
                                                        <li class="level3"><a href="#" title="">Wearable Technology</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="vertical-item level1 vertical-drop"><a href="#">Headphones</a>
                                        <div class="menu-level-1 dropdown-menu vertical-menu v2 headphonebg pd3 style1">
                                            <ul class="level1">
                                                <li class="level2 col-md-6">
                                                    <a href="#">Headphones</a>
                                                    <ul class="menu-level-2">
                                                        <li class="level3"><a href="#" title="">In-Ear & Earbud</a></li>
                                                        <li class="level3"><a href="#" title="">On-Ear</a></li>
                                                        <li class="level3"><a href="#" title="">Over-Ear</a></li>
                                                        <li class="level3"><a href="#" title="">Wireless</a></li>
                                                        <li class="level3"><a href="#" title="">Sports & Fitness</a></li>
                                                    </ul>
                                                </li>
                                                <li class="level2 col-md-6">
                                                    <a href="# ">Speaker System</a>
                                                    <ul class="menu-level-2">
                                                        <li class="level3"><a href="#" title="">Complete Systems</a></li>
                                                        <li class="level3"><a href="#" title="">Sound Bars</a></li>
                                                        <li class="level3"><a href="#" title="">Surround Sound</a></li>
                                                        <li class="level3"><a href="#" title="">Receivers & Amplifiers</a></li>
                                                        <li class="level3"><a href="#" title="">Equalizers</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="vertical-item level1 vertical-drop"><a href="#">Car Electronics</a>
                                        <div class="menu-level-1 dropdown-menu vertical-menu">
                                            <ul class="vertical-menu1">
                                                <li><a href="#">Car Audio</a></li>
                                                <li><a href="#">Radar Detectors</a></li>
                                                <li><a href="#">Car Safety & Security</a></li>
                                                <li><a href="#">Car Video</a></li>
                                                <li><a href="#">Two-Way Radios</a></li>
                                                <li><a href="#">CB Radios & Scanners</a></li>
                                                <li><a href="#">In-Dash Mounting Kits</a></li>
                                                <li><a href="#">Installation Accessories.</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="vertical-item level1 vertical-drop"><a href="#">Electronics Showcase</a>
                                        <div class="menu-level-1 dropdown-menu vertical-menu">
                                            <ul class="vertical-menu1">
                                                <li><a href="#">Car Audio</a></li>
                                                <li><a href="#">Radar Detectors</a></li>
                                                <li><a href="#">Car Safety & Security</a></li>
                                                <li><a href="#">Car Video</a></li>
                                                <li><a href="#">Two-Way Radios</a></li>
                                                <li><a href="#">CB Radios & Scanners</a></li>
                                                <li><a href="#">In-Dash Mounting Kits</a></li>
                                                <li><a href="#">Installation Accessories.</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="vertical-item level1 vertical-drop mega-parent"><a href="#">All categlories</a>
                                        <div class="menu-level-1 dropdown-menu vertical-menu v2 pd">
                                            <div class="row">
                                                <div class="col-md-4 text-center cate-item">
                                                    <a href="#"><img src="img/megamenu/cate1.jpg" alt="" class="img-reponsive"></a>
                                                    <h3><a href="#">Mirrorless Cameras</a></h3>
                                                </div>
                                                <div class="col-md-4 text-center cate-item">
                                                    <a href="#"><img src="img/megamenu/cate2.jpg" alt="" class="img-reponsive"></a>
                                                    <h3><a href="#">Lenses</a></h3>
                                                </div>
                                                <div class="col-md-4 text-center cate-item">
                                                    <a href="#"><img src="img/megamenu/cate3.jpg" alt="" class="img-reponsive"></a>
                                                    <h3><a href="#">Photography Drones</a></h3>
                                                </div>
                                                <div class="col-md-4 text-center cate-item">
                                                    <a href="#"><img src="img/megamenu/cate4.jpg" alt="" class="img-reponsive"></a>
                                                    <h3><a href="#">Sports & Action Cameras</a></h3>
                                                </div>
                                                <div class="col-md-4 text-center cate-item">
                                                    <a href="#"><img src="img/megamenu/cate5.jpg" alt="" class="img-reponsive"></a>
                                                    <h3><a href="#">Optics</a></h3>
                                                </div>
                                                <div class="col-md-4 text-center cate-item">
                                                    <a href="#"><img src="img/megamenu/cate6.jpg" alt="" class="img-reponsive"></a>
                                                    <h3><a href="#">Accessories</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 widget-left">
                            <div class="flex lr">
                                <nav class="main-menu">
                                    <div class="collapse navbar-collapse" id="myNavbar">
                                        <ul class="nav navbar-nav">
                                            <li class="level1"><a href="#"><img src="img/icon-diamond.png" alt="">Flash Deals</a></li>
                                            <li class="level1"><a href="#">Tech Discovery<span class="h-ribbon h-pos e-skyblue">New</span></a></li>
                                            <li class="level1"><a href="#">Trending Styles</a></li>
                                            <li class="level1"><a href="#">Gift Cards <span class="h-ribbon h-pos e-green">sale</span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <div class="header-bottom-right hidden-xs hidden-sm">
                                    <img src="img/icon-ship.png" alt="" class="img-reponsive">
                                    <span>Free Shipping on Orders $100</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->
        <div class="ads-group v3">
            <div class="container container-240">
                <div class="row">
                    <div class="col-lg-3 col-md-3 set-w"></div>
                    <div class="col-lg-9 col-md-9 set-w2">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="slide">
                                    <div class="e-slide v2 js-slider-3items">
                                        <div class="e-slide-img v2">
                                            <a href="#"><img src="img/slider/h1_s1.jpg" alt=""></a>
                                            <div class="box-center slide-content v3">
                                                <p class="cate v2 white text-center">Power to the pro</p>
                                                <h3 class="white v3 text-center">The vision is brighter than ever.</h3>
                                                <a href="#" class="slide-btn e-red-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </div>
                                        <div class="e-slide-img v2">
                                            <a href="#"><img src="img/slider/h1_s2.jpg" alt=""></a>
                                            <div class="box-center slide-content v3">
                                                <p class="cate v2 white text-center">Power to the pro</p>
                                                <h3 class="white v3 text-center">The vision is brighter than ever.</h3>
                                                <a href="#" class="slide-btn e-red-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </div>
                                        <div class="e-slide-img v2">
                                            <a href="#"><img src="img/slider/h1_s3.jpg" alt=""></a>
                                            <div class="box-center slide-content v3">
                                                <p class="cate v2 white text-center">Power to the pro</p>
                                                <h3 class="white v3 text-center">The vision is brighter than ever.</h3>
                                                <a href="#" class="slide-btn e-red-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="ads">
                                    <div class="banner-img banner-img2">
                                        <a href="#"><img src="img/banner/h1_b1.jpg" alt="" class="img-responsive"></a>
                                        <div class="h-banner-content v3">
                                            <p class="content-name">Mini Quick Chagre 3.0</p>
                                            <p class="content-price percent">Sale up to <span class="red">40</span></p>
                                            <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="homepage-banner">
            <div class="container container-240">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="banner-img banner-img2">
                            <a href="#"><img src="img/banner/h1_b2.jpg" alt="" class="img-responsive"></a>
                            <div class="h-banner-content">
                                <p class="content-name">The pro stage for your home</p>
                                <p class="content-price">From <span class="red">69.99</span></p>
                                <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="banner-img banner-img2">
                            <a href="#"><img src="img/banner/h1_b3.jpg" alt="" class="img-responsive"></a>
                            <div class="h-banner-content">
                                <p class="content-name">Smart speaker for music lovers</p>
                                <p class="content-price">From <span class="red">39.99</span></p>
                                <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flash-deals">
            <div class="container container-240">
                <div class="title-icon t-column">
                    <div class="t-inside">
                        <img src="img/flash-deals.png" alt="">
                    </div>
                    <h1>Flash Deals</h1>
                </div>
                <div class="owl-carousel owl-theme owl-cate js-owl-cate2">
                <?php
//include('connection.php');
    if (isset($_POST['product_id'])) {
        $sql = "DELETE FROM products WHERE product_id=$product_id";
        $result = $mysqli->query($sql);
    }
    

    $sql = "SELECT * FROM products";

    $result = $mysqli->query($sql);
    //if ($result = $mysqli->query($sql)) {


    ?>

<?php while ($row=mysqli_fetch_array($result)) { ?>
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head product-img">
                                <a href="#"><img src="img/product/<?php echo $row['product_id']; ?>.jpg" alt=""></a>
                                <div class="ribbon-price v3 red"><span>- 30% </span></div>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center"><?php echo $row['product_type']; ?></p>
                                <div class="product-price thin-price v3">
                                    <span class="red"><?php echo '$'.$row['product_price']; ?></span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#"><?php echo  $row['product_name'];?></a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available"><?php echo  $row['product_status'];?><strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php } ?>
                   <!-- <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head">
                                <a href="#"><img src="img/product/security.jpg" alt=""></a>
                                <div class="ribbon-price v3 red"><span>- 30% </span></div>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Security Sensors</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head">
                                <a href="#"><img src="img/product/iphonex.jpg" alt=""></a>
                                <div class="ribbon-price v3 red"><span>- 30% </span></div>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Smartphones</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head">
                                <a href="#"><img src="img/product/headphone2.jpg" alt=""></a>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Head phones</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head">
                                <a href="#"><img src="img/product/sonos.jpg" alt=""></a>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Head phones</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head">
                                <a href="#"><img src="img/product/headphone4.jpg" alt=""></a>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Head phones</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-countd pd-bd product-inner">
                        <div class="product-item-countd">
                            <div class="product-head">
                                <a href="#"><img src="img/product/fujifilm.jpg" alt=""></a>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center">Head phones</p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$79.00</span>
                                    <span class="old">$99.00</span>
                                </div>
                                <h3 class="product-title text-center v2"><a href="#">Esonstyle Rose Golden Bluetooth Headphone</a></h3>
                                <div class="deal-progress">
                                    <div class="deal-stock">
                                        <span class="stock-sold">19% already claimed</span>
                                        <span class="stock-available">Available: <strong>22</strong></span>
                                    </div>
                                    <div class="progress">
                                        <span class="progress-bar" style="width:27.5956%"></span>
                                    </div>
                                </div>
                                <div class="time-cound">
                                    <p class="text-center">Deal ends in :</p>
                                    <div class="countdown countdown-time" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
             </div>
         </div> 
        </div>
        <div class="product-tab bg-gradient bg-insinde">
            <div class="container container-240">
                <ul class="product-tab-sw">
                    <li class="active"><a data-toggle="tab" href="#feature">Featured</a></li>
                    <li class=""><a data-toggle="tab" href="#top-rated">Top rated</a></li>
                    <li class=""><a data-toggle="tab" href="#most">Most gifted</a></li>
                </ul>
                <div class="tab-content">
                    <div id="feature" class="tab-pane fade in active">
                        <div class="product-tab-pd js-multiple-row2">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="cart.php" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="wishlist.php" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="cart.php" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd4.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd4.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd4.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="top-rated" class="tab-pane fade">
                        <div class="product-tab-pd js-multiple-row2">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd4.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd4.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="most" class="tab-pane fade">
                        <div class="product-tab-pd js-multiple-row2">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd4.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle red"></a>
                                            <a href="#" class="circle gray"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/pd4.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Camera & Photo</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                            <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bestseller2">
            <div class="container container-240">
                <div class="h-heading">
                    <div class="title-icon t-inline">
                        <img src="img/iconbs.png" alt="">
                        <h1>Best Sellers</h1>
                    </div>
                    <ul class="product-tab-sw2">
                        <li class="active"><a data-toggle="tab" href="#tv" aria-expanded="true">TV & Video</a></li>
                        <li class=""><a data-toggle="tab" href="#audito" aria-expanded="false">Audio & Theater</a></li>
                        <li class=""><a data-toggle="tab" href="#camera" aria-expanded="false">Camera, Photo & Video</a></li>
                        <li class=""><a data-toggle="tab" href="#phone" aria-expanded="false">Cell Phones & Accessories</a></li>
                        <li class=""><a data-toggle="tab" href="#headphone" aria-expanded="false">Headphones</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="tv" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                                <div class="pd-bd product-inner v3">
                                    <div class="product-img v2">
                                        <a href="#"><img src="img/b-product1.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/xbox.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/fujifilm.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/ring.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="audito" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                                <div class="pd-bd product-inner v3">
                                    <div class="product-img v2">
                                        <a href="#"><img src="img/b-product2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/xbox.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/fujifilm.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/ring.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="camera" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                                <div class="pd-bd product-inner v3">
                                    <div class="product-img v2">
                                        <a href="#"><img src="img/b-product3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/xbox.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/fujifilm.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/ring.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="phone" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                                <div class="pd-bd product-inner v3">
                                    <div class="product-img v2">
                                        <a href="#"><img src="img/b-product4.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/xbox.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/fujifilm.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/ring.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="headphone" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                                <div class="pd-bd product-inner v3">
                                    <div class="product-img v2">
                                        <a href="#"><img src="img/b-product1.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                            <a href="#" class="circle black"></a>
                                            <a href="#" class="circle skyblue"></a>
                                            <a href="#" class="circle pink"></a>
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/xbox.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/fujifilm.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/ring.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="homepage-banner">
            <div class="container container-240">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="banner-img banner-img2">
                            <a href="#"><img src="img/banner/h1_b4.jpg" alt="" class="img-responsive"></a>
                            <div class="h-banner-content v2">
                                <p class="content-name">Home at the good</p>
                                <p class="content-price">From <span class="red">69.99</span></p>
                                <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="banner-img banner-img2">
                            <a href="#"><img src="img/banner/h1_b5.jpg" alt="" class="img-responsive"></a>
                            <div class="h-banner-content v2">
                                <p class="content-name">Snap Digital Camera</p>
                                <p class="content-price">From <span class="red">19.99</span></p>
                                <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="banner-img banner-img2">
                            <a href="#"><img src="img/banner/h1_b6.jpg" alt="" class="img-responsive"></a>
                            <div class="h-banner-content v2">
                                <p class="content-name">Minimal Gold Wall Clock</p>
                                <p class="content-price">From <span class="red">39.99</span></p>
                                <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="releases spc1 bg-gradient bg-insinde">
            <div class="container container-240">
                <div class="title-icon t-column mg-50">
                    <div class="t-inside">
                        <img src="img/real.png" alt="">
                    </div>
                    <h1>New releases</h1>
                </div>
                <ul class="product-tab-sw2">
                    <li class="active"><a data-toggle="tab" href="#tv2" aria-expanded="true">TV & Video</a></li>
                    <li class=""><a data-toggle="tab" href="#audito2" aria-expanded="false">Audio & Theater</a></li>
                    <li class=""><a data-toggle="tab" href="#camera2" aria-expanded="false">Camera, Photo & Video</a></li>
                    <li class=""><a data-toggle="tab" href="#phone2" aria-expanded="false">Cell Phones & Accessories</a></li>
                    <li class=""><a data-toggle="tab" href="#headphone2" aria-expanded="false">Headphones</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tv2" class="tab-pane fade in active">
                        <div class="owl-carousel owl-theme owl-cate v3 js-owl-cate">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/tv2.jpg" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/headphone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/smartwatch.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                 <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="audito2" class="tab-pane fade">
                        <div class="owl-carousel owl-theme owl-cate v3 js-owl-cate">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/tv.jpg" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/headphone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/smartwatch.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="camera2" class="tab-pane fade">
                        <div class="owl-carousel owl-theme owl-cate v3 js-owl-cate">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/fujifilm.jpg" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/headphone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/smartwatch.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="phone2" class="tab-pane fade">
                        <div class="owl-carousel owl-theme owl-cate v3 js-owl-cate">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsung.jpg" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/headphone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/smartwatch.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="headphone2" class="tab-pane fade">
                        <div class="owl-carousel owl-theme owl-cate v3 js-owl-cate">
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/headphone.jpg" alt="" class="img-reponsive"></a>
                                        <div class="ribbon-price red"><span>- 30% </span></div>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/headphone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Cell Phones & Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/smartwatch.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Computers &amp; Accessories</p>
                                            <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                            <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-240">
            <div class="brand">
                <div class="ecome-heading style5v3 spc4">
                    <div class="title-icon t-inline t-line">
                        <img src="img/iconbrand.png" alt="">
                        <h1>Shop by brand</h1>
                    </div>
                    <a href="#" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>
                </div>
                
                <div class="owl-carousel owl-theme owl-brand js-owl-brand">
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="img/brand/brand.png" alt=""></a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="img/brand/brand_2.png" alt=""></a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="img/brand/brand_3.png" alt=""></a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="img/brand/brand_4.png" alt=""></a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="img/brand/brand_5.png" alt=""></a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="img/brand/brand_7.png" alt=""></a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="hover-images"><img src="img/brand/brand_8.png" alt=""></a>
                    </div>
                </div>
                <div class="about-brand">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-sm-3 col-md-4">
                            <div class="about-brand-info text-center">
                                <div class="brand-img">
                                    <a href="#" class="hover-images"><img src="img/brand/sony_info.png" alt=""></a>
                                </div>
                                <div class="brand-info">
                                    <p>All the Lorem Ipsum generators on the Internet
                                        <br> tend to repeat predefined chunks as necessary, making this the first true generator on the Internetandful
                                        <br> of model sentence </p>
                                </div>
                                <a href="#" class="btn-gradient btn-brand">Shop this brand <i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-sm-8 col-md-8">
                            <div class="row engoc-equal-row">
                                <div class="col-xs-6 col-sm-6 col-md-6 product-item">
                                    <div class="pd-bd product-inner v2">
                                        <div class="flex align-center">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/tplink.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                    <div class="product-bottom v2">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <div class="product-bottom-element flex">
                                                            <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                            <div class="color-group">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button-group hidden-xs hidden-sm">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button-group hidden-md hidden-lg">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 product-item">
                                    <div class="pd-bd product-inner v2">
                                        <div class="flex align-center">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/wifi.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                    <div class="product-bottom v2">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <div class="product-bottom-element flex">
                                                            <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                            <div class="color-group">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button-group hidden-xs hidden-sm">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button-group hidden-md hidden-lg">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 product-item">
                                    <div class="pd-bd product-inner v2">
                                        <div class="flex align-center">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/phone5.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                    <div class="product-bottom v2">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <div class="product-bottom-element flex">
                                                            <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                            <div class="color-group">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button-group hidden-xs hidden-sm">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button-group hidden-md hidden-lg">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 product-item">
                                    <div class="pd-bd product-inner v2">
                                        <div class="flex align-center">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/logitech.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                    <div class="product-bottom v2">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <div class="product-bottom-element flex">
                                                            <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                            <div class="color-group">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button-group hidden-xs hidden-sm">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button-group hidden-md hidden-lg">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="e-category">
            <div class="container container-240">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h1 class="cate-title">Featured Products</h1>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/usb.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/macbook.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/flycam.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h1 class="cate-title">Top Rated Products</h1>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/samsung.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/headphone2.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/anker.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h1 class="cate-title">Top Selling Products</h1>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/headphone.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/samsung2.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-240">
            <div class="banner-callus spc1 image-bd effect_img2">
                <a href="#"><img src="img/banner/h1_b7.jpg" alt="" class="img-responsive"></a>
                <div class="box-center v2">
                    <p>Free Shipping on Orders $50</p>
                    <a href="#" class="btn-callus">Shop now</a>
                </div>
            </div>
        </div>
        <div class="more-product bg-gradient bg-insinde">
            <div class="container container-240">
                <div class="h-heading">
                    <div class="title-icon t-inline">
                        <img src="img/iconbs.png" alt="">
                        <h1>You may like</h1>
                    </div>
                    <a href="#" class="btn-morepd">
                        <span><i class="icon-refresh"></i></span>Refresh for more
                    </a>
                </div>
                <div class="multiple-row js-multiple-row">
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/ipad.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                    <a href="#" class="circle darkyellow"></a>
                                                    <a href="#" class="circle skyblue"></a>
                                                    <a href="#" class="circle pink"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/tplink.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/wifi.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/macbook.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="ribbon-price v4 red"><span>- 30% </span></div>
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/phone5.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/logitech.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/ipad.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/tplink.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/phone5.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/wifi.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/sonos.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/headphone2.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/headphone.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/tv.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/phone2.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/fujifilm.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pd-bd product-inner v2">
                            <div class="flex align-center">
                                <div class="product-img">
                                    <a href="#"><img src="img/product/samsung.jpg" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">Audio Speakers</p>
                                        <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                        <div class="product-bottom v2">
                                            <div class="product-price"><span>$1,215.00</span></div>
                                            <div class="product-bottom-element flex">
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                                <div class="color-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button-group hidden-xs hidden-sm">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button-group hidden-md hidden-lg">
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature">
            <div class="container container-240">
                <div class="feature-inside">
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="img/feature/truck.png" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Worldwide Delivery</h3>
                            <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                        </div>
                    </div>
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="img/feature/credit-card.png" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Safe Payment</h3>
                            <p>Pay with the world’s most popular and secure payment methods.</p>
                        </div>
                    </div>
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="img/feature/safety.png" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Shop with Confidence</h3>
                            <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                        </div>
                    </div>
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="img/feature/telephone.png" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>24/7 Help Center</h3>
                            <p>Round-the-clock assistance for a smooth shopping experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / end content -->
        <footer>
            <div class="f-top">
                <div class="container container-240">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="footer-block footer-about">
                                <div class="f-logo">
                                    <a href="#"><img src="img/logo.png" alt="" class="img-reponsive"></a>
                                </div>
                                <ul class="footer-block-content">
                                    <li class="address">
                                        <span>45 Grand Central Terminal New York,NY 1017 United State USA</span>
                                    </li>
                                    <li class="phone">
                                        <span>(+123) 456 789 - (+123) 666 888</span>
                                    </li>
                                    <li class="email">
                                        <span>Contact@yourcompany.com</span>
                                    </li>
                                    <li class="time">
                                        <span>Mon-Sat 9:00pm - 5:00pm  &nbsp;&nbsp;&nbsp;  Sun : Closed</span>
                                    </li>
                                </ul>
                                <div class="footer-social social">
                                    <h3 class="footer-block-title">Follow us</h3>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-dribbble"></a>
                                    <a href="#" class="fa fa-behance"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Quick menu</h3>
                                <ul class="footer-block-content">
                                    <li><a href="#">TV & Video</a></li>
                                    <li><a href="#">Home Audio & Theater</a></li>
                                    <li><a href="#">Camera, Photo & Video</a></li>
                                    <li><a href="#">Cell Phones & Accessories</a></li>
                                    <li><a href="#">Headphones</a></li>
                                    <li><a href="#">Video Games</a></li>
                                    <li><a href="#">Bluetooth & Wireless Speakers</a></li>
                                    <li><a href="#">Car Electronics</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Customer Service</h3>
                                <ul class="footer-block-content">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Track your Order</a></li>
                                    <li><a href="#">Returns/Exchange</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="footer-block">
                                <div class="footer-block-phone">
                                    <h3 class="footer-block-title">Hot Line</h3>
                                    <p class="phone-desc">Call Us toll Free</p>
                                    <p class="phone-light">(+123) 456 789 or (+123) 666 888</p>
                                </div>
                                <div class="footer-block-newsletter">
                                    <h3 class="footer-block-title">Subscription</h3>
                                    <p>Register now to get updates on promotions and coupons.</p>
                                    <form class="form_newsletter" action="#" method="post">
                                        <input type="email" value="" placeholder="Enter your emaill adress" name="EMAIL" id="mail" class="newsletter-input form-control">
                                        <button id="subscribe" class="button_mini btn btn-gradient" type="submit">
                                            Subscribe
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-bottom">
                <div class="container container-240">
                    <div class="row flex lr">
                        <div class="col-xs-6 f-copyright"><span>© 2010-2018 EngoTheme. All rights reserved.</span></div>
                        <div class="col-xs-6 f-payment hidden-xs">
                            <a href="#"><img src="img/payment/mastercard.png" alt="" class="img-reponsive"></a>
                            <a href="#"><img src="img/payment/paypal.png" alt="" class="img-reponsive"></a>
                            <a href="#"><img src="img/payment/visa.png" alt="" class="img-reponsive"></a>
                            <a href="#"><img src="img/payment/american-express.png" alt="" class="img-reponsive"></a>
                            <a href="#"><img src="img/payment/western-union.png" alt="" class="img-reponsive"></a>
                            <a href="#"><img src="img/payment/jcb.png" alt="" class="img-reponsive"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /footer -->
        <!-- /footer -->
    </div>
    <a href="#" class="btn-gradient scroll_top"><i class="ion-ios-arrow-up"></i></a>
    <?php include("scripts.php") ?>
   
</body>

</html>