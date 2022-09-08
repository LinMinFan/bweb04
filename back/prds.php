<h3 class="ct">
商品分類
</h3>
<div class="ct">
    新增大分類
    <input type="text" name="" id="ad_tb">
    <button onclick="ad_type(0,$('#ad_tb').val())">新增</button>
</div>
<div class="ct">
    新增中分類
    <select name="" id="type_b">
        <?php
        foreach ($types->all(['parent'=>0]) as $key => $tb) {
            ?>
            <option value="<?=$tb['id'];?>"><?=$tb['name'];?></option>
            <?php
        }
        ?>
    </select>
    <input type="text" name="" id="ad_tm">
    <button onclick="ad_type($('#type_b').val(),$('#ad_tm').val())">新增</button>
</div>
<div class="w100 h400 oy_s">
<table class="w80 mg">
<?php
foreach ($types->all(['parent'=>0]) as $key => $tb) {
?>
<tr class="tt">
    <td><?=$tb['name'];?></td>
    <td>
        <button onclick="edit_types(<?=$tb['id'];?>,'<?=$tb['name'];?>')">修改</button>
        <button onclick="del('types',<?=$tb['id'];?>)">刪除</button>
    </td>
</tr>
<?php
foreach ($types->all(['parent'=>$tb['id']]) as $key => $tm) {
    ?>
<tr class="pp">
    <td><?=$tm['name'];?></td>
    <td>
        <button onclick="edit_types(<?=$tm['id'];?>,'<?=$tm['name'];?>')">修改</button>
        <button onclick="del('types',<?=$tm['id'];?>)">刪除</button>
    </td>
</tr>
<?php
}
}
?>
</table>
<h3 class="ct">
商品管理
</h3>
<div class="ct">
    <button onclick="">新增商品</button>
</div>
<div class="ct">
    <select name="" id="">
        <option value="">
            全部商品
        </option>
    </select>
</div>
<table class="w80 mg">
<tr class="tt">
    <td>編號</td>
    <td>商品名稱</td>
    <td>庫存量</td>
    <td>狀態</td>
    <td>操作</td>
</tr>
<?php
foreach ($prds->all() as $key => $pd) {
?>
<tr class="pp">
    <td><?=$pd['no'];?></td>
    <td><?=$pd['name'];?></td>
    <td><?=$pd['qt'];?></td>
    <td>
        <?php
        if ($pd['sh']==1) {
            echo "販售中";
        }else{
            echo "已下架";
        }
        ?>
    </td>
    <td class="flex flex_w">
        <div class="w45"><button onclick="">修改</button></div>
        <div class="w45"><button onclick="del('prds',<?=$pd['id'];?>)">刪除</button></div>
        <div class="w45"><button onclick="sh('prds',<?=$pd['id'];?>,1)">上架</button></div>
        <div class="w45"><button onclick="sh('prds',<?=$pd['id'];?>,0)">下架</button></div>
    </td>
</tr>
<?php
}
?>
</table>
</div>
<script>
    function ad_type(parent,name){
        $.post("./api/save.php?do=types",{parent,name},()=>{
            bb('prds');
        })
    }
    function edit_types(id,name){
        name=prompt("修改名稱",name);
        $.post("./api/save.php?do=types",{id,name},()=>{
            bb('prds');
        })
    }
</script>