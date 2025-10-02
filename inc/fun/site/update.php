<?php

// print_r($_FILES['file'] );
  // print_r($_POST);

include"../../sql.php";

 
 
 $repair=filter_var($_POST['repair'], FILTER_VALIDATE_INT)??0;
 session_start();
 $user_id =$_SESSION['user_id'];
 $name_user =$_SESSION['name'];
 $name_user_en =$_SESSION['name_en'];
 $permissions_user =$_SESSION['permissions'];
 $permissions_user_en =$_SESSION['permissions_en'];
 $date_user =date("Y-m-d h:i:s");
 if($repair==1){
  $sql->insert('notifications',["user_id"=>"$user_id","page"=>" وضع الصيانة","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بتفعيل وضع الصيانة","page_en"=>"maintenance mode","des_en"=>"$name_user_en ($permissions_user_en) activated maintenance mode. ","status"=>0,"date"=>"$date_user"]);

 }else{
  $sql->insert('notifications',["user_id"=>"$user_id","page"=>" وضع الصيانة","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بإيقاف وضع الصيانة","page_en"=>"maintenance mode","des_en"=>"$name_user_en ($permissions_user_en) deactivated  maintenance mode. ","status"=>0,"date"=>"$date_user"]);

 }

 $sql->update('settings',["status"=> $repair],"where id=1");

 

if (!empty($sql->error)) {
$aa= '&'. implode("&", $sql->error);
 header("location:../../../dashbord.php?$aa");
}else{
	header("location:../../../dashbord.php?dash=list&add=su");
}
 



