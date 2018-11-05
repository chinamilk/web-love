<?php

require_once 'functions.php';
?>
<!DOCTYPE HTML>

<html>
<head>
    <title>网址生成</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<?php
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
$loveUrl=dirname($url).'/love.php?love='.$md5str;
?>


<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main">
        <header>
            <!--头像，大小122x122-->
            <span class="avatar"><img src="assets/img/XG003.png" alt="" /></span>
            <h1>您的随机码为：</h1>
            <p><?php echo $md5str; ?></p>
            <h1>您的网址为：</h1>
            <input id="urlinput" type="text" value=<?php echo '"'.$loveUrl.'"'; ?> >
            <br>
            <input type="button" value="复制网址" onclick="copyUrl()" />
            <input type="button" value="前往查看" onclick="goUrl()" />
        </header>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; 2018-2018<a href="https:blog.xgblack.top/">臾离博客</a> </li>
            <li><a href="http://www.miitbeian.gov.cn">苏ICP备18045687号-1 </a> </li>
        </ul>
    </footer>


</div>
<!-- Scripts -->
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
    function copyUrl() {
        var text =document.getElementById("urlinput");
        text.select();
        document.execCommand("copy");
        alert("网址复制成功，快发给那个ta吧~");
    }
    function goUrl() {
        window.open(<?php echo '"'.$loveUrl.'"'; ?>,"_blank");     //在另外新建窗口中打开窗口
    }
</script>

</body>
