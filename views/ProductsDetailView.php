<?php 
//lay trang chu
 $this->layoutPath = "LayoutTrangChu.php";
 ?>
 <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="row">
          <div class="product-view wow">
            <div class="product-essential">
              <form action="#" method="post" id="product_addtocart_form">
                <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                 <div class="box">
  <div class="main"><div class="thumbnail"><img id="imgShow" src="assets/upload/products/<?php echo $record->photo; ?>"></div></div>
    <div class="list-img">
      <ul>
        <li><img id="img2" src="assets/upload/products/<?php echo $record->photo; ?>"></li>
        <li><img id="img3" src="assets/upload/products/<?php echo $record->photo2; ?>"></li>
        <li><img id="img4" src="assets/upload/products/<?php echo $record->photo3; ?>"></li>
        <li><img id="img5" src="assets/upload/products/<?php echo $record->photo4; ?>"></li>
        <li><img id="img6" src="assets/upload/products/<?php echo $record->photo5; ?>"></li>
      </ul>
    </div>
</div>
<style type="text/css">
   .box{width: 460px; padding-top: 15px;
  margin-left: 15px;}
  .main > .thumbnail > img{width: 460px; border: 2px solid pink;}
  .thumbnail {
    overflow: hidden;
}

.thumbnail > img {
    width: 100%;
    height: 100%;
    transition-duration: 0.3s;
    cursor: pointer;
}

.thumbnail > img:hover {
    transform: scale(1.6);
}
  .list-img ul{padding: 0px; margin: 0px; list-style: none; display: flex;}
  .list-img ul li img{width: 78px;}
  .list-img {margin-top: 10px;}
  .list-img ul li{margin-right: 17px;}
</style>
<script type="text/javascript">
  //ham reset style
  function resetStyle(){
    document.getElementById('img2').removeAttribute("style");
    document.getElementById('img3').removeAttribute("style");
    document.getElementById('img4').removeAttribute("style");
    document.getElementById('img5').removeAttribute("style");
    document.getElementById('img6').removeAttribute("style");
  }
  //bắt sự kiện click của id-img1
  document.getElementById('img2').addEventListener("mouseenter", function(){
    //lấy giá trị của thuộc tính
    var srcImg2 = document.getElementById('img2').getAttribute("src");
    //thay đôi giá trị
    var srcImg2 = document.getElementById('imgShow').setAttribute("src",srcImg2);
    //reset đường viền
    resetStyle();
        //tac dộng vào thuộc tính
    document.getElementById('img2').setAttribute("style","border:2px solid green;");

  });
  document.getElementById('img3').addEventListener("mouseenter", function(){
    //lấy giá trị của thuộc tính
    var srcImg3 = document.getElementById('img3').getAttribute("src");
    //thay đôi giá trị
    var srcImg3 = document.getElementById('imgShow').setAttribute("src",srcImg3);
        //reset đường viền
    resetStyle();
    document.getElementById('img3').setAttribute("style","border:2px solid green;");

  });
  document.getElementById('img4').addEventListener("mouseenter", function(){
    //lấy giá trị của thuộc tính
    var srcImg4 = document.getElementById('img4').getAttribute("src");
    //thay đôi giá trị
    var srcImg4 = document.getElementById('imgShow').setAttribute("src",srcImg4);
    //reset đường viền
    resetStyle();

    document.getElementById('img4').setAttribute("style","border:2px solid green;");

  });
  document.getElementById('img5').addEventListener("mouseenter", function(){
    //lấy giá trị của thuộc tính
    var srcImg5 = document.getElementById('img5').getAttribute("src");
    //thay đôi giá trị
    var srcImg5 = document.getElementById('imgShow').setAttribute("src",srcImg5);
        //reset đường viền
    resetStyle();
    document.getElementById('img5').setAttribute("style","border:2px solid green;");

  });
  document.getElementById('img6').addEventListener("mouseenter", function(){
    //lấy giá trị của thuộc tính
    var srcImg6 = document.getElementById('img6').getAttribute("src");
    //thay đôi giá trị
    var srcImg6 = document.getElementById('imgShow').setAttribute("src",srcImg6);
        //reset đường viền
    resetStyle();
    document.getElementById('img6').setAttribute("style","border:2px solid green;");

  });

