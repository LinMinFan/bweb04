<?php

?>
<h3 class="ct">商品分類</h3>
<div class="ct">
    新增大分類
    <input type="text" name="" id="tp_b">
    <button onclick="add_type(0,$('#tp_b').val())">新增</button>
</div>
<div class="ct">
    新增中分類
    <select name="" id="b_id">
        <?php
        foreach ($type->all(['parent'=>0]) as $key => $b_id) {
            ?>
            <option value="<?=$b_id['id'];?>"><?=$b_id['name'];?></option>
            <?php
        }
        ?>
    </select>
    <input type="text" name="" id="tp_m">
    <button onclick="add_type($('#b_id').val(),$('#tp_m').val())">新增</button>
</div>
<div class="w100 h400 oy_s">
<table class="w80 mg">
<?php
foreach ($type->all(['parent'=>0]) as $key => $b_id) {
?>
<tr class="tt">
    <td><?=$b_id['name'];?></td>
    <td>
        <button onclick="edit_type(<?=$b_id['id'];?>,'<?=$b_id['name'];?>')">修改</button>
        <button onclick="del('type',<?=$b_id['id'];?>)">刪除</button>
    </td>
</tr>
<?php
foreach ($type->all(['parent'=>$b_id['id']]) as $key => $m_id){
    ?>
    <tr class="pp">
        <td><?=$m_id['name'];?></td>
        <td>
            <button onclick="edit_type(<?=$m_id['id'];?>,'<?=$m_id['name'];?>')">修改</button>
            <button onclick="del('type',<?=$m_id['id'];?>)">刪除</button>
        </td>
    </tr>
    <?php 
}
}
?>
    
</table>

<h3 class="ct">商品管理</h3>
<div class="ct">
    <button onclick="">新增商品</button>
</div>
<div class="ct">
    <select name="" >
            <option value="">全部商品</option>
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
    <td class="flex flex_w flex_ac flex_ja">
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
    function add_type(parent,name){
        $.post("./api/save.php?do=type",{parent,name},()=>{
            bb('prds');
        })
    }
    function edit_type(id,name){
        name=prompt('修改名稱',name);
        $.post("./api/save.php?do=type",{id,name},()=>{
            bb('prds');
        })
    }
</script>
