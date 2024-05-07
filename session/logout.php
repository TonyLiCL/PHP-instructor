<?php
session_start();
unset($_SESSION['login'],$_SESSION['error']);

header("location:login.php");
