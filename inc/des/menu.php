

    
    




<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
  <div class="app-brand demo " style="width:100%;height: auto;">
    <a href="index.php" class="app-brand-link">
<center>
      <span class="app-brand-text demo menu-text fw-bolder ms-2">        <?php
      $company_id=$_SESSION['company_id'];
     $sql->selectall("company where id=$company_id ");
     $x=1;
     while ($row = $sql->res->fetch_assoc()) {
 if ($_COOKIE['lang']=="ar"){$company11= $row['name'];}else if ($_COOKIE['lang']=="en"){$company11= $row['name_en'];} 
 
$company_name= $row['name'];
      ?>

<img style="width:100%; height: auto;" src="inc/fun/company/file/<?=$logo=$row['file']?>">
<?php
}
?>
  </center></span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>
 

  
  
  <ul class="menu-inner py-1">
    <!-- Dashboards -->

<br>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////dash///////////////////// -->
         <li class="menu-item <?php
if (isset($_GET['dash']) and $_GET['dash']=="list") {
    echo "active";
  }
 ?>">
          <a href="?dash=list" class="menu-link">
             <i class="menu-icon tf-icons bx bxs-home"></i>
            <div data-i18n="Dashboard">Dashboard</div>
          </a>
        </li>
        <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end dash///////////////////// -->
<?php

if ($outgoing ==1 or $outgoing1 ==1 ) {
?>
  <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////outgoing///////////////////// -->

    <!-- e-commerce-app menu start -->
    <li class="menu-item <?php
if (isset($_GET['outgoing']) and $_GET['outgoing']=="show" or isset($_GET['outgoing1']) and $_GET['outgoing1']=="show") {
    echo "active open";
  }
 ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
       <i class='menu-icon tf-icons bx bxs-paper-plane'></i>
        <div class="text-truncate" data-i18n="Outgoing">Outgoing</div>
      </a>
      <ul class="menu-sub">



        <?php

if ($outgoing1 ==1 ) {
?>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////

  ///////////////////outgoing1///////////////////// -->
        
         <li class="menu-item <?php
if (isset($_GET['outgoing1']) and $_GET['outgoing1']=="show") {
    echo "active";
  }
 ?>">
          <a href="?outgoing1=show" class="menu-link">

            
            
            <div data-i18n="Outgoing">outgoing</div>
          </a>
        </li>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end outgoing1///////////////////// -->
<?php
}
 

if ($outgoing ==1 ) {
?>


                 <li class="menu-item <?php
if (isset($_GET['outgoing']) and $_GET['outgoing']=="show") {
    echo "active";
  }
 ?>">
          <a href="?outgoing=show" class="menu-link">

            
            <div data-i18n="Public Outgoing">public outgoing</div>
          </a>
        </li>

 <?php
}?>
        
 
      </ul>
    </li>
    <!-- e-commerce-app menu end -->
<?php
}
?>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end outgoing///////////////////// -->



  <?php
if ($incoming ==1  ) {
?>


<!--/////////////////////////////////////////////////////////////////////////////////////////////////-->


       <!-- ///////////////////incoming///////////////////// -->
        
         <li class="menu-item <?php
if (isset($_GET['incoming']) and $_GET['incoming']=="show") {
    echo "active";
  }
 ?>">
          <a href="?incoming=show" class="menu-link">
            <i class='menu-icon tf-icons bx bxs-envelope'></i>
             
            <div data-i18n="incoming">incoming</div>
          </a>
        </li>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end incoming///////////////////// -->
  
<?php
}
?>


<?php
 
