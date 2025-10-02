<?php

// print_r($_FILES['file'] );
  // print_r($_POST);

include"../../sql.php";

if (!empty($_POST['name']) or !empty($_POST['status']) or !empty($_POST['phone'])or !empty($_POST['email']) or !empty($_FILES['file']['name'][0])) {
	


 

 // print_r($array);
//upload.php
	
$folder_name = 'file/';

if(!empty($_FILES))
{
 

 
$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$name_en=filter_var($_POST['name_en'], FILTER_SANITIZE_STRING);

$address_en=filter_var($_POST['address_en'], FILTER_SANITIZE_STRING);
 
$phone=filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$fax=filter_var($_POST['fax'], FILTER_SANITIZE_STRING);
$email=filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$url= filter_var($_POST['url'], FILTER_SANITIZE_STRING);
$address=filter_var($_POST['address'], FILTER_SANITIZE_STRING);
$status=filter_var($_POST['status'], FILTER_VALIDATE_INT);


 
 $temp_file1 = $_FILES['file']['tmp_name'];
 $name1 = $_FILES['file']['name'];
 $size1 = $_FILES['file']['size'];


 $sql->selectall("company where name='$name'");
 
if ($sql->res->num_rows>=1) {
 	header("location:../../../dashbord.php?add_company=show&company=no");
 	exit();
 } 


 

$sql->insert_file('company',["name"=>"$name","name_en"=>"$name_en","phone"=>"$phone","fax"=>"$fax","email"=>"$email","url"=>"$url","address"=>"$address","address_en"=>"$address_en","status"=>"$status"],$name1,$size1,$temp_file1);
$company_id=$sql->conn->insert_id;
session_start();
$user_id =$_SESSION['user_id'];
$name_user =$_SESSION['name'];
$name_user_en =$_SESSION['name_en'];
$permissions_user =$_SESSION['permissions'];
$permissions_user_en =$_SESSION['permissions_en'];
$date_user =date("Y-m-d h:i:s");

$sql->insert('notifications',["user_id"=>"$user_id","page"=>"إضافة شركة","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بإضافة شركة ","page_en"=>"Add company","des_en"=>"$name_user_en ($permissions_user_en) added a company. ","status"=>0,"date"=>"$date_user"]);



 
  
  


 
 
}else{
 header("location:../../../dashbord.php?company=show&file=no");



}

if (!empty($sql->error)) {
$aa= '&'. implode("&", $sql->error);
 header("location:../../../dashbord.php?add_company=show$aa");
}else{
	header("location:../../../dashbord.php?edit_company=show&id=$company_id&add=su");
}
}else{
	header("location:../../../dashbord.php?add_company=show&error=su");

  }



