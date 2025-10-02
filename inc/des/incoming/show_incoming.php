<?php
 
  $company_id=$_SESSION['company_id'];
 
 $id=$_GET['id'];
$sql->selectall("outgoing where id=$id ");
 
while ($row = $sql->res->fetch_assoc()) {
     

?>

       <div  class="container-xxl flex-grow-1 container-p-y">
<div class="row g-4 mb-4">
<div class="col-12">
    <div class="card">
      <h5 class="card-header" data-i18n="Show Incoming">Show Incoming</h5>
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
  

        <div     class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework"  >

          <!-- Account Details -->

     
            <hr class="mt-0">
           
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

          <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="incoming number">Incoming number</label>
            <input  type="text" id="formValidationName" disabled value="<?=$row['tarmez'].$row['num_id']?> " class=" form-control" name="outgoing_number" required   placeholder="outgoing number">
          </div>
 
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

          <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Transaction Type">Transaction Type</label>
            <select disabled  class="form-select hwafz select3" name="transaction_type" required>
              <option disabled selected>transaction type</option>
  <?php
            $transaction_type_id= $row['transaction_type_id'];
$sql->select1("transaction_type","where id = $transaction_type_id ");
 while ($row1 = $sql->res1->fetch_assoc()) {
             ?>
   <option <?='selected';?> value="<?=$row1['id']?>"><?=$row1['name']?></option>

         <?php
           }
           ?>  
              
            </select>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
 

 <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Importance">importance</label>
            <select disabled class="form-select hwafz select3" name="importance" required>
              <option disabled selected>importance</option>
    
 
                        <?php
            $importance_id= $row['importance_id'];
$sql->select1("importance","where id = $importance_id ");
 while ($row1 = $sql->res1->fetch_assoc()) {
             ?>
   <option <?='selected';?> value="<?=$row1['id']?>"><?=$row1['name']?></option>

         <?php
           }
           ?>  
            </select>
          </div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Confidentiality">Confidentiality</label>
            <select disabled class="form-select hwafz select3" name="confidentiality" required>
              <option disabled selected>confidentiality</option>
 
   
                        <?php
            $confidentiality_id= $row['confidentiality_id'];
$sql->select1("confidentiality","where id = $confidentiality_id ");
 while ($row1 = $sql->res1->fetch_assoc()) {
             ?>
   <option <?='selected';?> value="<?=$row1['id']?>"><?=$row1['name']?></option>

         <?php
           }
           ?>  
            </select>
          </div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Company">Company</label>
            <select disabled class="form-select hwafz select3" name="company" required>
              <option disabled >company</option>
             <?php
            $company_id= $row['company_id'];
$sql->select1("company","where id = $company_id ");
 while ($row1 = $sql->res1->fetch_assoc()) {
             ?>
   <option <?='selected';?> value="<?=$row1['id']?>"><?=$row1['name']?></option>

         <?php
           }
           ?>  

 
            </select>
          </div>

      
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="outgoing date">outgoing Date</label>
            <input disabled type="text" id="formValidationName" value="<?=$row['outgoing_date']?>" class=" form-control"     placeholder="outgoing_date">
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

 
          <div  class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="subject">subject</label>
            <textarea disabled class=" form-control" style="height: 120px;"  placeholder="subject"><?=$row['subject']?></textarea>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

 
          <div class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Files">Files</label>
             
 

            <div class="last">

                <?php
  $array=[];
$sql->select1("file"," where outgoing_id=$id");
 while ($row1 = $sql->res1->fetch_assoc()) {
 $array[]=$row1['file'];
$ex=  pathinfo($row1['file'], PATHINFO_EXTENSION);

if ($ex=="pdf" or $ex=="PDF") {
  echo '<a target="_blank" href="inc/fun/outgoing/file/'.$row1['file'].'"><img style="width: 150px;height: 150px;padding: 5px;" src="img/icons/misc/pdf.png" alt=" " border="0"/></a>
 ';
}else{
  echo'<a target="_blank" href="inc/fun/outgoing/file/'.$row1['file'].'""><img id="blah" style="width: 150px;height: 150px;padding: 5px;" src="inc/fun/outgoing/file/'.$row1['file'].'" alt="your image" /></a>';
}


 
           }
          $last_file= implode(",", $array);
           ?>  
 
     </div> <br>
 <br>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
 



      </div>
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