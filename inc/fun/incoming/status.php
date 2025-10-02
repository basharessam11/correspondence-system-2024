<?php
include"../../sql.php";
  $id=filter_var($_POST['id'], FILTER_SANITIZE_STRING);
  $status=filter_var($_POST['status'], FILTER_VALIDATE_INT);
 

if (empty($id)) {
header("location:../../../dashbord.php?histore_incoming=show&delete2=no");
}else{
$a=explode(",", $id);

$b= implode(" or id = ", $a);
 
 
 
 $sql->update('incoming',["status"=>"$status"],"where id=$b");
 

session_start();
$user_id =$_SESSION['user_id'];
$name_user =$_SESSION['name'];
$name_user_en =$_SESSION['name_en'];
$permissions_user =$_SESSION['permissions'];
$permissions_user_en =$_SESSION['permissions_en'];
$date_user =date("Y-m-d h:i:s");
foreach ($a as $key => $value) {
 

$sql->insert('notifications',["user_id"=>"$user_id","page"=>"حذف  وارد","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بحذف  وارد ","page_en"=>"Delete incoming ","des_en"=>"$name_user_en   deleted an incoming . ","status"=>0,"date"=>"$date_user"]);
}


if ($status==0) {
  header("location:../../../dashbord.php?histore_incoming=show&recovery=su");
}else{
  header("location:../../../dashbord.php?incoming=show&delete1=su");

}



}
