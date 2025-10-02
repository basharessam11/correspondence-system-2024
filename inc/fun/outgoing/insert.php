<?php
session_start();
// print_r($_FILES['file'] );
  // print_r($_POST);

include"../../sql.php";


if (!empty($_POST['transaction_type']) or !empty($_POST['importance']) or !empty($_POST['confidentiality'])or !empty($_POST['dialect'])   ) {
	

	// $outgoing_number=filter_var($_POST['outgoing_number'], FILTER_VALIDATE_INT);
$transaction_type=filter_var($_POST['transaction_type'], FILTER_VALIDATE_INT);
$importance=filter_var($_POST['importance'], FILTER_VALIDATE_INT);
$confidentiality=filter_var($_POST['confidentiality'], FILTER_VALIDATE_INT);
$dialect=filter_var($_POST['dialect'], FILTER_VALIDATE_INT);

$outgoing_date= filter_var($_POST['outgoing_date'], FILTER_SANITIZE_STRING);
$subject= filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
$subject_en= filter_var($_POST['subject_en'], FILTER_SANITIZE_STRING) ;

$letter= $_POST['letter'];

$tarmez=date("Y")."/";



$company_sender_id=filter_var($_SESSION['company_id'] , FILTER_VALIDATE_INT);
$user_id=filter_var($_SESSION['user_id'], FILTER_VALIDATE_INT);


 $sql->selectall("outgoing where tarmez ='$tarmez'");
 $outgoing=$sql->res->num_rows;

if ($outgoing>=1) {
	 $sql->select1("outgoing","where tarmez ='$tarmez' ORDER BY id DESC LIMIT 1");
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


// (`id`, `outgoing_number`, `tarmez`, `transaction_type_id`, `importance_id`, `confidentiality_id`, `subject`, `company_id`, `user_id`, `outgoing_date`)
 


 

	   $sql->insert('outgoing',[
	   	 
	   	"transaction_type_id"=>"$transaction_type",
	   	"importance_id"=>"$importance",
	   	"confidentiality_id"=>"$confidentiality",
	   	"subject"=>"$subject",
	   	"subject_en"=>"$subject_en",
	   	"tarmez"=>"$tarmez",
	   	"num_id"=>"$num_id",
	   	"dialect_id"=>"$dialect",
	   	"user_id"=>"$user_id",
	   	"letter"=>"$letter",
	   	"company_sender_id"=>"$company_sender_id",
	   	"outgoing_date"=>"$outgoing_date"]);
		   $outgoing_id=$sql->conn->insert_id;


		   session_start();
		   $user_id =$_SESSION['user_id'];
		   $name_user =$_SESSION['name'];
		   $name_user_en =$_SESSION['name_en'];
		   $permissions_user =$_SESSION['permissions'];
		   $permissions_user_en =$_SESSION['permissions_en'];
		   $date_user =date("Y-m-d h:i:s");
		   
		   $sql->insert('notifications',["user_id"=>"$user_id","page"=>"إضافة صادر","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بإضافة صادر ","page_en"=>"Add outgoing","des_en"=>"$name_user_en ($permissions_user_en) added an outgoing. ","status"=>0,"date"=>"$date_user"]);
		  
 
	
 

 $temp_file1 = $_FILES['file']['tmp_name'];
 $name1 = $_FILES['file']['name'];
 $size1 = $_FILES['file']['size'];


 


for ($i=0; $i <count($name1) ; $i++) { 

$sql->insert_file('file',["outgoing_id"=>"$outgoing_id"],[$name1[$i]],[$size1[$i]],[$temp_file1[$i]]);
 $file_id=$sql->conn->insert_id;

 
  
  


 
}
}else{
 


	   $sql->insert('outgoing',[
	   	 
	   	"transaction_type_id"=>"$transaction_type",
	   	"importance_id"=>"$importance",
	   	"confidentiality_id"=>"$confidentiality",
	   	"subject"=>"$subject",
	   	"subject_en"=>"$subject_en",
	   	"num_id"=>"$num_id",
	   	"tarmez"=>"$tarmez",
	   	"dialect_id"=>"$dialect",
	   	"user_id"=>"$user_id",
	   	"letter"=>"$letter",
	   	"company_sender_id"=>"$company_sender_id",
	   	"outgoing_date"=>"$outgoing_date"]);
		   $outgoing_id=$sql->conn->insert_id;

		   
		   session_start();
		   $user_id =$_SESSION['user_id'];
		   $name_user =$_SESSION['name'];
		   $name_user_en =$_SESSION['name_en'];
		   $permissions_user =$_SESSION['permissions'];
		   $permissions_user_en =$_SESSION['permissions_en'];
		   $date_user =date("Y-m-d h:i:s");
		   
		   $sql->insert('notifications',["user_id"=>"$user_id","page"=>"إضافة صادر","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بإضافة صادر ","page_en"=>"Add outgoing","des_en"=>"$name_user_en ($permissions_user_en) added an outgoing. ","status"=>0,"date"=>"$date_user"]);
		  
  
	

}

if (!empty($sql->error)) {
$aa= '&'. implode("&", $sql->error);
 header("location:../../../dashbord.php?add_outgoing=show$aa");
}else{
	header("location:../../../dashbord.php?edit_outgoing=show&id=$outgoing_id&add=su");
}
}else{
	header("location:../../../dashbord.php?add_outgoing=show&error=su");

  }



