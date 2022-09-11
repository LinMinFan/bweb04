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
</head>

<body>
	<div id="main">
    	<div id="top">
        	<a href="./index.php">
            	<img src="./icon/0416.jpg">
            </a>
                <div style="padding:10px;">
                <a href="?">回首頁</a> |
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
                  <a href="./back.php">返回管理</a>
                  <?php
                }else{
                  ?>
                  <a href="?do=admin">管理登入</a>
                  <?php
                }
                ?>
           </div>
           <marquee behavior="" direction="">年終特賣會開跑了 &nbsp; 情人節特惠活動</marquee>        </div>
        <div id="left" class="ct">
        	<div style="height:480px;" class="oy_s">
                <a href="./index.php">全部商品 (<?=$prds->math('count','id',$sh);?>)</a>
                <?php
                foreach ($type->all(['parent'=>0]) as $key => $tp_b) {
                  ?>
                  <div class="mainmu">
                    <a href="?b=<?=$tp_b['id'];?>"><?=$tp_b['name'];?> (<?=$prds->math('count','id',$sh," && `big`={$tp_b['id']}");?>)</a>
                    <?php
                    foreach ($type->all(['parent'=>$tp_b['id']]) as $key => $tp_m){
                      ?>
                      <div class="mw dpn">
                      <a style="background: #0f0;" href="?b=<?=$tp_b['id'];?>&m=<?=$tp_m['id'];?>"><?=$tp_m['name'];?> (<?=$prds->math('count','id',$sh," && `mid`={$tp_m['id']}");?>)</a>
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
                	00005                </div>
            </span>
                    </div>
        <div id="right">
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