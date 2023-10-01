<?php 
  //load LayoutTrangChu.php
  $this->layoutPath = "LayoutTrangTrong.php";
  $category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
 ?>

  
       <section id="category">
    <div class="category">
        
      <div class="category-mid">
           
        <div class="category-mid-right">

          <div class="nav">
           
            <ul>
 <?php foreach($data as $rows): ?>
              <li>
               
                <a href="" title=""><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" style="width: 240px;"></a>
                <p class="title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></p>
                <p class="ratting"><a href="#"><i class="far fa-star"></i></a><a href="#"><i class="far fa-star"></i></a><a href="#"><i class="far fa-star"></i></a><a href="#"><i class="far fa-star"></i></a><a href="#"><i class="far fa-star"></i></a></p>
                <p class="price">480,000&#8363;</p>
               
              </li>
                 <?php endforeach; ?>

            </ul>

            
          </div>
           <div class="nav">
           
            <ul>
 <?php foreach($data as $rows): ?>
              <li>
               
                <a href="" title=""><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" style="width: 240px;"></a>
                <p class="title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></p>
                <p class="ratting"><a href="#"><i class="far fa-star"></i></a><a href="#"><i class="far fa-star"></i></a><a href="#"><i class="far fa-star"></i></a><a href="#"><i class="far fa-star"></i></a><a href="#"><i class="far fa-star"></i></a></p>
                <p class="price">480,000&#8363;</p>
               
              </li>
                 <?php endforeach; ?>
                 
            </ul>

            
          </div>
           <div class="nav">
           
            <ul>
 <?php foreach($data as $rows): ?>
              <li>
               
                <a href="" title=""><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" style="width: 240px;"></a>
                <p class="title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></p>
                <p class="ratting"><a href="#"><i class="far fa-star"></i></a><a href="#"><i class="far fa-star"></i></a><a href="#"><i class="far fa-star"></i></a><a href="#"><i class="far fa-star"></i></a><a href="#"><i class="far fa-star"></i></a></p>
                <p class="price">480,000&#8363;</p>
               
              </li>
                 <?php endforeach; ?>
                 
            </ul>

            
          </div>

         
        </div>

      </div>

      
    </div>
    <div class="pr">
      <ul>
        <li></li>
      </ul>
    </div>
  </section>



