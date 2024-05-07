<?php
session_start();
setcookie('login',$acc,time()-60);
setcookie('error',$acc,time()-60);
header("location:login.php");
