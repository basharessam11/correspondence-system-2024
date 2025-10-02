



       <div  class="container-xxl flex-grow-1 container-p-y">
<div class="row g-4 mb-4">
<div class="col-12">
    <div class="card">
      <h5 class="card-header" data-i18n="Add Company">Add Company</h5>
      <?php

    if (isset($_GET['company'])=='no') {
          echo '<div id="success-alert3" class="alert alert-danger" role="alert">
 <center>هذه الشركة موجودة بالفعل</center>
</div>';
          }
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

         

        <form   method="POST" action="inc/fun/company/insert.php" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" >

          <!-- Account Details -->

     
            <hr class="mt-0">
           

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
     <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Name">name</label>

            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text">
                <i class="bx bx-buildings"></i>
              </span>

              <input type="text" id="basic-icon-default-company" name="name" class="form-control" placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'الاسم بالعربية';}else if ($_COOKIE['lang']=="en"){  echo'NAME (ARABIC)';} ?>"  aria-label="ACME Inc." required aria-describedby="basic-icon-default-company2">

            </div>

            
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
     <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="phone">phone</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
              <input type="text" dir="ltr" id="basic-icon-default-phone" required name="phone" placeholder="658 799 89" class="form-control phone-mask"    maxlength="9" aria-describedby="basic-icon-default-phone2">
            </div>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
     <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="name_en">Name </label>

           <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text">
                <i class="bx bx-user"></i>
              </span>
              <input type="text" class="form-control lang_en" inputmode="text"  name="name_en" id="basic-icon-default-fullname" placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'الاسم بالإنجليزية';}else if ($_COOKIE['lang']=="en"){  echo'NAME (ENGLISH)';} ?>" dir="ltr" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
              
            </div>

            
          </div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
     <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label"   data-i18n="email">email</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
              <input type="text" id="basic-icon-default-email" required class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="email" aria-describedby="basic-icon-default-email2">
             </div>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="fax">fax</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text">
                <i class="bx bx-phone"></i>
              </span>
              <input type="text" id="basic-icon-default-fax" required name="fax" class="form-control" placeholder="Fax" aria-label="Fax" aria-describedby="basic-icon-default-Fax2">
            </div>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
     <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="URL">URL</label>
            <input type="text" id="formValidationName" class=" form-control" name="url" required   placeholder="https://example.com">
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

          <div class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="status">Status</label>
            <select  class="form-select hwafz select3" name="status"  >
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اختر';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option>
              <option value="1"  ><?php if ($_COOKIE['lang']=="ar"){echo 'ﻧﺸﻂ';}else if ($_COOKIE['lang']=="en"){echo 'active';}?></option>
              <option value="0" ><?php if ($_COOKIE['lang']=="ar"){echo 'غير نشط';}else if ($_COOKIE['lang']=="en"){echo 'inactive';}?></option>
                
              
            </select>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Address">Address</label>
            <textarea name="address" class="form-control" required id="collapsible-address" rows="2"  placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'العنوان بالعربية';}else if ($_COOKIE['lang']=="en"){  echo'Address (ARABIC)';} ?>"></textarea>
          </div>
          <!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Address_en">Address</label>
            <textarea name="address_en" dir="ltr" class="form-control lang_en" required id="collapsible-address" rows="2" placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'العنوان بالانجليزية';}else if ($_COOKIE['lang']=="en"){  echo'Address (ENGLISH)';} ?>"></textarea>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
 

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

 
          <div class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Files">Files</label>
             
        <input type="file" required   name="file[]" onchange="readURL(this);"  class="file form-control">

       
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
 









<input type="hidden" value="<?=$user_id?>"  name="user_id">
 
          <div class="col-12">
            <button type="submit" data-i18n="submit" name="submitButton" class="btn btn-primary">Submit</button>
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
 


   