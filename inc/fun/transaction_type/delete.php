<?php
include"../../sql.php";
  $id=filter_var($_POST['id'], FILTER_SANITIZE_STRING);
 

if (empty($id)) {
header("location:../../../dashbord.php?importance=show&delete2=no");
}else{
$a=explode(",", $id);
$b= implode(" or id = ", $a);

$array=[];

$sql->select1("transaction_type","where id=$b");
while ($row=$sql->res1->fetch_assoc()) {

  $id=$row['id'];


  $sql->selectall("incoming where transaction_type_id = $id");
 
$incoming=$sql->res->num_rows;
$sql->selectall("outgoing where transaction_type_id = $id");
 
if ($sql->res->num_rows == 0 and $incoming == 0) {

  session_start();
 $user_id =$_SESSION['user_id'];
 $name_user =$_SESSION['name'];
 $name_user_en =$_SESSION['name_en'];
 $permissions_user =$_SESSION['permissions'];
 $permissions_user_en =$_SESSION['permissions_en'];
 $date_user =date("Y-m-d h:i:s");
 
 $sql->insert('notifications',["user_id"=>"$user_id","page"=>"حذف نوع معاملة","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بحذف نوع معاملة ","page_en"=>"Delete Transaction Type","des_en"=>"$name_user_en ($permissions_user_en) deleted a transaction type. ","status"=>0,"date"=>"$date_user"]);



$sql->delete("transaction_type","where id=$id");
  
 }else{
  array_push($array, $id);
 } 
    



  }

  
if (empty($array)) {
 header("location:../../../dashbord.php?transaction_type=show&delete1=su");
}else{
 header("location:../../../dashbord.php?transaction_type=show&delete=no");

}




  







}