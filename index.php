<?php
$do=$_GET['do']??"main";
include "./base.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>┌精品電子商務網站」</title>
<link href="./css/css.css" rel="stylesheet" type="text/css">
<link href="./css/style.css" rel="stylesheet" type="text/css">
<script src="./js/js.js"></script>
<script src="./js/jquery-1.9.1.min.js"></script>
<script src="./js/main.js"></script>
<style>

</style>
</head>

<body>
<iframe name="back" style="display:none;"></iframe>
	<div id="main">
    	<div id="top">
        	<a href="./index.php">
            	<img src="./icon/0416.jpg">
            </a>
                        <span class="fs12" style="position:relative;top:-100px">
                <a href="./index.php">回首頁</a> |
                <a href="?do=news">最新消息</a> |
                <a href="?do=look">購物流程</a> |
                <a href="?do=buycart">購物車</a> |
                <?php
                if (isset($_SESSION['mem'])) {
                ?>
                <a href="./api/logout.php?do=mem">會員登出</a> |
                <?php
                }else{
                ?>
                <a href="?do=mem">會員登入</a> |
                <?php   
                }
                ?>
                <?php
                if (isset($_SESSION['admin'])) {
                ?>
                <a href="./back.php">管理</a> |
                <?php
                }else{
                ?>
                <a href="?do=admin">管理登入</a> |
                <?php   
                }
                ?>
           </span>
                <marquee>年終特賣會開跑了 &nbsp; 情人節特惠活動</marquee></div>
        <div id="left" class="ct">
        	<div class="oy_s" style="height:480px;">
                <a href="?">全部商品(<?=$prds->math('count','id',$sh);?>)</a>
                <?php
                foreach ($type->all(['parent'=>0]) as $key => $tpb) {
                ?>
                <div class="mainmu">
                        <a href="?b=<?=$tpb['id'];?>"><?=$tpb['name'];?></a>
                        <?php
                        foreach ($type->all(['parent'=>$tpb['id']]) as $key => $tpm) {
                        ?>
                        <div class="mw dpn">
                        <a style="background: #0f0;" href="?b=<?=$tpb['id'];?>&m=<?=$tpm['id'];?>"><?=$tpm['name'];?></a>
                        </div>
                        <?php
                        }
                        ?>
                </div>
                <?php
                }
                ?>
        	</div>
                        <span>
            	<div>進站總人數</div>
                <div style="color:#f00; font-size:28px;">
                00005
                </div>
            </span>
                    </div>
        <div id="right" class="pos_r">
                <?php
                $file="./front/$do.php";
                if (file_exists($file)) {
                        include $file;
                }else{
                        include "./front/main.php";
                }
                ?>
        </div>
        <div id="bottom" style="line-height:70px;background:url(icon/bot.png); color:#FFF;" class="ct">
        <?=$bot->find(1)['bot'];?>        </div>
    </div>

</body></html>