if ($histore_outging ==1 or $histore_incoming ==1 ) {
?>
  <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////histore_outging///////////////////// -->

    <!-- e-commerce-app menu start -->
    <li class="menu-item <?php
if (isset($_GET['histore_outging']) and $_GET['histore_outging']=="show" or isset($_GET['histore_incoming']) and $_GET['histore_incoming']=="show") {
    echo "active open";
  }
 ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
       <i class='menu-icon tf-icons bx bxs-trash'></i>
        <div class="text-truncate" data-i18n="histore">histore</div>
      </a>
      <ul class="menu-sub">



        <?php

if ($histore_outging ==1 ) {
?>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////

  ///////////////////histore_outging///////////////////// -->
        
         <li class="menu-item <?php
if (isset($_GET['histore_outging']) and $_GET['histore_outging']=="show") {
    echo "active";
  }
 ?>">
          <a href="?histore_outging=show" class="menu-link">

            
            
            <div data-i18n="histore_outging">histore outging</div>
          </a>
        </li>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end histore_outging///////////////////// -->
<?php
}
 

if ($histore_incoming ==1 ) {
?>


                 <li class="menu-item <?php
if (isset($_GET['histore_incoming']) and $_GET['histore_incoming']=="show") {
    echo "active";
  }
 ?>">
          <a href="?histore_incoming=show" class="menu-link">

            
            <div data-i18n="histore_incoming">histore incoming</div>
          </a>
        </li>

 <?php
}?>
        
 
      </ul>
    </li>
    <!-- e-commerce-app menu end -->
<?php
}
?>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end outgoing///////////////////// -->





<?php
 

if ($user ==1  ) {
?>

  <!--///////////////////user///////////////////// -->
        
 <!-- e-commerce-app menu start -->
    <li class="menu-item <?php
if (isset($_GET['user']) and $_GET['user']=="show" ) {
    echo "active open";
  }
 ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        
       <i class='menu-icon tf-icons bx bxs-user'></i>
        <div class="text-truncate" data-i18n="Users">users</div>
      </a>
      <ul class="menu-sub">
 
<?php
 
 

if ($user ==1  ) {
?>


<!--///////////////////users///////////////////// -->
        
  <li class="menu-item <?php
if (isset($_GET['user']) and $_GET['user']=="show") {
    echo "active";
  }
 ?>">
          <a href="?user=show" class="menu-link">

 
            <div data-i18n="Users">users</div>
          </a>
        </li>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end users///////////////////// -->


 <?php
}
?>



 
      </ul>
    </li>

 <?php
}
?>


 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end user///////////////////// -->
 




<?php
 

