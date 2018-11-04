<?php
/**
 * Created by PhpStorm.
 * User: xg
 * Date: 2018/11/4
 * Time: 16:10
 */
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我喜欢你哦</title>
    <link rel="stylesheet" href="css/loveStyle.css">
</head>

<body>
<?php
if(!$_GET){
    echo '产生的随机码获取错误,所显示数据为默认！';
    $p= '小姐姐我关注你很久了~';
    $h1= '做我女朋友好吗~';
    $ok='那你就是我家小猪猪了~';
    $no1='房子写你名';
    $no2='保大';
    $no3='我妈会游泳';
    $no4='饭我做、衣服我洗、家务我全包';
}else{
    $love=$_GET['love'];
    $conn=connectDb();
//    echo $love;
    $result=mysqli_query($conn,"SELECT*FROM users WHERE random='$love'");
    $result_arr=mysqli_fetch_assoc($result);
    $p= $result_arr['p'];
    $h1= $result_arr['h1'];
    $ok=$result_arr['ok'];
    $no1=$result_arr['no1'];
    $no2=$result_arr['no2'];
    $no3=$result_arr['no3'];
    $no4=$result_arr['no4'];
    mysqli_close($conn);
}
?>
<div class="main">
    <div class="left">
        <p>
            <?php echo $p; ?>
        </p>
        <h1>
            <?php echo $h1; ?>
        </h1>
    </div>
    <img class="pic" src="img/1.jpg">
</div>
<div class="button-box">
    <button id="ok">好</button>
    <button id="no">不好</button>
</div>
<footer>
    <b>©</b>
    <b>
        <a href="http://www.xgblack.top/">小光</a> 2018-2018</b>
    <br>
    <a href="http://www.miitbeian.gov.cn">苏ICP备18045687号-1 </a>
    <!-- 遵纪守法好公民 -->
</footer>
</body>

<script>
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

</script>

</html>
