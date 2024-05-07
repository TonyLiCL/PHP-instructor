<?php
date_default_timezone_set("Asia/Taipei");
$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc=='admin'  && $pw=='1234' ){
//如果正確
    setcookie('login',$acc,time()+60);
    header('location:result.php');
}else{
//如果有一不正確
    setcookie('error','帳號或密碼錯誤',time()+60);
    header("location:login.php");
}


?>