if ( $company == 1 or  $transaction_type == 1 or  $importance == 1 or  $confidentiality == 1 ) {
?>

  <!--///////////////////user///////////////////// -->
        
 <!-- e-commerce-app menu start -->
    <li class="menu-item <?php
if (   isset($_GET['company']) and$_GET['company']=="show" or isset($_GET['transaction_type']) and $_GET['transaction_type']=="show" or isset($_GET['importance']) and $_GET['importance']=="show" or isset($_GET['confidentiality']) and $_GET['confidentiality']=="show" or isset($_GET['dialect']) and $_GET['dialect']=="show" or isset($_GET['backup']) and $_GET['backup']=="show" or isset($_GET['notifications']) and $_GET['notifications']=="show") {
    echo "active open";
  }
 ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        
       <i class="menu-icon tf-icons bx bxs-cog"></i>
        <div class="text-truncate" data-i18n="Settings">Settings</div>
      </a>
      <ul class="menu-sub">
 <?php
 
 

if (   $company == 1  ) {
?>

<!--///////////////////company///////////////////// -->
        
         <li class="menu-item <?php
if (isset($_GET['company']) and $_GET['company']=="show") {
    echo "active";
  }
 ?>">
          <a href="?company=show" class="menu-link">

      
            <div data-i18n="Company">company</div>
          </a>
        </li>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end company///////////////////// -->
<?php
} 

if ( $transaction_type == 1  ) {
?>
 
  <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////transaction_type///////////////////// -->
        
         <li class="menu-item <?php
if (isset($_GET['transaction_type']) and $_GET['transaction_type']=="show") {
    echo "active";
  }
 ?>">
          <a href="?transaction_type=show" class="menu-link">

             <div data-i18n="Transaction Type">transaction type</div>
          </a>
        </li>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end transaction_type///////////////////// -->
<?php
}


if ( $dialect == 1  ) {
?>
 
  <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////dialect///////////////////// -->
        
         <li class="menu-item <?php
if (isset($_GET['dialect']) and $_GET['dialect']=="show") {
    echo "active";
  }
 ?>">
          <a href="?dialect=show" class="menu-link">

             <div data-i18n="dialect">dialect</div>
          </a>
        </li>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end dialect///////////////////// -->
<?php
}
 

if (  $importance == 1   ) {
?>
 
    <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////importance///////////////////// -->
        
         <li class="menu-item <?php
if (isset($_GET['importance']) and $_GET['importance']=="show") {
    echo "active";
  }
 ?>">
          <a href="?importance=show" class="menu-link">

             <div data-i18n="Importance">importance</div>
          </a>
        </li>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end importance///////////////////// -->

 <?php
}
if (  $confidentiality == 1) {
?>
   <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////confidentiality///////////////////// -->
        
         <li class="menu-item <?php
if (isset($_GET['confidentiality']) and $_GET['confidentiality']=="show") {
    echo "active";
  }
 ?>">
          <a href="?confidentiality=show" class="menu-link">

             <div data-i18n="Confidentiality">confidentiality</div>
          </a>
        </li>
<?php

}
if (  $notifications == 1) {
?>
 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end confidentiality///////////////////// -->

   <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////notifications///////////////////// -->
        
         <li class="menu-item <?php
if (isset($_GET['notifications']) and $_GET['notifications']=="show") {
    echo "active";
  }
 ?>">
          <a href="?notifications=show" class="menu-link">

             <div data-i18n="notifications">notifications</div>
          </a>
        </li>
<?php

}
if (  $settings == 1) {
?>
 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end notifications///////////////////// -->

   <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////repair///////////////////// -->
        
         <li class="menu-item <?php
if (isset($_GET['repair']) and $_GET['repair']=="show") {
    echo "active";
  }
 ?>">
          <a data-bs-toggle="modal" data-bs-target="#basicModal5" class="menu-link">

             <div data-i18n="repair">repair</div>
          </a>
        </li>

 
 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end repair///////////////////// -->

 

<?php

}
if (  $backup == 1) {
?>



   <!-- ///////////////////backup///////////////////// --> 
        
<li class="menu-item <?php
if (isset($_GET['backup']) and $_GET['backup']=="show") {
    echo "active";
  }
 ?>">
          <a href="?backup=show" class="menu-link">
             
            <div data-i18n="backup"> </div>
          </a>
        </li>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end backup///////////////////// -->  

  <?php

}

if (  $time11 == 1) {
?>



   <!-- ///////////////////time///////////////////// --> 
        
<li class="menu-item <?php
if (isset($_GET['time']) and $_GET['time']=="show") {
    echo "active";
  }
 ?>">
           <a data-bs-toggle="modal" data-bs-target="#basicModal7" class="menu-link">
             
            <div data-i18n="time"> </div>
          </a>
        </li>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end time///////////////////// -->  

  <?php

}
?>
      </ul>
    </li>

 <?php
}
?>



  <!-- ///////////////////end settings///////////////////// --> 










      








   <!-- ///////////////////logout///////////////////// --> 
        
<li class="menu-item" >
          <a href="log_out.php" class="menu-link">
            <i class="bx bx-power-off me-2"></i>
            <div data-i18n="logout">logout</div>
          </a>
        </li>

 <!--/////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////end logout///////////////////// -->     








    
   


    
    
      
      </ul>
    </li>

  

    
  

</aside>
<!-- / Menu -->
    

    <!-- Layout container -->
    <div class="layout-page">
      
      



<!-- Navbar -->



<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  

  

  

      
      

      
      
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="bx bx-menu bx-sm"></i>
        </a>
      </div>
      

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        
        <!-- Search -->
        <div class="navbar-nav align-items-center com">
          <div class="nav-item navbar-search-wrapper mb-0">
            <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
             <i class="menu-icon tf-icons bx bx-user"></i>
              <span class="d-none d-md-inline-block text-muted"><?php 


     $user_id=$_SESSION['user_id'];
     $sql->selectall("user where id=$user_id ");
     $x=1;
     while ($row = $sql->res->fetch_assoc()) {
 if ($_COOKIE['lang']=="ar"){$user11= $row['name'];}else if ($_COOKIE['lang']=="en"){$user11= $row['name_en'];} 
 
}
  

