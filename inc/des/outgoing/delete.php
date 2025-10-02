<?php
include"../../sql.php";
 $id=filter_var($_POST['id'], FILTER_VALIDATE_INT);
 $n=filter_var($_POST['n'], FILTER_VALIDATE_INT);


// print_r($_POST);
if ($n==1) {
	$table="outgoing";
}else{
	$table="incoming";

}
$sql->select("file","where id =$id");
while ($row=$sql->res->fetch_assoc()) {
  $photo=$row['file'];
  $p=explode(",", $photo);
  foreach ($p as $key => $value) {
    unlink("../../fun/$table/file/$value");

  }
  

  
}

  $sql->delete("file","where id=$id");
       session_start();
 $user_id =$_SESSION['user_id'];
 $name_user =$_SESSION['name'];
 $name_user_en =$_SESSION['name_en'];
 $permissions_user =$_SESSION['permissions'];
 $permissions_user_en =$_SESSION['permissions_en'];
 $date_user =date("Y-m-d h:i:s");
 
 $sql->insert('notifications',["user_id"=>"$user_id","page"=>"حذف مرفق ","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بحذف مرفق ","page_en"=>"deleted an attachment","des_en"=>"$name_user_en ($permissions_user_en) deleted an attachment. ","status"=>0,"date"=>"$date_user"]);
?>