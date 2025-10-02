<?php 
 session_start();
  include "inc/sql.php";

 if (!isset($_COOKIE['lang'] )) {
$a="lang.php?lang=ar&url=".$_SERVER['REQUEST_URI'];
header("location:$a") ;
}


// error_reporting(0);
if (isset($_SESSION['login'])) {
  $user=$_SESSION['login'];
  $sql->selectall(" user where user_name = '$user'");
     while ($row1 = $sql->res->fetch_assoc()) {
    $permissions=$row1['permissions'];

     }
        if ($permissions==1) {
       header("location:dashbord.php?dash=list");
       }elseif($permissions==2){
      header("location:dashbord.php?dash=list");
   }

}
 if(isset($_POST["user_name"])){

$user_name=filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
$password=filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$pass= md5($password);
$company_id=filter_var($_POST['company_id'], FILTER_VALIDATE_INT);

 

$sql->check('user',['user_name'=>"$user_name",'company_id'=>"$company_id",'password'=>"$pass"]);

if ($sql->check ==1) {
 

 $sql->selectall(" user where user_name = '$user_name' and company_id=$company_id and password='$pass' ");
     while ($row1 = $sql->res->fetch_assoc()) {
    $permissions=$row1['permissions'];
  
  $status=$row1['status'];
  $name=$row1['name'];
  $name_en=$row1['name_en'];
 $_SESSION['LAST_ACTIVITY']=time();
if ($status ==1) {
  $_SESSION['login']=$user_name;
  $_SESSION['name']=$name;
  $_SESSION['name_en']=$name_en;
  
  $_SESSION['company_id']=$row1['company_id'];
  $id=$_SESSION['user_id']=$row1['id'];
if ($permissions==1) {
  
$pp="ﻣﺪﻳﺮ";
$pp_en="Admin";
  $_SESSION['permissions']=$pp;
  $_SESSION['permissions_en']=$pp_en;


}elseif($permissions==2){
    
      $pp="ﻣﻮﻇﻒ";
      $pp_en="Employe";
$_SESSION['permissions']=$pp;
  $_SESSION['permissions_en']=$pp_en;
     
   }

   
$date =date("Y-m-d h:i:s");
 $sql->insert('notifications',["user_id"=>"$id","page"=>"ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ","des"=>"  ﻗﺎﻡ  $name ($pp) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ","page_en"=>"login","des_en"=>"$name_en ($pp_en) has logged in.","status"=>0,"date"=>"$date"]);

    $sql->update('user',["log_error"=>0],"where id = '$id' ");
     if ($permissions==1) {
     
       header("location:dashbord.php?dash=list");
      
    
     }elseif($permissions==2){
    
      header("location:dashbord.php?dash=list");
     
   }
     }else{
      $stat=1;
     }




}


 
 
}else{
$sql->select1(" user"," where user_name = '$user_name' and company_id=$company_id ");
     while ($row2 = $sql->res1->fetch_assoc()) {
      if ($row2['log_error']>=3) {
        $log_no=1;
       $sql->update('user',["status"=>0],"where user_name = '$user_name' and company_id=$company_id");

      }else{
        $log_error=$row2['log_error']+1;


       $sql->update('user',["log_error"=>$log_error],"where user_name = '$user_name' and company_id=$company_id and permissions !=1");

      }
      
     }


 
 
}
}

?>
<!DOCTYPE html>
 
 <html lang="ar" class="light-style  customizer-hide"   data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">

  
<!-- Mirrored from themeselection.com/demo/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-name-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Feb 2022 00:22:53 GMT -->
<head>
  <script type="text/javascript">// اﺳﺘﺮﺟﺎﻉ اﻟﻘﻴﻤﺔ ﻣﻦ localStorage

 
 // اﻟﺪاﻟﺔ ﻟﻠﺤﺼﻮﻝ ﻋﻠﻰ ﻗﻴﻤﺔ اﻟﻜﻮﻛﻴﺰ ﺑﺎﺳﻤﻬﺎ