if ($_COOKIE['lang']=="ar"){$welcome= ' مرحباً ';}else if ($_COOKIE['lang']=="en"){$welcome= 'Welcome ';}

               echo $welcome . $user11; if ($permissions==1) {
                if ($_COOKIE['lang']=="ar"){echo ' (ﻣﺪﻳﺮ) ';}else if ($_COOKIE['lang']=="en"){echo ' (admin) ';}
             
              }else{
                if ($_COOKIE['lang']=="ar"){echo ' (ﻣﻮﻇﻒ) ';}else if ($_COOKIE['lang']=="en"){echo ' (employee) ';}
                
              } ?></span>
            </a>
          </div>
        </div>
        <!-- /Search -->


<!--   company -->
        <div class="navbar-nav flex-row align-items-center ms-auto com">
          <div class="p-2"><?=$company11?></div>
           
        </div>
        <!-- / company -->
 



    <ul class="navbar-nav flex-row align-items-center ms-auto">
          

        <!-- Search -->
        <div class="navbar-nav flex-row align-items-center ms-auto">
          <div class="p-2"><?=date("Y-m-d")?></div>
           
        </div>
        <!-- /Search -->
          

          <!-- Language -->
          <li class="nav-item dropdown-language dropdown  me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='bx bx-globe bx-sm'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="lang.php?lang=en&url=<?=$_SERVER['REQUEST_URI'];?>"    >
                  <span class="align-middle">English</span>
                </a>
              </li>
              
              <li>
                <a class="dropdown-item" href="lang.php?lang=ar&url=<?=$_SERVER['REQUEST_URI'];?>"  >
                  <span class="align-middle">Arabic</span>
                </a>
              </li>
          
            </ul>
          </li>
 
      

          <!--/ Language -->

  <!-- Style Switcher -->
          <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='bx bx-sm'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                  <span class="align-middle"><i class='bx bx-sun me-2'></i>Light</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                  <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                  <span class="align-middle"><i class="bx bx-desktop me-2"></i>System</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- / Style Switcher-->
          

 
<?php
if (  $notifications == 1) {

     $user_id=$_SESSION['user_id'];
     $sql->selectall("notifications where status=0 ");

?>
 <!-- Notification -->
          <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class="bx bx-bell bx-sm"></i>
              <span class="badge bg-danger rounded-pill badge-notifications"><?=$sql->res->num_rows?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end py-0">
              <li class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h5 class="text-body mb-0 me-auto" data-i18n="notifications"></h5>
                  <i class="bx fs-4 bx-envelope-open"></i> 
                </div>
              </li>
              <li class="dropdown-notifications-list scrollable-container">
                <ul class="list-group list-group-flush">


                  <?php 
 
     $sql->selectall("notifications ORDER BY id desc limit 10 ");
 
     while ($row = $sql->res->fetch_assoc()) {
if ($row['status']==0) {
  $stat='';
}else{
  $stat='marked-as-read';

}

 $user_id1=$row['user_id'];
$sql->select1("user"," where id=$user_id1   ");
 
     while ($row1 = $sql->res1->fetch_assoc()) {
      $img=$row1['file'];
     }

  ?>
 <li class="list-group-item list-group-item-action dropdown-notifications-item <?=$stat?>">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="inc/fun/user/file/<?=$img?>" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1"><?php
if ($_COOKIE['lang']=="ar"){echo $row['page'];}else if ($_COOKIE['lang']=="en"){echo $row['page_en'];}

?>
                      </h6>
                        <p class="mb-0"><?php
if ($_COOKIE['lang']=="ar"){echo $row['des'];}else if ($_COOKIE['lang']=="en"){echo $row['des_en'];}

?></p>
                        <small class="text-muted"><?php
$timestamp_added = strtotime("2024-06-05 12:00:00 PM");

// وقت الاضافة
 $date=date_create($row['date']);
 $date1= date_format($date,"Y/m/d h:i:s"); 
 $timestamp_added = strtotime($date1);




$date3= date("Y/m/d h:i:s");
$current_time = strtotime($date3);
 

// الفارق بين الوقت الحالي ووقت الاضافة بالثواني
$time_diff = $current_time - $timestamp_added;

// حساب الفارق بالدقائق والثواني والساعات والأيام والأسابيع والشهور والسنين
 $minutes = floor($time_diff / 60);
$hours = floor($time_diff / 3600);
$days = floor($time_diff / 86400);
$weeks = floor($time_diff / 604800);
$months = floor($time_diff / 2628000);
$years = floor($time_diff / 31536000);

// طباعة النتيجة بناءً على الوحدة المناسبة
if ($years > 0) {
    echo "$years سنة";
} elseif ($months > 0) {
    echo "$months شهر";
} elseif ($weeks > 0) {
    echo "$weeks أسبوع";
} elseif ($days > 0) {
    echo "$days يوم";
} elseif ($hours > 0) {
    echo "$hours ساعة";
} elseif ($minutes > 0) {
    echo "$minutes دقيقة";
} else {
    echo "$time_diff ثانية";
}


                      ?></small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>




  <?php
              } ?>
                 

                  
  




                 
                </ul>
              </li>
              <li class="dropdown-menu-footer border-top p-3">
                <a href="?notifications=show">
                <button class="btn btn-primary text-uppercase w-100" data-i18n="view all notifications">view all notifications</button>
                </a>
              </li>
            </ul>
          </li>
          <!--/ Notification -->

<?php
}
?>

         
          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
 
