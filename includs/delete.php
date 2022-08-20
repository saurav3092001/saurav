<?php

// $conn=mysqli_connect("localhost","root","","web");

    // $no = $_GET['no'];

    // $sql = " DELETE FROM `product_add` WHERE no = $no";
    
    // if(mysqli_query($conn,$sql)){

    // header('location:admin.php');
    // }
    // else{
    //     header('location:admin.php');
    // }


    $conn=mysqli_connect("localhost","root","","web");
    $id=$_GET['slider_id'];

    $sql1= "DELETE FROM `slider_tbl` WHERE slider_id= $id";

    if(mysqli_query($conn,$sql1)){

    header('location:slider.php');
}else{
    header('location:admin.php');
    }

    ?>


                   
                 
                 


