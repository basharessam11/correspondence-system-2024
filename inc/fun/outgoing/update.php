<?php
session_start();




include"../../sql.php";






if (!empty($_POST['transaction_type']) and !empty($_POST['importance']) and !empty($_POST['confidentiality'])or !empty($_POST['dialect'])) {
	
// $outgoing_number=filter_var($_POST['outgoing_number'], FILTER_VALIDATE_INT);
$transaction_type=filter_var($_POST['transaction_type'], FILTER_VALIDATE_INT);
$importance=filter_var($_POST['importance'], FILTER_VALIDATE_INT);
$confidentiality=filter_var($_POST['confidentiality'], FILTER_VALIDATE_INT);
$dialect=filter_var($_POST['dialect'], FILTER_VALIDATE_INT);
 
$outgoing_date= filter_var($_POST['outgoing_date'], FILTER_SANITIZE_STRING);
$subject= $_POST['subject'] ;
$subject_en= $_POST['subject_en'] ;

// $tarmez=filter_var($_POST['tarmez'], FILTER_SANITIZE_STRING);

$id=filter_var($_POST['id'], FILTER_VALIDATE_INT);
$company_sender_id=filter_var($_SESSION['company_id'] , FILTER_VALIDATE_INT);
$user_id=filter_var($_SESSION['user_id'], FILTER_VALIDATE_INT);
$letter= $_POST['letter'];


// (`id`, `outgoing_number`, `tarmez`, `transaction_type_id`, `importance_id`, `confidentiality_id`, `subject`, `company_id`, `user_id`, `outgoing_date`)
 


 

	   $sql->update('outgoing',[
	   	 
	   	"transaction_type_id"=>"$transaction_type",
	   	"importance_id"=>"$importance",
	   	"confidentiality_id"=>"$confidentiality",
	   	"subject"=>"$subject",
	   	"subject_en"=>"$subject_en",
	   	 "letter"=>"$letter",
	   	"dialect_id"=>"$dialect",
	   	"user_id"=>"$user_id",
	   	"company_sender_id"=>"$company_sender_id",
	   	"outgoing_date"=>"$outgoing_date"],"where id=$id");

		   session_start();
		   $user_id =$_SESSION['user_id'];
		   $name_user =$_SESSION['name'];
		   $name_user_en =$_SESSION['name_en'];
		   $permissions_user =$_SESSION['permissions'];
		   $permissions_user_en =$_SESSION['permissions_en'];
		   $date_user =date("Y-m-d h:i:s");
		   
		   $sql->insert('notifications',["user_id"=>"$user_id","page"=>"تعديل صادر","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بتعديل صادر ","page_en"=>"Edit outgoing","des_en"=>"$name_user_en ($permissions_user_en) Edited an outgoing. ","status"=>0,"date"=>"$date_user"]);
		  
	  
  // $outgoing_id=$sql->conn->insert_id;

 

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



  $sql->delete("file","where outgoing_id =$id");



for ($i=0; $i <count($name1) ; $i++) { 

$sql->insert_file('file',["outgoing_id"=>"$id"],[$name1[$i]],[$size1[$i]],[$temp_file1[$i]]);
 
}

 }
 

if (!empty($sql->error)) {
$aa= '&'. implode("&", $sql->error);
 header("location:../../../dashbord.php?edit_outgoing=show&id=$id$aa");
}else{
	header("location:../../../dashbord.php?edit_outgoing=show&id=$id&add=su");
}
}else{
	header("location:../../../dashbord.php?edit_outgoing=show&error=su");

  }


//////////////////////////////
 