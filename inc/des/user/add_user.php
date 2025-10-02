



       <div  class="container-xxl flex-grow-1 container-p-y">
<div class="row g-4 mb-4">
<div class="col-12">
    <div class="card">
      <h5 class="card-header" data-i18n="Add User">Add user</h5>
      <?php


           if (isset($_GET['file'])=='exe') {
          echo '<div id="success-alert3" class="alert alert-danger" role="alert">
 <center>( jpg ,  jpeg , png , pdf ) ﺗﺄﻛﺪ ﻣﻦ ﺃﻥ ﺟﻤﻴﻊ اﻟﻤﺮﻓﻘﺎﺕ ﺑﺈﻣﺘﺪاﺩا </center>
</div>';
          }


           if (isset($_GET['user'])=='no') {
          echo '<div id="success-alert3" class="alert alert-danger" role="alert">
 <center>ﻫﺬا اﻟﻤﺴﺘﺨﺪﻡ ﻣﻮﺟﻮﺩ ﺑﺎﻟﻔﻌﻞ</center>
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

         

        <form   method="POST" action="inc/fun/user/insert.php" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" >

          <!-- Account Details -->

     
            <hr class="mt-0">
           

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
     <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Name">Name </label>

           <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text">
                <i class="bx bx-user"></i>
              </span>
              <input type="text" class="form-control" name="name" required id="basic-icon-default-fullname" placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'الاسم بالعربية';}else if ($_COOKIE['lang']=="en"){  echo'NAME (ARABIC)';} ?>" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
            </div>

            
          </div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
  <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="email">email</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
              <input type="email" dir="ltr" id="basic-icon-default-email" required class="form-control  " placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="email" aria-describedby="basic-icon-default-email2">
             </div>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
     <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="name_en">Name </label>

           <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text">
                <i class="bx bx-user"></i>
              </span>
              <input   lang="en" inputmode="latin" dir="ltr" required  type="text" class="form-control lang_en" name="name_en" id="basic-icon-default-fullname" placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'الاسم بالإنجليزية';}else if ($_COOKIE['lang']=="en"){  echo'NAME (ENGLISH)';} ?>" aria-label="John Doe"  aria-describedby="basic-icon-default-fullname2">
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
          
 <div class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Company Name">company</label>
            <select  class="form-select hwafz select3" name="company_id" required>
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اختر';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option>
             <?php
$sql->selectall("company");
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
       
            <label class="form-label" data-i18n="educational qualification">educational qualification</label>
            <input type="text" id="formValidationName" placeholder ="educational qualification" class=" form-control" name="almuahal" required    >
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
     <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="date of educational qualification">date of educational qualification</label>
<input type="text" id="multicol-birthdate" value="" required class="form-control dob-picker flatpickr-input active" placeholder="YYYY-MM-DD" name="date" readonly="readonly">
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Address">Address</label>
            <textarea name="address" class="form-control" placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'العنوان بالعربية';}else if ($_COOKIE['lang']=="en"){  echo'Address (ARABIC)';} ?>" required id="collapsible-address" rows="2"  ></textarea>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="Address_en">Address</label>
            <textarea name="address_en" dir="ltr" placeholder="<?php if ($_COOKIE['lang']=="ar"){echo 'العنوان بالانجليزية';}else if ($_COOKIE['lang']=="en"){  echo'Address (ENGLISH)';} ?>" class="form-control lang_en" required id="collapsible-address" rows="2"  ></textarea>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
   <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="status">Status</label>
            <select  class="form-select hwafz select3" name="status"  required>
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اختر';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option>
               <option value="1"  ><?php if ($_COOKIE['lang']=="ar"){echo 'ﻧﺸﻂ';}else if ($_COOKIE['lang']=="en"){echo 'active';}?></option>
              <option value="0" ><?php if ($_COOKIE['lang']=="ar"){echo 'ﻏﻴﺮ ﻧﺸﻂ';}else if ($_COOKIE['lang']=="en"){echo 'inactive';}?></option>
                
              
            </select>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
   <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="permissions">permissions</label>
            <select  class="form-select hwafz select3" name="permissions" required  >
                            <option value="" disabled selected><?php if ($_COOKIE['lang']=="ar"){echo 'اختر';}else if ($_COOKIE['lang']=="en"){echo 'select';}?></option>
              <option value="1"><?php if ($_COOKIE['lang']=="ar"){echo 'ﻣﺪﻳﺮ';}else if ($_COOKIE['lang']=="en"){echo 'admin';}?></option>
              <option value="2"><?php if ($_COOKIE['lang']=="ar"){echo 'ﻣﻮﻇﻒ';}else if ($_COOKIE['lang']=="en"){echo 'employee';}?></option>
              
                
              
            </select>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
  <div class="col-md-6 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="User Name">User Name </label>

           <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname3" class="input-group-text">
                <i class="bx bx-user"></i>
              </span>
              <input type="text" class="form-control lang_en" required name="user_name" id="basic-icon-default-fullname1" minlength="6" placeholder="User Name" aria-label="John Doe" aria-describedby="basic-icon-default-fullname3">
            </div>

            
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

 <div class="col-md-6 fv-plugins-icon-container">
       
      
 <div class="form-password-toggle">
          <label class="form-label" data-i18n="Password">Password</label>
          <div class="input-group input-group-merge">
            <input type="password" id="multicol-password"   name="password" minlength="8" class="form-control" placeholder="password" aria-describedby="multicol-password2">
            <span class="input-group-text cursor-pointer" id="multicol-password2"><i class="bx bx-hide"></i></span>
          </div>
        </div>
            
          </div>
          <!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="col-md-12 fv-plugins-icon-container">
 
        <div class="row gy-3">
          <div class="col-md">
          <label class="form-label" data-i18n="permissions">permissions</label>

             <div class="form-check mt-4">
              <input type="checkbox" class="form-check-input all" value="1" onclick="data1('all')" name="all">
               <label class="form-check-label" data-i18n="All">
                All
              </label>
            </div>

            <div class="form-check mt-2">
             <label class="form-label" data-i18n="Public Outgoing">Public Outgoing</label>
