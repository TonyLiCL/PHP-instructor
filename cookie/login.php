<?php date_default_timezone_set("Asia/Taipei");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入畫面-Cookie</title>
</head>
<body>
    <h1>請登入</h1>
    <?php
    if(isset($_COOKIE['login']) && $_COOKIE['login']=='admin'){
        
        echo "已登入";
        echo "<br>";
        echo "<a href='logout.php'>登出</a>";

    }else{
        if(isset($_COOKIE['error'])){
            echo "<span style='color:red'>{$_COOKIE['error']}</span>";
        }
    ?>
    <form action="check.php" method="post">
        <div>
            <label for="acc">帳號:</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="pw">密碼:</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div>
            <input type="submit" value="登入">
            <input type="reset" value="重置">
        </div>
    </form>
    <?php
     }
    ?>
</body>
</html>