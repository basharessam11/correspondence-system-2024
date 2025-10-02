



       <div  class="container-xxl flex-grow-1 container-p-y">
<div class="row g-4 mb-4">
<div class="col-12">
    <div class="card">
      <h5 class="card-header" data-i18n="Add Outgoing">Add Outgoing</h5>
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

         

        <form   method="POST" action="inc/fun/outgoing/insert.php" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" >

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
       
            <label class="form-label" data-i18n="outgoing date">outgoing Date</label>
            <input type="date" id="formValidationName" value="<?=date("Y-m-d")?>" class=" form-control" name="outgoing_date" required   placeholder="outgoing number">
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

 
          <div  class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="subject">subject</label>
            <textarea   class=" form-control" style="height: 120px;" name="subject"     placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'الموضوع بالعربية';}else if ($_COOKIE['lang']=="en"){  echo'Subject in (ARABIC)';} ?>"></textarea>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
  <div  class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="subject_en">subject en</label>
            <textarea  class=" form-control lang_en" style="height: 120px;" name="subject_en"    placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'الموضوع بالانجليزية';}else if ($_COOKIE['lang']=="en"){  echo'Subject in (ENGLISH)';} ?>" dir="ltr"></textarea>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

          <div  class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="letter">letter</label>
            <textarea id="textarea" class=" form-control" style="height: 120px;" name="letter"     placeholder="اكتب هنا "></textarea>
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
 



<script type="text/javascript">



   $(document).ready(function() {
    
        setTimeout(function(){
    $(".tox-statusbar").remove()
  },1000)


     });
</script>
    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
tinymce.init({
    selector: '#textarea',
// تعطيل مصحح الإملاء بالكامل
      
    plugins: 'spellchecker',  // تحديد مكون المصحح
    toolbar: 'spellchecker',  // إضافة زر المصحح إلى شريط الأدوات
    spellchecker_languages: 'Arabic=ar',  // تعيين لغة المصحح للعربية
    spellchecker_rpc_url: '/spellchecker/rpc',  // عنوان URL لخدمة المصحح البعيدة (يمكن تغييرها)
    spellchecker_dialog: true,  // إظهار حوار المصحح
    spellchecker_active: true,  // تفعيل مصحح الإملاء

    // تعطيل مصحح الإملاء بالكامل
    spellchecker: false,
    height: 1240,
  plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount          ',
    toolbar: 'export pagebreak | blocks fontfamily fontsize | bold italic underline strikethrough | forecolor backcolor | subscript superscript | alignleft aligncenter alignright alignjustify indent outdent rtl ltr | bullist numlist checklist | emoticons image table link hr charmap',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    directionality: 'rtl', // اﺿﻒ ﻫﺬا اﻟﺴﻄﺮ ﻟﺘﻐﻴﻴﺮ اﻻﺗﺠﺎﻩ
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),


    content_style: 
    `
    body { font-family:Helvetica,Arial,sans-serif; font-size:16px }
   .mce-content-body::before {
            content: '';
            white-space: pre-line; /* ﻟﺘﻔﻌﻴﻞ اﻟﺴﻄﺮ اﻟﺠﺪﻳﺪ */
            display: block;
            font-size: 12px;
            font-weight: bold;
            float: left;
            padding: 15px 0px 0px 2px;

        }
        body {
            
            padding: 25px 10px 25px 2px; /* ﺇﺯاﻟﺔ اﻟﻬﻮاﻣﺶ */
        }
       @media print {
  @page {
    margin: 0; /* ﺇﺯاﻟﺔ اﻟﻬﻮاﻣﺶ اﻟﺘﻲ ﻗﺪ ﺗﺤﺘﻮﻱ ﻋﻠﻰ اﻟﺮﺅﻭﺱ ﻭاﻟﺘﺬﻳﻴﻼﺕ */
  }
  header, footer {
    display: none; /* ﺇﺧﻔﺎء ﻋﻨﺎﺻﺮ اﻟﺮﺅﻭﺱ ﻭاﻟﺘﺬﻳﻴﻼﺕ */
  }
}

    ` 
     
});
</script>