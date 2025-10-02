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
 

<div class="table-responsive" dir="<?php if ($_COOKIE['lang']=="ar"){echo 'rtl';}else if ($_COOKIE['lang']=="en"){  echo'ltr';} ?>">
<table style="width: 100%;">
  <tr>
   
    <td style="text-align: <?php if ($_COOKIE['lang']=="ar"){echo 'right';}else if ($_COOKIE['lang']=="en"){  echo'left';} ?>;">
      <?=$name?><br>
      <?=$email?><br>
      <?=$address?>
    </td>

     <td style="width: 200px;"><img width="200px" height="85px" class="invoice-title"   src="../../fun/company/file/<?=$logo?>" alt="Logo" class="company-logo"></td>
  </tr>
</table>

 
 </div>
<br> 

  <div class="table-responsive mt-2" dir="<?php if ($_COOKIE['lang']=="ar"){echo 'rtl';}else if ($_COOKIE['lang']=="en"){  echo'ltr';} ?>">
    <table class="table table2 border-top m-0 " style="width: 100%;" >
      <thead>
         <tr>
                    <th class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;" data-i18n="#">#</th> 

          <th class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;"  ><?php if ($_COOKIE['lang']=="ar"){echo 'رقم الصادر';}else if ($_COOKIE['lang']=="en"){  echo'Outgoing number';} ?></th>

          <th class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;"  ><?php if ($_COOKIE['lang']=="ar"){echo 'تاريخ التصدير';}else if ($_COOKIE['lang']=="en"){  echo'outgoing date';} ?> </th>

          <th class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;" >
            <?php if ($_COOKIE['lang']=="ar"){echo 'نوع المعاملة';}else if ($_COOKIE['lang']=="en"){  echo'Transaction Type';} ?>
          </th>

          <th class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;" >
            <?php if ($_COOKIE['lang']=="ar"){echo 'الأهمية';}else if ($_COOKIE['lang']=="en"){  echo'Importance';} ?>

           </th>

          <th class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px; width: 100px;"  >
            <?php if ($_COOKIE['lang']=="ar"){echo 'السرية';}else if ($_COOKIE['lang']=="en"){  echo'Confidentiality';} ?>

           </th>

          <th class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px; width: 100px;"  >
           <?php if ($_COOKIE['lang']=="ar"){echo 'الموضوع';}else if ($_COOKIE['lang']=="en"){  echo'subject';} ?>
         </th>

          <th class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;" data-i18n="dialect">
            <?php if ($_COOKIE['lang']=="ar"){echo 'الجهة';}else if ($_COOKIE['lang']=="en"){  echo'dialect';} ?>
          </th>

          <th class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;   font-weight: bold; text-align:center;background-color: #ccc;letter-spacing:0px;" data-i18n="Sender">
            <?php if ($_COOKIE['lang']=="ar"){echo 'المرسل';}else if ($_COOKIE['lang']=="en"){  echo'Sender';} ?>
            
          </th>

 
        
        </tr>
      </thead>
      <tbody>
        <?php
        $date1=$_GET['date1'];
    $date2=$_GET['date2'];
    $page=$_GET['page'];
    $status=$_GET['status'];
 
$sql->selectjoin("  
  outgoing.id ,
  outgoing.tarmez ,
  outgoing.num_id ,
  outgoing.subject,
  outgoing.subject_en,
  outgoing.user_id,
  outgoing.outgoing_date,
  transaction_type.name AS transaction_type_name,
  transaction_type.name_en AS transaction_type_name_en,
  importance.name AS importance_name,
  importance.name_en AS importance_name_en,
  dialect.name AS dialect_name,
  dialect.name_en AS dialect_name_en,
  user.name AS user_name,
  user.name_en AS user_name_en,
  confidentiality.name AS confidentiality_name,
  confidentiality.name_en AS confidentiality_name_en

  "
  ,"outgoing","
    transaction_type ON outgoing.transaction_type_id = transaction_type.id 
    INNER JOIN importance ON outgoing.importance_id = importance.id 
    INNER JOIN confidentiality ON outgoing.confidentiality_id = confidentiality.id 
    INNER JOIN dialect ON outgoing.dialect_id = dialect.id
    INNER JOIN user ON outgoing.user_id = user.id
    where
    outgoing.status=$status and 
    outgoing_date BETWEEN' $date1' AND '$date2'

    ");

 
$x=1;

// Loop through each row in the result set
while ($row = $sql->res11->fetch_assoc()) {
  
 


 
?>  
<tr>
          <td class="table2" style="width:70px;font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center"><?=$x?></td>
          <td class="table2" style="width:70px;font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center"><?=$row['tarmez'].$row['num_id']?></td>
          <td class="table2" style="width:90px;font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center"><?=$row['outgoing_date']?></td>
          <td class="table2" style="width:70px; font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center">
<?php if ($_COOKIE['lang']=="ar"){echo $row['transaction_type_name'];}else if ($_COOKIE['lang']=="en"){echo $row['transaction_type_name_en'];}?>
</td>
          <td class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center">
            <?php if ($_COOKIE['lang']=="ar"){echo $row['importance_name'];}else if ($_COOKIE['lang']=="en"){echo $row['importance_name_en'];}?>
           
          </td>
          <td class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center">
             <?php if ($_COOKIE['lang']=="ar"){echo $row['confidentiality_name'];}else if ($_COOKIE['lang']=="en"){echo $row['confidentiality_name_en'];}?>
 </td>
          <td class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center">
<?php if ($_COOKIE['lang']=="ar"){echo $row['subject'];}else if ($_COOKIE['lang']=="en"){echo $row['subject_en'];}?>
           </td>
          <td class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center">
<?php if ($_COOKIE['lang']=="ar"){echo $row['dialect_name'];}else if ($_COOKIE['lang']=="en"){echo $row['dialect_name_en'];}?>
 </td>
          <td class="table2" style="font-size: 12px; padding: 5px 5px 5px 5px; color:black;  font-weight: bold; text-align:center">
<?php if ($_COOKIE['lang']=="ar"){echo $row['user_name'];}else if ($_COOKIE['lang']=="en"){echo $row['user_name_en'];}?>
 </td>
           
        </tr>

<?php
$x++;
}
?>
      </tbody>
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
  

   
  <script>
  function pdf() {
    var xhr = new XMLHttpRequest();
        xhr.open('POST', 'a.php', true);
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
            window.location.href = '../../../dashbord.php?<?=$page?>=show';
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

