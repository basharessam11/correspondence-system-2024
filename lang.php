<?php
$lang=$_GET['lang'];
$url=$_GET['url'];
 

if ($lang=="en") {
 setcookie("lang","en",time()+(60*60*24*30),"/");
 if (isset($_GET['id'])) {
 	$u= $url.'&id='.$_GET['id'];
    header("location:$u");
 }else{
  header("location:$url");
 }
 
}

if ($lang=="ar") {
 setcookie("lang","ar",time()+60*60*24*30,"/");


 
 if (isset($_GET['id'])) {
		$u= $url.'&id='.$_GET['id'];
    header("location:$u");
	}else{
  header("location:$url");
	}
}



?>