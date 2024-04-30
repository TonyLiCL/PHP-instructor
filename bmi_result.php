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