<img src="inc/fun/user/file/<?=$user_img?>" alt class="w-px-37 h-auto rounded-circle">
 

                
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">


              <li>
                <a class="dropdown-item" href="log_out.php" >
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle" data-i18n="logout">logout</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ User -->
          

        </ul>
      </div>

      
 
      
      
  </nav>









<!-- ///////////////////////////////////////////////////////////////////////////////// -->
  
<!-- / Navbar -->
<!-- update name -->
          <div class="modal fade" id="basicModal5" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1" data-i18n="repair"> </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="اﻏﻼﻕ"></button>
                </div>
                <div class="modal-body">
                
                  <div class="row">
<form method="post" action="inc/fun/site/update.php" enctype="multipart/form-data" >
   
             
         <div class="col mb-3">
            <label class="switch switch-primary">
              <input type="checkbox" class="switch-input" value="1" name="repair"  <?php if($repair == 1){  echo'checked';}?>>
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label" data-i18n="repair"> </span>
            </label>
          </div>
                   
                
                  </div>
                 
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" data-i18n="Close"> </button>
                  <button type="submit" class="btn btn-primary" data-i18n="submit"> </button>
</form>
                </div>
              </div>
            </div>
          </div>


<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<div class="modal fade" id="basicModal6" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1" data-i18n="time"> </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="اﻏﻼﻕ"></button>
                </div>
                <div class="modal-body">
                
                  <div class="row">
    
             
         <div class="col mb-3" data-i18n="time1">
            هل تريد إضافة وقت إضافي  ام يتم تسجيل الخروج ؟
          </div>
                   
                
                  </div>
                 
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" data-i18n="Close"> </button>

                  <button onclick="time()"   class="btn btn-primary" data-i18n="time2"> </button>

                </div>
              </div>
            </div>
          </div>

<script type="text/javascript">
    function time() {

        $.post('inc/fun/site/active.php?n=2' , {

  
      1 : 1
     

    } , function(data){

       if (data==1) {
           $('#basicModal6').modal('hide');
       }

         

      // $(".kk").html(data)
      
    });
    

}
</script>




<!-- ///////////////////////////////////////////////////////////////////////////////// -->

<?php
if (  $time11 == 1) {
?>

<!-- update time -->
          <div class="modal fade" id="basicModal7" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1" data-i18n="time"> </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="اﻏﻼﻕ"></button>
                </div>
                <div class="modal-body">
                
                  <div class="row">
<form method="post" action="inc/fun/site/time.php" enctype="multipart/form-data" >
   
             
         <div class="col mb-12">
            <label class="form-label" data-i18n="time3"></label>
               <input type="number" class="form-control" value="<?=$time?>" name="time"   >
               
            </div>
                   
                
                  </div>
                 
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" data-i18n="Close"> </button>
                  <button type="submit" class="btn btn-primary" data-i18n="submit"> </button>
</form>
                </div>
              </div>
            </div>
          </div>

          <?php }?>