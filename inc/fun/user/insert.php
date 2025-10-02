<?php

// print_r($_FILES['file'] );
  // print_r($_POST);

include"../../sql.php";

if (!empty($_POST['name']) or!empty($_POST['user_name']) or!empty($_POST['password']) or !empty($_POST['status']) or !empty($_POST['phone'])or !empty($_POST['email']) or !empty($_FILES['file']['name'][0])) {
	



  $all=filter_var($_POST['all'], FILTER_VALIDATE_INT)??0;
  $outgoing=filter_var($_POST['outgoing'], FILTER_VALIDATE_INT)??0;
  $outgoing1=filter_var($_POST['outgoing1'], FILTER_VALIDATE_INT)??0;
  $transaction_type=filter_var($_POST['transaction_type'], FILTER_VALIDATE_INT)??0;
  $importance=filter_var($_POST['importance'], FILTER_VALIDATE_INT)??0;
  $confidentiality=filter_var($_POST['confidentiality'], FILTER_VALIDATE_INT)??0;
  $incoming=filter_var($_POST['incoming'], FILTER_VALIDATE_INT)??0;
  $company=filter_var($_POST['company'], FILTER_VALIDATE_INT)??0;
  $user=filter_var($_POST['user'], FILTER_VALIDATE_INT)??0;
  $settings=filter_var($_POST['settings'], FILTER_VALIDATE_INT)??0;
  $time=filter_var($_POST['time'], FILTER_VALIDATE_INT)??0;
  
  $notifications=filter_var($_POST['notifications'], FILTER_VALIDATE_INT)??0;

  $histore_outging=filter_var($_POST['histore_outging'], FILTER_VALIDATE_INT)??0;
  $histore_incoming=filter_var($_POST['histore_incoming'], FILTER_VALIDATE_INT)??0;

  $add1=filter_var($_POST['add1'], FILTER_VALIDATE_INT)??0;
  $edit1=filter_var($_POST['edit1'], FILTER_VALIDATE_INT)??0;
  $delete1=filter_var($_POST['delete1'], FILTER_VALIDATE_INT)??0;
  $print=filter_var($_POST['print'], FILTER_VALIDATE_INT)??0;
  $dialect=filter_var($_POST['dialect'], FILTER_VALIDATE_INT)??0;
  $backup=filter_var($_POST['backup'], FILTER_VALIDATE_INT)??0;






  $name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$name_en=filter_var($_POST['name_en'], FILTER_SANITIZE_STRING);
$email=filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$phone=filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$address=filter_var($_POST['address'], FILTER_SANITIZE_STRING);
$address_en=filter_var($_POST['address_en'], FILTER_SANITIZE_STRING);
$almuahal=filter_var($_POST['almuahal'], FILTER_SANITIZE_STRING);
$date=filter_var($_POST['date'], FILTER_SANITIZE_STRING);
$company_id=filter_var($_POST['company_id'], FILTER_SANITIZE_STRING);
$status=filter_var($_POST['status'], FILTER_VALIDATE_INT);
$permissions=filter_var($_POST['permissions'], FILTER_VALIDATE_INT);
$user_name= filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
$pass= filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$password= md5($pass);

  
$sql->selectall("user where user_name='$user_name' and company_id =$company_id");
 
if ($sql->res->num_rows>=1) {
 	header("location:../../../dashbord.php?add_user=show&user=no");
 	exit();
 } 

 $sql->check('user',['email'=>"$email"]);
 if ($sql->check >=1) {
header("location:../../../dashbord.php?add_user=show&user=no");
  exit();
  
  }


  // print_r($_FILES['file']['name'][0]);
//upload.php
	
$folder_name = 'file/';

if(!empty($_FILES['file']['name'][0]))
{
 

 


 
 $temp_file1 = $_FILES['file']['tmp_name'];
 $name1 = $_FILES['file']['name'];
 $size1 = $_FILES['file']['size'];

 session_start();

 $user_id =$_SESSION['user_id'];
 $name_user =$_SESSION['name'];
 $name_user_en =$_SESSION['name_en'];
 $permissions_user =$_SESSION['permissions'];
 $permissions_user_en =$_SESSION['permissions_en'];
 $date_user =date("Y-m-d h:i:s");
 
 $sql->insert('notifications',["user_id"=>"$user_id","page"=>"إضافة مستخدم","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بإضافة مستخدم","page_en"=>"Add User","des_en"=>"$name_user_en ($permissions_user_en) added a user.","status"=>0,"date"=>"$date_user"]);
 
 


 
 
//  [all] => 1 [outgoing] => 1 [transaction_type] => 1 [importance] => 1 [confidentiality] => 1 [outgoing1] => 1 [incoming] => 1 [company] => 1 [user] => 1 [add1] => 1 [edit1] => 1 [delete1] => 1 [print] => 1

 

$sql->insert_file('user',["name"=>"$name","name_en"=>"$name_en","email"=>"$email","phone"=>"$phone","address"=>"$address","address_en"=>"$address_en","almuahal"=>"$almuahal","date"=>"$date","company_id"=>"$company_id","status"=>"$status","permissions"=>"$permissions","user_name"=>"$user_name","password"=>"$password","all1"=>"$all","outgoing"=>"$outgoing","transaction_type"=>"$transaction_type","importance"=>"$importance","confidentiality"=>"$confidentiality","outgoing1"=>"$outgoing1","incoming"=>"$incoming","company"=>"$company","user"=>"$user","histore_outging"=>"$histore_outging","histore_incoming"=>"$histore_incoming","add1"=>"$add1","edit1"=>"$edit1","delete1"=>"$delete1","print"=>"$print","settings"=>"$settings","backup"=>"$backup","time"=>"$time" ,"notifications"=>"$notifications" ,"dialect"=>"$dialect","created_in"=>"$date_user" ],$name1,$size1,$temp_file1);
 




  $user_id=$sql->conn->insert_id;
 
  
  


 
 
}else{
  session_start();

  $user_id =$_SESSION['user_id'];
  $name_user =$_SESSION['name'];
  $name_user_en =$_SESSION['name_en'];
  $permissions_user =$_SESSION['permissions'];
  $permissions_user_en =$_SESSION['permissions_en'];
  $date_user =date("Y-m-d h:i:s");
  
  $sql->insert('notifications',["user_id"=>"$user_id","page"=>"إضافة مستخدم","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بإضافة مستخدم","page_en"=>"Add User","des_en"=>"$name_user_en ($permissions_user_en) added a user.","status"=>0,"date"=>"$date_user"]);
  
 $sql->insert('user',["name"=>"$name","name_en"=>"$name_en","email"=>"$email","phone"=>"$phone","address"=>"$address","address_en"=>"$address_en","almuahal"=>"$almuahal","date"=>"$date","company_id"=>"$company_id","status"=>"$status","permissions"=>"$permissions","user_name"=>"$user_name","password"=>"$password","all1"=>"$all","outgoing"=>"$outgoing","transaction_type"=>"$transaction_type","importance"=>"$importance","confidentiality"=>"$confidentiality","outgoing1"=>"$outgoing1","incoming"=>"$incoming","company"=>"$company","user"=>"$user","add1"=>"$add1","histore_outging"=>"$histore_outging","histore_incoming"=>"$histore_incoming","edit1"=>"$edit1","delete1"=>"$delete1","print"=>"$print","settings"=>"$settings","backup"=>"$backup","time"=>"$time","notifications"=>"$notifications" ,"dialect"=>"$dialect" ,"created_in"=>"$date_user"]);
 // header("location:../../../dashbord.php?user=show&file=no");

$user_id=$sql->conn->insert_id;

}

if (!empty($sql->error)) {
$aa= '&'. implode("&", $sql->error);
 header("location:../../../dashbord.php?add_user=show$aa");
}else{
	header("location:../../../dashbord.php?edit_user=show&id=$user_id&add=su");
}
}else{
	header("location:../../../dashbord.php?add_user=show&error=su");

  }



