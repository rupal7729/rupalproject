


 <!-- TopBar Container  -->
    <div class="topbar hidden-xs">
        <div class="container">
            <div class="row">
                <div class="block-policy-top ">
                    <div class="policy policy1 col-sm-4 col-xs-12">
                        <div class="policy-inner">
                            <i class="ico-policy"></i>
                            <h4>30 days return</h4>
                            <span>Money back guarantee</span>
                        </div>
                    </div>
                    <div class="policy policy2 col-sm-4 col-xs-12">
                        <div class="policy-inner">
                        <i class="ico-policy"></i>
                        <h4>free shipping on $30</h4>
                        <span>on all orders over $99</span>
                        </div>
                    </div>
                    <div class="policy policy3 col-sm-4 col-xs-12">
                        <div class="policy-inner">
                        <i class="ico-policy"></i>
                        <h4>Safe shopping</h4>
                        <span>Save up to 50% now  </span>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- //TopBar Container  -->

    <!-- Header Container  -->
    <header id="header" class="layout-boxed variantleft type_5">

        <!-- Header Top -->
        <div class="header-top compact-hidden">
            <div class="container">
                <div class="row">
                    <div class="header-top-left form-inline col-md-6 col-sm-4 col-xs-12 compact-hidden">
                        <div class="form-group languages-block ">
                            <form action="https://demo.smartaddons.com/templates/html/market/index.html" method="post" enctype="multipart/form-data" id="bt-language">
                                <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url(); ?>assets/image/demo/flags/gb.png" alt="English" title="English">
                                    <span class="">English</span>
                                    <span class="fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html"><img class="image_flag" src="<?php echo base_url(); ?>assets/image/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
                                    <li> <a href="index.html"> <img class="image_flag" src="<?php echo base_url(); ?>assets/image/demo/flags/lb.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                </ul>
                            </form>
                        </div>

                        <div class="form-group currencies-block">
                            <form action="https://demo.smartaddons.com/templates/html/market/index.html" method="post" enctype="multipart/form-data" id="currency">
                                <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu btn-xs">
                                    <li> <a href="#">(€)&nbsp;Euro</a></li>
                                    <li> <a href="#">(£)&nbsp;Pounds    </a></li>
                                    <li> <a href="#">($)&nbsp;US Dollar </a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="header-top-right collapsed-block text-right  col-md-6 col-sm-8 col-xs-12 compact-hidden">
                        <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
                        <div class="tabBlock" id="TabBlock-1">
                            <ul class="top-link list-inline">

                                 <li class="account" id="my_account"> <?php echo anchor('User/myaccount','<i class="fa fa-user" ></i> My Account ') ?></li>
                                <li class="wishlist"><a href="wishlist.html" class="top-link-wishlist" title="Wishlist"><i class="fa fa-heart" ></i> My Wish List</a></li>
                                <li class="checkout"><a href="checkout.html" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> Checkout</a></li>

                                <li class="shopping_cart">

                                    <!--Cart-->
                                    <div id="cart" class=" btn-group btn-shopping-cart">
                                        <a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
                                            <div class="shopcart">
                                                <span class="handle pull-left"></span>
                                                <p class="text-shopping-cart cart-total-full">2 </p>
                                            </div>
                                        </a>

                                        <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

                                            <li>
                                                <table class="table table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center" style="width:70px">
                                                                <a href="product.html"> <img src="<?php echo base_url(); ?>assets/image/demo/shop/product/resize/2.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
                                                            </td>
                                                            <td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
                                                            <td class="text-center"> x1 </td>
                                                            <td class="text-center"> $1,202.00 </td>
                                                            <td class="text-right">
                                                                <a href="product.html" class="fa fa-edit"></a>
                                                            </td>
                                                            <td class="text-right">
                                                                <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center" style="width:70px">
                                                                <a href="product.html"> <img src="<?php echo base_url(); ?>assets/image/demo/shop/product/resize/3.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
                                                            </td>
                                                            <td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
                                                            <td class="text-center"> x1 </td>
                                                            <td class="text-center"> $60.00 </td>
                                                            <td class="text-right">
                                                                <a href="product.html" class="fa fa-edit"></a>
                                                            </td>
                                                            <td class="text-right">
                                                                <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                            <li>
                                                <div>
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left"><strong>Sub-Total</strong>
                                                                </td>
                                                                <td class="text-right">$1,060.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                                                </td>
                                                                <td class="text-right">$2.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left"><strong>VAT (20%)</strong>
                                                                </td>
                                                                <td class="text-right">$200.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left"><strong>Total</strong>
                                                                </td>
                                                                <td class="text-right">$1,262.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--//cart-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header Top -->

        <!-- Header center -->
        <div class="header-center left">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
                        <a href="index.html"><img src="<?php echo base_url(); ?>assets/image/demo/logos/logo1.png" title="Your Store" alt="Your Store" /></a>
                    </div>
                    <!-- //end Logo -->





                    <!-- Search -->
                    <div id="sosearchpro" class="col-md-offset-1 col-md-3 col-sm-12 search-pro">
                        <form method="GET" action="https://demo.smartaddons.com/templates/html/market/index.html">
                            <div id="search0" class="search input-group">
                                <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
                                <span class="input-group-btn">
                                    <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                            <input type="hidden" name="route" value="product/search" />
                        </form>
                    </div>
                    <!-- //end Search -->

                    <!-- Secondary menu -->


                </div>

            </div>
        </div>
        <!-- //Header center -->

        <!-- Header Bottom -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">

            <!-- Sidebar menu -->
                    <div class="sidebar-menu col-md-3 col-sm-6 col-xs-12  ">
                        <div class="responsive so-megamenu ">
                            <div class="so-vertical-menu no-gutter compact-hidden">
                                <nav class="navbar-default">
                                    <div class="container-megamenu vertical">
                                        <div id="menuHeading">
                                            <div class="megamenuToogle-wrapper">
                                                <div class="megamenuToogle-pattern">
                                                    <div class="container">
                                                        <div>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                        All Categories

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="navbar-header">
                                            <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">

                                            </button>
                                            All Categories
                                        </div>
                                        <div class="vertical-wrapper" style="display: none;">
                                            <span id="remove-verticalmenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container">
                                                    <ul class="megamenu">
                                                        <li class="item-vertical style1 with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <span>Boys fashion</span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
                                                                <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories</a>
                                                                                                <ul>
                                                                                                <?php foreach($boy_cat as $bcat) {?>
                                                                                                    <li><a href="<?php echo $bcat->categoryName; ?>"><?php echo $bcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Collection</a>
                                                                                                <ul>
                                                                                                    <li><a href="#">Autumn Collection </a></li>
                                                                                                    <li><a href="#">Stay At Home Fashion</a></li>
                                                                                                    <li><a href="#">Baby Essentials</a></li>
                                                                                                     <li><a href="#">Multipacks/Valuepacks</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Footwear</a>
                                                                                                <ul>

                                                                                                     <?php foreach($boy_footcat as $bfcat) {?>
                                                                                                    <li><a href="<?php echo $bfcat->categoryName; ?>"><?php echo $bfcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Price</a>
                                                                                                <ul>



                                                                                                    <li><a href="#">All Under 199</a></li>
                                                                                                    <li><a href="#">All Under 299</a></li>
                                                                                                    <li><a href="#">All Under 399</a></li>
                                                                                                     <li><a href="#">All Under 499</a></li>

                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Age</a>
                                                                                                <ul>
                                                                                                   <li><a href="#">New Born (0-3 M)</a></li>
                                                                                                    <li><a href="#">3-6 Months</a></li>
                                                                                                    <li><a href="#">6-9 Months</a></li>
                                                                                                    <li><a href="#">9-12 Months</a></li>
                                                                                                    <li><a href="#">12-18 Months</a></li>
                                                                                                    <li><a href="#">18-24 Months</a></li>
                                                                                                     <li><a href="#">2 to 4 Years</a></li>
                                                                                                    <li><a href="#">4 to 6 Years</a></li>
                                                                                                     <li><a href="#">6+ Year</a></li>

                                                                                                </ul>
                                                                                            </li>
                                                                                             <li>
                                                                                                <a href="#" class="main-menu">Shop By Brand</a>
                                                                                                <ul>
                                                                                                    <?php foreach($boybrand as $bb) {?>
                                                                                                    <li><a href="<?php echo $bb->brandName; ?>"><?php echo $bb->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>

                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories</a>
                                                                                                <ul>
                                                                                                   <li> <img src="<?php echo base_url(); ?>assets/image/demo/shop/category/boy.jpg"></li>
                                                                                                   <li> <img src="<?php echo base_url(); ?>assets/image/demo/shop/category/boy1.jpg"></li>
                                                                                                    <li> <img src="<?php echo base_url(); ?>assets/image/demo/shop/category/boy2.jpg"></li>


                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>



                                                        <li class="item-vertical style1 with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <span>Girls fashion</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                            <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
                                                                <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories</a>
                                                                                                <ul>
                                                                                                <?php foreach($girl_cat as $gcat) {?>
                                                                                                    <li><a href="<?php echo $gcat->categoryName; ?>"><?php echo $gcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Collection</a>
                                                                                                <ul>
                                                                                                    <li><a href="#">Autumn Collection </a></li>
                                                                                                    <li><a href="#">Stay At Home Fashion</a></li>
                                                                                                    <li><a href="#">Baby Essentials</a></li>
                                                                                                     <li><a href="#">Multipacks/Valuepacks</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Footwear</a>
                                                                                                <ul>

                                                                                                     <?php foreach($girl_footcat as $gfcat) {?>
                                                                                                    <li><a href="<?php echo $gfcat->categoryName; ?>"><?php echo $gfcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Price</a>
                                                                                                <ul>



                                                                                                    <li><a href="#">All Under 199</a></li>
                                                                                                    <li><a href="#">All Under 299</a></li>
                                                                                                    <li><a href="#">All Under 399</a></li>
                                                                                                     <li><a href="#">All Under 499</a></li>

                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Age</a>
                                                                                                <ul>
                                                                                                   <li><a href="#">New Born (0-3 M)</a></li>
                                                                                                    <li><a href="#">3-6 Months</a></li>
                                                                                                    <li><a href="#">6-9 Months</a></li>
                                                                                                    <li><a href="#">9-12 Months</a></li>
                                                                                                    <li><a href="#">12-18 Months</a></li>
                                                                                                    <li><a href="#">18-24 Months</a></li>
                                                                                                     <li><a href="#">2 to 4 Years</a></li>
                                                                                                    <li><a href="#">4 to 6 Years</a></li>
                                                                                                     <li><a href="#">6+ Year</a></li>

                                                                                                </ul>
                                                                                            </li>
                                                                                             <li>
                                                                                                <a href="#" class="main-menu">Shop By Brand</a>
                                                                                                <ul>
                                                                                                   <?php foreach($girlbrand as $gb) {?>
                                                                                                    <li><a href="<?php echo $gb->brandName; ?>"><?php echo $gb->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>


                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                 <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <img src="<?php echo base_url(); ?>assets/image/demo/shop/category/girl.jpg">
                                                                                                    </li>
                                                                                                     <li>
                                                                                                        <img src="<?php echo base_url(); ?>assets/image/demo/shop/category/girl1.jpg">
                                                                                                    </li>
                                                                                                     <li>
                                                                                                        <img src="<?php echo base_url(); ?>assets/image/demo/shop/category/girl2.jpg">
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>


                                                        <li class="item-vertical style1 with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <span>Foot Wear</span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
                                                                <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories For Boys</a>
                                                                                                <ul>
                                                                                                <?php foreach($boy_footcat as $bfootcat) {?>
                                                                                                    <li><a href="<?php echo $bfootcat->categoryName; ?>"><?php echo $bfootcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Age</a>
                                                                                                <ul>
                                                                                                   <li><a href="#">New Born (0-3 M)</a></li>
                                                                                                    <li><a href="#">3-6 Months</a></li>
                                                                                                    <li><a href="#">6-9 Months</a></li>
                                                                                                    <li><a href="#">9-12 Months</a></li>
                                                                                                    <li><a href="#">12-18 Months</a></li>
                                                                                                    <li><a href="#">18-24 Months</a></li>
                                                                                                     <li><a href="#">2 to 4 Years</a></li>
                                                                                                    <li><a href="#">4 to 6 Years</a></li>
                                                                                                     <li><a href="#">6+ Year</a></li>

                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories For Girls</a>
                                                                                                <ul>
                                                                                                <?php foreach($girl_footcat as $gfootcat) {?>
                                                                                                    <li><a href="<?php echo $gfootcat->categoryName; ?>"><?php echo $gfootcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>
                                                                                               <li>
                                                                                                <a href="#" class="main-menu">Shop By Brand</a>
                                                                                                <ul>
                                                                                                  <?php foreach($boybrand as $bb) {?>
                                                                                                    <li><a href="<?php echo $bb->brandName; ?>"><?php echo $bb->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>


                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                 <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                                    <li>
                                                                                                        <a href="#" class="main-menu">Shop By Price</a>
                                                                                                        <ul>



                                                                                                            <li><a href="#">All Under 199</a></li>
                                                                                                            <li><a href="#">All Under 299</a></li>
                                                                                                            <li><a href="#">All Under 399</a></li>
                                                                                                             <li><a href="#">All Under 499</a></li>

                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/footwear.jpg"></li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>


                                                        <li class="item-vertical style1 with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <span>Toys & Gear</span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
                                                                <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories For Toys</a>
                                                                                                <ul>
                                                                                                <?php foreach($toy_cat as $tcat) {?>
                                                                                                    <li><a href="<?php echo $tcat->categoryName; ?>"><?php echo $tcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories For Gears</a>
                                                                                                <ul>
                                                                                                <?php foreach($gear_cat as $gcat) {?>
                                                                                                    <li><a href="<?php echo $gcat->categoryName; ?>"><?php echo $gcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>

                                                                                             <li>
                                                                                                <a href="#" class="main-menu">Shop By Age</a>
                                                                                                <ul>
                                                                                                   <li><a href="#">New Born (0-3 M)</a></li>
                                                                                                    <li><a href="#">3-6 Months</a></li>
                                                                                                    <li><a href="#">6-9 Months</a></li>
                                                                                                    <li><a href="#">9-12 Months</a></li>
                                                                                                    <li><a href="#">12-18 Months</a></li>
                                                                                                    <li><a href="#">18-24 Months</a></li>
                                                                                                     <li><a href="#">2 to 4 Years</a></li>
                                                                                                    <li><a href="#">4 to 6 Years</a></li>
                                                                                                     <li><a href="#">6+ Year</a></li>

                                                                                                </ul>
                                                                                            </li>
                                                                                             <li>
                                                                                                <a href="#" class="main-menu">Shop By Brand-Toy</a>
                                                                                                <ul>
                                                                                                   <?php foreach($toybrand as $tb) {?>
                                                                                                    <li><a href="<?php echo $tb->brandName; ?>"><?php echo $tb->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>


                                                                                                </ul>
                                                                                            </li>

                                                                                             <li>
                                                                                                <a href="#" class="main-menu">Shop By Brand-Gear</a>
                                                                                                <ul>
                                                                                                   <?php foreach($gearbrand as $ggb) {?>
                                                                                                    <li><a href="<?php echo $ggb->brandName; ?>"><?php echo $ggb->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>


                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                 <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                        <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/toy1.jpg">

                                                                                            </li>
                                                                                             <li>
                                                                                                <img src="<?php echo base_url(); ?>assets/image/demo/shop/category/toy3.jpg">
                                                                                            </li>
                                                                                                    <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/toys.jpg"></li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="item-vertical style1 with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <span>Bath & Skin</span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
                                                                <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories</a>
                                                                                                <ul>
                                                                                                <?php foreach($bathcat as $bacat) {?>
                                                                                                    <li><a href="<?php echo $bacat->categoryName; ?>"><?php echo $bacat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Brands</a>
                                                                                                <ul>
                                                                                                    <?php foreach($bathbrand as $bbb) {?>
                                                                                                    <li><a href="<?php echo $bbb->brandName; ?>"><?php echo $bbb->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                 <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                                    <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/bath.jpg"></li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                         <li class="item-vertical style1 with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <span>Moms</span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
                                                                <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories</a>
                                                                                                <ul>
                                                                                                <?php foreach($momcat as $mcat) {?>
                                                                                                    <li><a href="<?php echo $mcat->categoryName; ?>"><?php echo $mcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Colors</a>
                                                                                                <ul>
                                                                                                    <li><a href="#">Red</a></li>
                                                                                                    <li><a href="#">Green</a></li>
                                                                                                    <li><a href="#">blue</a></li>
                                                                                                    <li><a href="#">Yellow</a></li>
                                                                                                    <li><a href="#">white</a></li>
                                                                                                    <li><a href="#">Black</a></li>
                                                                                                    <li><a href="#">Grey</a></li>
                                                                                                    <li><a href="#">Pink</a></li>
                                                                                                    <li><a href="#">Orange</a></li>
                                                                                                    <li><a href="#">Purple</a></li>

                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                 <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                                    <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/mom.jpg"></li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="item-vertical style1 with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <span>Health & Safety</span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
                                                                <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories</a>
                                                                                                <ul>
                                                                                                <?php foreach($healthcat as $hcat) {?>
                                                                                                    <li><a href="<?php echo $hcat->categoryName; ?>"><?php echo $hcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Brands</a>
                                                                                                <ul>
                                                                                                    <?php foreach($healthbrand as $hb) {?>
                                                                                                    <li><a href="<?php echo $hb->brandName; ?>"><?php echo $hb->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                 <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                                    <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/health.jpg"></li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="item-vertical style1 with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <span>Diapering</span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
                                                                <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories</a>
                                                                                                <ul>
                                                                                                <?php foreach($healthcat as $hcat) {?>
                                                                                                    <li><a href="<?php echo $hcat->categoryName; ?>"><?php echo $hcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Brands</a>
                                                                                                <ul>
                                                                                                    <?php foreach($diaperbrand as $db) {?>
                                                                                                    <li><a href="<?php echo $db->brandName; ?>"><?php echo $db->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                 <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                                    <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/diapering.jpg"></li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="item-vertical style1 with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <span>Celebrations</span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
                                                                <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">

                                                                                <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                             <li>
                                                                                                <ul>
                                                                                                    <a href="#" class="main-menu">Hello Celebrations</a>

                                                                                                    <li><a href="#">Baby Shower</a></li>
                                                                                                    <li><a href="#">Baby Welcome</a></li>
                                                                                                    <li><a href="#">Baby Birthday party </a></li>
                                                                                                    <li><a href="#">Gifts </a></li>

                                                                                                 </ul>
                                                                                             </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                 <div class="col-md-9 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                                    <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/gift.jpg" style="margin-left: 20px;"></li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                            </div>
                        </div>

                    </div>
<!-- Main menu -->
                    <div class="megamenu-hori col-md-9 col-sm-6 col-xs-12 ">
                        <div class="responsive so-megamenu ">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            Navigation
                                        </div>


                    <!-- Main menu -->
                    <!--<div class="megamenu-hori col-xs-12 ">
                        <div class="responsive so-megamenu ">
            <nav class="navbar-default">
                <div class=" container-megamenu  horizontal">
                    <div class="navbar-header">
                        <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        Navigation
                    </div>-->

                    <div class="megamenu-wrapper">
                        <span id="remove-megamenu" class="fa fa-times"></span>
                        <div class="megamenu-pattern">
                            <div class="container">
                                <ul class="megamenu " data-transition="slide" data-animationtime="250">
                                    <li  class="home hover">
                                        <p class="close-menu"></p>
                                        <a href="blog-page.html" class="clearfix">
                                            <strong>Home</strong>
                                            <span class="label"></span>
                                        </a>
                                    </li>
                                  <li class="with-sub-menu hover">
                                        <p class="close-menu"></p>
                                        <a href="#" class="clearfix">
                                            <strong>Boys</strong>

                                            <b class="caret"></b>
                                        </a>
                                        <div class="sub-menu" style="width: 100%; display: none;">
                                           <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories</a>
                                                                                                <ul>
                                                                                                    <?php foreach($boy_cat as $bcat) {?>
                                                                                                    <li><a href="<?php echo $bcat->categoryName; ?>"><?php echo $bcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Collection</a>
                                                                                                <ul>
                                                                                                    <li><a href="#">Autumn Collection </a></li>
                                                                                                    <li><a href="#">Stay At Home Fashion</a></li>
                                                                                                    <li><a href="#">Baby Essentials</a></li>
                                                                                                     <li><a href="#">Multipacks/Valuepacks</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Footwear</a>
                                                                                                <ul>
                                                                                                    <?php foreach($boy_footcat as $bfcat) {?>
                                                                                                    <li><a href="<?php echo $bfcat->categoryName; ?>"><?php echo $bfcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Price</a>
                                                                                                <ul>



                                                                                                    <li><a href="#">All Under 199</a></li>
                                                                                                    <li><a href="#">All Under 299</a></li>
                                                                                                    <li><a href="#">All Under 399</a></li>
                                                                                                     <li><a href="#">All Under 499</a></li>

                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Age</a>
                                                                                                <ul>
                                                                                                   <li><a href="#">New Born (0-3 M)</a></li>
                                                                                                    <li><a href="#">3-6 Months</a></li>
                                                                                                    <li><a href="#">6-9 Months</a></li>
                                                                                                    <li><a href="#">9-12 Months</a></li>
                                                                                                    <li><a href="#">12-18 Months</a></li>
                                                                                                    <li><a href="#">18-24 Months</a></li>
                                                                                                     <li><a href="#">2 to 4 Years</a></li>
                                                                                                    <li><a href="#">4 to 6 Years</a></li>
                                                                                                     <li><a href="#">6+ Year</a></li>

                                                                                                </ul>
                                                                                            </li>
                                                                                             <li>
                                                                                                <a href="#" class="main-menu">Shop By Brand</a>
                                                                                                <ul>
                                                                                                    <?php foreach($boybrand as $boyb) {?>
                                                                                                    <li><a href="<?php echo $boyb->brandName; ?>"><?php echo $boyb->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>

                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                             </div>
                                        </div>
                                    </li>

                                    <li class="with-sub-menu hover">
                                        <p class="close-menu"></p>
                                        <a href="#" class="clearfix">
                                            <strong>Girls</strong>

                                            <b class="caret"></b>
                                        </a>
                                        <div class="sub-menu" style="width: 100%; display: none;">
                                             <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories</a>
                                                                                                <ul>
                                                                                                    <?php foreach($girl_cat as $ggcat) {?>
                                                                                                    <li><a href="<?php echo $ggcat->categoryName; ?>"><?php echo $ggcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Collection</a>
                                                                                                <ul>
                                                                                                    <li><a href="#">Autumn Collection </a></li>
                                                                                                    <li><a href="#">Stay At Home Fashion</a></li>
                                                                                                    <li><a href="#">Baby Essentials</a></li>
                                                                                                     <li><a href="#">Multipacks/Valuepacks</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Footwear</a>
                                                                                                <ul>
                                                                                                    <?php foreach($girl_footcat as $gffcat) {?>
                                                                                                    <li><a href="<?php echo $gffcat->categoryName; ?>"><?php echo $gffcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Price</a>
                                                                                                <ul>



                                                                                                    <li><a href="#">All Under 199</a></li>
                                                                                                    <li><a href="#">All Under 299</a></li>
                                                                                                    <li><a href="#">All Under 399</a></li>
                                                                                                     <li><a href="#">All Under 499</a></li>

                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Age</a>
                                                                                                <ul>
                                                                                                   <li><a href="#">New Born (0-3 M)</a></li>
                                                                                                    <li><a href="#">3-6 Months</a></li>
                                                                                                    <li><a href="#">6-9 Months</a></li>
                                                                                                    <li><a href="#">9-12 Months</a></li>
                                                                                                    <li><a href="#">12-18 Months</a></li>
                                                                                                    <li><a href="#">18-24 Months</a></li>
                                                                                                     <li><a href="#">2 to 4 Years</a></li>
                                                                                                    <li><a href="#">4 to 6 Years</a></li>
                                                                                                     <li><a href="#">6+ Year</a></li>

                                                                                                </ul>
                                                                                            </li>
                                                                                             <li>
                                                                                                <a href="#" class="main-menu">Shop By Brand</a>
                                                                                                <ul>
                                                                                                    <?php foreach($girlbrand as $girlb) {?>
                                                                                                    <li><a href="<?php echo $girlb->brandName; ?>"><?php echo $girlb->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>

                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                             </div>
                                        </div>
                                    </li>

                                    <li class="with-sub-menu hover">
                                        <p class="close-menu"></p>
                                        <a href="#" class="clearfix">
                                            <strong>Footwear</strong>

                                            <b class="caret"></b>
                                        </a>
                                        <div class="sub-menu" style="width: 100%; display: none;">
                                            <div class="content" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4 static-menu">
                                                                <div class="menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#"  class="main-menu">Shop By category-Boys</a>
                                                                            <ul>
                                                                                <?php foreach($boy_footcat as $bftcat) {?>
                                                                                <li><a href="<?php echo $bftcat->categoryName; ?>"><?php echo $bftcat->categoryName; ?></a></li>
                                                                                <?php
                                                                                 }
                                                                                  ?>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                             <a href="#" class="main-menu">Shop By Brand</a>
                                                                                                <ul>
                                                                                                   <li><a href="#">Babyhug</a></li>
                                                                                                    <li><a href="#">Babyoye</a></li>
                                                                                                    <li><a href="#">Carter's</a></li>
                                                                                                    <li><a href="#">Kookie Kids</a></li>
                                                                                                    <li><a href="#">Mark & Mia</a></li>
                                                                                                    <li><a href="#">Cute Walk</a></li>


                                                                                                </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 static-menu">
                                                                <div class="menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#" class="main-menu">SHop By category-Girls</a>
                                                                            <ul>
                                                                                <?php foreach($girl_footcat as $gftcat) {?>
                                                                                <li><a href="<?php echo $gftcat->categoryName; ?>"><?php echo $gftcat->categoryName; ?></a></li>
                                                                                <?php
                                                                                 }
                                                                                  ?>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" class="main-menu">Shop By Age</a>
                                                                                                <ul>
                                                                                                   <li><a href="#">New Born (0-3 M)</a></li>
                                                                                                    <li><a href="#">3-6 Months</a></li>
                                                                                                    <li><a href="#">6-9 Months</a></li>
                                                                                                    <li><a href="#">9-12 Months</a></li>
                                                                                                    <li><a href="#">12-18 Months</a></li>
                                                                                                    <li><a href="#">18-24 Months</a></li>
                                                                                                     <li><a href="#">2 to 4 Years</a></li>
                                                                                                    <li><a href="#">4 to 6 Years</a></li>
                                                                                                     <li><a href="#">6+ Year</a></li>

                                                                                                 </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 static-menu">
                                                                <div class="menu">
                                                                    <ul>
                                                                        <li>
                                                                        <img src="<?php echo base_url(); ?>assets/image/demo/shop/category/footwear.jpg">
                                                                        </li>
                                                                         <li>
                                                                        <img src="<?php echo base_url(); ?>assets/image/demo/shop/category/foot.jpg">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                  <li class="with-sub-menu hover">
                                        <p class="close-menu"></p>
                                        <a href="#" class="clearfix">
                                            <strong>Toys&Gear</strong>

                                            <b class="caret"></b>
                                        </a>
                                        <div class="sub-menu" style="width: 100%; display: none;">
                                            <div class="content" style="display: none;">
                                                <div class="row">
                                                     <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-3 static-menu">
                                                                <div class="menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#"  class="main-menu">Shop By category-Toy</a>
                                                                            <ul>
                                                                                        <?php foreach($toy_cat as $tcat) {?>
                                                                                        <li><a href="<?php echo $tcat->categoryName; ?>"><?php echo $tcat->categoryName; ?></a></li>
                                                                                        <?php
                                                                                         }
                                                                                          ?>
                                                                            </ul>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 static-menu">
                                                                <div class="menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#" class="main-menu">SHop By category-Gear</a>
                                                                            <ul>
                                                                                         <?php foreach($gear_cat as $gcat) {?>
                                                                                        <li><a href="<?php echo $gcat->categoryName; ?>"><?php echo $gcat->categoryName; ?></a></li>
                                                                                        <?php
                                                                                         }
                                                                                          ?>
                                                                            </ul>
                                                                        </li>
                                                                        <li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>


                                                                                             <li>
                                                                                                <a href="#" class="main-menu">Shop By Brand-Toy</a>
                                                                                                <ul>
                                                                                                   <?php foreach($toybrand as $tb) {?>
                                                                                                    <li><a href="<?php echo $tb->brandName; ?>"><?php echo $tb->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>


                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                  <a href="#" class="main-menu">Shop By Age</a>
                                                                                                <ul>
                                                                                                   <li><a href="#">New Born (0-3 M)</a></li>
                                                                                                    <li><a href="#">3-6 Months</a></li>
                                                                                                    <li><a href="#">6-9 Months</a></li>
                                                                                                    <li><a href="#">9-12 Months</a></li>
                                                                                                    <li><a href="#">12-18 Months</a></li>
                                                                                                    <li><a href="#">18-24 Months</a></li>
                                                                                                     <li><a href="#">2 to 4 Years</a></li>
                                                                                                    <li><a href="#">4 to 6 Years</a></li>
                                                                                                     <li><a href="#">6+ Year</a></li>

                                                                                                 </ul>
                                                                                            </li>


                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                            <div class="col-md-3 static-menu">
                                                                <div class="menu">
                                                                    <ul>

                                                                                                  <li>
                                                                                                <a href="#" class="main-menu">Shop By Brand-Gear</a>
                                                                                                <ul>
                                                                                                   <?php foreach($gearbrand as $ggb) {?>
                                                                                                    <li><a href="<?php echo $ggb->brandName; ?>"><?php echo $ggb->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>


                                                                                                </ul>
                                                                                            </li>
                                                                        <li>
                                                                        <img src="<?php echo base_url(); ?>assets/image/demo/shop/category/toy1.jpg">
                                                                        </li>
                                                                         <li>
                                                                        <img src="<?php echo base_url(); ?>assets/image/demo/shop/category/toy3.jpg">
                                                                        </li>
                                                                        <li>
                                                                        <img src="<?php echo base_url(); ?>assets/image/demo/shop/category/toys.jpg">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                  <li class="with-sub-menu hover">
                                        <p class="close-menu"></p>
                                        <a href="#" class="clearfix">
                                            <strong>Bath&Skin</strong>

                                            <b class="caret"></b>
                                        </a>
                                        <div class="sub-menu" style="width: 100%; display: none;">
                                           <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                 <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories</a>
                                                                                                <ul>
                                                                                                <?php foreach($bathcat as $bacat) {?>
                                                                                                    <li><a href="<?php echo $bacat->categoryName; ?>"><?php echo $bacat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Brands</a>
                                                                                                <ul>
                                                                                                    <?php foreach($bathbrand as $bbb) {?>
                                                                                                    <li><a href="<?php echo $bbb->brandName; ?>"><?php echo $bbb->brandName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                 <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                                    <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/bath.jpg" style="margin-top: 50px;"></li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                             </div>
                                        </div>
                                    </li>

                                   <li class="with-sub-menu hover">
                                        <p class="close-menu"></p>
                                        <a href="#" class="clearfix">
                                            <strong>Moms</strong>

                                            <b class="caret"></b>
                                        </a>
                                        <div class="sub-menu" style="width: 100%; display: none;">
                                           <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                  <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Categories</a>
                                                                                                <ul>
                                                                                                <?php foreach($momcat as $mcat) {?>
                                                                                                    <li><a href="<?php echo $mcat->categoryName; ?>"><?php echo $mcat->categoryName; ?></a></li>
                                                                                                    <?php
                                                                                                     }
                                                                                                      ?>
                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#" class="main-menu">Shop By Colors</a>
                                                                                                <ul>
                                                                                                    <li><a href="#">Red</a></li>
                                                                                                    <li><a href="#">Green</a></li>
                                                                                                    <li><a href="#">blue</a></li>
                                                                                                    <li><a href="#">Yellow</a></li>
                                                                                                    <li><a href="#">white</a></li>
                                                                                                    <li><a href="#">Black</a></li>
                                                                                                    <li><a href="#">Grey</a></li>
                                                                                                    <li><a href="#">Pink</a></li>
                                                                                                    <li><a href="#">Orange</a></li>
                                                                                                    <li><a href="#">Purple</a></li>

                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                 <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>

                                                                                                    <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/mom.jpg" style="margin-top: 50px;"></li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                             </div>
                                        </div>
                                    </li>
                                 <li class="with-sub-menu hover">
                                        <p class="close-menu"></p>
                                        <a href="#" class="clearfix">
                                            <strong>Health&Safety</strong>

                                            <b class="caret"></b>
                                        </a>
                                        <div class="sub-menu" style="width: 100%; display: none;">
                                            <div class="content" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                             <div class="col-md-4 static-menu">
                                                                <div class="menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#" class="main-menu">Shop By Categories</a>
                                                                            <ul>
                                                                            <?php foreach($healthcat as $hcat) {?>
                                                                                <li><a href="<?php echo $hcat->categoryName; ?>"><?php echo $hcat->categoryName; ?></a></li>
                                                                                <?php
                                                                                 }
                                                                                  ?>
                                                                            </ul>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 static-menu">
                                                                <div class="menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#" class="main-menu">Shop By Brands</a>
                                                                            <ul>
                                                                                <?php foreach($healthbrand as $hb) {?>
                                                                                <li><a href="<?php echo $hb->brandName; ?>"><?php echo $hb->brandName; ?></a></li>
                                                                                <?php
                                                                                 }
                                                                                  ?>
                                                                            </ul>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>

                                                             <div class="col-md-4 static-menu">
                                                                <div class="menu">
                                                                    <ul>
                                                                        <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/health.jpg" style="margin-top: 20px;"></li>

                                                                    </ul>
                                                                </div>
                                                            </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>




                                   <!-- <li class="pull-right"><a href="#" title="Special Offer!"><strong>Special Offer!</strong></a></li>
                                    <li class="pull-right"><a href="#" title="Buy This Theme!"><strong>Buy This Theme!</strong></a></li>-->
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
                                            </div>
                    <!-- //end Main menu -->

                </div>
            </div>

        </div>

    <!-- Navbar switcher -->
    <!-- //end Navbar switcher -->
    </header>
    <!-- //Header Container  -->
