<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/trangchu.css">
  <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/frontend/css/font-awesome.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- danhsachsanpham -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- /danhsachsanpham -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="assets/frontend/css/revslider.css" type="text/css">
  <!-- doi mau chu -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- /doi mau cho -->




</head>
<body>
  
 
  <!-- Header -->

<?php 
    //load MVC bang tay -> load file controller
    include "controllers/HeaderController.php";
    $obj = new HeaderController();
    $obj->index();
 ?>
 <!-- slideshow -->
  <div id="magik-slideshow" class="magik-slideshow">
    <div class="wow">
      <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
        <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
          <ul>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' ><img src='assets/frontend/images/tuyencave.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
              <div    class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='15'  data-y='80'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Thời Trang Nữ</div>
              <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='15'  data-y='135'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Big <span>Sale</span></div>
              <div    class='tp-caption sfb  tp-resizeme ' data-x='15'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more"> Xem thêm</a> <a href='#' class="buy-btn">Mua ngay</a></div>
              <div    class='tp-caption Title sft  tp-resizeme ' data-x='15'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu.</div>
              <div    class='tp-caption Title sft  tp-resizeme ' data-x='15'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </li>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='assets/frontend/images/tuyencave3.jpg' class="black-text"><img src='assets/frontend/images/vu2.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
              <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='15'  data-y='80'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Thời Trang Nam</div>
              <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='15'  data-y='135'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span></span></div>
              <div    class='tp-caption sfb  tp-resizeme ' data-x='15'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more">Xem thêm</a> <a href='#' class="buy-btn">Mua ngay</a></div>
              <div    class='tp-caption Title sft  tp-resizeme ' data-x='15'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,
                augue facilisis facilisis.</div>
              <div    class='tp-caption Title sft  tp-resizeme ' data-x='15'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </li>
          </ul>
          <div class="tp-bannertimer"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- /slideshow -->
  <!-- goiy -->
  <div class="duoislide">
  <div class="header-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="content">
            <div class="glyphicon glyphicon-bed">&nbsp;</div>
            <span><strong>FREE SHIPPING</strong> đơn hàng trên 500.000đ</span></div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="content">
            <div class="glyphicon glyphicon-bell">&nbsp;</div>
            <span><strong>HỖ TRỢ</strong> khách hàng</span></div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="content">
            <div class="icon-money">&nbsp;</div>
            <span><strong>TẶNG THẺ GIẢM GIÁ</strong>  cho khách hàng may mắn</span></div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="content">
            <div class="glyphicon glyphicon-certificate">&nbsp;</div>
            <span><strong class="orange">GIẢM GIÁ 5%</strong> cho đơn hàng trên 1 triệu</span></div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- /goiy -->
  <div class="chitiet">
        <!-- hang1 -->
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <!-- main -->
        
        <?php echo $this->view; ?> 
        
        <!-- end main -->
      </div>
    </div>
  </div>
</div>

<section id="category-news">
    <div class="category-new">
      <ul class="first-category">
        <li>
          <div class="new-arrivals">
            <ul>
              <li><a href="#" title=""><b>Tim mới</b></a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
    <div class="menu">
      <div class="container">
        <ul>
          <li>
            <div class="content">
              <a href="#" title=""><div class="khoi1"><img class="images" src="assets/frontend/images/news/anh1.jpg" alt=""></div></a>
              <a href="#" title=""><h3>GIẢM GIÁ TỪ 50% VỚI HƠN 30.000 SẢN PHẨM</h3></a>
              <p>Hàng Việt Nam chất lượng cao...</p>
            </div>
          </li>
          <li>
            <div class="content">
              <a href="#" title=""><div class="khoi1"><img class="images" src="assets/frontend/images/news/tuyen22.jpg" alt=""></div></a>
              <a href="#" title=""><h3>MUA 1 TẶNG 1 ÁP DỤNG KHI ĐỒNG HỒ ĐÔI</h3></a>
              <p>Chương trình khuyến mãi đặc biệt trong ngày tình nhân...</p>
            </div>
          </li>
          <li>
            <div class="content">
              <a href="#" title=""><div class="khoi1"><img class="images" src="assets/frontend/images/news/anh3.jpg" alt=""></div></a>
              <a href="#" title=""><h3>TẶNG QUÀ TRI ÂN KHÁCH HÀNG</h3></a>
              <p>Khi bạn mua đồ với giá trị hơn 1 triệu đồng thì có cơ hội được tặng kèm 1 phụ kiện đồng hồ</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="see-more">
      <ul>
        <li><a href="#" title="">Xem thêm</a></li>
      </ul>
    </div>
    <div class="pr">
      <ul>
        <li></li>
      </ul>
    </div>
  </section>
