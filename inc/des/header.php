<?php
 

if (!isset($_SESSION['login'])) {
header("location:index.php");
}
     $sql->selectall("settings where id=1 ");
     while ($row = $sql->res->fetch_assoc()) {
        $session_timeout=$row['time']*60;
        $time=$row['time'];
     }

 
   time() -$_SESSION['LAST_ACTIVITY'];
 
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $session_timeout)) {
 
   
    header("Location: log_out.php");
    exit();
}




?>
<!DOCTYPE html>

 <html lang="ar" class="light-style layout-navbar-fixed layout-menu-fixed layout-footer-fixed" dir="<?=$dir?>" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="vendor/libs/jquery/jquery.js"></script>
            <script type="text/javascript">// اﺳﺘﺮﺟﺎﻉ اﻟﻘﻴﻤﺔ ﻣﻦ localStorage

 
 // اﻟﺪاﻟﺔ ﻟﻠﺤﺼﻮﻝ ﻋﻠﻰ ﻗﻴﻤﺔ اﻟﻜﻮﻛﻴﺰ ﺑﺎﺳﻤﻬﺎ
function getCookie(cookieName) {
    var name = cookieName + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(';');
    for(var i = 0; i < cookieArray.length; i++) {
        var cookie = cookieArray[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(name) === 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }
    return "";
}

// اﺳﺘﺨﺪاﻡ اﻟﺪاﻟﺔ ﻟﻠﺤﺼﻮﻝ ﻋﻠﻰ ﻗﻴﻤﺔ اﻟﻜﻮﻛﻴﺰ ﺑﻌﺪ ﺗﺤﺪﻳﺪ اﺳﻤﻬﺎ
var langValue = getCookie('lang');
 

if (langValue == "ar") {
    localStorage.setItem("templateCustomizer-vertical-menu-template--Lang", "ar");
    localStorage.setItem("templateCustomizer-vertical-menu-template--Rtl", "true");
} else {
    localStorage.setItem("templateCustomizer-vertical-menu-template--Lang", "en");
    localStorage.setItem("templateCustomizer-vertical-menu-template--Rtl", "false");

}

 
 
</script> 
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title data-i18n="<?php
  $lang = $_COOKIE['lang'];
     
if (isset($_GET['outgoing1'])) {
    echo'Outgoing';
}elseif (isset($_GET['outgoing'])) {
        echo'Public Outgoing';

}elseif (isset($_GET['incoming'])) {
        echo'incoming';

}elseif (isset($_GET['transaction_type'])) {
        echo'Transaction Type';

}elseif (isset($_GET['importance'])) {
        echo'Importance';

}elseif (isset($_GET['confidentiality'])) {
        echo'Confidentiality';

}elseif (isset($_GET['company'])) {
        echo'Company';

}elseif (isset($_GET['user'])) {
        echo'Users';

}elseif (isset($_GET['incoming'])) {
        echo'incoming';

} elseif (isset($_GET['dash'])) {
        echo'Dashboard';

} elseif (isset($_GET['dialect'])) {
        echo'dialect';

}elseif (isset($_GET['notifications'])) {
        echo'notifications';
         $sql->update('notifications',["status"=>1],"where status=0");

}





?>"></title>

    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
   
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Noto+Naskh+Arabic:wght@400..700&display=swap" rel="stylesheet">

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
    <link rel="stylesheet" href="vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
     <link rel="stylesheet" href="vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="vendor/libs/select2/select2.css">


 
 <!-- Vendors CSS -->
 
 <link rel="stylesheet" href="vendor/libs/quill/typography.css">
<link rel="stylesheet" href="vendor/libs/quill/katex.css">
<link rel="stylesheet" href="vendor/libs/quill/editor.css">
 
<link rel="stylesheet" href="vendor/libs/dropzone/dropzone.css">
<link rel="stylesheet" href="vendor/libs/flatpickr/flatpickr.css">
<link rel="stylesheet" href="vendor/libs/tagify/tagify.css" />

 
 
<link rel="stylesheet" href="vendor/libs/@form-validation/form-validation.css">
 
<link rel="stylesheet" href="vendor/libs/rateyo/rateyo.css" />

    
    <!-- Page CSS -->
    <link rel="stylesheet" href="vendor/css/pages/card-analytics.css" />

    <!-- Helpers -->
    <script src="vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="js/config.js"></script>
    <style>
      th ,tr,td{
        text-align: center;
      }
      @media only screen and (max-width: 600px) {
  .com {
    display: none;
  }
}
    </style>
<script src="https://cdn.tiny.cloud/1/50u1h7jse5yk9je5r7kdafzhgtjvbncip05o1x72gqxvruz2/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<script>
function updateActivity() {

        $.post('inc/fun/site/active.php?n=1' , {

  
      1 : 1
     

    } , function(data){

         // console.log(data) 

        if (data==<?=$session_timeout-30?>) {
           
                
            
          $('#basicModal6').modal('show');
         
        }else if(data>=<?=$session_timeout?>){
            window.location.href = "log_out.php";
        }

      // $(".kk").html(data)
      
    });
    

}

setInterval(updateActivity, 1000); // كل 60 ثانية
</script>

</head>
<body>

  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">
