<?php 
	//load LayoutTrangChu.php
	$this->layoutPath = "LayoutTrangChu.php";
 ?>
 <div class="chitiet">
				<!-- hang1 -->
				<div class="container">
					<div class="row">
						<?php 
              		$products = $this->modelHotProducts();
              	 ?>
              	 <?php foreach($products as $rows): ?>
						<div class="col-md-3 col-sm-6" style="position: relative;">
              <div style="position: absolute; width: 40px; line-height: 40px; border-radius: 40px; background: black; color:white; text-align: center;z-index: 100;margin-top: 10px;"><?php echo $rows->discount; ?>%</div>
							<div class="product-grid">
								<div class="product-image">
									
									<a href="#">
										<img class="pic-1" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
										<img class="pic-2" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
									</a>
									<!-- <span class="product-trend-label"><header><h5>TRENDING</h5></header></span> -->
									<ul class="social">
										<li><a href="" data-tip="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>



										<li><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>


										<li><a href="" data-tip="Compare"><i class="fa fa-random"></i></a></li>

										<li><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" data-tip="Quick View"><i class="fa fa-search" title="tìm kiếm"></i></a></li>
									</ul>
								</div>
								

							</div>
							<div class="product-content">
									<h3 class="title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
									<div class="item-content">
                            <div class="ratings">
                              <div class="rating-box"><a href="#">
                                <div style="width:60%" class="rating"></div></a>
                              </div>
                            </div>
                        </div>

									<div class="price"><?php echo number_format($rows->price); ?></div>
									<div class="muangay">
                    <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" id="muangay1" >Mua Ngay</a>
                  </div>

								</div>

						</div>
						<?php endforeach; ?>
					</div>
				</div>
	<div class="duoisanpham">
   <div class="example2" style="">
    <div class="donghonam">
      <div class="khoi">
     <img src="assets/frontend/images/tuyen20.jpg" width="500px" height="300px"></div>
     <div class="aa">
      <p style="font-size: 25px;"><b>Thời trang nam</b></p>
      <div class="aa1">
      Thời trang nam mang hơi thở, tinh thần của những chàng trai hiện đại.
không cô đơn mà luôn có những âm thanh của tuổi trẻ sôi động, nhiệt huyết
truyền cảm hứng và nguồn năng lượng tích cực mỗi ngày cho các chàng
</div>
<div class="aa2">
  <a href="#">Xem chi tiết tại đây>></a>

  
</div>
       
     </div>
      </div>
    
  </div>
</div>
</div>
 <?php 
          $categories = $this->modelGetCategories();
         ?>
         <?php foreach($categories as $rowsCategories): ?>
<div class="chitiet">

        <!-- hang1 -->

      
        <div class="container">
          <div class="row">
          	 <?php 
                  $products = $this->modelGetProducts($rowsCategories->id);
                 ?>
                 <?php foreach($products as $rows): ?>
             

            <div class="col-md-3 col-sm-6">
 
              <div class="product-grid">

                <div class="product-image">
                  
                  <a href="#">
                    <img class="pic-1" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
                    <img class="pic-2" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
                  </a>
                  <!-- <span class="product-trend-label"><header><h5>TRENDING</h5></header></span> -->
                  <ul class="social">
                    <li><a href="" data-tip="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>



                    <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>


                    <li><a href="" data-tip="Compare"><i class="fa fa-random"></i></a></li>

                    <li><a href="" data-tip="Quick View"><i class="fa fa-search" title="tim"></i></a></li>
                  </ul>
                </div>
                

              </div>
              <div class="product-content">
                  <h3 class="title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                  <div class="item-content">
                            <div class="ratings">
                              <div class="rating-box"><a href="#">
                                <div style="width:60%" class="rating"></div></a>
                              </div>
                            </div>
                        </div>

                  <div class="price"><?php echo number_format($rows->price); ?></div>
                  <div class="muangay">
                    <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" id="muangay1" >Mua Ngay</a>
                  </div>

                </div>

            </div>
            <?php endforeach; ?>
        </div>
    </div>
  </div>
    <?php endforeach; ?>
  </div>