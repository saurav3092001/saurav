
<!doctype html>
<html class="no-js" lang="zxx">

<head>
<?php include 'link.php'; ?>
</head>


<body>

<!-- Body main wrapper start -->
<div class="body-wrapper">
<?php 
require 'includs/conn.php';
include 'header.php';?>
<!-- calling function -->
<?php
cart();
?>
<!-- <-- <slider start -->
    <?php

 
$sql="SELECT * FROM slider_tbl";
$arrey=mysqli_query($conn,$sql);
if(mysqli_num_rows($arrey)>0){
    while($row=mysqli_fetch_assoc($arrey)){
?>
   <!-- SLIDER AREA START (slider-3) -->
   <div class="ltn__slider-area ltn__slider-3  section-bg-1">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                               
                            
                            <?php echo '<img src="includs/uploads/'.$row['slid_img'].'"  height="500px" width="100%" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">'?>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
                <div class="ltn__slide-item-inner  text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                               
                                
                            <?php echo '<img src="includs/uploads/'.$row['img_2'].'"  height="500px" width="100%" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">'?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <?php  }
                }
                else{
                  echo "no record";
                }
                ?>
    <!-- SLIDER AREA END -->

  
   
    <!-- PRODUCT TAB AREA START (product-item-3) -->
    <div class="ltn__product-tab-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <!-- <h6 class="section-subtitle ltn__secondary-color">// Cars</h6> -->
                        <h1 class="section-title">Products yash</h1>
                        <p>A highly efficient slip-ring scanner for today's diagnostic requirements.</p>
                    </div>
            </div>
            </div>
            </div>
            </div>
            </div>
    <!-- PRODUCT SLIDER AREA START -->
    <?php
  
  $sql="SELECT * FROM products_table";
  $arrey=mysqli_query($conn,$sql);  

