<?php 
 session_start();
  include "inc/sql.php";

 
 if(isset($_GET["id"]) and !empty($_GET["id"]) and isset($_GET["n"]) and !empty($_GET["n"])){

$id=filter_var($_GET['id'], FILTER_VALIDATE_INT);
$n=filter_var($_GET['n'], FILTER_SANITIZE_STRING);
 
 

$sql->check('user',['id'=>"$id",'forgot'=>"$n"]);
 if ($sql->check >=1) {
 
 if(isset($_POST["password"]) and !empty($_POST["password"])){
 
if ($_POST['password'] == $_POST['password1']) {

  $password=filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $pass= md5($password);

  $sql->update('user',[" password"=>$pass," forgot"=>""],"where id = '$id' ");
 $error =0;
}else{

 $error =1;
}




 }

 
}else{
header("location:index.php");
   }
}

?>
<!DOCTYPE html>
 
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-reset-password-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 15:41:41 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Reset Password </title>
 
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

      <!-- Reset Password -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">

              <center><br>
          <h4 class="mb-2"  style="color:#696cff" data-i18n="pro">ﺑﺮﻧﺎﻣﺞ اﻟﺼﺎﺩﺭ ﻭاﻟﻮاﺭﺩ  </h4>
        </center><br>
              
         
          </div>


        
          <!-- /Logo -->
          <h4 class="mb-2" data-i18n="reset_h">Reset Password 🔒</h4>
           


          <form id="formAuthentication" class="mb-3" action="<?=$_SERVER['REQUEST_URI']?>" method="post">

            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password" data-i18n="reset_l1">New Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required minlength="8" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>


            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="confirm-password" data-i18n="reset_l2">Confirm Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="confirm-password" required minlength="8" class="form-control" name="password1" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
 <?php

if(isset($error) and $error ==1){

echo '<div class="alert alert-danger" style="text-align:center">كلمة المرور غير متشابها</div>';

}elseif (isset($error) and $error ==0) {
 
  echo '<div class="alert alert-success" style="text-align:center">تم التغيير بنجاح</div>


<script>
 setTimeout(function(){
    location.href = "index.php";

  },3000)
</script>
  ';

}

             ?>
            <button class="btn btn-primary d-grid w-100 mb-3" data-i18n="reset_b">
              Set new password
            </button>
            <div class="text-center">
              <a href="index.php" data-i18n="for_b">
                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                Back to login
              </a>
            </div>
          </form>










        </div>
      </div>
      <!-- /Reset Password -->
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


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-reset-password-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 15:41:41 GMT -->
</html>

<!-- beautify ignore:end -->

