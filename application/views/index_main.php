
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.smartaddons.com/templates/html/market/home5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 15:50:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- Basic page needs
    ============================================ -->
    <title>TheBabyBasket</title>
    <meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/basket.png" >

    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/themecss/lib.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="<?php echo base_url(); ?>assets/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/themecss/so-categories.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/header5.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/footer2.css" rel="stylesheet">
    <link id="color_scheme" href="<?php echo base_url(); ?>assets/css/home5.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">


</head>

<body class="common-home res layout-home5 ">

    <div id="wrapper" class="wrapper-full banners-effect-7">

      <!--Header include-->
      <?php
        include("header.php");

       ?>




    <!-- Main Container  -->
    <div class="main-container  layout-boxed">
        <div class="container">
        <div class="row">
            <div id="content-top" class="clearfix" >
                <div id="so-slideshow" class="col-lg-9 col-md-9 home-slidershow">
                    <div class="module slideshow no-margin">
                        <div class="yt-content-slider yt-content-slider--arrow1"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                            <div class="yt-content-slide">
                                <a href="<?php echo base_url() ?>index.php/User/productlist?sale=70"><img src="<?php echo base_url(); ?>assets/image/demo/slider/home5/slider-1.jpg" alt="slider1" class="img-responsive"></a>
                            </div>
                            <div class="yt-content-slide">
                                <a href="<?php echo base_url() ?>index.php/User/productlist?sale=70"><img src="<?php echo base_url(); ?>assets/image/demo/slider/home5/slider-2.jpg" alt="slider2" class="img-responsive"></a>
                            </div>
                            <div class="yt-content-slide">
                                <a href="<?php echo base_url() ?>index.php/User/productlist?sale=40"><img src="<?php echo base_url(); ?>assets/image/demo/slider/home5/slider-5.jpg" alt="slider3" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="loadeding"></div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="module  hidden-sm hidden-xs">
                        <div class="modcontent clearfix">
                            <ul class="htmlcontent-home">
                                <li class="marginbottom__3x">
                                    <div class="banners">
                                        <div>
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/baby1.jpg" alt="banner1"></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="banners">
                                        <div>
                                            <a href="<?php echo base_url() ?>index.php/User/productlist?sale=50"><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/bbb2.jpg" alt="banner1"></a>
                                        </div>
                                    </div>
                                </li>


                            </ul>

                        </div>
                    </div>
                </div>

                <div class="slider-brand-wrapper col-xs-12">
                    <div class="module ">
                        <div class="yt-content-slider yt-content-slider--arrow2"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="35" data-items_column0="5" data-items_column1="4" data-items_column2="3"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                            <?php

                            foreach ($brand as $key) {

                             ?>
                            <div class="yt-content-slide">
                                <a title="Brand" href="<?php echo base_url() ?>index.php/User/productlist?brid=<?php echo $key->brandid; ?>"><img src="<?php echo base_url(); ?>upload/<?php echo $key->brandLogo; ?>" alt="Brand"></a>
                            </div>
                            <?php
                                }
                             ?>

                        </div>
                        <div class="loadeding"></div>
                    </div>

                </div>

                <div class="banner2-id10 clearfix">
                    <div class="module clearfix">
                        <ul class="blank">
                            <li class="col-md-4 col-sm-4">
                                <div class="banners">
                                    <div>
                                        <a title="Static Image" href="<?php echo base_url() ?>index.php/User/productlist?gender1=Boy&gender2=Unisex"><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/boy2.jpg" alt="Image"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-4 hidden-xs">
                                <div class="banners">
                                    <div>
                                        <a title="Static Image" href="#"><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/kid5.jpg" alt="Image"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-4 hidden-xs">
                                <div class="banners">
                                    <div>
                                        <a title="Static Image" href="<?php echo base_url() ?>index.php/User/productlist?gender1=Girls&gender2=Unisex"><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/girl5.jpg" alt="Image"></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            <div id="content" class="clearfix">
                <div class="col-xs-12 clearfix">
                    <div class="module extraslider-home5 titleLine">
                        <h3 class="modtitle">New Arrivals</h3>
                        <div id="so_extraslider_1" >
                            <!-- Begin extraslider-inner -->
                            <div class="so-extraslider products-list grid product-style__5"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="35" data-items_column0="4" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                <!--Begin Items-->

                                    <?php   foreach ($product as $key) {
                                         ?>
                                <div class="ltabs-item product-layout">
                                    <div class="product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container second_img ">
                                                <img src="<?php echo base_url(); ?>upload/products/<?php echo $key->ImageLogo; ?>"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                            </div>
                                            <!--Sale Label-->
                                            <span class="label label-new">new</span>
                                            <!--full quick view block-->
                                            <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="<?php echo base_url(); ?>index.php/User/viewproductdetailpopup/<?php echo $key->productid ?>">Quick View</a>


                                            <!--end full quick view block-->
                                        </div>
                                        <div class="right-block">
                                            <div class="caption">
                                                <h4><a href='<?php echo base_url() ?>index.php/User/productdetail/<?php echo $key->productid; ?>'><?php echo $key->productName; ?></a></h4>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    </div>
                                                </div>

                                                <div class="price">
                                                    <span class="price-new"><i class="fa fa-rupee"></i><?php echo $key->salePrice; ?>.00</span>

                                                </div>
                                            </div>

                                              <div class="button-group">
                                              <?php if (isset($_SESSION['user'])) {
                                               // $user=$this->session->user;
                                               // $userid=$user[0]->userid;

                                               ?>
                                                <button class="addToCart" type="button" onclick="cart.add('<?php echo $key->productid ?>', '1','<?php echo $key->productName ?>','<?php echo base_url() ?>upload/products/<?php echo $key->ImageLogo ?>');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>

                                                 <button class="wishlist" onclick="wishlist.add('<?php echo $key->productid ?>','1','<?php echo $key->productName ?>','<?php echo base_url() ?>upload/products/<?php echo $key->ImageLogo ?>');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>

                                                <?php }else{ ?>
                                                <button class="addToCart" type="button" onclick="alert('login');window.location = '<?php echo base_url() ?>index.php/User/login'"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>

                                                 <button class="wishlist" onclick="alert('login');window.location = '<?php echo base_url() ?>index.php/User/login'"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>

                                             <?php } ?>

                                                <button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
                                              </div>
                                        </div><!-- right block -->
                                    </div>
                                </div>
                               <?php    } ?>
                                <!--End Items-->


                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                    <div class="module ">
                        <div class="modcontent clearfix">
                            <ul class="eg-vcenter-td-1">
                                <li>
                                    <div class="banners">
                                        <div>
                                            <a title="Static Image" href="#"><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/banner6.jpg" alt="Image"></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="banners">
                                        <div>
                                            <a title="Static Image" href="#"><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/banner7.jpg" alt="Image"></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="banners">
                                        <div>
                                            <a title="Static Image" href="<?php echo base_url() ?>index.php/User/productlist?sale=70"><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/banner78.jpg" alt="Image"></a>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
