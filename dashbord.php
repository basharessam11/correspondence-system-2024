<?php
// error_reporting(0);
session_start();
if (!isset($_SESSION['login'])) {
header("location:index.php");
}else{
include "inc/sql.php";

 if (!isset($_COOKIE['lang'] )) {
$a="lang.php?lang=ar&url=".$_SERVER['REQUEST_URI'];
header("location:$a") ;
}

//  if(isset($_COOKIE['lang'])){
//     if ( $_COOKIE['lang']=="ar" ) {
        
        
    
//     }elseif ( $_COOKIE['lang']=="en" ){
  
//     }
// }else{
 
      
// }




$log=$_SESSION['login'];

  $id=$_SESSION['user_id'] ;

$sql->selectall("user where id = $id");

while ($row = $sql->res->fetch_assoc()) {
 
$permissions=$row['permissions'];
$user_id=$row['id'];
$status=$row['status'];
$outgoing=$row['outgoing'];
$outgoing1=$row['outgoing1'];
$incoming=$row['incoming'];
$transaction_type=$row['transaction_type'];
$importance=$row['importance'];
$confidentiality=$row['confidentiality'];
$company=$row['company'];
$user=$row['user'];
$settings=$row['settings'];
$add1=$row['add1'];
$edit1=$row['edit1'];
$delete1=$row['delete1'];
$print=$row['print'];
$dialect=$row['dialect'];
$backup=$row['backup'];
$user_img=$row['file'];
$notifications=$row['notifications'];
$histore_outging=$row['histore_outging'];
$histore_incoming=$row['histore_incoming'];
$time11=$row['time'];

if ($status==0) {
  header("location:log_out.php");
}


}
// $sql->selectall("settings");

// while ($row = $sql->res->fetch_assoc()) {

// $status_site=$row['status'];


// }

 
      
     $sql->selectall("settings where id=1");
   
     while ($row = $sql->res->fetch_assoc()) {
 
   $repair =$row['status'];
if ($permissions == 2) {
   if ($repair==1) {
    session_destroy();
     header("location:comingsoon.php");
   }
}
  
}




 
 

include "inc/des/header.php";

include "inc/des/menu.php";


  if (isset($_GET)) {
  //customer

 
   
    
                


  
 
 
  /////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////outgoing/////////////////////
if ($outgoing ==1) {
      if (isset($_GET['outgoing']) and $_GET['outgoing']=="show") {
    include "outgoing.php";
  }

  }else if (isset($_GET['outgoing']) and  $_GET['outgoing']=="show" and $outgoing==0){
    include "auth.php";

}
  if ($add1==1) {
  //////////////////////////////////// 
      if (isset($_GET['add_outgoing']) and $_GET['add_outgoing']=="show") {
    include "inc/des/outgoing/add_outgoing.php";
  }
}else if ( isset($_GET['add_outgoing']) and $_GET['add_outgoing']=="show" and $add1==0){
    include "auth.php";

}
if ($edit1==1) {
  ////////////////////////////////////
      if (isset($_GET['edit_outgoing']) and $_GET['edit_outgoing']=="show") {
    include "inc/des/outgoing/edit_outgoing.php";
  }
  }else if (isset($_GET['edit_outgoing']) and $_GET['edit_outgoing']=="show" and $edit1==0){
    include "auth.php";

}

  ////////////////end outgoing////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////

  ////////////////outgoing1/////////////////////
if ($outgoing1==1) {

      if (isset($_GET['outgoing1']) and $_GET['outgoing1']=="show") {
    include "outgoing1.php";
  }
 
 
}else if (isset($_GET['outgoing1']) and $_GET['outgoing1']=="show" and $outgoing1==0){
    include "auth.php";

}
  ////////////////end outgoing1////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////

  ////////////////histore_outging/////////////////////
if ($histore_outging==1) {

      if (isset($_GET['histore_outging']) and $_GET['histore_outging']=="show") {
    include "histore_outging.php";
  }
 
 
}else if (isset($_GET['histore_outging']) and $_GET['histore_outging']=="show" and $histore_outging==0){
    include "auth.php";

}
  ////////////////end histore_outging////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////

  ////////////////histore_incoming/////////////////////
if ($histore_incoming==1) {

      if (isset($_GET['histore_incoming']) and $_GET['histore_incoming']=="show") {
    include "histore_incoming.php";
  }
 
 
}else if (isset($_GET['histore_incoming']) and $_GET['histore_incoming']=="show" and $histore_incoming==0){
    include "auth.php";

}
  ////////////////end histore_outging////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////


  ////////////////incoming/////////////////////

if ($incoming==1) {

      if (isset($_GET['incoming']) and $_GET['incoming']=="show") {
    include "incoming.php";
  }
  //////////////////////////////////// 
      if (isset($_GET['show_incoming']) and $_GET['show_incoming']=="show") {
    include "inc/des/incoming/show_incoming.php";
  }



    if ($add1==1) {
  //////////////////////////////////// 
      if (isset($_GET['add_incoming']) and $_GET['add_incoming']=="show") {
    include "inc/des/incoming/add_incoming.php";
  }
}else if ( isset($_GET['add_incoming']) and $_GET['add_incoming']=="show" and $add1==0){
    include "auth.php";

}
if ($edit1==1) {
  ////////////////////////////////////
      if (isset($_GET['edit_incoming']) and $_GET['edit_incoming']=="show") {
    include "inc/des/incoming/edit_incoming.php";
  }
  }else if (isset($_GET['edit_incoming']) and $_GET['edit_incoming']=="show" and $edit1==0){
    include "auth.php";

}



 }else if (isset($_GET['incoming']) and $_GET['incoming']=="show" and $incoming==0 or isset($_GET['show_incoming']) and $_GET['show_incoming']=="show" and $incoming==0){
    include "auth.php";

}
  ////////////////end incoming////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////

    ////////////////transaction_type/////////////////////
if ($transaction_type==1) {

      if (isset($_GET['transaction_type']) and $_GET['transaction_type']=="show") {
    include "transaction_type.php";
  }
}else if (isset($_GET['transaction_type']) and $_GET['transaction_type']=="show" and $transaction_type==0){
    include "auth.php";

}
  ////////////////end transaction_type////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////


  ////////////////notifications/////////////////////
if ($notifications==1) {

      if (isset($_GET['notifications']) and $_GET['notifications']=="show") {
    include "notifications.php";
  }
}else if (isset($_GET['notifications']) and $_GET['notifications']=="show" and $notifications==0){
    include "auth.php";

}
  ////////////////end notifications////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////


 ////////////////dialect/////////////////////
if ($dialect==1) {

      if (isset($_GET['dialect']) and $_GET['dialect']=="show") {
    include "dialect.php";
  }
}else if (isset($_GET['dialect']) and $_GET['dialect']=="show" and $dialect==0){
    include "auth.php";

}
  ////////////////end dialect////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////


 ////////////////importance/////////////////////
if ($importance==1) {

      if (isset($_GET['importance']) and $_GET['importance']=="show") {
    include "importance.php";
  }
  }else if (isset($_GET['importance']) and $_GET['importance']=="show" and $importance==0){
    include "auth.php";

}
  ////////////////end importance////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////
 


 ////////////////confidentiality/////////////////////
if ($confidentiality==1) {

      if (isset($_GET['confidentiality']) and $_GET['confidentiality']=="show") {
    include "confidentiality.php";
  }
}else if (isset($_GET['confidentiality']) and $_GET['confidentiality']=="show" and $confidentiality==0){
    include "auth.php";

}
  ////////////////end confidentiality////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////


 
  /////////////////////////////////////////////////////////////////////////////////////////////////


////////////////company/////////////////////
if ($company==1) {

      if (isset($_GET['company']) and $_GET['company']=="show") {
    include "company.php";
  }
  

  //////////////////////////////////// 
if ($add1==1) {

      if (isset($_GET['add_company']) and $_GET['add_company']=="show") {
    include "inc/des/company/add_company.php";
  }
  }else if (isset($_GET['add_company']) and $_GET['add_company']=="show" and $add1==0){
    include "auth.php";

}

  ////////////////////////////////////
if ($edit1==1) {

      if (isset($_GET['edit_company']) and $_GET['edit_company']=="show") {
    include "inc/des/company/edit_company.php";
  }
  }else if (isset($_GET['edit_company']) and $_GET['edit_company']=="show" and $edit1==0){
    include "auth.php";

}

}else if (isset($_GET['company']) and $_GET['company']=="show" and $company==0){
    include "auth.php";

}
  ////////////////end company////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////

 ////////////////backup/////////////////////
if ($backup==1) {

      if (isset($_GET['backup']) and $_GET['backup']=="show") {
    include "backup.php";
  }
}else if (isset($_GET['backup']) and $_GET['backup']=="show" and $backup==0){
    include "auth.php";

}
  ////////////////end backup////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////

  

////////////////user/////////////////////
if ($user==1) {

      if (isset($_GET['user']) and $_GET['user']=="show") {
    include "user.php";
  }
  //////////////////////////////////// 
if ($add1==1) {

      if (isset($_GET['add_user']) and $_GET['add_user']=="show") {
    include "inc/des/user/add_user.php";
  }
  }else if (isset($_GET['add_user']) and $_GET['add_user']=="show" and $add1==0){
    include "auth.php";

}
  ////////////////////////////////////
if ($edit1==1) {

      if (isset($_GET['edit_user']) and $_GET['edit_user']=="show") {
    include "inc/des/user/edit_user.php";
  }
  }else if (isset($_GET['edit_user']) and $_GET['edit_user']=="show" and $edit1==0){
    include "auth.php";

}
}else if (isset($_GET['user']) and $_GET['user']=="show" and $user==0){
    include "auth.php";

}
  ////////////////end user////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////


  ////////////////dash/////////////////////
  if (isset($_GET['dash']) and $_GET['dash']=="list") {
    include "chart.php";
  }
  ////////////////end dash////////////////////
  /////////////////////////////////////////////////////////////////////////////////////////////////








}


include "inc/des/footer.php";
}







?>
