<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/trangchu.css">
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/trangdanhmuc.css">
  

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
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/stylecategory.css">
  <!--  -->
  <!-- trang chi tiet -->
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/trangchitiet.css">
  <script type="text/javascript" src="assets/frontend/js/jquery-3.5.1.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- JavaScript --> 
<script type="text/javascript" src="assets/frontend/js/jquery.min.js"></script> 
<script type="text/javascript" src="assets/frontend/js/bootstrap.min.js"></script> 
 
 
<script type="text/javascript" src="assets/frontend/js/jquery.jcarousel.min.js"></script> 
<script type="text/javascript" src="assets/frontend/js/cloudzoom.js"></script>
 
  <!--  /trang chi tiet-->
  <!--  -->
</head>
<body>
  <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/605c9747f7ce18270933dcdc/1f1kqts5f';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<?php 
    //load MVC bang tay -> load file controller
    include "controllers/HeaderController.php";
    $obj = new HeaderController();
    $obj->index();
 ?>

 <!--  -->

  <section id="category">
    <div class="category">
      <div class="category-top">
        <div class="category-top-left">
          <ul>
            <li><a href="#" title="">Trang chủ</a></li>
            <li>/</li>
            <li class="font-bolder"><a href="#" title="">Đồng hồ</a></li>
            <li></li>
            <li><a href="" title="">/ <b>Đồng hồ thời trang</b></a></li>
          </ul>
        </div>
        <!-- <div class="category-top-right">
          <select name="" >
            <option value="">Mặc định</option>
            <option value="">Giá: tăng dần</option>
            <option value="">Giá: giảm dần</option>
            <option value="">Tên: A-Z</option>
            <option value="">Tên: Z-A</option>
            <option value="">Sale</option>
          </select>
        </div> -->
      </div>
      <div class="category-mid">
        <div class="category-mid-left">
          <h3><b>DANH MỤC</b></h3>
          <ul class="list-category">
            <li><a href="detailspage.html" title=""><i class="fas fa-clock"></i> Đồng hồ Nam</a></li>
            <li><a href="detailspage.html" title=""><i class="far fa-clock"></i> Đồng hồ Nữ</a></li>
            <li><a href="detailspage.html" title=""><i class="fas fa-glasses"></i> Kính đẹp</a></li>
            <li><a href="detailspage.html" title=""><i class="fas fa-tshirt"></i> Đồng hồ đôi</a></li>
            <li><a href="detailspage.html" title=""><i class="fas fa-tshirt"></i> Thời trang Nam</a></li>
            <li><a href="detailspage.html" title=""><i class="fas fa-tshirt"></i> Dây bạc</a></li>
            <li><a href="detailspage.html" title=""><i class="fas fa-tshirt"></i> Phụ kiện</a></li>
          </ul>
          <h3><b>MÀU SẮC</b></h3>
          <ul class="color"> 
            <li><a href="" title=""><i class="far fa-square"></i></a> Mix</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Đen</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Xám</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Xám nhạt</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Xanh ngọc</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Xanh rêu</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Tím</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Tím phớt</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Hồng</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Vàng</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Cam</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Cà rốt</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Đỏ</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Đỏ đô</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Nâu</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Coffee</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Be</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Trắng</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> Trắng kem</li>
          </ul>
          <h3><b>KÍCH CỠ</b></h3>
          <ul class="Grootte">
            <li><a href="" title=""><i class="far fa-square"></i></a> S</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> M</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> XL</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> XXl</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> XXXL</li>
            <li><a href="" title=""><i class="far fa-square"></i></a> XXXXL</li>
          </ul>
          <h3><b>GIÁ</b></h3>
          <div class="input">
            Min:<input type="text" name="" style="max-width: 60px;" placeholder="0&#8363;"><i class="fas fa-long-arrow-alt-right"></i><input type="text" name="" style="max-width: 60px;">:Max
          </div>
        </div>
        <!--  -->
        <div class="chitiet">
        <!-- hang1 -->
        <div class="container">
          <div class="row">
             <?php echo $this->view; ?>
            <div class="col-md-3 col-sm-6">
              <!-- main -->
        
        
        
        <!-- end main -->
      </div>
    </div>
  </div>
</div>

        <!--  -->
      </div>
      <div class="category-bottom">
        <div class="container">
          <ul>
            <li><a href="#" title="">1</a></li>
            <li><a href="#" title="">2</a></li>
            <li><a href="#" title="">3</a></li>
            <li><a href="#" title="">...</a></li>
            <li><a href="#" title=""><i class="fas fa-long-arrow-alt-right"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="pr">
      <ul>
        <li></li>
      </ul>
    </div>
  </section>


 
    <!-- footer -->
    <!-- /anh -->
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
    <!-- /footer -->
    

<!-- script -->
 <script type="text/javascript" src="assets/frontend/js/jquery-3.5.1.js"></script>
</body>
</html>