<?php

  $company_id=$_SESSION['company_id'];
 
 $id=$_GET['id'];
$sql->selectall("incoming where id=$id and company_sender_id=$company_id ");
 
while ($row = $sql->res->fetch_assoc()) {
     

?>

       <div  class="container-xxl flex-grow-1 container-p-y">
<div class="row g-4 mb-4">
<div class="col-12">
    <div class="card">
      <h5 class="card-header" data-i18n="Edit incoming">Edit incoming</h5>
            <?php


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
  

        <form   method="POST" action="inc/fun/incoming/update.php" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" >

          <!-- Account Details -->

     
            <hr class="mt-0">
           
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

          <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="incoming number">incoming number</label>
            <input type="text" id="formValidationName" disabled value="<?=$row['tarmez'].$row['num_id']?> " class=" form-control" name="incoming_number" required   placeholder="incoming number">
          </div>
 
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

          <div class="col-md-6 fv-plugins-icon-container">
       
          <label class="form-label" data-i18n="Transaction Type">Transaction Type</label>

            <select   class="form-select hwafz select3" name="transaction_type" required>
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اختر';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option>
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
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اختر';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option>
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
              <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اختر';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option>
 
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
              <option disabled >dialect</option>
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
       
          <label class="form-label" data-i18n="incoming date">incoming Date</label>
            <input type="date" id="formValidationName" value="<?=$row['incoming_date']?>" class=" form-control" name="incoming_date" required   placeholder="incoming_date">
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

 
          <div  class="col-md-12 fv-plugins-icon-container">
       
          <label class="form-label" data-i18n="subject">subject</label>
            <textarea class=" form-control" style="height: 120px;" name="subject" required  placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'الموضوع بالعربية';}else if ($_COOKIE['lang']=="en"){  echo'Subject in (ARABIC)';} ?>"><?=$row['subject']?></textarea>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
          <div  class="col-md-12 fv-plugins-icon-container">
       
          <label class="form-label" data-i18n="subject_en">subject en</label>
            <textarea class=" form-control lang_en" style="height: 120px;" name="subject_en" required  placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'الموضوع بالانجليزية';}else if ($_COOKIE['lang']=="en"){  echo'Subject in (ENGLISH)';} ?>" dir="ltr"><?=$row['subject_en']?></textarea>
          </div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

 
                  <div class="col-md-12 fv-plugins-icon-container">
       
          <label class="form-label" data-i18n="Files">Files</label>
             
        <input type="file" multiple name="file[]" onchange="readURL(this);"  class="file form-control">

 
            <div class=" container"  >
<div class="row last">
                <?php
  $array=[];
$sql->select1("file"," where incoming_id=$id");
 while ($row1 = $sql->res1->fetch_assoc()) {
 $array[]=$row1['file'];
$ex=  pathinfo($row1['file'], PATHINFO_EXTENSION);

if ($ex=="pdf" or $ex=="PDF") {
  echo '<div class="col-12 col-md-2 del'.$row1['id'].'"><a target="_blank" href="inc/fun/incoming/file/'.$row1['file'].'"><a   class="btn btn-danger" onclick="del('.$row1['id'].')" style="position: absolute; margin: 8px 8px 0 0;"><i class="bx bx-trash"></i></a><img style="width: 150px;height: 150px;padding: 5px;" src="img/icons/misc/pdf.png" alt=" " border="0"/></a></div>
 ';
}else{
  echo'<div class="col-12 col-md-2 del'.$row1['id'].'"> <a target="_blank" href="inc/fun/incoming/file/'.$row1['file'].'""><a class="btn btn-danger" onclick="del('.$row1['id'].')" style="width:0px;height:22px; position: absolute; margin: 8px 8px 0 0;"><i class="bx bx-trash"></i></a><img id="blah" style="width: 100%;height: 100%;padding: 5px;" src="inc/fun/incoming/file/'.$row1['file'].'" alt="your image" /></a></div>';
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
        data: { id: id,n: 2 },
        success: function(data) {
             $(".del"+id).remove()
        },
        error: function(xhr, status, error) {
            console.error(error);
            // يمكنك تنفيذ سيناريو معالجة الأخطاء هنا
        }
    });
}

</script>



<input type="hidden" value="<?=$last_file?>"  name="last_file">

<input type="hidden" value="<?=$id?>"  name="id">



<input type="hidden" value="<?=$user_id?>"  name="user_id">
 
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
 
 
    

  <?php
  }
?>