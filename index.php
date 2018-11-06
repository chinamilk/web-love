<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>表白页面演示</title>
    <link rel="stylesheet" href="assets/css/loveStyle.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <script src="assets/js/jquery.min.js"></script>

    <script type="text/javascript">
        /* 鼠标特效 */
        var a_idx = 0;
        jQuery(document).ready(function($) {
            $("body").click(function(e) {
                var a = new Array("😃","😚","😍","😘","😎","❤", "亲爱的","宝贝~","爱你哦","❤");
                var $i = $("<span/>").text(a[a_idx]);
                a_idx = (a_idx + 1) % a.length;
                var x = e.pageX,
                    y = e.pageY;
                $i.css({
                    "z-index":999999999999999999999999999999999999999999999999999999999999999999999,
                    "top": y - 20,
                    "left": x,
                    "position": "absolute",
                    "font-weight": "bold",
                    "color": "#8e43e7"
                });
                $("body").append($i);
                $i.animate({
                        "top": y - 180,
                        "opacity": 0
                    },
                    1500,
                    function() {
                        $i.remove();
                    });
            });
        });
    </script>
</head>

<body class="is-preload">
<?php

    $p= '小姐姐我关注你很久了~';
    $h1= '做我女朋友好吗~';
    $ok='那你就是我家小猪猪了~';
    $no1='房子写你名';
    $no2='保大';
    $no3='我妈会游泳';
    $no4='饭我做、衣服我洗、家务我全包';
?>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main">
        <header>
            <!--头像，大小122x122-->
            <span class="avatar"><img src="assets/img/XG003.png" alt="" /></span>
            <p>这是一个演示界面，点击下方按钮，可以创建自己专属的小网页哦</p>
            <input type="button" value="创建专属网址" onclick="goUrl()">
            <div class="main" >
                <div class="left">
                    <p>
                        <?php echo $p; ?>
                    </p>
                    <h1>
                        <?php echo $h1; ?>
                    </h1>
                </div>
                <img class="pic" src="assets/img/1.jpg">
            </div>
            <div class="button-box">
                <button id="ok">好</button>
                <button id="no">不好</button>
            </div>
        </header>


    </section>

    <!-- Footer -->
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; 2018-2018<a href="https://blog.xgblack.top/">臾离博客</a> </li>
            <li><a href="http://www.miitbeian.gov.cn">苏ICP备18045687号-1 </a></li>
        </ul>
    </footer>


</div>

<!-- Scripts -->
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');

        var myarr= new Array();
        myarr[0]=<?php echo '"'.$no1.'"'; ?>;
        myarr[1]=<?php echo '"'.$no2.'"'; ?>;
        myarr[2]=<?php echo '"'.$no3.'"'; ?>;
        myarr[3]=<?php echo '"'.$no4.'"'; ?>;

        const clickOk = document.querySelector('#ok');
        const clickNo = document.querySelector('#no');

        clickOk.onclick = function () {
            alert( <?php echo '"'.$ok.'"'; ?> );
        }

        clickNo.onclick = function () {
            alert(getmsg(myarr));
        }

        var l = myarr.length;
        var i = 0;

        function getmsg(arr) {
            if (i > l - 1) { i = 0 }
            return arr[i++]
        }
        function goUrl() {
            window.open("https://love.xgblack.top/admin.php");   //在当前窗口中打开网址
        }
    }
</script>

</html>/