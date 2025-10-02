<?php
session_start();




include"../../sql.php";






if (!empty($_POST['transaction_type']) and !empty($_POST['importance']) and !empty($_POST['confidentiality'])or !empty($_POST['dialect'])) {
	
// $incoming_number=filter_var($_POST['incoming_number'], FILTER_VALIDATE_INT);
$transaction_type=filter_var($_POST['transaction_type'], FILTER_VALIDATE_INT);
$importance=filter_var($_POST['importance'], FILTER_VALIDATE_INT);
$confidentiality=filter_var($_POST['confidentiality'], FILTER_VALIDATE_INT);
$dialect=filter_var($_POST['dialect'], FILTER_VALIDATE_INT);
 
$incoming_date= filter_var($_POST['incoming_date'], FILTER_SANITIZE_STRING);
$subject=filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
// $tarmez=filter_var($_POST['tarmez'], FILTER_SANITIZE_STRING);
$subject_en=filter_var($_POST['subject_en'], FILTER_SANITIZE_STRING);

$id=filter_var($_POST['id'], FILTER_VALIDATE_INT);
$company_sender_id=filter_var($_SESSION['company_id'] , FILTER_VALIDATE_INT);
$user_id=filter_var($_SESSION['user_id'], FILTER_VALIDATE_INT);


// (`id`, `incoming_number`, `tarmez`, `transaction_type_id`, `importance_id`, `confidentiality_id`, `subject`, `company_id`, `user_id`, `incoming_date`)
 


 

	   $sql->update('incoming',[
	   	 
	   	"transaction_type_id"=>"$transaction_type",
	   	"importance_id"=>"$importance",
	   	"confidentiality_id"=>"$confidentiality",
	   	"subject"=>"$subject",
	   	"subject_en"=>"$subject_en",
	 
	   	"company_sender_id"=>"$company_sender_id",
	   	"dialect_id"=>"$dialect",
	   	"user_id"=>"$user_id",
	   	"incoming_date"=>"$incoming_date"],"where id=$id");
	  
  // $incoming_id=$sql->conn->insert_id;
  session_start();
  $user_id =$_SESSION['user_id'];
  $name_user =$_SESSION['name'];
  $name_user_en =$_SESSION['name_en'];
  $permissions_user =$_SESSION['permissions'];
  $permissions_user_en =$_SESSION['permissions_en'];
  $date_user =date("Y-m-d h:i:s");
  
  $sql->insert('notifications',["user_id"=>"$user_id","page"=>"تعديل وارد","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بتعديل وارد ","page_en"=>"Edit incoming","des_en"=>"$name_user_en ($permissions_user_en) Edited an incoming. ","status"=>0,"date"=>"$date_user"]);
 
 

 // print_r($array);
//upload.php
	
$folder_name = 'file/';
 
if(!empty($_FILES['file']['name'][0]))
{
	$last_file=filter_var($_POST['last_file'], FILTER_SANITIZE_STRING);
 
	$last=explode(",",$last_file);
 $temp_file1 = $_FILES['file']['tmp_name'];
 $name1 = $_FILES['file']['name'];
 $size1 = $_FILES['file']['size'];

for ($i=0; $i <count($last) ; $i++) { 
			unlink("file/$last[$i]");
	}



  $sql->delete("file","where incoming_id =$id");



for ($i=0; $i <count($name1) ; $i++) { 

$sql->insert_file('file',["incoming_id"=>"$id"],[$name1[$i]],[$size1[$i]],[$temp_file1[$i]]);
 
}

 }
 

if (!empty($sql->error)) {
$aa= '&'. implode("&", $sql->error);
 header("location:../../../dashbord.php?edit_incoming=show&id=$id$aa");
}else{
	header("location:../../../dashbord.php?edit_incoming=show&id=$id&add=su");
}
}else{
	header("location:../../../dashbord.php?edit_incoming=show&error=su");

  }


//////////////////////////////
 