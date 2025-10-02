<?php



include"../../sql.php";

$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$name_en=filter_var($_POST['name_en'], FILTER_SANITIZE_STRING);
 
 

 $id=filter_var($_POST['id'], FILTER_VALIDATE_INT);
 
 

 
 $sql->update('importance',["name"=>"$name","name_en"=>"$name_en"],"where id=$id");
 session_start();
 $user_id =$_SESSION['user_id'];
 $name_user =$_SESSION['name'];
 $name_user_en =$_SESSION['name_en'];
 $permissions_user =$_SESSION['permissions'];
 $permissions_user_en =$_SESSION['permissions_en'];
 $date_user =date("Y-m-d h:i:s");
 
 $sql->insert('notifications',["user_id"=>"$user_id","page"=>"تعديل الأهمية","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بتعديل الأهمية ","page_en"=>"Edit importance","des_en"=>"$name_user_en   edited a importance. ","status"=>0,"date"=>"$date_user"]);

  
 
if (!empty($sql->error)) {
$aa= '&'. implode("&", $sql->error);
 header("location:../../../dashbord.php?importance=show$aa");
}else{
	header("location:../../../dashbord.php?importance=show&&add=su");
}





 