<!-- Footer -->
  <footer class="footer">
    <div class="footer-middle container">
      <div class="col-md-3 col-sm-4">
        <div class="footer-logo"><a href="index.html" title="Logo"><img src="assets/frontend/images/footer-logo.png" alt="logo"></a></div>
        <p>Hãy kết nối với chúng tôi !!! </p>
        <div class="payment-accept">
          <div><img src="assets/frontend/images/payment-1.png" alt="payment"> <img src="assets/frontend/images/payment-2.png" alt="payment"> <img src="assets/frontend/images/payment-3.png" alt="payment"> <img src="assets/frontend/images/payment-4.png" alt="payment"></div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4">
        <h4>Công Ty</h4>
        <ul class="links">
          <li class="first"><a href="#" title="How to buy">Giới Thiệu Về KINGSHOP</a></li>
          <li><a href="faq.html" title="FAQs">Tuyển Dụng</a></li>
          <li><a href="#" title="Payment">Payment</a></li>
          <li><a href="#" title="Shipment&lt;/a&gt;">Hệ Thống Cửa Hàng</a></li>
          <li><a href="delivery.html" title="delivery">Chăm Sóc Khách Hàng</a></li>
          <li class="last"><a href="#" title="Return policy">Báo Cáo</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4">
        <h4>Sản Phẩm Chính</h4>
        <ul class="links">
          <li class="first"><a title="Your Account" href="login.html">Thời Trang Nam</a></li>
          <li><a title="Information" href="#">Thời Trang Nữ</a></li>
          <li><a title="Addresses" href="#">Đồng hồ</a></li>
          <li><a title="Addresses" href="#">Phụ Kiện</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4">
        <h4>Về Khách Hàng</h4>
        <ul class="links">
          <li class="first"><a href="sitemap.html" title="Site Map">Hướng Dẫn Mua Hàng</a></li>
          <li><a href="#/" title="Search Terms">Mua Hàng Trả Góp</a></li>
          <li><a href="#" title="Advanced Search">Vận Chuyển</a></li>
          <li><a href="contact_us.html" title="Contact Us">Trả Hàng & Hoàn Tiền</a></li>
          <li><a href="#" title="Suppliers">Trung Tâm Trợ Giúp</a></li>
          <li class=" last"><a href="#" title="Our stores" class="link-rss">Chính Sách Bảo Hành</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Liên Hệ</h4>
        <div class="contacts-info">
          <address>
          <a href="#"><i class="add-icon">&nbsp;</i></a>132, Cầu Diễn, Bắc Từ Liêm, TP. Hà Nội<br>
          </address>
          <div class="phone-footer"><i class="phone-icon">&nbsp;</i> 0123456789</div>
          <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="mailto:support@magikcommerce.com">support@magikcommerce.com</a> </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom container">
      <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2015 Magikcommerce. All Rights Reserved.</div>
      <div class="col-sm-7 col-xs-12 company-links">
        <ul class="links">
          <li><a href="#" title="Magento Themes">Magento Themes</a></li>
          <li><a href="#" title="Premium Themes">Premium Themes</a></li>
          <li><a href="#" title="Responsive Themes">Responsive Themes</a></li>
          <li class="last"><a href="#" title="Magento Extensions">Magento Extensions</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  </div>
