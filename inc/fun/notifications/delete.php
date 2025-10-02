<?php
include"../../sql.php";
  $id=filter_var($_POST['id'], FILTER_SANITIZE_STRING);
 

if (empty($id)) {
header("location:../../../dashbord.php?notifications=show&delete2=no");
}else{
$a=explode(",", $id);
$b= implode(" or id = ", $a);

  $sql->delete("notifications","where id=$b");
 
header("location:../../../dashbord.php?notifications=show&delete1=su");

}