<div class="banner2-id10 clearfix">
                    <div class="module clearfix">
                        <ul class="blank">
                            <li class="col-md-4 col-sm-4">
                                <div class="banners">
                                    <div>
                                        <a title="Static Image" href="#"><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/ban1.jpg" alt="Image"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-4 hidden-xs">
                                <div class="banners">
                                    <div>
                                        <a title="Static Image" href="<?php echo base_url() ?>index.php/User/productlist?cid=9"><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/ban2.jpg" alt="Image"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-4 hidden-xs">
                                <div class="banners">
                                    <div>
                                        <a title="Static Image" href="<?php echo base_url() ?>index.php/User/productlist?cid=8"><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/ban3.jpg" alt="Image"></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="banner2-id10 clearfix">
                    <div class="module clearfix">
                        <ul class="blank">

                            <li class="col-md-6 col-sm-6 hidden-xs">
                                <div class="banners">
                                    <div>
                                        <a title="Static Image" href="<?php echo base_url() ?>index.php/User/productlist?cid=2""><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/ba2.jpg" alt="Image"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-6 col-sm-6 hidden-xs">
                                <div class="banners">
                                    <div>
                                        <a title="Static Image" href="<?php echo base_url() ?>index.php/User/productlist?cid=6"><img src="<?php echo base_url(); ?>assets/image/demo/cms/home5/ba3.jpg" alt="Image"></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>





                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- //Main Container -->
    <!-- Block Spotlight2  -->
    <section class="so-spotlight2">
        <div class="container">
            <div class="row">
                    <div class="col-md-6 col-sm-6 list-info-bottom">
                        <div class="module clearfix text-center">
                            <h3 class="modtitle">THIS WEEK</h3>
                            <div class="modcontent">
                                <ul class="blank">
                                    <li>
                                        Introducing James Jagger for AW16 Men’s<br>
                                        <a href="#" title="View More">View More</a>
                                    </li>

                                    <li>
                                        Autumn Winter 2016<br>
                                        <a href="#" title="View More">View More</a>
                                    </li>

                                    <li>
                                        Introducing James Jagger for AW16 Men’s<br>
                                        <a href="#" title="View More">View More</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 ">
                        <div class="module clearfix text-center">
                            <h3 class="modtitle">KEEP IN TOUCH</h3>
                            <div class="modcontent align-center">
                                <div class="col-md-offset-2 col-md-9">
                                <p class="des-newsletter marginbottom__3x">Get style updates straight to your inbox. Simply enter your details below to keep up-to-date with the latest news on collections and exclusive events.</p>
                                <div class="subscribe-home">
                                    <form class="form subscribe" novalidate="novalidate" action="http://magento2.magentech.com/themes/sm_market/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
                                        <div class="input-group">
                                            <input name="email" type="email" class="form-control" onfocus="if(this.value=='Your email address') this.value='';" onblur="if(this.value=='') this.value='Your email address';" value="Your email address" data-validate="{required:true, 'validate-email':true}">
                                            <span class="input-group-btn">
                                                <button type="submit" class="button-search btn btn-primary" name="submit_search">Subscribe</button>
                                            </span>
                                        </div>

                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>

            </div>
        </div>
    </section>
    <!-- //Block Spotlight3  -->
