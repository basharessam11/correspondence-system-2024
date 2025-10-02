<?php
session_start();
$n=$_GET['n'];
if($n==1){
      echo time()-$_SESSION['LAST_ACTIVITY'];
     


}else{
    $_SESSION['LAST_ACTIVITY']=time();
    // echo time()-$_SESSION['LAST_ACTIVITY'];
    echo 1;
}
