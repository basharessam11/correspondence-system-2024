



       <div  class="container-xxl flex-grow-1 container-p-y">
<div class="row g-4 mb-4">
<div class="col-12">
    <div class="card">
      <h5 class="card-header" data-i18n="Add incoming">Add incoming</h5>
      <?php

 
  $company_id=$_SESSION['company_id'];
             if (isset($_GET['file'])=='exe') {
          echo '<div id="success-alert3" class="alert alert-danger" role="alert">
 <center>( jpg ,  jpeg , png , pdf ) تأكد من أن جميع المرفقات بإمتدادا </center>
</div>';
          }
 
  if (isset($_GET['edit'])=='su') {
          echo '<div id="success-alert1" class="alert alert-success" role="alert">
 <center> تم التعديل بنجاح</center>
</div>';
          }

               if (isset($_GET['delete2'])=='no') {
          echo '<div id="success-alert2" class="alert alert-danger" role="alert">
        <center>  اﻟﺮﺟﺎء اﺧﺘﻴﺎﺭ اﻟﺒﻴﺎﻧﺎﺕ اﻟﻤﺮاﺩ ﺣﺬﻓﻬﺎ </center>
          </div>';
          }
          if (isset($_GET['name'])=='no') {
          echo '<div id="success-alert" class="alert alert-danger" role="alert">
 <center> ﻫﺬا اﻻﺳﻢ ﻣﻮﺟﻮﺩﻩ ﺑﺎﻟﻔﻌﻞ </center>
</div>';
          }
           if (isset($_GET['add'])=='su') {
          echo '<div id="success-alert1" class="alert alert-success" role="alert">
 <center>  ﺗﻢ اﻻﺿﺎﻓﺔ ﺑﻨﺠﺎﺡ</center>
</div>';
          }
                    if (isset($_GET['delete'])=='no') {
          echo '<div id="success-alert2" class="alert alert-danger" role="alert">
       <center>    ﻻ ﻳﻤﻜﻦ ﺣﺬﻑ ﻫﺬﻩ ﺑﺴﺒﺐ اﻧﻬﺎ ﻣﺪﺧﻠﻪ ﻓﻲ اﺣﺪ اﻟﺠﺪاﻭﻝ</center>
          </div>';
          }
      
           if (isset($_GET['delete1'])=='su') {
          echo '<div id="success-alert3" class="alert alert-success" role="alert">
<center> ﺗﻢ اﻟﺤﺬﻑ ﺑﻨﺠﺎﺡ</center></div>';
          }
          if (isset($_GET['nam'])=='su') {
          echo '<div id="success-alert1" class="alert alert-success" role="alert">
<center> ﺗﻢ ﺗﻐﻴﻴﺮ اﺳﻢ اﻟﻤﻮﻗﻊ ﺑﻨﺠﺎﺡ</center>
</div>';
}
 if (isset($_GET['error'])=='su') {
          echo '<div id="success-alert2" class="alert alert-danger" role="alert">
        <center> الرجاء التحقق من جميع الحقول  وإعادة المحاولة</center>
          </div>';
          }
          ?>
      <div class="card-body">

         

        <form   method="POST" action="inc/fun/incoming/insert.php" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" >

          <!-- Account Details -->

     
            <hr class="mt-0">
           
 
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
     <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="tarmez">tarmez</label>
            <input type="text" id="formValidationName"  disabled class=" form-control"       placeholder="tarmez">
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

          <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Transaction Type">Transaction Type</label>
            <select  class="form-select hwafz select3" name="transaction_type" required>
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اختر';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option> 
             <?php
$sql->selectall("transaction_type");
 while ($row = $sql->res->fetch_assoc()) {
             ?>
   <option  value="<?=$row['id']?>">
    <?php if ($_COOKIE['lang']=="ar"){echo $row['name'];}else if ($_COOKIE['lang']=="en"){echo $row['name_en'];}?>
  </option>

         <?php
           }
           ?>
              
            </select>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
 

 <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Importance">Importance</label>
            <select  class="form-select hwafz select3" name="importance" required>
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اختر';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option> 
             <?php
$sql->selectall("importance");
 while ($row = $sql->res->fetch_assoc()) {
             ?>
   <option  value="<?=$row['id']?>">
    <?php if ($_COOKIE['lang']=="ar"){echo $row['name'];}else if ($_COOKIE['lang']=="en"){echo $row['name_en'];}?>
      
    </option>

         <?php
           }
           ?>
              
            </select>
          </div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Confidentiality">Confidentiality</label>
            <select  class="form-select hwafz select3" name="confidentiality" required>
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اختر';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option> 
             <?php
$sql->selectall("confidentiality");
 while ($row = $sql->res->fetch_assoc()) {
             ?>
   <option  value="<?=$row['id']?>">
    <?php if ($_COOKIE['lang']=="ar"){echo $row['name'];}else if ($_COOKIE['lang']=="en"){echo $row['name_en'];}?>

   </option>

         <?php
           }
           ?>
              
            </select>
          </div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
         <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="dialect">dialect</label>
            <select  class="form-select hwafz select3" name="dialect" required>
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اختر';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option> 
             <?php
$sql->selectall("dialect ");
 while ($row = $sql->res->fetch_assoc()) {
             ?>
   <option  value="<?=$row['id']?>">
    <?php if ($_COOKIE['lang']=="ar"){echo $row['name'];}else if ($_COOKIE['lang']=="en"){echo $row['name_en'];}?>

   </option>

         <?php
           }
           ?>
              
            </select>
          </div>
      
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="incoming date">incoming Date</label>
            <input type="date" id="formValidationName" value="<?=date("Y-m-d")?>" class=" form-control" name="incoming_date" required   placeholder="incoming number">
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

 
          <div  class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="subject">subject</label>
            <textarea class=" form-control" style="height: 120px;" name="subject" required  placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'الموضوع بالعربية';}else if ($_COOKIE['lang']=="en"){  echo'Subject in (ARABIC)';} ?>"></textarea>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
  <div  class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="subject_en">subject en</label>
            <textarea class=" form-control lang_en" style="height: 120px;" name="subject_en" required  placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'الموضوع بالانجليزية';}else if ($_COOKIE['lang']=="en"){  echo'Subject in (ENGLISH)';} ?>" dir="ltr"></textarea>
          </div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

 
          <div class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Files">Files</label>
             
        <input type="file"   multiple name="file[]" onchange="readURL(this);"  class="file form-control">

         <div class=" container"  >
<div class="row last">

  
          </div>
          </div>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
 









 
 
          <div class="col-12">
            <button type="submit" name="submitButton" data-i18n="submit" class="btn btn-primary">Submit</button>
          </div>
        <input type="hidden">

      </form>
      </div>
    </div>
  </div>



 

<!--/ DataTable with Buttons -->
 <br>
  <br>

</div>
</div>
 
 