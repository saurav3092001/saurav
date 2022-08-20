<?php
$conn=mysqli_connect("localhost","root","","web");
//  produts add
  if(isset($_POST['go'])){
    
    $name=$_POST['name'];
    $Image=$_FILES["Image"]['name'];
    $weight=$_POST['weight'];
    $discount=$_POST['discount'];
    $categories=$_POST['categories_id'];
    $products_price=$_POST['products_price'];
    $sell_price=$_POST['sell_price'];
    if(!$conn){
        echo "data not connected";
    }else{
    $sql2="INSERT INTO `products_table` ( `name`, `Image`, `weight`, `discount`, `categories`, `products-price`, `sell-price`) VALUES ('$name', '$Image' , '$weight', '$discount', '$categories', '$products_price', '$sell_price')";
        if(mysqli_query($conn,$sql2)){
            move_uploaded_file($_FILES["Image"]["tmp_name"],"uploads/".$_FILES['Image']['name']);
            header("Location:admin.php");
        }
        else{
            echo "not con";
        }
  }
}

// slider ADD
if(isset($_POST['slideradd'])){
    $slid_title=$_POST['slid_title'];
    $slid_img=$_FILES["slid_img"]['name'];
    if(!$conn){
        echo "data not connected";
    }else{
    $sql3="INSERT INTO `slider_tbl`(`slid_img`, `slid_title`) VALUES ('$slid_img','$slid_title')";
        if(mysqli_query($conn,$sql3)){
            move_uploaded_file($_FILES["slid_img"]["tmp_name"],"uploads/".$_FILES['slid_img']['name']);
            
        }
        else{
            echo "not con";
            

        }
  }
}

// categories

$conn=mysqli_connect("localhost","root","","web");
  if(isset($_POST['categories_add'])){
   
    $categories_name=$_POST['categories_name'];
    
    if(!$conn){
        echo "data not connected";
    }else{
    $sql3="INSERT INTO `categories_table`(`categories_name`) VALUES ('$categories_name')";
        if(mysqli_query($conn,$sql3)){
          
            header("Location:categories.php");
        }
        else{
            echo "not con";
            

        }
  }
}