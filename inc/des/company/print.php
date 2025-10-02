<?php
session_start();
include "../../sql.php";
if (!isset($_SESSION['login'])) {
header("location:../../../index.php");
}


$id=$_SESSION['user_id'] ;

$sql->selectall("user where id = $id");

while ($row = $sql->res->fetch_assoc()) {
 
 
 
$print=$row['print'];
$status=$row['status'];

 if ($print==0) {
  header("location:../../../dashbord.php?dash=list");
}


if ($status==0) {
  header("location:../../../log_out.php");
}


}








      $company_id=$_SESSION['company_id'];
     $sql->selectall("company where id=$company_id ");
     $x=1;
     while ($row = $sql->res->fetch_assoc()) {
      $logo=$row['file']; 
      if ($_COOKIE['lang']=="ar")
        {$name=$row['name'];
    }else if ($_COOKIE['lang']=="en")
    {$name=$row['name_en'];}
      

 
       
      $email=$row['email']; 
      $phone=$row['phone']; 
      if ($_COOKIE['lang']=="ar")
        {$address=$row['address'];
    }else if ($_COOKIE['lang']=="en")
    {$address=$row['address_en'];}
      

      }

?>
<!DOCTYPE html>

<html   lang="<?php if ($_COOKIE['lang']=="ar"){echo 'ar';}else if ($_COOKIE['lang']=="en"){  echo'en';} ?>" class="light-style layout-wide " dir="<?php if ($_COOKIE['lang']=="ar"){echo 'rtl';}else if ($_COOKIE['lang']=="en"){  echo'ltr';} ?>" data-theme="theme-default" data-assets-path="../../../" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 15:44:05 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title data-i18n="Public Outgoing">Public Outgoing</title>

    
    
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
 
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/../img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="../../../vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../../vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../../vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../../vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../../vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../../css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../../vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../../vendor/libs/typeahead-js/typeahead.css" /> 
    

    <!-- Page CSS -->
    
<link rel="stylesheet" href="../../../vendor/css/pages/app-invoice-print.css" />

     <!-- Helpers -->
    <script src="../../../vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../../vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../../js/config.js"></script>
    <style>
 

</style>
</head>

<body <?php if ($_COOKIE['lang']=="en"){echo 'style="margin: 13px;"';}?>>

  
 <!-- position: relative; width: 200px;height: 85px; float: left;  -->
  <!-- Content -->
<!-- <div class="invoice-print p-5" style="margin: -35px -48px 0 -41px;"> -->

<div class="invoice-print " <?php if ($_COOKIE['lang']=="ar"){echo 'style="padding: 0 0px 0 50px;"';}?>>
 

<div class="table-responsive" dir="<?php if ($_COOKIE['lang']=="ar"){echo 'rtl';}else if ($_COOKIE['lang']=="en"){  echo'ltr';} ?>">
<table style="width: 100%;">
  <tr>
   
    <td style="text-align: <?php if ($_COOKIE['lang']=="ar"){echo 'right';}else if ($_COOKIE['lang']=="en"){  echo'left';} ?>;">
      <?=$name?><br>
      <?=$email?><br>
      <?=$address?>
    </td>

     <td style="width: 200px;"><img class="invoice-title" style="width: 100%; max-width: 200px; height: 85px;" src="../../fun/company/file/<?=$logo?>" alt="Logo" class="company-logo"></td>
  </tr>
</table>

 
 </div>

  <div class="table-responsive mt-2" dir="<?php if ($_COOKIE['lang']=="ar"){echo 'rtl';}else if ($_COOKIE['lang']=="en"){  echo'ltr';} ?>">
    <table class="table border-top m-0" style="width: 100%;">
      <thead>
         <tr>
          <th style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;" data-i18n="#">#</th> 
          <th style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;" data-i18n="Logo">Logo</th>
          
          <th style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;  " data-i18n="Company Name">Company Name</th>

          <th style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;" data-i18n="phone">phone</th>

          <th style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;  " data-i18n="fax">fax</th>

          <th style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px; " data-i18n="email">email</th>

          <th style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px; " data-i18n="Address1">Address</th>

          
          <th style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;" data-i18n="status">status</th>

          
           
         
        
        </tr>
      </thead>
      <tbody>
        <?php
 $sql->selectall("company");

 
