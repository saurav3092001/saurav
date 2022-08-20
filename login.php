<html>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 12:12:19 GMT -->
<head>
<title> admin </title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Broccoli - Organic Food HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
  
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
   
</head>


 <body>
 <div class="ltn__login-area pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Sign In <br>To  Admin page</h1>
                    </div>
                </div>
            </div>
 <div class="row mt-3">
                <div class="col-lg-3"></div>
                <div class="col-sm-6 col-lg-6 border p-2" >
                    <div class="account-login-inner align-self-center">
                        <form action="login.php" method="post" autocomplete="off">
                       <div class="form-group mb-3"><label class="form-label text-secondary">Email</label><input
                                class="form-control" type="text" required=""
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="Email" name="Email"></div>
                        <!-- End: Email -->
                        <!-- Start: Password -->
                        <div class="form-group mb-3"><label class="form-label text-secondary">Password</label><input
                                class="form-control" type="password" required="" name="password"></div><!-- End: Password -->
                                 <!-- Start: Submit --><button class="btn btn-info mt-2" type="submit" name="go">Log In</button>
                        <p class="mt-3 mb-0"><a class="text-info small" href="">Forgot your email or password?</a></p>
                        <!-- End: Submit -->
                        </form>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
</body>

    </html>
                                <?php
$conn=mysqli_connect("localhost","root","","web");
  if(isset($_POST['go'])){
    $Email=$_POST['Email'];
    $password=$_POST['password'];
    if(!$conn){
        echo "<h1>data not connected</h1>";
    }   
    else{
      $sql1="SELECT * FROM admin_login where Email='$Email' and password='$password'";
      $arrey=mysqli_query($conn,$sql1);
      if(mysqli_num_rows($arrey)>0){
        header("Location:index.html");
        }
      else{
          echo "data not submited";
      }
      }
  }
?>
                      
                         