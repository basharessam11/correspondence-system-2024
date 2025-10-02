<?php
include"../../sql.php";
  $id=filter_var($_POST['id'], FILTER_SANITIZE_STRING);
 

if (empty($id)) {
header("location:../../../dashbord.php?importance=show&delete2=no");
}else{
$a=explode(",", $id);
$b= implode(" or id = ", $a);

$array=[];

$sql->select1("confidentiality","where id=$b");
while ($row=$sql->res1->fetch_assoc()) {

  $id=$row['id'];


  $sql->selectall("incoming where confidentiality_id = $id");
 
$incoming=$sql->res->num_rows;
$sql->selectall("outgoing where confidentiality_id = $id");
 
if ($sql->res->num_rows == 0 and $incoming == 0) {

 
$sql->delete("confidentiality","where id=$id");
session_start();
$user_id =$_SESSION['user_id'];
$name_user =$_SESSION['name'];
$name_user_en =$_SESSION['name_en'];
$permissions_user =$_SESSION['permissions'];
$permissions_user_en =$_SESSION['permissions_en'];
$date_user =date("Y-m-d h:i:s");

$sql->insert('notifications',["user_id"=>"$user_id","page"=>"حذف السرية","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بحذف السرية ","page_en"=>"Delete confidentiality","des_en"=>"$name_user_en ($permissions_user_en) deleted a confidentiality. ","status"=>0,"date"=>"$date_user"]);

 }else{
  array_push($array, $id);
 } 
    



  }

  
if (empty($array)) {
 header("location:../../../dashbord.php?confidentiality=show&delete1=su");
}else{
 header("location:../../../dashbord.php?confidentiality=show&delete=no");

}




  







}