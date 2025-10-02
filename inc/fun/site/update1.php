<?php

// print_r($_FILES['file'] );
  // print_r($_POST);

include"../../sql.php";

if (!empty($_POST['name'])  or !empty($_FILES['file']['name'][0])) {
	


 

 // print_r($array);
//upload.php
	
$folder_name = 'file/';

if(!empty($_FILES))
{
 

 
$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$file_last=filter_var($_POST['file_last'], FILTER_SANITIZE_STRING);
 
 
 
 $temp_file1 = $_FILES['file']['tmp_name'];
 $name1 = $_FILES['file']['name'];
 $size1 = $_FILES['file']['size'];


 


 

$sql->update_file("settings",1,["name"=>"$name" ],$file_last,$name1,$size1,$temp_file1);

 
 }
else{
 header("location:../../../dashbord.php?file=no");



}

if (!empty($sql->error)) {
$aa= '&'. implode("&", $sql->error);
 header("location:../../../dashbord.php?$aa");
}else{
	header("location:../../../dashbord.php?add=su");
}
}else{
	header("location:../../../dashbord.php?error=su");

  }



