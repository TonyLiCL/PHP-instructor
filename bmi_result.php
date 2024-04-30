<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI結果</title>
</head>
<body>
<h1>BMI計算結果</h1>
<?php
/* echo "POST =>";
print_r($_POST);
echo "<br>";
echo "GET =>";
print_r($_GET);

 */

 if(!empty($_POST)){
     //確認表單傳送正常
     if(empty($_POST['height'])){
     
         echo "請輸入正確的身高";
     }else{
         echo $_POST['height'];
         $height=$_POST['height'];
     }
     
     if(empty($_POST['weight'])){
         
         echo "請輸入正確的體重";
     }else{
         echo $_POST['weight'];
         $weight=$_POST['weight'];
     }
    }else{
     //確認表單傳送正常
     if(empty($_GET['height'])){
     
         echo "請輸入正確的身高";
     }else{
         echo $_GET['height'];
         $height=$_GET['height'];
     }
     
     if(empty($_GET['weight'])){
         
         echo "請輸入正確的體重";
     }else{
         echo $_GET['weight'];
         $weight=$_GET['weight'];
     }

 }
echo "<hr>";
//進行BMI計算
if(!empty($height) && !empty($weight)){

    $bmi=$weight/(($height/100)*($height/100));
echo "你的BMI為".round($bmi,2);

}else{
    echo "請輸入正確的身高與體重";
}



?>
</body>
</html>