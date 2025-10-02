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
   
       $name=$row['name'];
  

 
       
      $email=$row['email']; 
      $phone=$row['phone']; 
      if ($_COOKIE['lang']=="ar")
        {$address=$row['address'];
    }else if ($_COOKIE['lang']=="en")
    {$address=$row['address_en'];}
      

      }

?>
          <?php
       $id=$_GET['id'];
     
    $page=$_GET['page'];
    
$sql->selectjoin("  
  outgoing.id ,
  outgoing.tarmez ,
  outgoing.num_id ,
  outgoing.letter,
   
  outgoing.outgoing_date
   

  "
  ,"outgoing","
    transaction_type ON outgoing.transaction_type_id = transaction_type.id 
    
    where
    outgoing.id=$id  ;
    ");
 


   

 

// Loop through each row in the result set
while ($row = $sql->res11->fetch_assoc()) {
 
$sql->check("file",["outgoing_id"=>$id]);


 
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
    <style type="text/css">
      .table2 {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</head>

<body <?php if ($_COOKIE['lang']=="en"){echo 'style="margin: 13px;"';}?>>

  
 <!-- position: relative; width: 200px;height: 85px; float: left;  -->
  <!-- Content -->
<!-- <div class="invoice-print p-5" style="margin: -35px -48px 0 -41px;"> -->

<div class="invoice-print "  >
 

 

  <div class="table-responsive ml-2">


<div  dir="rtl">

<p style="   font-size:12px; position: fixed; left: 0; " dir="ltr"> <b>
  <?=$name?><br>
   اﻟﺘﺎﺭﻳﺦ : <?=$row['outgoing_date']?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

   <br>
   رقم الصادر : <?=$row['tarmez'].$row['num_id']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
   اﻟﻤﺮﻓﻘﺎﺕ :  <?= $sql->check?>   </b></p>


  <?=$row['letter']?></div>

  
 



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
  

   
  <script>
  function pdf() {
    var xhr = new XMLHttpRequest();
        xhr.open('POST', 'b.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.responseType = 'blob';

      xhr.onload = function () {
        if (xhr.status === 200) {
            var blob = new Blob([xhr.response], { type: 'application/pdf' });
            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = 'file.pdf';
            link.click();
            
            // بعد انتهاء التنزيل، قم بالتوجيه إلى الصفحة الجديدة
              window.location.href = '../../../dashbord.php?<?=$page?>=show&id=<?=$id?>';
        }
    };

    var bodyContent = document.body.outerHTML;
    var inlineStyles = Array.from(document.querySelectorAll('style')).map(style => style.innerHTML).join('\n');
    var data = 'html=' + encodeURIComponent(bodyContent) + '&css=' + encodeURIComponent(inlineStyles);
    xhr.send(data);
}


      
    </script>
     <script type="text/javascript">
 $(document).ready(function () {
    
    $("#template-customizer").remove();
  
 
      pdf();
 

 })

    
  </script>


</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 15:44:06 GMT -->
</html>

<!-- beautify ignore:end -->

<?php
}
?>