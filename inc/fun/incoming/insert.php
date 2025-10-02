<?php
session_start();
// print_r($_FILES['file'] );
  // print_r($_POST);

include"../../sql.php";


if (!empty($_POST['transaction_type']) or !empty($_POST['importance']) or !empty($_POST['confidentiality'])or !empty($_POST['dialect'])   ) {
	

	// $incoming_number=filter_var($_POST['incoming_number'], FILTER_VALIDATE_INT);
$transaction_type=filter_var($_POST['transaction_type'], FILTER_VALIDATE_INT);
$importance=filter_var($_POST['importance'], FILTER_VALIDATE_INT);
$confidentiality=filter_var($_POST['confidentiality'], FILTER_VALIDATE_INT);
$dialect=filter_var($_POST['dialect'], FILTER_VALIDATE_INT);

$incoming_date= filter_var($_POST['incoming_date'], FILTER_SANITIZE_STRING);
$subject=filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
$subject_en=filter_var($_POST['subject_en'], FILTER_SANITIZE_STRING);

$tarmez=date("Y")."/";



$company_sender_id=filter_var($_SESSION['company_id'] , FILTER_VALIDATE_INT);
$user_id=filter_var($_SESSION['user_id'], FILTER_VALIDATE_INT);


  $sql->selectall("incoming where tarmez ='$tarmez'");
 $incoming=$sql->res->num_rows;

if ($incoming>=1) {
	 $sql->select1("incoming","where tarmez ='$tarmez' ORDER BY id DESC LIMIT 1");
while ($row=$sql->res1->fetch_assoc()) {

$num_id=$row["num_id"]+1;


}
}else{
	$num_id=1;
}

 // print_r($array);
//upload.php
	
$folder_name = 'file/';

if(!empty($_FILES['file']['name'][0]))
{


// (`id`, `incoming_number`, `tarmez`, `transaction_type_id`, `importance_id`, `confidentiality_id`, `subject`, `company_id`, `user_id`, `incoming_date`)
 


 

	   $sql->insert('incoming',[
	   	 
	   	"transaction_type_id"=>"$transaction_type",
	   	"importance_id"=>"$importance",
	   	"confidentiality_id"=>"$confidentiality",
	   	"subject"=>"$subject",
	   	"subject_en"=>"$subject_en",
	   	"num_id"=>"$num_id",
	   	"tarmez"=>"$tarmez",
	   	"dialect_id"=>"$dialect",
	   	"user_id"=>"$user_id",
	   	"company_sender_id"=>"$company_sender_id",
	   	"incoming_date"=>"$incoming_date"]);
		   $incoming_id=$sql->conn->insert_id;

		   session_start();
		   $user_id =$_SESSION['user_id'];
		   $name_user =$_SESSION['name'];
		   $name_user_en =$_SESSION['name_en'];
		   $permissions_user =$_SESSION['permissions'];
		   $permissions_user_en =$_SESSION['permissions_en'];
		   $date_user =date("Y-m-d h:i:s");
		   
		   $sql->insert('notifications',["user_id"=>"$user_id","page"=>"إضافة وارد","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بإضافة وارد ","page_en"=>"Add incoming","des_en"=>"$name_user_en ($permissions_user_en) added an incoming. ","status"=>0,"date"=>"$date_user"]);
		  


	
 

 $temp_file1 = $_FILES['file']['tmp_name'];
 $name1 = $_FILES['file']['name'];
 $size1 = $_FILES['file']['size'];


 


for ($i=0; $i <count($name1) ; $i++) { 

$sql->insert_file('file',["incoming_id"=>"$incoming_id"],[$name1[$i]],[$size1[$i]],[$temp_file1[$i]]);
 $file_id=$sql->conn->insert_id;

 
  
  


 
}
}else{
 


	   $sql->insert('incoming',[
	   	 
	   	"transaction_type_id"=>"$transaction_type",
	   	"importance_id"=>"$importance",
	   	"confidentiality_id"=>"$confidentiality",
	   	"subject_en"=>"$subject_en",
	   	"subject"=>"$subject",
	   	"num_id"=>"$num_id",
	   	"tarmez"=>"$tarmez",
	   	"dialect_id"=>"$dialect",
	   	"user_id"=>"$user_id",
	   	"company_sender_id"=>"$company_sender_id",
	   	"incoming_date"=>"$incoming_date"]);
		   $incoming_id=$sql->conn->insert_id;


	  	   session_start();
		   $user_id =$_SESSION['user_id'];
		   $name_user =$_SESSION['name'];
		   $name_user_en =$_SESSION['name_en'];
		   $permissions_user =$_SESSION['permissions'];
		   $permissions_user_en =$_SESSION['permissions_en'];
		   $date_user =date("Y-m-d h:i:s");
		   
		   $sql->insert('notifications',["user_id"=>"$user_id","page"=>"إضافة وارد","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بإضافة وارد ","page_en"=>"Add incoming","des_en"=>"$name_user_en ($permissions_user_en) added an incoming. ","status"=>0,"date"=>"$date_user"]);
		  
  
	

}

if (!empty($sql->error)) {
$aa= '&'. implode("&", $sql->error);
 header("location:../../../dashbord.php?add_incoming=show$aa");
}else{
	header("location:../../../dashbord.php?edit_incoming=show&id=$incoming_id&add=su");
}
}else{
	header("location:../../../dashbord.php?add_incoming=show&error=su");

  }



