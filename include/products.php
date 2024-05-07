<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的英雄學院</title>
    <style>
        body{
            width:1000px;
            margin:auto;
            padding:10px;
            height:100vh;
            position: relative;
        }
        header{
            height:150px;
            width: 100%;
            box-shadow: 0 0 10px #999;
            font-size:36px;
            font-weight: bolder;
            text-align: center;
            line-height: 150px;
        }
        nav{
            margin:5px auto;
        }
        nav a{
            display: inline-block;
            padding:5px 12px;
            text-align: center;
            font-size:18px;
            text-decoration: none;
        }
        nav a:hover{
            text-decoration: underline;
        }
        main{
            padding:20px;
            font-size:32px;

        }
        footer{
            height:35px;
            background-color: black;
            color:white;
            position:fixed;
            bottom:0;
            text-align: center;
            width:1000px;
        }
    </style>
</head>
<body>
<?php include_once "./layouts/header.php";?>
<?php include_once "./layouts/nav.php";?>
<marquee>這是一段跑馬燈</marquee>
<main>產品介紹</main>
<footer>頁腳</footer>
</body>
</html>