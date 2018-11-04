<?php
require_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebLove</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<form action="db.php" method="post">
<div class="main">

    <label for="p">第一行小字</label>
    </br>

    <input type="text" value="小姐姐我注意你很久了" id="p"name="p">
    </br>
    <label for="h1">第二行大字</label>
    </br>
    <input type="text" value="做我女朋友好吗" id="h1" name="h1">
    </br>
    <label for="ok">点击ok显示的文字</label>
    </br>
    <input type="text" value="那你就是我的小猪猪了~" id="ok"name="ok">
    </br>
    <label for="no">点击no显示的文字</label>
    </br>
    <div id="input">
        <input type="text" value="饭我做" class="no"name="no1">
        </br>
        <input type="text" value="菜我烧" class="no"name="no2">
        </br>
        <input type="text" value="衣服我洗" class="no"name="no3">
        </br>
        <input type="text" value="家务我全包" class="no"name="no4">
        </br>
    </div>
<!--    <button id="add">增加一行</button>-->
<!--    </br>-->
    <input id="button" type="submit"value="确定">
<!--    <button id="but">确定</button>-->
<!--    <div id="link"></div>-->
</div>
</form>
<footer>
    <b>©</b>
    <b>
        <a href="http://www.xgblack.top/">小光</a> 2018-2018</b>
    <br>
    <a href="http://www.miitbeian.gov.cn">苏ICP备18045687号-1 </a>
    <!-- 遵纪守法好公民 -->
</footer>


</body>

</html>