$x=1;

// Loop through each row in the result set
while ($row = $sql->res->fetch_assoc()) {
 
// print_r($row);

 
?>  
        <tr>
          <td style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center"><?=$x?></td>

          <td style="width:90px;font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center" ><img class="w-px-50 h-auto  " src="../../fun/company/file/<?=$row['file']?>" alt="<?=$row['name']?>" ></td>


          

          <td style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center" >

<?php if ($_COOKIE['lang']=="ar"){echo $row['name'];}else if ($_COOKIE['lang']=="en"){echo $row['name_en'];}?>
           </td>


          <td style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center"><a href="tel:<?=$row['phone']?>"><?=$row['phone']?></a></td>

          <td style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center"><?=$row['fax']?></td>

          <td style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center"><a href="mailto:<?=$row['email']?>"><?=$row['email']?></a></td>

          <td style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center">
<?php if ($_COOKIE['lang']=="ar"){echo $row['address'];}else if ($_COOKIE['lang']=="en"){echo $row['address_en'];}?>
             </td>



          <td style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center"><?php

if ($row['status']==1) {
          if ($_COOKIE['lang']=="ar")
          {
            $active= 'ﻧﺸﻂ';
          }else if ($_COOKIE['lang']=="en")
          {
            $active= 'active';
          } 
              echo "<div class='text-success'>".$active."</div>";

                }else{
          if ($_COOKIE['lang']=="ar")
        
          {
            $active= 'ﻏﻴﺮ ﻧﺸﻂ';
          }else if ($_COOKIE['lang']=="en")
          {
            $active= 'inactive';
          } 
                echo "<div class='text-danger'>".$active."</div>";

                
                   
            }

        ?></td>


         
           
        </tr>

<?php
$x++;
}
?>
      </tbody>
    </table>
  </div>
<br>
 <div class="table-responsive" dir="<?php if ($_COOKIE['lang']=="ar"){echo 'rtl';}else if ($_COOKIE['lang']=="en"){  echo'ltr';} ?>">
<table style="width: 100%;">
 
  <tr>
    <td style="text-align: right;">

      <span class="fw-medium"> <?php if ($_COOKIE['lang']=="ar"){echo 'طبع بواسطة ';}else if ($_COOKIE['lang']=="en"){echo 'Printed By ';}?> <?php

     $user_id=$_SESSION['user_id'];
     $sql->selectall("user where id=$user_id ");
     $x=1;
     while ($row = $sql->res->fetch_assoc()) {
 if ($_COOKIE['lang']=="ar"){echo $row['name'];}else if ($_COOKIE['lang']=="en"){echo $row['name_en'];} 
 
}
  
    ?></span>

    </td>
    <td style="text-align: right;">

      <span class="fw-medium"> <?php if ($_COOKIE['lang']=="ar"){echo 'بتاريخ  :';}else if ($_COOKIE['lang']=="en"){echo 'date :';}?>  <?=date("Y-m-d   h:i:s")?></span><br>
       
    </td>
  </tr>
</table>

 
 </div>
 
</div>


<!-- / Content -->

  
 
  

  <!-- Core JS -->
  <!-- build:js ../vendor/js/core.js -->
  
  <script src="../../../vendor/libs/jquery/jquery.js"></script>
  <script src="../../../vendor/libs/popper/popper.js"></script>
  <script src="../../../vendor/js/bootstrap.js"></script>
  <script src="../../../vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../../vendor/libs/hammer/hammer.js"></script>
  <script src="../../../vendor/libs/i18n/i18n.js"></script>
  <script src="../../../vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="../../../vendor/js/menu.js"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  
  

  <!-- Main JS -->
  <script src="../../../js/main.js"></script>
  

 
     <script type="text/javascript">
 $(document).ready(function () {
    
    $("#template-customizer").remove();
 

 })

    setTimeout(function () {
      window.print();
// / تحقق مما إذا كان الصفحة قيد الطباعة
    if(window.matchMedia && window.matchMedia('print').matches) {
        // إذا كانت الصفحة قيد الطباعة، قم بإخفاء الرابط
        $('#printLink').hide();
    }
    },1000)
  </script>
</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 15:44:06 GMT -->
</html>

<!-- beautify ignore:end -->

