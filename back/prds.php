<?php

?>
<div class="w100 h500 oy_s">
<h3 class="ct">商品分類</h3>
<div class="w80 mg ct">
  新增大分類
  <input type="text" name="" id="big">
  <button onclick="add_type(0,$('#big').val())">新增</button>
</div>
<div class="w80 mg ct">
  新增中分類
  <select name="" id="big_id">
    <?php
    foreach ($type->all(['parent'=>0]) as $key => $big) {
      ?>
      <option value="<?=$big['id'];?>"><?=$big['name'];?></option>
      <?php
    }
    ?>
  </select>
  <input type="text" name="" id="mid">
  <button onclick="add_type($('#big_id option:selected').val(),$('#mid').val())">新增</button>
</div>
<table class="w80 mg">
   <?php
    foreach ($type->all(['parent'=>0]) as $key => $big) {
      ?>
      <tr class="tt">
        <td><?=$big['name'];?></td>
        <td>
          <button onclick="edit_type(<?=$big['id'];?>,'<?=$big['name'];?>')">修改</button>
          <button onclick="del('type',<?=$big['id'];?>)">刪除</button>
        </td>
      </tr>
      <?php
      foreach ($type->all(['parent'=>$big['id']]) as $key => $mid) {
        ?>
        <tr class="pp">
          <td><?=$mid['name'];?></td>
          <td>
            <button onclick="edit_type(<?=$mid['id'];?>,'<?=$mid['name'];?>')">修改</button>
            <button onclick="del('type',<?=$mid['id'];?>)">刪除</button>
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
  function add_type(parent,name){
    $.post("./api/save_type.php",{parent,name},()=>{
      reload();
    })
  }
  function edit_type(id,name){
    name=prompt('修改名稱',name);
    $.post("./api/save_type.php",{id,name},()=>{
      reload();
    })
  }
</script>