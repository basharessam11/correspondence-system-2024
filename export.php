<?php

    include_once('inc/sql.php');
     session_start();
 $user_id =$_SESSION['user_id']??6;
 $name_user =$_SESSION['name']??'نسخ تلقائي';
 $name_user_en =$_SESSION['name_en']??'Auto copy';
 $permissions_user =$_SESSION['permissions']??"مدير";
 $permissions_user_en =$_SESSION['permissions_en']??"admin";
 $date_user =date("Y-m-d h:i:s");
 
 $sql->insert('notifications',["user_id"=>"$user_id","page"=>"نسخ إحتياطي","des"=>"  ﻗﺎﻡ  $name_user ($permissions_user) بإجراء نسخة احتياطية.","page_en"=>"backup","des_en"=>"$name_user_en ($permissions_user_en) performed a backup. ","status"=>0,"date"=>"$date_user"]);

 
    include_once('Mysqldump.php');
    $dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=sader', 'root', '');
    // $dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=icankuwa_sader', 'icankuwa_sader', 'lp]udmk%#4;z');
    
    $file="sader". date('y-m-d') .".sql";
    $dump->start("backup-database/$file");
 
    header('Content-Disposition: attachment; filename=' . basename($file));
 
    readfile("backup-database/$file");



    header("location:dashbord.php?backup=show&add=su");