<script type="text/javascript"><!--
    var $typeheader = 'header-home5';
    //-->
</script>
    <!--footer include-->
      <?php
   include("footer.php");
       ?>

    </div>
    <!-- Social widgets -->
    <section class="social-widgets visible-lg">
    <ul class="items">
        <li class="item item-01 facebook"> <a href="<?php echo base_url(); ?>assets/php/facebook8859.html?account=envato" class="tab-icon"><span class="fa fa-facebook"></span></a>
            <div class="tab-content">
                <div class="title">
                    <h5>FACEBOOK</h5>
                </div>
                <div class="loading">
                    <img src="<?php echo base_url(); ?>assets/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
                </div>
            </div>
        </li>
        <li class="item item-02 twitter"> <a href="<?php echo base_url(); ?>assets/php/twitterfdaa.html?account_twitter=envato" class="tab-icon"><span class="fa fa-twitter"></span></a>
            <div class="tab-content">
                <div class="title">
                    <h5>DS</h5>
                </div>
                <div class="loading">
                    <img src="<?php echo base_url(); ?>assets/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
                </div>
            </div>
        </li>
        <li class="item item-03 youtube"> <a href="<?php echo base_url(); ?>assets/php/youtubevideo2de8.html?account_video=PY2RLgTmiZY" class="tab-icon"><span class="fa fa-youtube"></span></a>
            <div class="tab-content">
                <div class="title">
                    <h5>YouTube</h5>
                </div>
                <div class="loading"> <img src="<?php echo base_url(); ?>assets/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
            </div>
        </li>
    </ul>
</section>  <!-- End Social widgets -->

<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/themejs/libs.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr/modernizr-2.6.2.min.js"></script>


<!-- Theme files
============================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/themejs/application.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/themejs/homepage.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/themejs/addtocart.js"></script>

</body>

<!-- Mirrored from demo.smartaddons.com/templates/html/market/home5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 15:50:25 GMT -->
</html>