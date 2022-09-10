<h3 class="ct">商品分類</h3>
<div class="ct">
    新增大分類
    <input type="text" name="" id="type_b">
    <button onclick="save_type(0,$('#type_b').val())">新增</button>
</div>
<div class="ct">
    新增中分類
    <select name="" id="tb_id">
        <?php
        foreach ($types->all(['parent'=>0]) as $key => $tb) {
        ?>
        <option value="<?=$tb['id'];?>"><?=$tb['name'];?></option>
        <?php
        }
        ?>
    </select>
    <input type="text" name="" id="type_m">
    <button onclick="save_type($('#tb_id').val(),$('#type_m').val())">新增</button>
</div>
<div class="w100 h450 oy_s">
<table class="w100">
    <?php
    foreach ($types->all(['parent'=>0]) as $key => $tb){
    ?>
    <tr class="tt">
        <td class="w60"><?=$tb['name'];?></td>
        <td class="w30">
            <button onclick="edit_type(<?=$tb['id'];?>,'<?=$tb['name'];?>')">修改</button>
            <button onclick="del('types',<?=$tb['id'];?>)">刪除</button>
        </td>
    </tr>
    <?php
    foreach ($types->all(['parent'=>$tb['id']]) as $key => $tm){
    ?>
    <tr class="pp">
        <td class="w60"><?=$tm['name'];?></td>
        <td class="w30">
            <button onclick="edit_type(<?=$tm['id'];?>,'<?=$tm['name'];?>')">修改</button>
            <button onclick="del('types',<?=$tm['id'];?>)">刪除</button>
        </td>
    </tr>
    <?php 
    }
    }
    ?>
</table>
<h3 class="ct">商品管理</h3>
<div class="ct">
    <button>新增商品</button>
</div>
<div class="ct">
    <select name="" id="">
        <option value="">全部商品</option>
    </select>
</div>
<table class="w100">
    <tr class="tt">
        <td>編號</td>
        <td>商品名稱</td>
        <td>庫存量</td>
        <td>狀態</td>
        <td>操作</td>
    </tr>
    <?php
    foreach ($prds->all() as $key => $prd){
    ?>
    <tr class="pp">
        <td><?=$prd['no'];?></td>
        <td><?=$prd['name'];?></td>
        <td><?=$prd['qt'];?></td>
        <td>
            <?php
            if ($prd['sh']==1) {
                echo "販售中";
            }else{
                echo "已下架";
            }
            ?>
        </td>
        <td class="flex flex_w">
            <div class="w45"><button onclick="">修改</button></div>
            <div class="w45"><button onclick="del('prds',<?=$prd['id'];?>)">刪除</button></div>
            <div class="w45"><button onclick="sh('prds',<?=$prd['id'];?>,1)">上架</button></div>
            <div class="w45"><button onclick="sh('prds',<?=$prd['id'];?>,0)">下架</button></div>
        </td>
    </tr>
    <?php 
    }
    ?>
</table>
</div>
<script>
    function save_type(parent,name){
        $.post("./api/save_type.php",{parent,name},()=>{
            bb('prds');
        })
    }

    function edit_type(id,name){
        name=prompt('修改名稱',name)
        $.post("./api/save_type.php",{id,name},()=>{
            bb('prds');
        })
    }
</script>