</script>
                  <div class="moreview-control"> <a style="right: 42px;" href="javascript:void(0)" class="moreview-prev"></a> <a style="right: 42px;" href="javascript:void(0)" class="moreview-next"></a> </div>
                </div>
                
                <!-- end: more-images -->
                
                <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                  <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                  <div class="product-name">
                    <h1><?php echo $record->name; ?> </h1>
                  </div>
                  <div class="ratings">
                    <div class="rating-box">
                      <div style="width:60%" class="rating"></div>
                    </div>
                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> | <a href="">Category:&nbsp; <span> <?php echo $this->getCategory($record->category_id); ?> </span></a> </p>
                  </div>
                  <p class="availability in-stock"><span>Giảm giá</span></p>
                  <div class="price-block">
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo number_format($record->price); ?>₫ </span> </p>
                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo number_format($record->price-($record->price*$record->discount)/100); ?>₫ </span> </p>
                    </div>
                  </div>
                  <div class="short-description">
                    
                    <p>Đối tượng của bộ sưu tập là các bạn trẻ năng động nên các mẫu  đồng hồ được thiết kế dựa trên tiêu chí “mạnh mẽ và trẻ trung”. Mặt  đồng hồ được thiết kế tròn, to và dày cộm; các nút điều khiển lộ hẳn ra ngoài, trông rất cá tính; dây đồng hồ được thiết kế khá “gồ ghề” nhưng rất chắc chắn.

