# 題組一解題步驟

## 共同項目

### 預備時間

* 鍵盤、滑鼠、螢幕設備檢查
* xmpp安裝
* vscode安裝
* 題組資料備份
* 建立資料夾
* 測試localhost
* 建立base檔
* 資料庫連線測試
* 建立css資料夾
* 建立js資料夾
* 建立api資料夾

### 解題順序

* 整理檔案
    * 修改css、js連結路徑
    * 建立api資料夾
    * 建立img資料夾
    * 建立icon資料夾
    * 建立upload資料夾
    * 建立front資料夾
    * 建立back資料夾
    * 建立index.php
    * 建立back.php
        
    
        
    * 建立sql資料表

        * admin (管理者)

        |名稱|類型|屬性|預設值|額外資訊|備註|
        |--|--|--|--|--|--|
        |id|int|UNSIGNED|--|AI|--|
        |acc|text|--|--|--|--|
        |pw|text|--|--|--|--|
        |pr|text|--|--|--|--|

        * bot (頁尾)

        |名稱|類型|屬性|預設值|額外資訊|備註|
        |--|--|--|--|--|--|
        |id|int|UNSIGNED|--|AI|--|
        |bot|text|--|--|--|--|

        * mem (會員)

        |名稱|類型|屬性|預設值|額外資訊|備註|
        |--|--|--|--|--|--|
        |id|int|UNSIGNED|--|AI|--|
        |acc|text|--|--|--|--|
        |pw|text|--|--|--|--|
        |name|text|--|--|--|--|
        |addr|text|--|--|--|--|
        |tel|text|--|--|--|--|
        |email|text|--|--|--|--|
        |regdate|text|--|--|--|--|

        * goods (商品)

        |名稱|類型|屬性|預設值|額外資訊|備註|
        |--|--|--|--|--|--|
        |id|int|UNSIGNED|--|AI|--|
        |no|text|--|--|--|--|
        |name|text|--|--|--|--|
        |price|int|--|--|--|--|
        |spec|text|--|--|--|--|
        |qt|int|--|--|--|--|
        |img|text|--|--|--|--|
        |intro|text|--|--|--|--|
        |big|int|--|--|--|--|
        |mid|int|--|--|--|--|
        |sh|int|--|--|--|--|

        * ord (訂單)

        |名稱|類型|屬性|預設值|額外資訊|備註|
        |--|--|--|--|--|--|
        |id|int|UNSIGNED|--|AI|--|
        |no|text|--|--|--|--|
        |acc|text|--|--|--|--|
        |name|text|--|--|--|--|
        |email|text|--|--|--|--|
        |addr|text|--|--|--|--|
        |tel|text|--|--|--|--|
        |goods|text|--|--|--|--|
        |total|text|--|--|--|--|
        |orddate|date|--|--|--|--|

        * type (分類)

        |名稱|類型|屬性|預設值|額外資訊|備註|
        |--|--|--|--|--|--|
        |id|int|UNSIGNED|--|AI|--|
        |name|text|--|--|--|--|
        |parent|int|--|--|--|--|
        

    * 建立各功能畫面index.php back.php

    * 跑馬燈標題兩則
        * 最新消息頁畫面 標題兩則

    * 購物流程頁插入0401.jpg

    * 建立會員登入頁面
        * 註冊功能 / 檢查帳號
        ```js
            function chk_acc(table,acc){
            $.post("./api/chk_acc.php",{table,acc},(res)=>{
            console.log(res);
            if (res==1 || acc=='admin') {
            alert("帳號已存在");
            }else{
            alert("帳號可使用");
            }
            })
            }
        ```
        ```php
            $chk_acc=${$_POST['table']}->math('count','id',['acc'=>$_POST['acc']]);
            echo ($chk_acc>0)?1:0;
        ```
        * 註冊帳號
        ```js
            function reg(name,acc,pw,tel,addr,email,regdate) {
            $.post("./api/chk_acc.php",{table:'mem',acc},(res)=>{
            if (res==1 || acc=='admin') {
            alert("帳號已存在");
            }else{
            $.post("./api/reg.php",{name,acc,pw,tel,addr,email,regdate},()=>{
                location.href='./index.php?do=login';
            })
            }
            })
            }
        ```
        ```php
            $mem->save($_POST);
        ```
        * 會員登入 管理登入
            * 登入驗證碼 以session方式處理
            ```php
                $x=rand(10,99);
                $y=rand(10,99);
                $_SESSION['code']=$x+$y;
            ```
            ```js
                function login(table,acc,pw,code){
                $.post("./api/chk_code.php",{code},(chk_code)=>{
                    if (chk_code==1) {
                        $.post("./api/login.php",{table,acc,pw},(res)=>{
                            if (res==1) {
                                switch (table) {
                                    case 'mem':
                                        location.href='./index.php';
                                        break;
                                    case 'admin':
                                        location.href='./back.php';
                                        break;

                                    default:
                                        break;
                                }
                            }else {
                                alert("帳號或密碼有誤")
                            }
                        })
                    }else{
                        alert('對不起，您輸入的驗證碼有誤請您重新登入');
                    }
                })
                }
            ```
            ```php
                $chk_acc=${$_POST['table']}->math('count','id',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
                $_SESSION[$_POST['table']]=$_POST['acc'];
                echo ($chk_acc>0)?1:0;
            ```
            * 登出功能
            ```js
                function logout(table) {
	            $.post("./api/logout.php",{table},()=>{
	            	location.href="index.php";
	            })
                }
            ```
            ```php
                unset($_SESSION[$_POST['table']]);
            ```
    * 建立後台管理權限畫面功能
        * 新增管理帳號
        * 修改管理員權限

    * 建立後台會員管理畫面功能
        * 修改 / 刪除會員資料

    * 建立後台頁尾版權畫面功能

    * 建立後台訂單管理畫面功能
        * 訂單編號 load 訂單詳細資料 同題組三 選擇座位方式載入
    
    * 建立後台商品分類與管理畫面功能 PS:新增商品 / 修改商品 功能有剩餘時間再做(以時間內及格為目標)
        * 刪除 上下架功能完成
    
    * 建立首頁商品分類區
        * front/main.php 判斷有無 GET 分類 撈取資料
        ```php
            $type_b=$_GET['b']??"";
            $type_m=$_GET['m']??"";
            if ($type_b=='') {
                $pds=$prds->all($sh);
            }else if($type_m==''){
                $pds=$prds->all($sh," && `big`=$type_b");
            }else{
                $pds=$prds->all($sh," && `big`=$type_b && `mid`=$type_m");
            }
            ?>
        ```
        * 依GET prds type foreach繞出 並將變數帶入分類標籤
        ```php
            <h3>
                <span id="big_t">
                <?=($type_b=='')?"全部商品":$type->find($type_b)['name'];?>
                </span>>
                <span id="mid_t">
                <?=($type_m=='')?"":$type->find($type_m)['name'];?>
                </span>
            </h3>
        ```
    
    * 建立首頁左側目錄區 套用題組一js
        ```php
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
        ```

        * 建立商品詳細資料 front/detall.php 依id顯示商品詳細資料 並依選購數量 GET 數量 ID 至購物車
            ```php
            <div class="w80 mg">
            <h3 class="ct">
            <?=$prd['name'];?>
            </h3>
            <table class="w100">
                <tr class="pp">
                    <td>
                        <img src="./img/<?=$prd['img'];?>" height="100px">
                    </td>
                    <td>
                        <div>分類:<?=$type->find($prd['big'])['name'];?>><?=$type->find($prd['mid'])['name'];?></div>
                        <div>編號:<?=$prd['no'];?></div>
                        <div>價格:<?=$prd['price'];?></div>
                        <div>詳細說明:<?=$prd['intro'];?></div>
                        <div>庫存量:<?=$prd['qt'];?></div>
                    </td>
                </tr>
            </table>
            <div class="tt ct">
                購買數量: <input type="number" name="" id="qt"><a href="?do=bycart&id=<?=$prd['id'];?>"><img src="./icon/0402.jpg"></a>
            </div>
            <div class="ct"><button onclick="ff('main')">返回</button></div>
            </div>
            ```
        * 建立購物車 front/buycart.php 先依GET建立未登入並導向註冊登入頁 `$_SESSION['cart']` 存入選購商品id qt
            * 從我要購買點選有id 存session / 從購物車進入沒id沒有就依已存在seession判斷
                ```php
                $_SESSION['cart'][$_GET['id']]=$_GET['qt']??1;
                if (!isset($_SESSION['mem'])) {
                    to("?do=mem");
                }
                ```
            * 判斷是否登入 未登入則前往註冊登入頁
                ```php
                if (!isset($_SESSION['mem'])) {
                to("?do=mem");
                }
                ```
            * 依session是否為空顯示資料
                ```php
                    <?php
                    if (!empty($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $id => $qt) {
                            ?>
                            <tr class="pp">
                                <td><?=$prds->find($id)['no'];?></td>
                                <td><?=$prds->find($id)['name'];?></td>
                                <td><?=$qt;?></td>
                                <td><?=$prds->find($id)['qt'];?></td>
                                <td><?=$prds->find($id)['price'];?></td>
                                <td><?=($prds->find($id)['price'])*$qt;?></td>
                                <td>
                                <a href="javascript:del_cart(<?=$id;?>)"><img src="./icon/0415.jpg"></a>
                                </td>
                            </tr>
                            <?php
                            }
                        }
                        ?>
                        ```
            * 建立付款頁面front/pay.php 複製後台訂單管理格式 form表單送出資料
                * 不須帶值 依`$_SESSION['cart']`繞出商品資料 依`$_SESSION['mem']`繞出會員資料
                * 送出./api/pay.php 儲存
                    ```php
                        <?php
                        include "../base.php";
                        $_POST['no']=date("Ymd").date("His");
                        $_POST['prds']=serialize($_SESSION['cart']);
                        unset($_SESSION['cart']);
                        $_POST['date']=$today;
                        $orders->save($_POST);
                        ?>
                        <script>
                            alert("訂購成功\r感謝您的選購");
                            location.href="../index.php";
                        </script>
                        ?>
                    ```

