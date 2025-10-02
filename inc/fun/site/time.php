<?php


include"../../sql.php";
if (isset($_POST['time']) and !empty($_POST['time'])) {

	$time=filter_var($_POST['time'], FILTER_VALIDATE_INT)??0;

	$sql->update('settings',["time"=> $time],"where id=1");

	 session_start();
 $user_id =$_SESSION['user_id'];
 $name_user =$_SESSION['name'];
 $name_user_en =$_SESSION['name_en'];
 $permissions_user =$_SESSION['permissions'];
 $permissions_user_en =$_SESSION['permissions_en'];
 $date_user =date("Y-m-d h:i:s");
 
 $sql->insert('notifications',["user_id"=>"$user_id","page"=>"وقت  إضافي","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بتعديل  وقت إضافي","page_en"=>"Overtime","des_en"=>"$name_user_en ($permissions_user_en) modified the overtime. ","status"=>0,"date"=>"$date_user"]);
}

if (!empty($sql->error)) {
$aa= '&'. implode("&", $sql->error);
 header("location:../../../dashbord.php?$aa");
}else{
	header("location:../../../dashbord.php?dash=list&add=su");
}