<?php
include"../../sql.php";
  $id=filter_var($_POST['id'], FILTER_SANITIZE_STRING);
  $status=filter_var($_POST['status'], FILTER_VALIDATE_INT);
  $page=filter_var($_POST['page'], FILTER_SANITIZE_STRING);
 

if (empty($id)) {
header("location:../../../dashbord.php?$page=show&delete2=no");
}else{
$a=explode(",", $id);

$b= implode(" or id = ", $a);
 
 
 
 $sql->update('outgoing',["status"=>"$status"],"where id=$b");
 

session_start();
$user_id =$_SESSION['user_id'];
$name_user =$_SESSION['name'];
$name_user_en =$_SESSION['name_en'];
$permissions_user =$_SESSION['permissions'];
$permissions_user_en =$_SESSION['permissions_en'];
$date_user =date("Y-m-d h:i:s");
foreach ($a as $key => $value) {
 

$sql->insert('notifications',["user_id"=>"$user_id","page"=>"حذف صادر","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بحذف صادر ","page_en"=>"Delete Outgoing ","des_en"=>"$name_user_en   deleted an outgoing . ","status"=>0,"date"=>"$date_user"]);
}

if ($status==0) {
  header("location:../../../dashbord.php?histore_outging=show&recovery=su");
}else{
  header("location:../../../dashbord.php?$page=show&delete1=su");

}
 

}
