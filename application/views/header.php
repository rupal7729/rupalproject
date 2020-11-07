


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
                        <div class="form-group languages-block" style="margin-top: 10px;width: 330px;">

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

                        <div class="form-group currencies-block">

                        </div>
                    </div>

                    <div class="header-top-right collapsed-block text-right  col-md-6 col-sm-8 col-xs-12 compact-hidden">
                        <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
                        <div class="tabBlock" id="TabBlock-1">
                         <div class="form-group currencies-block">

                                <?php
                                if(isset($this->session->user))
                                {
                                 ?>
                                <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown" >
                                    <span class="icon icon-credit "></span><i class="fa fa-user" ></i> My Account <span class="fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu btn-xs">
                                    <li> <a href='<?php echo base_url(); ?>index.php/User/myaccount'><i class="fa fa-user" ></i> My Profile</a></li>
                                    <li> <a href='<?php echo base_url(); ?>index.php/User/logout'><i class="fa fa-lock"></i> LogOut </a></li>

                                </ul>
                                <?php }else{ ?>
                                <a href='<?php echo base_url(); ?>index.php/User/login'>
                                    <span class="icon icon-credit "></span><i class="fa fa-lock"></i> Sign In / Register
                                </a>
                                <?php } ?>&nbsp;

                            <a href='<?php echo base_url() ?>index.php/User/wishlist'>
                                    <span class="icon icon-credit "></span><i class="fa fa-heart" ></i> My Wish List
                                </a>
                                 <ul class="top-link list-inline">




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
        </div>
        <!-- //Header Top -->

        <!-- Header center -->
        <div class="header-center right">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
                        <a href="index.html"><img src="<?php echo base_url(); ?>assets/image/demo/logos/logo1.png" title="Your Store" alt="Your Store"/></a>
                    </div>
                    <!-- //end Logo -->
                    <!-- Search -->
                  <!--  <div id="sosearchpro" class="col-md-offset-1 col-md-3 col-sm-12 search-pro">
                        <form method="GET" action="https://demo.smartaddons.com/templates/html/market/index.html">
                            <div id="search0" class="search input-group">
                                <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
                                <span class="input-group-btn">
                                    <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                            <input type="hidden" name="route" value="product/search" />
                        </form>
                    </div>-->
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
                                                            <a href="" class="clearfix">
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
                                                                                                    <li><a href="">Sets & Suits</a></li>
                                                                                                    <li><a href="">T-shirts</a></li>
                                                                                                    <li><a href="">Jeans</a></li>
                                                                                                    <li><a href="">Sweat Shirts & Jackets</a></li>
                                                                                                    <li><a href="">Sweaters</a></li>
                                                                                                    <li><a href="">Nightwear</a></li>
                                                                                                    <li><a href="">Onesies & Rompers</a></li>
                                                                                                    <li><a href="">Ethnic Wear</a></li>
                                                                                                    <li><a href="">Party Wear</a></li>
                                                                                                    <li><a href="">Shirts</a></li>
                                                                                                    <li><a href="">Pajamas & Joggers</a></li>
                                                                                                    <li><a href="">Shorts</a></li>
                                                                                                    <li><a href="">Innerwear & Thermals</a></li>
                                                                                                    <li><a href="">Socks & Tights</a></li>
                                                                                                    <li><a href="">Caps, Gloves & Mittens</a></li>
                                                                                                    <li><a href="">Bath Time</a></li>
                                                                                                    <li><a href="">RainWear</a></li>
                                                                                                    <li><a href="">Swim Wear</a></li>
                                                                                                    <li><a href="">Theme Costumes</a></li>
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

                                                                                                      <li><a href="">Casual Shoes</a></li>
                                                                                                      <li><a href="">Sandals</a></li>
                                                                                                      <li><a href="">Booties</a></li>
                                                                                                      <li><a href="">Flip Flops & Clogs</a></li>
                                                                                                      <li><a href="">Formal & Party Wear</a></li>

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



                                                                                                         <li><a href="">Babyhug</a></li>
                                                                                                        <li><a href="">Babyoye</a></li>
                                                                                                        <li><a href="">Carter's</a></li>
                                                                                                        <li><a href="">Kookie Kids</a></li>
                                                                                                        <li><a href="">Mark & Mia</a></li>
                                                                                                        <li><a href="">Cute Walk</a></li>


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

                                                                                                       <li><a href="">Froke & Dresses</a></li>
                                                                                                    <li><a href="">Sets & Suits</a></li>
                                                                                                    <li><a href="">T-shirts</a></li>
                                                                                                    <li><a href="">Jeans</a></li>
                                                                                                    <li><a href="">Sweat Shirts & Jackets</a></li>
                                                                                                    <li><a href="">Sweaters</a></li>
                                                                                                    <li><a href="">Nightwear</a></li>
                                                                                                    <li><a href="">Onesies & Rompers</a></li>
                                                                                                    <li><a href="">Ethnic Wear</a></li>
                                                                                                    <li><a href="">Party Wear</a></li>
                                                                                                    <li><a href="">Shirts</a></li>
                                                                                                    <li><a href="">Pajamas & Joggers</a></li>
                                                                                                    <li><a href="">Shorts</a></li>
                                                                                                    <li><a href="">Innerwear & Thermals</a></li>
                                                                                                    <li><a href="">Socks & Tights</a></li>
                                                                                                    <li><a href="">Caps, Gloves & Mittens</a></li>
                                                                                                    <li><a href="">Bath Time</a></li>
                                                                                                    <li><a href="">RainWear</a></li>
                                                                                                    <li><a href="">Swim Wear</a></li>
                                                                                                    <li><a href="">Theme Costumes</a></li>
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


                                                                                                      <li><a href="">Casual Shoes</a></li>
                                                                                                      <li><a href="">Sandals</a></li>
                                                                                                      <li><a href="">Booties</a></li>
                                                                                                      <li><a href="">Flip Flops & Clogs</a></li>
                                                                                                      <li><a href="">Formal & Party Wear</a></li>
                                                                                                      <li><a href="">Bellies & Peep Toes</a></li>

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

                                                                                                        <li><a href="">Babyhug</a></li>
                                                                                                        <li><a href="">Babyoye</a></li>
                                                                                                        <li><a href="">Carter's</a></li>
                                                                                                        <li><a href="">Kookie Kids</a></li>
                                                                                                        <li><a href="">Mark & Mia</a></li>
                                                                                                        <li><a href="">Cute Walk</a></li>



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
                                                                                                <a href="#" class="main-menu">Shop By Categories </a>
                                                                                                <ul>


                                                                                                      <li><a href="">Casual Shoes</a></li>
                                                                                                      <li><a href="">Sandals</a></li>
                                                                                                      <li><a href="">Booties</a></li>
                                                                                                      <li><a href="">Bellies & Peep Toes</a></li>
                                                                                                      <li><a href="">Formal & Party Wear</a></li>
                                                                                                      <li><a href="">Flip Flops</a></li>
                                                                                                      <li><a href="">Clogs</a></li>
                                                                                                      <li><a href="">Sneakers & Sports Shoes</a></li>
                                                                                                      <li><a href="">School Shoes</a></li>
                                                                                                      <li><a href="">Mojaris/Ethnic Footwear</a></li>
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

                                                                                                      <li><a href="">Babyhug</a></li>
                                                                                                        <li><a href="">Babyoye</a></li>
                                                                                                        <li><a href="">Carter's</a></li>
                                                                                                        <li><a href="">Kookie Kids</a></li>
                                                                                                        <li><a href="">Mark & Mia</a></li>
                                                                                                        <li><a href="">Cute Walk</a></li>


                                                                                                </ul>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                 <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>

                                                                                                    <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/footwear.jpg"></li>
                                                                                                     <li><img src="<?php echo base_url(); ?>assets/image/demo/shop/category/footpic.jpg"></li>

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

                                                                                            <li><a href="">Musical Toys</a></li>
                                                                                            <li><a href="">Learning & Educational Toys</a></li>
                                                                                            <li><a href="">Soft Toys</a></li>
                                                                                            <li><a href="">Indoor & Outdoor Play</a></li>
                                                                                            <li><a href="">Play Gyms & Playmats</a></li>
                                                                                            <li><a href="">Sports & Games</a></li>
                                                                                            <li><a href="">Role & Pretend Play Toys</a></li>
                                                                                            <li><a href="">Blocks & Construction Sets</a></li>
                                                                                            <li><a href="">Kids Puzzles</a></li>
                                                                                            <li><a href="">Stacking Toys</a></li>
                                                                                            <li><a href="">Stacking Toys</a></li>
                                                                                            <li><a href="">Baby Rattles</a></li>
                                                                                            <li><a href="">Toys Cars Trains & Vehicles</a></li>
                                                                                            <li><a href="">Kids Musical Instruments</a></li>
                                                                                            <li><a href="">Dolls & Dollhouses</a></li>
                                                                                            <li><a href="">Art Crafts & Hobby Kits</a></li>
                                                                                            <li><a href="">Board Games</a></li>
                                                                                            <li><a href="">Action Figures & Collectibles</a></li>
                                                                                            <li><a href="">Bath Toys</a></li>
                                                                                            <li><a href="">Toys Guns & Weapons</a></li>


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

                                                                                                       <li><a href="">Scooters</a></li>
                                                                                            <li><a href="">Tricycles</a></li>
                                                                                            <li><a href="">Bicycles</a></li>
                                                                                            <li><a href="">Balance Bike</a></li>
                                                                                            <li><a href="">Baby Strollers & Prams</a></li>
                                                                                            <li><a href="">Ride-ons & Scooters</a></li>
                                                                                            <li><a href="">Battery Operated Ride-ons</a></li>
                                                                                            <li><a href="">Baby Walkers</a></li>
                                                                                            <li><a href="">Bouncers, Rockers & Gear</a></li>
                                                                                            <li><a href="">Baby Carriers</a></li>
                                                                                            <li><a href="">Baby Car Seats</a></li>
                                                                                            <li><a href="">Baby Carry Cots</a></li>
                                                                                            <li><a href="">Car Sign Boards & Stickers</a></li>
                                                                                            <li><a href="">Musical & Regular Walkers</a></li>
                                                                                            <li><a href="">Twister/Swing Cars</a></li>
                                                                                            <li><a href="">Manual Push Ride-Ons</a></li>
                                                                                            <li><a href="">battery Operated Cars</a></li>
                                                                                            <li><a href="">Convertible Car Seat</a></li>

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

                                                                                                      <li><a href="">Mega Bloks</a></li>
                                                                                                      <li><a href="">Lego</a></li>
                                                                                                      <li><a href="">Giggles</a></li>
                                                                                                      <li><a href="">Barbie</a></li>
                                                                                                      <li><a href="">Disney</a></li>
                                                                                                      <li><a href="">Hotwheels</a></li>
                                                                                                      <li><a href="">Fab n Funky</a></li>
                                                                                                      <li><a href="">Zoe</a></li>
                                                                                                      <li><a href="">Babyhug</a></li>
                                                                                                      <li><a href="">Intellikit</a></li>
                                                                                                      <li><a href="">Fisher Price</a></li>
                                                                                                      <li><a href="">Chicco</a></li>

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

                                                                                                      <li><a href="">Lotions, Oils & Powders</a></li>
                                                                                                      <li><a href="">Soaps, Shampoos & Body Wash</a></li>
                                                                                                      <li><a href="">Baby Creams & Ointments</a></li>
                                                                                                      <li><a href="">Bathing Accessories</a></li>
                                                                                                      <li><a href="">Bath Towels & Robes</a></li>
                                                                                                      <li><a href="">Bath Toys</a></li>
                                                                                                      <li><a href="">Grooming</a></li>


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

                                                                                                      <li><a href="">Sebamed</a></li>
                                                                                                      <li><a href="">Himalaya Babycare</a></li>
                                                                                                      <li><a href="">Babyhug</a></li>
                                                                                                      <li><a href="">Baby Dove</a></li>
                                                                                                      <li><a href="">CURATIO</a></li>
                                                                                                      <li><a href="">Aveeno Baby</a></li>
                                                                                                      <li><a href="">Mama Earth</a></li>
                                                                                                      <li><a href="">Mee Mee</a></li>
                                                                                                      <li><a href="">Fab n Funky</a></li>
                                                                                                      <li><a href="">The Moms Co.</a></li>
                                                                                                      <li><a href="">Mustela</a></li>
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
                                                                                               <li><a href="">Nursing/Sleep Wear</a></li>
                                                                                               <li><a href="">Maternity Dresses & Skirts</a></li>
                                                                                               <li><a href="">Maternity Lingerie</a></li>
                                                                                               <li><a href="">Maternity Bottom wear</a></li>
                                                                                               <li><a href="">Maternity Ethnic Wear</a></li>
                                                                                               <li><a href="">Maternity Tops</a></li>




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

                                                                                                      <li><a href="">Cleansers & Detergents</a></li>
                                                                                  <li><a href="">Oral Care</a></li>
                                                                                  <li><a href="">Childproofing & Safety</a></li>
                                                                                  <li><a href="">Medical Care</a></li>
                                                                                  <li><a href="">Mosquito Repellents & Care</a></li>
                                                                                  <li><a href="">Protection Face Masks & Shields</a></li>
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

                                                                                                      <li><a href="">Sebamed</a></li>
                                                                                                      <li><a href="">Himalaya Babycare</a></li>
                                                                                                      <li><a href="">Babyhug</a></li>
                                                                                                      <li><a href="">Baby Dove</a></li>
                                                                                                      <li><a href="">CURATIO</a></li>
                                                                                                      <li><a href="">Aveeno Baby</a></li>
                                                                                                      <li><a href="">Mama Earth</a></li>
                                                                                                      <li><a href="">Mee Mee</a></li>
                                                                                                      <li><a href="">Fab n Funky</a></li>
                                                                                                      <li><a href="">The Moms Co.</a></li>
                                                                                                      <li><a href="">Mustela</a></li>


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

                                                                                                           <li><a href="">Baby Diapers</a></li>
                                                                                                           <li><a href="">Baby Wet Wipes</a></li>
                                                                                                           <li><a href="">Cloth Diapers & Nappies</a></li>
                                                                                                           <li><a href="">Diaper Bags</a></li>
                                                                                                           <li><a href="">Diaper Changing Mats</a></li>
                                                                                                           <li><a href="">Bed Protectors</a></li>
                                                                                                           <li><a href="">Diaper Rash Cream</a></li>
                                                                                                           <li><a href="">Potty Chairs & Seats</a></li>
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

                                                                                                       <li><a href=" ">Pampers</a></li>
                                                                                                      <li><a href=" ">MamyPoko</a></li>
                                                                                                      <li><a href=" ">Babyhug</a></li>
                                                                                                      <li><a href=" ">Huggies</a></li>
                                                                                                      <li><a href=" ">Himalaya Babycar</a></li>
                                                                                                      <li><a href=" ">Mee Mee</a></li>
                                                                                                      <li><a href=" ">Pigeon</a></li>
                                                                                                      <li><a href=" ">Baby Dove</a></li>
                                                                                                      <li><a href=" ">Johnson's Baby</a></li>
                                                                                                      <li><a href=" ">Fab n Funky</a></li>
                                                                                                      <li><a href=" ">Fisher Price</a></li>
                                                                                                      <li><a href=" ">Mother Sparsh</a></li>
                                                                                                      <li><a href=" ">My Milestones</a></li>
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
                                            <?php echo anchor('User/index','<strong>Home</strong>
                                            <span class="label"></span>'); ?>


                                    </li>
                                  <li class="with-sub-menu hover">
                                        <p class="close-menu"></p>
                                        <a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Boy&gender2=Unisex" class="clearfix">

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
                                                                                                     <?php foreach ($boycat as $bkey) {
                                                                                                          ?>
                                                                                                       <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Boy&gender2=Unisex&catid=<?php echo $bkey->categoryid; ?>"><?php echo $bkey->categoryName ?></a></li>
                                                                                                       <?php } ?>
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

                                                                                                        <li><a href="">Casual Shoes</a></li>
                                                                                                      <li><a href="">Sandals</a></li>
                                                                                                      <li><a href="">Booties</a></li>
                                                                                                      <li><a href="">Flip Flops & Clogs</a></li>
                                                                                                      <li><a href="">Formal & Party Wear</a></li>

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

                                                                                                      <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Boy&gender2=Unisex&brid=1">Babyhug</a></li>
                                                                                                        <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Boy&gender2=Unisex&brid=2">Babyoye</a></li>
                                                                                                        <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Boy&gender2=Unisex&brid=3">Carter's</a></li>
                                                                                                        <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Boy&gender2=Unisex&brid=4">Kookie Kids</a></li>
                                                                                                        <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Boy&gender2=Unisex&brid=5">Mark & Mia</a></li>
                                                                                                        <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Boy&gender2=Unisex&brid=6">Cute Walk</a></li>

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
                                        <a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Girls&gender2=Unisex" class="clearfix">
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
                                                                                                        <?php foreach ($girlcat as $gkey) {
                                                                                                          ?>
                                                                                                       <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Girls&gender2=Unisex&catid=<?php echo $gkey->categoryid; ?>"><?php echo $gkey->categoryName ?></a></li>
                                                                                                       <?php } ?>
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

                                                                                                       <li><a href="">Casual Shoes</a></li>
                                                                                                      <li><a href="">Sandals</a></li>
                                                                                                      <li><a href="">Booties</a></li>
                                                                                                      <li><a href="">Flip Flops & Clogs</a></li>
                                                                                                      <li><a href="">Formal & Party Wear</a></li>
                                                                                                      <li><a href="">Bellies & Peep Toes</a></li>
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

                                                                                                      <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Girls&gender2=Unisex&brid=1">Babyhug</a></li>
                                                                                                        <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Girls&gender2=Unisex&brid=2">Babyoye</a></li>
                                                                                                        <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Girls&gender2=Unisex&brid=3">Carter's</a></li>
                                                                                                        <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Girls&gender2=Unisex&brid=4">Kookie Kids</a></li>
                                                                                                        <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Girls&gender2=Unisex&brid=5">Mark & Mia</a></li>
                                                                                                        <li><a href="<?php echo base_url() ?>index.php/User/productlist?gender1=Girls&gender2=Unisex&brid=6">Cute Walk</a></li>

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
                                                            <div class="col-md-3 static-menu">
                                                                <div class="menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#"  class="main-menu">Shop By category</a>
                                                                            <ul>

                                                                                  <li><a href="">Casual Shoes</a></li>
                                                                                                      <li><a href="">Sandals</a></li>
                                                                                                      <li><a href="">Booties</a></li>
                                                                                                      <li><a href="">Bellies & Peep Toes</a></li>
                                                                                                      <li><a href="">Formal & Party Wear</a></li>
                                                                                                      <li><a href="">Flip Flops</a></li>
                                                                                                      <li><a href="">Clogs</a></li>
                                                                                                      <li><a href="">Sneakers & Sports Shoes</a></li>
                                                                                                      <li><a href="">School Shoes</a></li>
                                                                                                      <li><a href="">Mojaris/Ethnic Footwear</a></li>
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
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 static-menu">
                                                                <div class="menu">
                                                                    <ul>

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
                                                                                                <a href="#" class="main-menu">Shop By Categories For Toys</a>
                                                                                                <ul>

                                                                                            <li><a href="">Musical Toys</a></li>
                                                                                            <li><a href="">Learning & Educational Toys</a></li>
                                                                                            <li><a href="">Soft Toys</a></li>
                                                                                            <li><a href="">Indoor & Outdoor Play</a></li>
                                                                                            <li><a href="">Play Gyms & Playmats</a></li>
                                                                                            <li><a href="">Sports & Games</a></li>
                                                                                            <li><a href="">Role & Pretend Play Toys</a></li>
                                                                                            <li><a href="">Blocks & Construction Sets</a></li>
                                                                                            <li><a href="">Kids Puzzles</a></li>
                                                                                            <li><a href="">Stacking Toys</a></li>
                                                                                            <li><a href="">Stacking Toys</a></li>
                                                                                            <li><a href="">Baby Rattles</a></li>
                                                                                            <li><a href="">Toys Cars Trains & Vehicles</a></li>
                                                                                            <li><a href="">Kids Musical Instruments</a></li>
                                                                                            <li><a href="">Dolls & Dollhouses</a></li>
                                                                                            <li><a href="">Art Crafts & Hobby Kits</a></li>
                                                                                            <li><a href="">Board Games</a></li>
                                                                                            <li><a href="">Action Figures & Collectibles</a></li>
                                                                                            <li><a href="">Bath Toys</a></li>
                                                                                            <li><a href="">Toys Guns & Weapons</a></li>


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

                                                                                                       <li><a href="">Scooters</a></li>
                                                                                            <li><a href="">Tricycles</a></li>
                                                                                            <li><a href="">Bicycles</a></li>
                                                                                            <li><a href="">Balance Bike</a></li>
                                                                                            <li><a href="">Baby Strollers & Prams</a></li>
                                                                                            <li><a href="">Ride-ons & Scooters</a></li>
                                                                                            <li><a href="">Battery Operated Ride-ons</a></li>
                                                                                            <li><a href="">Baby Walkers</a></li>
                                                                                            <li><a href="">Bouncers, Rockers & Gear</a></li>
                                                                                            <li><a href="">Baby Carriers</a></li>
                                                                                            <li><a href="">Baby Car Seats</a></li>
                                                                                            <li><a href="">Baby Carry Cots</a></li>
                                                                                            <li><a href="">Car Sign Boards & Stickers</a></li>
                                                                                            <li><a href="">Musical & Regular Walkers</a></li>
                                                                                            <li><a href="">Twister/Swing Cars</a></li>
                                                                                            <li><a href="">Manual Push Ride-Ons</a></li>
                                                                                            <li><a href="">battery Operated Cars</a></li>
                                                                                            <li><a href="">Convertible Car Seat</a></li>

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

                                                                                                      <li><a href="">Mega Bloks</a></li>
                                                                                                      <li><a href="">Lego</a></li>
                                                                                                      <li><a href="">Giggles</a></li>
                                                                                                      <li><a href="">Barbie</a></li>
                                                                                                      <li><a href="">Disney</a></li>
                                                                                                      <li><a href="">Hotwheels</a></li>
                                                                                                      <li><a href="">Fab n Funky</a></li>
                                                                                                      <li><a href="">Zoe</a></li>
                                                                                                      <li><a href="">Babyhug</a></li>
                                                                                                      <li><a href="">Intellikit</a></li>
                                                                                                      <li><a href="">Fisher Price</a></li>
                                                                                                      <li><a href="">Chicco</a></li>

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

                                                                                                       <li><a href="">Lotions, Oils & Powders</a></li>
                                                                                                      <li><a href="">Soaps, Shampoos & Body Wash</a></li>
                                                                                                      <li><a href="">Baby Creams & Ointments</a></li>
                                                                                                      <li><a href="">Bathing Accessories</a></li>
                                                                                                      <li><a href="">Bath Towels & Robes</a></li>
                                                                                                      <li><a href="">Bath Toys</a></li>
                                                                                                      <li><a href="">Grooming</a></li>


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
                                                                                                       <li><a href="">Sebamed</a></li>
                                                                                                      <li><a href="">Himalaya Babycare</a></li>
                                                                                                      <li><a href="">Babyhug</a></li>
                                                                                                      <li><a href="">Baby Dove</a></li>
                                                                                                      <li><a href="">CURATIO</a></li>
                                                                                                      <li><a href="">Aveeno Baby</a></li>
                                                                                                      <li><a href="">Mama Earth</a></li>
                                                                                                      <li><a href="">Mee Mee</a></li>
                                                                                                      <li><a href="">Fab n Funky</a></li>
                                                                                                      <li><a href="">The Moms Co.</a></li>
                                                                                                      <li><a href="">Mustela</a></li>
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
                                                                                                     <li><a href="">Nursing/Sleep Wear</a></li>
                                                                                               <li><a href="">Maternity Dresses & Skirts</a></li>
                                                                                               <li><a href="">Maternity Lingerie</a></li>
                                                                                               <li><a href="">Maternity Bottom wear</a></li>
                                                                                               <li><a href="">Maternity Ethnic Wear</a></li>
                                                                                               <li><a href="">Maternity Tops</a></li>

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

                                                                                  <li><a href="">Cleansers & Detergents</a></li>
                                                                                  <li><a href="">Oral Care</a></li>
                                                                                  <li><a href="">Childproofing & Safety</a></li>
                                                                                  <li><a href="">Medical Care</a></li>
                                                                                  <li><a href="">Mosquito Repellents & Care</a></li>
                                                                                  <li><a href="">Protection Face Masks & Shields</a></li>

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

                                                                                  <li><a href="">Mee Mee</a></li>
                                                                                  <li><a href="">Babyhug</a></li>
                                                                                  <li><a href="">Mama Earth</a></li>
                                                                                  <li><a href="">Pigeon</a></li>
                                                                                  <li><a href="">Aquawhite</a></li>
                                                                                  <li><a href="">Good knight</a></li>
                                                                                  <li><a href="">Dettol</a></li>
                                                                                  <li><a href="">Chicco</a></li>
                                                                                  <li><a href="">Farlin</a></li>
                                                                                  <li><a href="">Morisons Baby Dreams</a></li>
                                                                                  <li><a href="">Aringel</a></li>

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
