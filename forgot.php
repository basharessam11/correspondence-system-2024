<?php 
 session_start();
  include "inc/sql.php";

 if (!isset($_COOKIE['lang'] )) {
$a="lang.php?lang=ar&url=".$_SERVER['REQUEST_URI'];
header("location:$a") ;
}


// error_reporting(0);
if (isset($_SESSION['login'])) {
  $user=$_SESSION['login'];
  $sql->selectall(" user where user_name = '$user'");
     while ($row1 = $sql->res->fetch_assoc()) {
    $permissions=$row1['permissions'];

     }
        if ($permissions==1) {
       header("location:dashbord.php?dash=list");
       }elseif($permissions==2){
      header("location:dashbord.php?dash=list");
   }

}
 if(isset($_POST["email"])){

$email=filter_var($_POST['email'], FILTER_SANITIZE_STRING);
 
 

$sql->check('user',['email'=>"$email"]);
 if ($sql->check >=1) {
 
  $sql->selectall(" user where email = '$email'  ");
     while ($row1 = $sql->res->fetch_assoc()) {
 
  
  
  $id=$row1['id'];
   
 $to = $email;
 $forgot = bin2hex(random_bytes(16));
 $sql->update('user',[" forgot"=>$forgot],"where id = '$id' ");

 $subject = "ﺇﻋﺎﺩﺓ ﺗﻌﻴﻴﻦ ﻛﻠﻤﺔ اﻟﻤﺮﻭﺭ";


$a="reset.php?id=".$id."&n=".$forgot;
 $message = '<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إعادة تعيين كلمة المرور</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 500px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .card {
            border: none;
            border-radius: 8px;
            overflow: hidden;
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }
        .card-body {
            padding: 20px;
        }
        .card-body p {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>إعادة تعيين كلمة المرور</h3>
            </div>
            <div class="card-body">
                <p>لإعادة تعيين كلمة المرور الخاصة بك، يرجى النقر على الزر أدناه.</p>
                <div class="text-center">
                    <a href="'.$a.'" class="btn">إعادة تعيين كلمة المرور</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

';

  
$headers = "From: icankuwait@info.com\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
// ﺇﺭﺳﺎﻝ اﻟﺒﺮﻳﺪ اﻹﻟﻜﺘﺮﻭﻧﻲ ﺑﺎﺳﺘﺨﺪاﻡ اﻟﺪاﻟﺔ mail
if(mail($to, $subject, $message, $headers)) {
   $error=2; 
} else {
   $error=3; 
    // header("location:$a");
}
 




}

 

 
 
}else{

$error=1; 
}
}

 
?>
<!DOCTYPE html>
 

<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-forgot-password-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 15:41:42 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Forgot Password  </title>

 
 
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="vendor/libs/typeahead-js/typeahead.css" /> 
    <!-- Vendor -->
<link rel="stylesheet" href="vendor/libs/%40form-validation/form-validation.css" />

    <!-- Page CSS -->
    <!-- Page -->
<link rel="stylesheet" href="vendor/css/pages/page-auth.css">

    <!-- Helpers -->
    <script src="vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="js/config.js"></script>
    
</head>

<body>

  
 
  <!-- Content -->

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-4">

      <!-- Forgot Password -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">

              <center><br>
          <h4 class="mb-2"  style="color:#696cff" data-i18n="pro">ﺑﺮﻧﺎﻣﺞ اﻟﺼﺎﺩﺭ ﻭاﻟﻮاﺭﺩ  </h4>
        </center><br>
              
         
          </div>


        
          <!-- /Logo -->
          <h4 class="mb-2"  data-i18n="for_h1">Forgot Password? 🔒</h4>
          <p class="mb-4"  data-i18n="for_p1">Enter your email and we'll send you instructions to reset your password</p>

          <form id="formAuthentication" class="mb-3" action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <div class="mb-3">
              <label for="email" class="form-label" data-i18n="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus>
            </div>

            <?php

if(isset($error) and $error ==1){

echo '<div class="alert alert-danger" style="text-align:center">ﻫﺬا اﻟﻤﺴﺘﺨﺪﻡ ﻏﻴﺮ ﻣﻮﺟﻮﺩ</div>';

}else if(isset($error) and $error ==2){

echo '<div class="alert alert-success" style="text-align:center">ﺗﻢ اﻹﺭﺳﺎﻝ ﺇﻟﻲ اﻟﺒﺮﻳﺪ اﻹﻟﻜﺘﺮﻭﻧﻲ  ﺑﻨﺠﺎﺡ</div>

<script>
 setTimeout(function(){
    location.href = "index.php";

  },3000)
</script>

';

}else if(isset($error) and $error ==3){

echo '<div class="alert alert-danger" style="text-align:center">ﻓﺸﻞ اﻹﺭﺳﺎﻝ اﻟﻲ اﻟﺒﺮﻳﺪ اﻹﻟﻜﺘﺮﻭﻧﻲ</div>';

}

 

             ?>
            <button class="btn btn-primary d-grid w-100" data-i18n="for_s">Send Reset Link</button>
          </form>



          <div class="text-center">
            <a href="index.php" data-i18n="for_b"  class="d-flex align-items-center justify-content-center">
              <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
              Back to login
            </a>
          </div>
        </div>
      </div>
      <!-- /Forgot Password -->
    </div>
  </div>
</div>

<!-- / Content -->

  
 
  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  
  <script src="vendor/libs/jquery/jquery.js"></script>
  <script src="vendor/libs/popper/popper.js"></script>
  <script src="vendor/js/bootstrap.js"></script>
  <script src="vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="vendor/libs/hammer/hammer.js"></script>
  <script src="vendor/libs/i18n/i18n.js"></script>
  <script src="vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="vendor/js/menu.js"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="vendor/libs/%40form-validation/popular.js"></script>
<script src="vendor/libs/%40form-validation/bootstrap5.js"></script>
<script src="vendor/libs/%40form-validation/auto-focus.js"></script>

  <!-- Main JS -->
  <script src="js/main.js"></script>
  

  <!-- Page JS -->
  <script src="js/pages-auth.js"></script>
  
</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-forgot-password-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 15:41:42 GMT -->
</html>

<!-- beautify ignore:end -->