function getCookie(cookieName) {
    var name = cookieName + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(';');
    for(var i = 0; i < cookieArray.length; i++) {
        var cookie = cookieArray[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(name) === 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }
    return "";
}

// اﺳﺘﺨﺪاﻡ اﻟﺪاﻟﺔ ﻟﻠﺤﺼﻮﻝ ﻋﻠﻰ ﻗﻴﻤﺔ اﻟﻜﻮﻛﻴﺰ ﺑﻌﺪ ﺗﺤﺪﻳﺪ اﺳﻤﻬﺎ
var langValue = getCookie('lang');
 

if (langValue == "ar") {
    localStorage.setItem("templateCustomizer-vertical-menu-template--Lang", "ar");
    localStorage.setItem("templateCustomizer-vertical-menu-template--Rtl", "true");
} else {
    localStorage.setItem("templateCustomizer-vertical-menu-template--Lang", "en");
    localStorage.setItem("templateCustomizer-vertical-menu-template--Rtl", "false");

}

 
 
</script> 
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login </title>
 
 
    <!-- Core CSS -->
    <link rel="stylesheet" href="vendor/css/rtl/core.css" class="template-customizer-core-css" />
  
   
    <!-- Page -->
<link rel="stylesheet" href="vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="js/config.js"></script>
     <script src="vendor/libs/jquery/jquery.js"></script>
        <!-- Icons -->
    <link rel="stylesheet" href="vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="vendor/fonts/flag-icons.css" />

     <link rel="stylesheet" href="vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="vendor/libs/select2/select2.css">

</head>

<body>

  <!-- Content -->

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner w-600" >
      <!-- Register -->
      <div class="card">
        <div class="card-body">





          <select id="myDropdown" class="">
                <option <?php if ($_COOKIE['lang']=="ar"){echo 'selected'; }?> value="lang.php?lang=ar&url=<?=$_SERVER['REQUEST_URI'];?>" > Arabic </option>
                <option <?php if ($_COOKIE['lang']=="en"){echo 'selected'; }?> value="lang.php?lang=en&url=<?=$_SERVER['REQUEST_URI'];?>">  English </option>
</select>


<script>
        $(document).ready(function() {
            $('#myDropdown').change(function() {
                var selectedValue = $('#myDropdown option:selected').val();
                location.href = selectedValue
            
            });
        });
    </script>



          <!-- Logo -->
          <div class="app-brand justify-content-center">

              <center><br>
          <h4 class="mb-2"  style="color:#696cff" data-i18n="pro">ﺑﺮﻧﺎﻣﺞ اﻟﺼﺎﺩﺭ ﻭاﻟﻮاﺭﺩ  </h4>
        </center><br>
              
         
          </div>


        
          <!-- /Logo -->
          <center>
          <h4 class="mb-2" data-i18n="welcome_h"> </h4>
        


        </center><br>
          <p class="mb-4" data-i18n="welcome_p"> </p>

          <form id="formAuthentication" class="mb-3" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <div class="mb-3">

              <label class="form-label" data-i18n="Company">company</label>
            <select  class="form-select hwafz select1" name="company_id" required>
              <option disabled selected   value=""><?php if ($_COOKIE['lang']=="ar"){echo "اختر الشركة";}else if ($_COOKIE['lang']=="en"){echo "Choose the company";}?></option>
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
            <div class="mb-3">
              <label for="email" class="form-label" data-i18n="User Name">User Name</label>
              <input type="text" class="form-control" name="user_name" placeholder="User Name" autofocus>
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" data-i18n="Password">Password</label>
                 <a href="forgot.php">
                  <small data-i18n="for_h2">Forgot Password?</small>
                </a>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="***********" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <?php
             if(isset($_POST["user_name"])){
            if ($sql->check !=1) {
             echo '<br><div id="success-alert2" class="alert alert-danger" role="alert">
                       اﺳﻢ اﻟﻤﺴﺘﺨﺪﻡ اﻭ ﻛﻠﻤﺔ اﻟﻤﺮﻭﺭ ﻏﻴﺮ ﺻﺤﻴﺤﻪ اﻟﺮﺟﺎء اﻋﺎﺩﺓ اﻟﻤﺤﺎﻭﻟﺔ
                      </div>';
            }

            if (isset($log_no) and $log_no==1) {
             echo '<br><div id="success-alert2" class="alert alert-danger" role="alert">
                      ﺗﻢ اﻳﻘﺎﻑ ﺗﻔﻌﻴﻞ ﺣﺴﺎﺑﻜﻢ ﻣﻦ ﻓﻀﻠﻚ ﺗﻮاﺻﻞ ﻣﻊ اﻻﺩﻣﻦ ﻟﺘﻔﻌﻴﻞ اﻟﺤﺴﺎﺏ
                      </div>';
            }
            if (isset($stat) and $stat==1) {
             echo '<br><div id="success-alert2" class="alert alert-danger" role="alert">
                      ﺗﻢ اﻳﻘﺎﻑ ﺗﻔﻌﻴﻞ ﺣﺴﺎﺑﻜﻢ ﻣﻦ ﻓﻀﻠﻚ ﺗﻮاﺻﻞ ﻣﻊ اﻻﺩﻣﻦ ﻟﺘﻔﻌﻴﻞ اﻟﺤﺴﺎﺏ
                      </div>';
            }
          }
            ?>
            
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100"  type="submit" data-i18n="login">login</button>
            </div>
          </form>

 
          
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
</div>

<!-- / Content -->

  

  

  <!-- Core JS -->
  <!-- build:js vendor/js/core.js -->
  
 
 <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    
    
 
    <script src="vendor/libs/i18n/i18n.js"></script>
 

    <!-- Main JS -->
    <script src="js/main.js"></script>
     <script src="vendor/js/bootstrap.js"></script>
   <script src="vendor/libs/select2/select2.js"></script>
<script src="vendor/libs/bootstrap-select/bootstrap-select.js"></script> 
    <script type="text/javascript">
      

        $(document).ready(function() {
  
       $(".select1").select2();
       $(".select3").select2();


     });
    </script>
</body>


<!-- Mirrored from themeselection.com/demo/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Feb 2022 00:22:54 GMT -->
</html>
