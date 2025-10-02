<?php
include"../../sql.php";
  $id=filter_var($_POST['id'], FILTER_SANITIZE_STRING);
 

if (empty($id)) {
header("location:../../../dashbord.php?user=show&delete2=no");
}else{
$a=explode(",", $id);

$b= implode(" or id = ", $a);


 
 $array=[];

$sql->select1("user","where id =$b");
while ($row=$sql->res1->fetch_assoc()) {
  $photo=$row['file'];
  $id=$row['id'];
  $name=$row['name'];
  $name_en=$row['name_en'];

  if ($id != 6) {


 $sql->selectall("incoming where user_id = $id");
 $incoming=$sql->res->num_rows;

 $sql->selectall("outgoing where user_id = $id");
 $outgoing=$sql->res->num_rows;

 $sql->selectall("notifications where user_id = $id");
 $notifications=$sql->res->num_rows;

if ( $outgoing== 0 and $incoming == 0 and $notifications == 0  ) {

 
  
  $p=explode(",", $photo);
  foreach ($p as $key => $value) {
    unlink("file/$value");
  }

  session_start();
  $user_id =$_SESSION['user_id'];
  $name_user =$_SESSION['name'];
  $name_user_en =$_SESSION['name_en'];
  $permissions_user =$_SESSION['permissions'];
  $permissions_user_en =$_SESSION['permissions_en'];
  $date_user =date("Y-m-d h:i:s");
  

 $sql->delete("user","where id=$id");
  $sql->insert('notifications',["user_id"=>"$user_id","page"=>"حذف المستخدم","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بحذف المستخدم ($name)","page_en"=>"Delete User","des_en"=>"$name_user_en ($permissions_user_en) deleted the user ($name_en). ","status"=>0,"date"=>"$date_user"]);
  
 }else{
  array_push($array, $id);
 }  
    
  }else{
  array_push($array, $id);
 }  





  
}


if (empty($array)) {
 header("location:../../../dashbord.php?user=show&delete1=su");
}else{
 header("location:../../../dashbord.php?user=show&delete=no");

}
 

}
