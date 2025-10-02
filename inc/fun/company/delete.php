<?php
include"../../sql.php";
  $id=filter_var($_POST['id'], FILTER_SANITIZE_STRING);
 

if (empty($id)) {
header("location:../../../dashbord.php?company=show&delete2=no");
}else{
$a=explode(",", $id);

$b= implode(" or id = ", $a);
$b1= implode(" or company_id = ", $a);



$array=[];

$sql->select1("company","where id =$b");
while ($row=$sql->res1->fetch_assoc()) {
  $photo=$row['file'];
  


  $id=$row['id'];
  $sql->selectall("outgoing where company_sender_id = $id");
 
if ($sql->res->num_rows == 0) {

  $sql->select2("user ","where company_id = $id");
 
if ($sql->res2->num_rows == 0) {
  $p=explode(",", $photo);
  foreach ($p as $key => $value) {
    unlink("file/$value");
  }


  
  $sql->delete("company","where id=$id");


  session_start();
  $user_id =$_SESSION['user_id'];
  $name_user =$_SESSION['name'];
  $name_user_en =$_SESSION['name_en'];
  $permissions_user =$_SESSION['permissions'];
  $permissions_user_en =$_SESSION['permissions_en'];
  $date_user =date("Y-m-d h:i:s");
  
  $sql->insert('notifications',["user_id"=>"$user_id","page"=>"حذف شركة","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بحذف شركة ","page_en"=>"Delete company","des_en"=>"$name_user_en ($permissions_user_en) deleted a company. ","status"=>0,"date"=>"$date_user"]);
  


 }else{
  array_push($array, $id);
 }  

  
 } else{
  array_push($array, $id);
 } 



  
  
}
 



if (empty($array)) {
 header("location:../../../dashbord.php?company=show&delete1=su");
}else{
 header("location:../../../dashbord.php?company=show&delete=no");

}

}
