<div class="w100 h500 oy_s">
<h3 class="ct">商品分類</h3>
<div class="ct">
    新增大分類
    <input type="text" name="" id="type_b">
    <button onclick="add_type(0,$('#type_b').val())">新增</button>
</div>
<div class="ct">
    新增中分類
    <select name="" id="t_sb">
        <?php
        foreach ($types->all(['parent'=>0]) as $key => $b_data) {
            ?>
            <option value="<?=$b_data['id'];?>"><?=$b_data['name'];?></option>
            <?php
        }
        ?>
    </select>
    <input type="text" name="" id="type_m">
    <button onclick="add_type($('#t_sb').val(),$('#type_m').val())">新增</button>
</div>
<table class="w80 mg">
    <?php
    foreach ($types->all(['parent'=>0]) as $key => $b_data) {
    ?>
    <tr class="tt">
        <td><?=$b_data['name'];?></td>
        <td>
            <button onclick="save_type(<?=$b_data['id'];?>,'<?=$b_data['name'];?>')">修改</button>
            <button onclick="del('types',<?=$b_data['id'];?>)">刪除</button>
        </td>
    </tr>
    <?php
    foreach ($types->all(['parent'=>$b_data['id']]) as $key => $m_data){
    ?>
    <tr class="pp">
        <td><?=$m_data['name'];?></td>
        <td>
            <button onclick="save_type(<?=$m_data['id'];?>,'<?=$m_data['name'];?>')">修改</button>
            <button onclick="del('types',<?=$m_data['id'];?>)">刪除</button>
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
    <select name="">
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
    foreach ($prds->all() as $key => $prd) {
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
            <div class="w45"><button>修改</button></div>
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
function add_type(parent,name){
    $.post("./api/save.php?do=types",{parent,name},()=>{
        bb('prds');
    })
}
function save_type(id,name){
    name=prompt('修改名稱',name);
    $.post("./api/save.php?do=types",{id,name},()=>{
        bb('prds');
    })
}
</script>
