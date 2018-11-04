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

//    $id = $result_arr['id'];
//    $name = $result_arr['name'];
//    $age = $result_arr['age'];
//
//    echo "<tr><td>$id</td><td>$name</td><td>$age</td><td><a href='edituser.php?id=$id'>修改</a> <a href='deleteuser.php?id=$id'>删除</a></td></tr>";

    print_r($result_arr);
    echo '<br>';
}
mysqli_close($conn);
