<?php
/**
 * Created by PhpStorm.
 * User: xg
 * Date: 2018/11/4
 * Time: 14:28
 */
require_once 'config.php';

function connectDb(){
    $conn = mysqli_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW);
    if (!$conn){
        die('不能连接到数据库，请检查数据库配置');
    }
    mysqli_select_db($conn,'weblove');
    return $conn;
}


/*
 * 生成32位唯一字符串
 */
function md5_str(){
    $uniqid = md5(uniqid(microtime(true),true));
    return $uniqid;
}
