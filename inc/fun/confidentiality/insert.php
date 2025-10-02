<?php



include"../../sql.php";

$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$name_en=filter_var($_POST['name_en'], FILTER_SANITIZE_STRING);
 
 
 

 
 $sql->insert('confidentiality',["name"=>"$name","name_en"=>"$name_en"]);
 session_start();
 $user_id =$_SESSION['user_id'];
 $name_user =$_SESSION['name'];
 $name_user_en =$_SESSION['name_en'];
 $permissions_user =$_SESSION['permissions'];
 $permissions_user_en =$_SESSION['permissions_en'];
 $date_user =date("Y-m-d h:i:s");
 
 $sql->insert('notifications',["user_id"=>"$user_id","page"=>"إضافة السرية","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بإضافة السرية ","page_en"=>"Add confidentiality","des_en"=>"$name_user_en ($permissions_user_en) added a confidentiality. ","status"=>0,"date"=>"$date_user"]);

  
 
if (!empty($sql->error)) {
$aa= '&'. implode("&", $sql->error);
 header("location:../../../dashbord.php?confidentiality=show$aa");
}else{
	header("location:../../../dashbord.php?confidentiality=show&&add=su");
}