<div class="social">
  <ul>
    <li class="fb"><a href="#"></a></li>
    <li class="tw"><a href="#"></a></li>
    <li class="googleplus"><a href="#"></a></li>
    <li class="rss"><a href="#"></a></li>
    <li class="pintrest"><a href="#"></a></li>
    <li class="linkedin"><a href="#"></a></li>
    <li class="youtube"><a href="#"></a></li>
  </ul>
</div>
<!-- javascript -->
<script type="text/javascript">
    var slide = new Array();
    //khai bao array chua danh sach anh
    slide[0] ="assets/frontend/images/slide2.jpg";
    slide[1] ="assets/frontend/images/slide1.jpg";
    slide[2] ="assets/frontend/images/slide3.jpg";
    //khia bao bien key luu vi tri anh
    var key = 0;
    setInterval(function(){
      //thay doi gia tri thuoc tinh src cua id=img-slide
      document.getElementById('img-slide').setAttribute("src",slide[key]);
      key++;
      //neu key o vi tri anh cuoi cung thi reset key=0
      if(key == slide.length)
        key=0;
    },2000);
  </script>
  <!-- quay lại đầu trang -->
<button onclick="topFunction()" id="myBtn" title="Go to top">
  <i class="fa fa-arrow-up"></i>
</button>
   <script type="text/javascript">
  mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</script>
<!-- /javascript -->
<!-- javascript -->
 <script type="text/javascript" src="assets/frontend/js/jquery.min.js"></script> 
<script type="text/javascript" src="assets/frontend/js/bootstrap.min.js"></script> 
 
<script type="text/javascript" src="assets/frontend/js/common.js"></script> 
<script type="text/javascript" src="assets/frontend/js/revslider.js"></script> 
<script type="text/javascript" src="assets/frontend/js/owl.carousel.min.js"></script> 
<script type='text/javascript'>
jQuery(document).ready(function(){
jQuery('#rev_slider_4').show().revolution({
dottedOverlay: 'none',
delay: 5000,
startwidth: 1170,
startheight: 580,

hideThumbs: 200,
thumbWidth: 200,
thumbHeight: 50,
thumbAmount: 2,

navigationType: 'thumb',
navigationArrows: 'solo',
navigationStyle: 'round',

touchenabled: 'on',
onHoverStop: 'on',

swipe_velocity: 0.1,
swipe_min_touches: 1,
swipe_max_touches: 1,
drag_block_vertical: false,

spinner: 'spinner0',
keyboardNavigation: 'off',

navigationHAlign: 'center',
navigationVAlign: 'bottom',
navigationHOffset: 0,
navigationVOffset: 20,

soloArrowLeftHalign: 'left',
soloArrowLeftValign: 'center',
soloArrowLeftHOffset: 20,
soloArrowLeftVOffset: 0,

soloArrowRightHalign: 'right',
soloArrowRightValign: 'center',
soloArrowRightHOffset: 20,
soloArrowRightVOffset: 0,

shadow: 0,
fullWidth: 'on',
fullScreen: 'off',

stopLoop: 'off',
stopAfterLoops: -1,
stopAtSlide: -1,

shuffle: 'off',

autoHeight: 'off',
forceFullWidth: 'on',
fullScreenAlignForce: 'off',
minFullScreenHeight: 0,
hideNavDelayOnMobile: 1500,

hideThumbsOnMobile: 'off',
hideBulletsOnMobile: 'off',
hideArrowsOnMobile: 'off',
hideThumbsUnderResolution: 0,

hideSliderAtLimit: 0,
hideCaptionAtLimit: 0,
hideAllCaptionAtLilmit: 0,
startWithSlide: 0,
fullScreenOffsetContainer: ''
});
});
</script>
<!-- /javascript -->
</body>
</html>