<input type="checkbox" class="form-check-input check" value="1" name="outgoing">
            </div>
<div class="form-check ">
              <label class="form-label" data-i18n="Outgoing">Outgoing</label>
<input type="checkbox" class="form-check-input check" value="1" name="outgoing1">
            </div>
            <div class="form-check  ">
               <label class="form-label" data-i18n="Transaction Type">Transaction Type</label>
<input type="checkbox" class="form-check-input check" value="1" name="transaction_type">
            </div>

            <div class="form-check  ">
              <label class="form-label" data-i18n="Importance">Importance</label>
<input type="checkbox" class="form-check-input check" value="1" name="importance">
            </div>
               <div class="form-check ">
              <label class="form-label" data-i18n="Confidentiality">Confidentiality</label>
<input type="checkbox" class="form-check-input check" value="1" name="confidentiality">
            </div>
              <div class="form-check  ">
              <label class="form-label" data-i18n="dialect">dialect</label>
<input type="checkbox" class="form-check-input check" value="1" name="dialect">
            </div>
 </div>




<div class="col-md">
 <label class="form-label" > </label>
            <div class="form-check mt-3">
               <label class="form-label" data-i18n="notifications">notifications</label>
<input type="checkbox" class="form-check-input check" value="1" name="notifications">
            </div>

<div class="form-check ">
              <label class="form-label" data-i18n="incoming">incoming</label>
<input type="checkbox" class="form-check-input check" value="1" name="incoming">
            </div>

            <div class="form-check ">
            <label class="form-label" data-i18n="Company">Company</label>
<input type="checkbox" class="form-check-input check" value="1" name="company">
            </div>
            <div class="form-check ">
               <label class="form-label" data-i18n="Users">Users</label>
<input type="checkbox" class="form-check-input check" value="1" name="user">
            </div>

             <div class="form-check ">
               <label class="form-label" data-i18n="histore_outging">histore outging</label>
<input type="checkbox" class="form-check-input check" value="1" name="histore_outging">
            </div>

            <div class="form-check ">
               <label class="form-label" data-i18n="histore_incoming">histore incoming</label>
<input type="checkbox" class="form-check-input check" value="1" name="histore_incoming">
            </div>

            <div class="form-check ">
               <label class="form-label" data-i18n="time">histore incoming</label>
<input type="checkbox" class="form-check-input check" value="1" name="time">
            </div>

            </div>




<div class="col-md">
 <label class="form-label" > </label>
<div class="form-check mt-3">
               <label class="form-label" data-i18n="backup">backup</label>
<input type="checkbox" class="form-check-input check" value="1" name="backup">
            </div>
            <div class="form-check ">
               <label class="form-label" data-i18n="Settings">Settings</label>
<input type="checkbox" class="form-check-input check" value="1" name="settings">
            </div>

            <div class="form-check ">
              <label class="form-label" data-i18n="Add">Add</label>
<input type="checkbox" class="form-check-input check" value="1" name="add1">
            </div>

            <div class="form-check ">
              <label class="form-label" data-i18n="Edit">Edit</label>
<input type="checkbox" class="form-check-input check" value="1" name="edit1">
            </div>

            <div class="form-check ">
              <label class="form-label" data-i18n="Delete">Delete</label>
<input type="checkbox" class="form-check-input check" value="1" name="delete1">
            </div>

 <div class="form-check ">
              <label class="form-label" data-i18n="Print">Print</label>
<input type="checkbox" class="form-check-input check" value="1" name="print">
            </div>
 
          </div>
 
      </div>
            
          </div>
 <script type="text/javascript">
 

 function data1(class_name){
  var a=$('.'+class_name+':checked').length;

 

    if (a==1) {
$(".check").prop("checked", true);
                
       

    }else{
                 
   $(".check").prop("checked", false);

        

    }
  }
</script>   
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
 
          <div class="col-md-12 fv-plugins-icon-container">
       
            <label class="form-label" data-i18n="photo">Files</label>
             
        <input type="file"    name="file[]" onchange="readURL(this);"  class="file form-control">

       
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
 









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
 
<script type="text/javascript">
 function readURL(input) {
$("img").remove();
for (var i = input.files.length - 1; i >= 0; i--) {
  

if (input.files && input.files[i]) {
                var reader = new FileReader();

                reader.onload = function (e) {

   $(".file").after('<img id="blah" style="width: 150px;height: 150px;padding: 5px;" src="'+e.target.result+'" alt="your image" />')

                   
                   
                };

                reader.readAsDataURL(input.files[i]);
            }


}

            




        }




////////////////////////////////////////////////////////////////////////////////////////////////////
"use strict";
$(function() {
  var e = $(".selectpicker"),
    t = $(".select2"),
    n = $(".select2-icons");

  function i(e) {
    return e.id ? "<i class='" + $(e.element).data("icon") + " me-2'></i>" + e.text : e.text
  }
  e.length && e.selectpicker(), t.length && t.each(function() {
    var e = $(this);
    e.wrap('<div class="position-relative"></div>').select2({
      placeholder: "Select value",
      dropdownParent: e.parent()
    })
  }), n.length && n.wrap('<div class="position-relative"></div>').select2({
    dropdownParent: n.parent(),
    templateResult: i,
    templateSelection: i,
    escapeMarkup: function(e) {
      return e
    }
  })
});

////////////////////////////////////////////////////////////////////////////////////////////////////


       
</script>
    

   