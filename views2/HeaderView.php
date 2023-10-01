
  <!-- Header -->
  <header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-6"><a href="#">
<i class="glyphicon glyphicon-cloud"></i></a>
<a href=""><i class="glyphicon glyphicon-user"></i></a>
<a href=""><i class="glyphicon glyphicon-envelope"></i></a>
<a href=""><i class="glyphicon glyphicon-thumbs-up"></i></a>
            <!-- End Header Currency -->
            <div class="welcome-msg hidden-xs">Chào mừng quý khách ! </div>
          </div>
          <div class="col-xs-6"> 
            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">Đăng nhập</span></a></div>
                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Đăng kí</span></a></div>&nbsp;&nbsp;
                <a href="">
                	<i class="glyphicon glyphicon-earphone"></i>&nbsp;0123456789</a>
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
    <div class="header container">
      <div class="row">
        <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12"> 
          <!-- Header Logo --> 
          <div class="logo_content">

      <div style="font-weight: bold; text-align: center; font-size: 25px; text-shadow: 2px 2px 5px #666; margin-top: 10px">
        Hoang Vu
      </div>
      <div style="text-align: center; font-size: 10px; letter-spacing: 5px; margin-bottom: 20px;">
        MEN'S FASHION
      </div>
  </div>
          <!-- <a class="logo" title="Magento Commerce" href="index.html"><img alt="Magento Commerce" src="images/footer-logo.png"></a>  -->
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-7 col-sm-4 col-md-6 col-xs-12"> 
          <!-- Search-col -->
          <div class="search-box">
            <form action="http://htmldemo.magikcommerce.com/ecommerce/inspire-html-template/digital/cat" method="POST" id="search_mini_form" name="Categories">
              <input type="text" placeholder="Search here..." value="" maxlength="70" class="" name="search" id="search">
              <button id="submit-button" class="search-btn-bg"><span>Tìm kiếm</span></button>
            </form>
          </div>
          <!-- End Search-col --> 
        </div>
        <!-- Top Cart -->
        <div class="col-lg-3 col-sm-5 col-md-4 col-xs-12">
          <div class="top-cart-contain">
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="shopping_cart.html"> <i class="icon-cart"></i>
                <div class="cart-box"><span class="title">Giỏ Hàng</span><span id="cart-total"> 2 </span></div>
                </a></div>
              <div>
                <div class="top-cart-content arrow_box">
                  <div class="block-subtitle">Thêm vào giỏ hàng</div>
                  <ul id="cart-sidebar" class="mini-products-list">
                    <li class="item even"> <a class="product-image" href="#" title="Downloadable Product "><img alt="Downloadable Product " src="images/aosominam.jpg" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="#" title="Downloadable Product">Áo sơ mi nam</a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">250.000đ</span> <span class="title-desc">Qty:</span> <strong>1</strong> </div>
                      </div>
                    </li>
                    <li class="item last odd"> <a class="product-image" href="#" title="  Sample Product "><img alt="  Sample Product " src="images/aosominam.jpg" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="#" title="  Sample Product "> Áo sơ mi nữ </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">220.000đ</span> <span class="title-desc">Qty:</span> <strong>2</strong> </div>
                      </div>
                    </li>
                  </ul>
                  <div class="top-subtotal">Tổng: <span class="price">470.000đ</span></div>
                  <div class="actions">
                    <button class="btn-checkout" type="button"><span>Checkout</span></button>
                    <button class="view-cart" type="button"><span>View Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
        
        </div>
        <!-- End Top Cart --> 
      </div>
    </div>
  </header>
  <!-- menu -->
  <div id="menu1">
  <ul>
    <li><a href="index.php">Trang chủ</a></li>
    <li><a href="#">Sản phẩm</a>
     <ul class="sub-menu1">
        <?php 
              //load cap 1
              $categories = $this->modelGetCategories();
           ?>
           <?php foreach($categories as $rows): ?>
            <li><a href="index.php?controller=products&action=categories&category_id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
              <?php 
                //load cap 2
                $categoriesSub = $this->modelGetCategoriesSub($rows->id);
             ?>
             <?php foreach($categoriesSub as $rowsSub): ?>
            <li style="padding-left:20px;"><a href="index.php?controller=products&action=categories&category_id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
              <?php endforeach; ?>
            <?php endforeach; ?>
      </ul></li>
    <li><a href="index.php?controller=news">Tin tức</a>
      <ul class="sub-menu1">
        <li><a href="#">WordPress</a></li>
        <li><a href="#">SEO</a></li>
        <li><a href="#">Hosting</a>
        </li>
      </ul>
    </li>
    <li><a href="index.php?controller=cart">Giỏ hàng</a></li>
    <li><a href="#">Yêu thích</a></li>
    <li><a href="index.php?controller=contact">Liên hệ</a></li>
  </ul>
</div>