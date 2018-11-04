<?php
/**
 * Created by PhpStorm.
 * User: xg
 * Date: 2018/11/4
 * Time: 14:37
 */
require_once 'functions.php';

$conn = connectDb();

//测试数据库查询
$result = mysqli_query($conn,"SELECT*FROM users");
$dataCount = mysqli_num_rows($result);
echo '数据条数为：'.$dataCount;
echo'<br>';

for ($i=0;$i<$dataCount;$i++){
    $result_arr = mysqli_fetch_assoc($result);

    print_r($result_arr);
    echo '<br>';
}
mysqli_close($conn);
