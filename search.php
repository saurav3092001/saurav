<?php
                        
                     $conn=mysqli_connect("localhost","root","","web");
                     if(isset($_GET['goon'])){
                        $search=$_GET['search'];
                              if(!$conn){
                             echo "no connction";
                                 }else{
                                  $sql="SELECT * FROM `search` WHERE categories LIKE '$search'";
                                  $arrey=mysqli_query($conn,$sql);
                          if(mysqli_num_rows($arrey)>0){
                               header("Location:shop.html");
                      }
              else{
               echo "not found";
      }
                                    }
                                }
                                ?>