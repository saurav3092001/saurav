<!-- ltn__product-item -->
<?php
function getproducts(){
global $conn;
global $arrey;

if(mysqli_num_rows($arrey)>0){
while($row=mysqli_fetch_assoc($arrey)){
  $products_id=$row['id'];
?>
<div class="col-xl-3 col-lg-4 col-sm-6 col-6">
    <div class="ltn__product-item ltn__product-item-3 text-center">
        <div class="product-img">
            <a href="product-details.html"><?php echo '<img src="includs/uploads/'.$row['Image'].'"  alt="user1">'?></a>
            <div class="product-badge">
                <ul>
                    <li class="sale-badge">-<?php echo  $row['discount'];  ?>%</li>
                </ul>
            </div>
           
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
            <?php echo   '<button class="btn theme-btn-2 "><a class="text-white" href="hing.php?cart_id='.$products_id.'">Cart</button></a>' ?>
        </div>
    </div>
</div>
<?php 
}
}
else{
echo "no record";
}
}
?>
<!-- ltn__product-item -->
   
<!-- calling ipadress -->
<?php  
    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
$get_ip_add = getIPAddress();  
 
?>  

<!-- add to cart -->
<?php
function cart(){
if(isset($_GET['cart_id'])){
 global $conn;
 $get_ip_add=getIPAddress();
 $get_product_id=$_GET['cart_id'];
 $select_query="SELECT * FROM cart_details where ip_address='$get_ip_add' and
 product_id=$get_product_id";
 $result_query=mysqli_query($conn,$select_query);
 $num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows>0){
 echo "<script>alert('This item is already present inside cart')</script>";
 echo "<script>window.open('hing.php','_self')</script>";
}else{
 $insert_query="INSERT INTO `cart_details`(`product_id`,`ip_address`,`quantity`) VALUES ('$get_product_id','$get_ip_add','0')";
 $result_query=mysqli_query($conn,$insert_query);
}
}
} 
?>  

<!-- function to get cart item numbers -->
<?php
function cart_item(){
  if(isset($_GET['cart_id'])){
    global $conn;
    $get_ip_add=getIPAddress();
    $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query=mysqli_query($conn,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
    }else{
      global $conn;
      $get_ip_add=getIPAddress();
      $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
      $result_query=mysqli_query($conn,$select_query);
      $count_cart_items=mysqli_num_rows($result_query);
 }
  echo$count_cart_items;
 }

 ?>

<!-- total price function -->
<?php
function total_cart_price(){
  global $conn;
  $get_ip_add =getIPAddress();
  $total_price=0;
 $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
 $result=mysqli_query($conn,$cart_query);
 while($row=mysqli_fetch_array($result)){
   $product_id=$row['product_id'];
   $select_products="Select * from `products_table` where id='$product_id'";
   $result_products=mysqli_query($conn,$select_products);
   while($row_product_price=mysqli_fetch_array($result_products)){
$product_price=array($row_product_price['sell-price']);
$product_values=array_sum($product_price);
$total_price+=$product_values;
 }
}
echo $total_price;
}

?>

<?php
function cart_details(){
  global $conn;
  $get_ip_add =getIPAddress();
  $total_price=0;
 $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
 $result=mysqli_query($conn,$cart_query);
 while($row=mysqli_fetch_array($result)){
   $product_id=$row['product_id'];
   $select_products="Select * from `products_table` where id='$product_id'";
   $result_products=mysqli_query($conn,$select_products);
   while($row_product_price=mysqli_fetch_array($result_products)){
$product_Image=array($row_product_price['Image']);
$product_name=array($row_product_price['name']);
$product_price=array($row_product_price['sell-price']);
$product_values=array_sum($product_price);
$total_price+=$product_values;
  
?>

                                    <tr>
                                        <td class="card-products-remove">x</td>
                                        <td class="cart-product-image">
                                            <a href="product-details.html"><img src="includs/uploads/<?php echo $product_Image['0']; ?>" alt="#"></a>
                                        </td>
                                        <td class="cart-product-info">
                                            <h4><a href="product-details.html"><?php echo $product_name['0']; ?></a></h4>
                                        </td>
                                        <td class="cart-product-price">$<?php echo $product_price['0']; ?></td>
                                        <td class="cart-product-quantity">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                        <td class="cart-product-subtotal">$300</td>
                                    </tr>
                                    <?php
                                     }
                                }
                            }
                            ?>