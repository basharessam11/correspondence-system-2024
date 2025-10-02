<?php

 $company_id=$_SESSION['company_id'];
 $id=$_GET['id'];
 $sql->check("file",["outgoing_id"=>$id]);

$num=$sql->check;


$sql->selectall("outgoing where id=$id and company_sender_id=$company_id ");
 
while ($row = $sql->res->fetch_assoc()) {
     


?>

       <div  class="container-xxl flex-grow-1 container-p-y" >
<div class="row g-4 mb-4">
<div class="col-12">
    <div class="card">
      <h5 class="card-header" data-i18n="Edit Outgoing">Edit Outgoing</h5>
            <?php


           if (isset($_GET['file'])=='exe') {
          echo '<div id="success-alert3" class="alert alert-danger" role="alert">
 <center>( jpg ,  jpeg , png , pdf ) ﺗﺄﻛﺪ ﻣﻦ ﺃﻥ ﺟﻤﻴﻊ اﻟﻤﺮﻓﻘﺎﺕ ﺑﺈﻣﺘﺪاﺩا </center>
</div>';
          }
 
  if (isset($_GET['edit'])=='su') {
          echo '<div id="success-alert1" class="alert alert-success" role="alert">
 <center> ﺗﻢ اﻟﺘﻌﺪﻳﻞ ﺑﻨﺠﺎﺡ</center>
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
        <center> اﻟﺮﺟﺎء اﻟﺘﺤﻘﻖ ﻣﻦ ﺟﻤﻴﻊ اﻟﺤﻘﻮﻝ  ﻭﺇﻋﺎﺩﺓ اﻟﻤﺤﺎﻭﻟﺔ</center>
          </div>';
          }
          ?>
      <div class="card-body">
  

        <form   method="POST" action="inc/fun/outgoing/update.php" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" >

          <!-- Account Details -->

     
            <hr class="mt-0">
           
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

          <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Outgoing number">outgoing number</label>
            <input type="text" id="formValidationName" disabled value="<?=$row['tarmez'].$row['num_id']?> " class=" form-control" name="outgoing_number" required   placeholder="outgoing number">
          </div>
 
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

          <div class="col-md-6 fv-plugins-icon-container">
       
          <label class="form-label" data-i18n="Transaction Type">Transaction Type</label>

            <select   class="form-select hwafz select3" name="transaction_type" required>
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اﺧﺘﺮ';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option>
             <?php
$sql->select1("transaction_type","");
 while ($row1 = $sql->res1->fetch_assoc()) {
             ?>
   <option <?php  

if ($row['transaction_type_id']==$row1['id']) {
  echo 'selected';
}

   ?> value="<?=$row1['id']?>">

 <?php if ($_COOKIE['lang']=="ar"){echo $row1['name'];}else if ($_COOKIE['lang']=="en"){echo $row1['name_en'];}?>

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
                                         <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اﺧﺘﺮ';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option>
             <?php
$sql->select1("importance","");
 while ($row1 = $sql->res1->fetch_assoc()) {
             ?>
   <option <?php  

if ($row['importance_id']==$row1['id']) {
  echo 'selected';
}

   ?> value="<?=$row1['id']?>">
 <?php if ($_COOKIE['lang']=="ar"){echo $row1['name'];}else if ($_COOKIE['lang']=="en"){echo $row1['name_en'];}?>
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
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اﺧﺘﺮ';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option>
 
                           <?php
$sql->select1("confidentiality","");
 while ($row1 = $sql->res1->fetch_assoc()) {
             ?>
   <option <?php  

if ($row['confidentiality_id']==$row1['id']) {
  echo 'selected';
}

   ?> value="<?=$row1['id']?>">
 <?php if ($_COOKIE['lang']=="ar"){echo $row1['name'];}else if ($_COOKIE['lang']=="en"){echo $row1['name_en'];}?>
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
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اﺧﺘﺮ';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option>
             <?php
$sql->select1("dialect"," ");
 while ($row1 = $sql->res1->fetch_assoc()) {
             ?>
   <option <?php  

if ($row['dialect_id']==$row1['id']) {
  echo 'selected';
}

   ?> value="<?=$row1['id']?>">

 <?php if ($_COOKIE['lang']=="ar"){echo $row1['name'];}else if ($_COOKIE['lang']=="en"){echo $row1['name_en'];}?>
 </option>

         <?php
           }
           ?>  

 
            </select>
          </div>

      
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="col-md-6 fv-plugins-icon-container">
       
          <label class="form-label" data-i18n="outgoing date">outgoing Date</label>
            <input type="date" id="formValidationName" value="<?=$row['outgoing_date']?>" class=" form-control" name="outgoing_date" required   placeholder="outgoing_date">
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

 
          <div  class="col-md-12 fv-plugins-icon-container">
       
          <label class="form-label" data-i18n="subject">subject</label>
            <textarea   class=" form-control" style="height: 120px;" name="subject"    placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'اﻟﻤﻮﺿﻮﻉ ﺑﺎﻟﻌﺮﺑﻴﺔ';}else if ($_COOKIE['lang']=="en"){  echo'Subject in (ARABIC)';} ?>"><?=$row['subject']?></textarea>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
          <div  class="col-md-12 fv-plugins-icon-container">
       
          <label class="form-label" data-i18n="subject_en">subject en</label>
            <textarea   class=" form-control lang_en" style="height: 120px;" name="subject_en"    placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'اﻟﻤﻮﺿﻮﻉ ﺑﺎﻻﻧﺠﻠﻴﺰﻳﺔ';}else if ($_COOKIE['lang']=="en"){  echo'Subject in (ENGLISH)';} ?>" dir="ltr"><?=$row['subject_en']?></textarea>
          </div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

          <div  class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="letter">letter</label>
            <textarea id="textarea" class=" form-control" style="height: 120px;" name="letter"   placeholder="اﻛﺘﺐ ﻫﻨﺎ "><?=$row['letter']?></textarea>
          </div>
 <!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
 
          <div class="col-md-12 fv-plugins-icon-container">
       
          <label class="form-label" data-i18n="Files">Files</label>
             
        <input type="file" multiple name="file[]" onchange="readURL(this);"  class="file form-control">

 
            <div class=" container"  >
<div class="row last">
                <?php
  $array=[];
$sql->select1("file"," where outgoing_id=$id");
 while ($row1 = $sql->res1->fetch_assoc()) {
 $array[]=$row1['file'];
$ex=  pathinfo($row1['file'], PATHINFO_EXTENSION);

if ($ex=="pdf" or $ex=="PDF") {
  echo '<div class="col-12 col-md-2 del'.$row1['id'].'"><a target="_blank" href="inc/fun/outgoing/file/'.$row1['file'].'"><a   class="btn btn-danger" onclick="del('.$row1['id'].')" style="position: absolute; margin: 8px 8px 0 0;"><i class="bx bx-trash"></i></a><img style="width: 150px;height: 150px;padding: 5px;" src="img/icons/misc/pdf.png" alt=" " border="0"/></a></div>
 ';
}else{
  echo'<div class="col-12 col-md-2 del'.$row1['id'].'"> <a target="_blank" href="inc/fun/outgoing/file/'.$row1['file'].'""><a class="btn btn-danger" onclick="del('.$row1['id'].')" style="width:0px;height:22px; position: absolute; margin: 8px 8px 0 0;"><i class="bx bx-trash"></i></a><img id="blah" style="width: 100%;height: 100%;padding: 5px;" src="inc/fun/outgoing/file/'.$row1['file'].'" alt="your image" /></a></div>';
}


 
           }
          $last_file= implode(",", $array);
           ?>  
 
     </div>
          </div>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
 


<script type="text/javascript">
 function del(id) {
    $.ajax({
        url: 'inc/des/outgoing/delete.php',
        type: 'POST',
        data: { id: id,n: 1 },
        success: function(data) {
             $(".del"+id).remove()
        },
        error: function(xhr, status, error) {
            console.error(error);
            // ﻳﻤﻜﻨﻚ ﺗﻨﻔﻴﺬ ﺳﻴﻨﺎﺭﻳﻮ ﻣﻌﺎﻟﺠﺔ اﻷﺧﻄﺎء ﻫﻨﺎ
        }
    });
}

</script>


<input type="hidden" value="<?=$last_file?>"  name="last_file">

<input type="hidden" value="<?=$id?>"  name="id">



<input type="hidden" value="<?=$user_id?>"  name="user_id">
 
          <div class="col-12">
            <button type="submit" name="submitButton" data-i18n="submit" class="btn btn-primary">Submit</button>
          <a href="inc/des/outgoing/print2.php?id=<?=$id?>&page=edit_outgoing">
            <button type="button"  data-i18n="Print" class="btn btn-success">Print</button>
            </a>
          </div>
        <input type="hidden">

      </form>
      </div>
    </div>
  </div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
//  $(document).ready(function() {
    
//         setTimeout(function(){
//     var element ='<pre style="padding: 40px 0 0 20px;float:left; font-size:12px;" dir="rtl"><b><?=$company_name?><br> <?=$row['outgoing_date']?> :اﻟﺘﺎﺭﻳﺦ<br>رقم الصادر <?=$row['tarmez'].$row['id']?>:<br> <?= $sql->check?> :اﻟﻤﺮﻓﻘﺎﺕ</b></pre><div style="padding: 60px 20px 0 0px;  ">'+ $('#textarea').val()+'</div>';
// console.log(element)
// html2pdf(element);
//   },100)


//      });

</script>


  
 

<!--/ DataTable with Buttons -->
 <br>
  <br>

</div>
</div>
 
 
    <script type="text/javascript">



   $(document).ready(function() {
    
        setTimeout(function(){
    $(".tox-statusbar").remove()
  },100)


     });
</script>
<script>
tinymce.init({
    selector: '#textarea',
     
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
    directionality: 'rtl', // إضافة هذا السطر لتغيير الاتجاه
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),

    content_style: `
        body { 
            font-family: 'Arial', 'Helvetica', sans-serif; 
            font-size: 16px;
            direction: rtl; /* لتعيين اتجاه النص */
        }
        .mce-content-body::before {
            content: ' <?=$company_name?> \\A التاريخ : <?=$row['outgoing_date']?>  \\A رقم الصادر : <?=$row['tarmez'].$row['num_id']?> \\A المرفقات : <?= $num;?>';
            white-space: pre-line; /* لتفعيل السطر الجديد */
            display: block;
            font-size: 12px;
            font-weight: bold;
            float: left;
            padding: 15px 0px 0px 2px;
        }
        body {
            padding: 100px 10px 100px 2px; /* إزالة الهوامش */
        }
        @media print {
            @page {
                margin: 0; /* إزالة الهوامش التي قد تحتوي على الرؤوس والتذييلات */
            }
            header, footer {
                display: none; /* إخفاء عناصر الرؤوس والتذييلات */
            }
        }
    `
});

</script>
  <script>
function pdf() {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'inc/des/outgoing/a3.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.responseType = 'blob';

    xhr.onload = function () {
        if (xhr.status === 200) {
            var blob = new Blob([xhr.response], { type: 'application/pdf' });
            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = 'file.pdf';
            link.click();
        }
    };

    // قم بالحصول على محتوى الـ textarea
    var textareaContent = document.querySelector('#textarea').value;

     // var fixedText = '<div style="position: absolute; top: 20px; right: 20px;">نص ثابت هنا</div>';

     // var bodyContent = textareaContent + fixedText;
     var bodyContent = textareaContent  ;

     var inlineStyles = Array.from(document.querySelectorAll('style')).map(style => style.innerHTML).join('\n');

     document.body.style.direction = 'rtl';

     var data = 'html=' + encodeURIComponent(bodyContent) + '&css=' + encodeURIComponent(inlineStyles);


    xhr.send(data);
}

    </script>
  <?php
  }
?>
