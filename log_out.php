<?php
session_start();
  include "inc/sql.php";

$user_id =$_SESSION['user_id'];
$name =$_SESSION['name'];
$name_en =$_SESSION['name_en'];
$permissions =$_SESSION['permissions'];
$permissions_en =$_SESSION['permissions_en'];
$date =date("Y-m-d h:i:s");

$sql->insert('notifications',["user_id"=>"$user_id","page"=>"ﺗﺴﺠﻴﻞ الخروج","des"=>"  ﻗﺎﻡ  $name ($permissions) ﺑﺘﺴﺠﻴﻞ الخروج","page_en"=>"logout","des_en"=>"$name_en ($permissions_en) has logged out.","status"=>0,"date"=>"$date"]);

session_unset();
session_destroy();
header("location:index.php");

?>