Điều đặc biệt là cách bố trí mặt đồng hồ với các kim chỉ giờ, chỉ phút có bản rộng, cộng với nhiều đồng hồ con để chỉ các ngày trong tuần, chỉ tháng, chỉ nhiệt độ, … thậm chí là để chỉ phương hướng như một la bàn. Ngoài ra để tăng sức cuốn hút cho những món “trang sức” đồng hồ này, các nhà thiết kế quyết định chỉ dùng hai màu là trắng ánh kim và màu đen tuyền cho bộ sưu tập. Đây là hai màu tương phản, nhưng khi được kết hợp hài hòa lại tạo nên hiệu ứng ánh sáng rất cuốn hút. 
Rõ ràng các nhà thiết kế đã nắm rất rõ sở thích của các bạn trẻ khi tạo dáng bên ngoài rất cá tính cho bộ sưu tập  đồng hồ, đồng thời tích hợp vào đó nhiều chức năng mới lạ ngoài chức năng xem giờ. Chắc chắn đây sẽ là một trong những bộ sưu tập đồng hồ cuốn hút các bạn trẻ nhất trong mùa du lịch hè này.</p>
                  </div>
                  <div>
                    <label for="qty">Chọn Size:</label>
                    <div class="chon2">
                      <select>
                      <option value="gt1" selected=""> 37</option>
                      <option value="gt2"> 35</option>
                      <option value="gt2"> 36</option>
                      <option value="gt2"> 37</option>
                      <option value="gt2"> 38</option>
                      <option value="gt2"> 39</option>
                      <option value="gt2"> 40</option>
                      <option value="gt2"> 41</option>
                      <option value="gt2"> 42</option>
                      <option value="gt2"> 43</option>
                      <option value="gt2"> 44</option>
                    </select>
                    </div>
                  </div>
                  <div class="add-to-box">
                    <div class="add-to-cart">
                      <label for="qty">Số Lượng:</label>
                      <div class="pull-left">
                        <div class="custom pull-left">
                          <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                          <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                          <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                        </div>
                      </div>
                      <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><span><i class="icon-basket"></i><a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" style="color: white;"> Thêm vào giỏ hàng</a></span></button>
                    </div>
                    <div class="email-addto-box">
                      <ul class="add-to-links">
                        <li> <a class="link-wishlist" href="#"><span>Thêm vào yêu thích</span></a></li>
                        <li><span class="separator">|</span> <a class="link-compare" href="#"><span></span></a></li>
                      </ul>
                      <p class="email-friend"><a href="#" class=""><span>Chia sẻ cho bạn bè</span></a></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="product-collateral">
              <div class="col-sm-12 wow">
                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                  <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Thông tin sản phẩm</a> </li>
                  <li> <a href="#reviews_tabs" data-toggle="tab">Phản hồi</a> </li>
                </ul>
                <div id="productTabContent" class="tab-content">
                  <div class="tab-pane fade in active" id="product_tabs_description">
                    <div class="std">
                      <p>Đây là thương hiệu thời trang lâu đời nổi tiếng, cao cấp nhất nhì thế giới được thành lập từ năm 1919. Tiếp nối sự thành công, thương hiệu tiếp tục tung ra Triple S – dòng giày đa sắc màu, phá bỏ mọi giới hạn, đủ đẹp, đủ chất để khiến giới mộ điệu lại một lần nữa phải điên đảo Đây là mẫu giày cũng được nhiều người nghệ sĩ thế giới lựa chọn. Tại Việt Nam, giày Triple S được rất nhiều nghệ sĩ nổi tiếng yêu thích.
                      Thiết kế đột phá.
                      Một đôi giày ra đời đã phá vỡ những tiêu chuẩn về thời trang hiện nay.
                      Phần đế cao, uốn lượn hơn hẳn để bạn ăn gian thêm vài centimet
                      Pha trộn những gam màu vintage và nhiều chất liệu vải khác nhau.
                      Trên thân, gót hay đế giày cũng đều được thêu và khắc tên thương hiệu, tạo sự đẳng cấp.</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="reviews_tabs">
                    <div class="box-collateral box-reviews" id="customer-reviews">
                      <div class="box-reviews1">
                        <div class="form-add">
                          <form id="review-form" method="post" action="#">
                            <h3>Phản hồi</h3>
                            <fieldset>
                              <h4>Bạn thấy sản phẩm của chúng tôi như thế nào ? <em class="required">*</em></h4>
                              <span id="input-message-box"></span>
                              <table id="product-review-table" class="data-table">
                                <colgroup>
                                <col>
                                <col width="1">
                                <col width="1">
                                <col width="1">
                                <col width="1">
                                <col width="1">
                                </colgroup>
                                <thead>
                                  <tr class="first last">
                                    <th>&nbsp;</th>
                                    <th><span class="nobr">1 *</span></th>
                                    <th><span class="nobr">2 *</span></th>
                                    <th><span class="nobr">3 *</span></th>
                                    <th><span class="nobr">4 *</span></th>
                                    <th><span class="nobr">5 *</span></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="first odd">
                                    <th>Giá</th>
                                    <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                    <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                    <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                    <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                    <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                                  </tr>
                                  <tr class="even">
                                    <th>Chất lượng</th>
                                    <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                    <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                    <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                    <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                    <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                                  </tr>
                                  <tr class="last odd">
                                    <th>Giao hàng</th>
                                    <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                    <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                    <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                    <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                    <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                                  </tr>
                                </tbody>
                              </table>
                              <input type="hidden" value="" class="validate-rating" name="validate_rating">
                              
                              <div class="review2">
                                <ul>
                                  <li>
                                    <label class="required label-wide" for="review_field">Review<em>*</em></label>
                                    <div class="input-box">
                                      <textarea class="required-entry" rows="3" cols="5" id="review_field" name="detail"></textarea>
                                    </div>
                                  </li>
                                </ul>
                                <div class="buttons-set">
                                  <button class="button submit" title="Submit Review" type="submit"><span>Gửi</span></button>
                                </div>
                              </div>
                            </fieldset>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  -->
             

                <!--  -->
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php echo $record->description; ?>
  <?php echo $record->content; ?>