?>
    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title">Special Offers</h1>
                    </div>
                </div>
            </div>
             
            <div class="row ltn__product-slider-item-four-active slick-arrow-1">
                <!-- ltn__product-item -->
               
                
                <div class="col-lg-12 ">
                <?php
                if(mysqli_num_rows($arrey)>0){
                  while($row=mysqli_fetch_assoc($arrey)){
                    $products_id=$row['id'];
                   ?>
                    <div class="ltn__product-item ltn__product-item-3 text-center ">
                   <div class="product-img">
                            <a href="product-details.html"><?php echo '<img src="includs/uploads/'.$row['Image'].'"  alt="user1">'?>
</a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge">-<?php echo  $row['discount'];  ?>%</li>
                                </ul>
                            </div>
                           
                        <div class="product-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html"><?php echo  $row['name'];  ?></a></h2>
                            <div class="product-price">
                                <span>$<?php echo  $row['sell-price'];  ?></span>
                                <del>$<?php echo  $row['products-price'];  ?></del>
                            </div>
                            <?php echo   '<button class="btn theme-btn-2 "><a class="text-white" href="index-3.php?cart_id='.$products_id.'">Cart</button></a>' ?> </div>
                    </div>    
                 
</div>

<?php 
                   }
                }
                else{
                  echo "no record";
                }
                ?> 
               
                <!--  -->
          
            </div>
           
        </div>
      
    </div>
    <!-- PRODUCT SLIDER AREA END -->
 <!-- CATEGORY AREA START -->
 <div class="ltn__category-area section-bg-1 pt-110 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title white-color---">Top Catagories</h1>
                        <p class="white-color---">A highly efficient slip-ring scanner for today's diagnostic requirements.</p>
                    </div>
                </div>
            </div>
            <div class="row ltn__category-slider-active slick-arrow-1">
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <img src="img/icons/icon-img/category-1.png" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="shop.html">Browse all</a></h5>
                            <h6>(235 item)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <img src="img/icons/icon-img/category-2.png" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="shop.html">Vegetables</a></h5>
                            <h6>(78 item)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <img src="img/icons/icon-img/category-3.png" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="shop.html">Fruits</a></h5>
                            <h6>(45 item)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <img src="img/icons/icon-img/category-4.png" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="shop.html">Meat</a></h5>
                            <h6>(15 item)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <img src="img/icons/icon-img/category-5.png" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="shop.html">Fish</a></h5>
                            <h6>(25 item)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <img src="img/icons/icon-img/category-3.png" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="shop.html">Others</a></h5>
                            <h6>(85 item)</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CATEGORY AREA END -->
    <!-- CALL TO ACTION START (call-to-action-2) -->
    <div class="ltn__call-to-action-area call-to-action-2 pt-20 pb-20" data-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-2 text-center">
                        <h2>Get A Free Service Or Make A Call</h2>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-4 btn-white" href="contact.html"><i class="fas fa-phone-volume"></i> MAKE A CALL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- BANNER AREA START -->
    <div class="ltn__banner-area mt-120">
        <div class="container">
            <div class="row ltn__custom-gutter--- justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop.html"><img src="img/banner/1.jpg" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop.html"><img src="img/banner/2.jpg" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop.html"><img src="img/banner/1.jpg" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER AREA END -->

    <!-- SMALL PRODUCT LIST AREA START -->
    <div class="ltn__small-product-list-area pt-115 pb-90 d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center---">
                        <h6 class="section-subtitle ltn__secondary-color">//  Products</h6>
                        <h1 class="section-title">Body Parts</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="product-details.html"><img src="img/product/1.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                            <div class="product-price">
                                <span>$129.00</span>
                                <del>$140.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="product-details.html"><img src="img/product/2.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                            <div class="product-price">
                                <span>$145.00</span>
                                <del>$155.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="product-details.html"><img src="img/product/3.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                            <div class="product-price">
                                
                                <span>$135.00</span>
                                <del>$145.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="product-details.html"><img src="img/product/4.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                            <div class="product-price">
                                
                                <span>$149.00</span>
                                <del>$162.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="product-details.html"><img src="img/product/5.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Coil Spring Kit</a></h2>
                            <div class="product-price">
                                
                                <span>$140.00</span>
                                <del>$150.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="product-details.html"><img src="img/product/6.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                            <div class="product-price">
                                
                                <span>$110.00</span>
                                <del>$120.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="product-details.html"><img src="img/product/7.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                            <div class="product-price">
                                
                                <span>$130.00</span>
                                <del>$150.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="product-details.html"><img src="img/product/8.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                            <div class="product-price">
                                
                                <span>$180.00</span>
                                <del>$190.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="product-details.html"><img src="img/product/9.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                            <div class="product-price">
                                
                                <span>$125.00</span>
                                <del>$145.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- SMALL PRODUCT LIST AREA END -->

    <!-- SMALL PRODUCT LIST AREA START -->
    <div class="ltn__small-product-list-area pt-80 pb-85">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-area ltn__section-title-2--- text-center---">
                                <h1 class="section-title-2 border-bottom">Featured Products</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row ltn__small-product-slider-active slick-arrow-1  slick-arrow-1-inner---">
                        <!-- small-product-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/1.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                    <div class="product-price">
                                        <span>$129.00</span>
                                        <del>$140.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/2.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                    <div class="product-price">
                                        <span>$145.00</span>
                                        <del>$155.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/3.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                    <div class="product-price">
                                        
                                        <span>$135.00</span>
                                        <del>$145.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- small-product-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/1.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                    <div class="product-price">
                                        <span>$129.00</span>
                                        <del>$140.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/2.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                    <div class="product-price">
                                        <span>$145.00</span>
                                        <del>$155.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/3.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                    <div class="product-price">
                                        
                                        <span>$135.00</span>
                                        <del>$145.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- small-product-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/1.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                    <div class="product-price">
                                        <span>$129.00</span>
                                        <del>$140.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/2.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                    <div class="product-price">
                                        <span>$145.00</span>
                                        <del>$155.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/3.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                    <div class="product-price">
                                        
                                        <span>$135.00</span>
                                        <del>$145.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-area ltn__section-title-2--- text-center---">
                                <h1 class="section-title-2 border-bottom">Most View Products</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row ltn__small-product-slider-active slick-arrow-1">
                        <!-- small-product-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/1.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                    <div class="product-price">
                                        <span>$129.00</span>
                                        <del>$140.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/2.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                    <div class="product-price">
                                        <span>$145.00</span>
                                        <del>$155.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/3.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                    <div class="product-price">
                                        
                                        <span>$135.00</span>
                                        <del>$145.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- small-product-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/1.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                    <div class="product-price">
                                        <span>$129.00</span>
                                        <del>$140.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/2.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                    <div class="product-price">
                                        <span>$145.00</span>
                                        <del>$155.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/3.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                    <div class="product-price">
                                        
                                        <span>$135.00</span>
                                        <del>$145.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- small-product-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/1.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                    <div class="product-price">
                                        <span>$129.00</span>
                                        <del>$140.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/2.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                    <div class="product-price">
                                        <span>$145.00</span>
                                        <del>$155.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/3.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                    <div class="product-price">
                                        
                                        <span>$135.00</span>
                                        <del>$145.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-area ltn__section-title-2--- text-center---">
                                <h1 class="section-title-2 border-bottom">Bestseller Products</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row ltn__small-product-slider-active slick-arrow-1">
                        <!-- small-product-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/1.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                    <div class="product-price">
                                        <span>$129.00</span>
                                        <del>$140.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/2.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                    <div class="product-price">
                                        <span>$145.00</span>
                                        <del>$155.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/3.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                    <div class="product-price">
                                        
                                        <span>$135.00</span>
                                        <del>$145.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- small-product-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/1.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                    <div class="product-price">
                                        <span>$129.00</span>
                                        <del>$140.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/2.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                    <div class="product-price">
                                        <span>$145.00</span>
                                        <del>$155.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/3.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                    <div class="product-price">
                                        
                                        <span>$135.00</span>
                                        <del>$145.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- small-product-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/1.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                    <div class="product-price">
                                        <span>$129.00</span>
                                        <del>$140.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/2.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                    <div class="product-price">
                                        <span>$145.00</span>
                                        <del>$155.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__small-product-item">
                                <div class="small-product-item-img">
                                    <a href="product-details.html"><img src="img/product/3.png" alt="Image"></a>
                                </div>
                                <div class="small-product-item-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                    <div class="product-price">
                                        
                                        <span>$135.00</span>
                                        <del>$145.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SMALL PRODUCT LIST AREA END -->

   
    <!-- COUNTDOWN AREA START -->
    <div class="ltn__call-to-action-area ltn__call-to-action-4 ltn__call-to-action-4-2 bg-overlay-black-50 bg-image pt-110 pb-120 d-none" data-bg="img/bg/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-4 text-color-white text-center">
                        <h2 class="ltn__secondary-color">Hurry Up!</h2>
                        <h1 class="h1">Hot Deal! Sale Up To 20% off</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br> Explicabo id, unde hic molestias omnis.</p>
                        <div class="ltn__countdown ltn__countdown-3 bg-white--" data-countdown="2021/12/28"></div>
                        <div class="btn-wrapper animated">
                            <a href="shop.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__call-to-4-img-1">
            <img src="img/product/7.png" alt="#">
        </div>
        <div class="ltn__call-to-4-img-2">
            <img src="img/bg/11.png" alt="#">
        </div>
    </div>
    <!-- COUNTDOWN AREA END -->

   
   <!-- <footer> -->
   <?php include 'footer.php';?>
    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/4.png" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                </ul>
                                            </div>
                                            <h3>Vegetables Juices</h3>
                                            <div class="product-price">
                                                <span>$149.00</span>
                                                <del>$165.00</del>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1">
                                                <ul>
                                                    <li>
                                                        <strong>Categories:</strong> 
                                                        <span>
                                                            <a href="#">Parts</a>
                                                            <a href="#">Car</a>
                                                            <a href="#">Seat</a>
                                                            <a href="#">Cover</a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-2">
                                                <ul>
                                                    <li>
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span>ADD TO CART</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-3">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                            <i class="far fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="" title="Compare" data-toggle="modal" data-target="#quick_view_modal">
                                                            <i class="fas fa-exchange-alt"></i>
                                                            <span>Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li>Share:</li>
                                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    
                                                </ul>
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
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/1.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.html">Vegetables Juices</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                            <div class="btn-wrapper">
                                                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
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
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/7.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.html">Vegetables Juices</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                            <div class="btn-wrapper">
                                                <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
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
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->    

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  <!-- google translate -->
 

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>

