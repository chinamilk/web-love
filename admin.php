<!DOCTYPE HTML>
<html>
<head>
    <title>专属表白网页生成</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">
    <!-- Main -->
    <section id="main">
        <header>
            <!--头像，大小122x122-->
            <span class="avatar"><img src="assets/img/XG003.png" alt="" /></span>

            <form action="db.php" method="post">
                <div class="main">
                    <p>提示：在文本框中输入写让对方看到的文字，点击“确定”就可以生成你专属的网站哦。</p>
                    <label for="p">第一行小字</label>
                    <input type="text" value="小姐姐我注意你很久了" id="p"name="p">
                    </br>
                    <label for="h1">第二行大字</label>
                    <input type="text" value="做我女朋友好吗" id="h1" name="h1">
                    </br>
                    <label for="ok">点击ok显示的文字</label>
                    <input type="text" value="那你就是我的小猪猪了~" id="ok"name="ok">
                    </br>
                    <label for="no">点击no显示的文字</label>
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

                    <input id="button" type="submit"value="确定">
                </div>
            </form>
        </header>


    </section>

    <!-- Footer -->
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; 2018-2018<a href="https:blog.xgblack.top/">臾离博客</a> </li>
            <li><a href="http://www.miitbeian.gov.cn">苏ICP备18045687号-1 </a> </li>
        </ul>


</div>

<!-- Scripts -->
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>

</body>

