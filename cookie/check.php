<?php
$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc=='admin'  && $pw=='1234' ){
//如果正確
    header('location:result.php?acc='.$acc);
}else{
//如果有一不正確

    header("location:error.php?acc=$acc");
}


?>