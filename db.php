
<?php
/**
 * Created by PhpStorm.
 * User: 小光
 * Date: 2018/11/4
 * Time: 17:21
 */
require_once 'functions.php';
//获取参数
$p = $_POST['p'];
$h1 = $_POST['h1'];
$ok = $_POST['ok'];
$no1 = $_POST['no1'];
$no2 = $_POST['no2'];
$no3 = $_POST['no3'];
$no4 = $_POST['no4'];
$md5str=md5_str();
$conn=connectDb();
mysqli_query($conn,"INSERT INTO users(random,p,h1,ok,no1,no2,no3,no4) VALUES ('$md5str','$p','$h1','$ok','$no1','$no2','$no3','$no4')");
$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
echo '生成的网页链接为：';
echo dirname($url).'/love.php?love='.$md5str;
