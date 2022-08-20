<?php
  $conn=mysqli_connect("localhost","root","","web");
    if(isset($_POST['went'])){
      $Email=$_POST['Email'];
      $password=$_POST['password'];
      
      if(!$conn){
          echo "<h1>data not connected</h1>";
          
      }   
      else{
        $sql1="SELECT * FROM admin_login where Email='$Email' and password='$password'";
        $arrey=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($arrey)>0){
          header("Location:admin.php");
          }
        else{
            header("Location:slider.php");
        }
        }
    }
        // add products
    
    if(isset($_POST['add_user'])){
      $Email=$_POST['Email'];
      $password=$_POST['password'];
      $password=md5($password);
      if(!$conn){
          echo "<h1>data not connected</h1>";
          
      }   
      else{
        
        $sql1="INSERT INTO `admin_login`(`Email`, `password`) VALUES ('$Email','$password')";
        $arrey=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($arrey)>0){
          header("Location:sign-up.php");
          }
        else{
            header("Location:sign-up.php");
        }
        }
    }

  ?>