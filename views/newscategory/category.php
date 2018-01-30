<?php
use yii\helpers\Url;
use yii\web\view;
?>

<a href="<?= Url::to(['newscategory/categorycreate']); ?>" class="btn btn-primary"><i class="glypicon glyphicon-plus"></i>เพิ่มข้อมูล</a>
<table class="table" table-bordered" >
       <thead style="background-color: #0f9d58;">
        <tr>
            <th>ID</th>
            <th>ชื่อหมวดหมู่</th>
            <th>วันที่สร้าง</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cat as $key => $cat) : ?>
        <tr data-key="1">
            <td><?=$cat->id;?></td>
            <td><?=$cat->name;?></td>
            <td><?=$cat->create_date; ?></td>
            <td><a href="<?= Url::to(['newscategory/categoryupdate','id' => $cat->id]); ?>"><i class="glyphicon glyphicon-pencil"></i></a> |
                <a href="<?= Url::to(['newscategory/categorydelete','id' => $cat->id]); ?>" class="delete"><i class="glyphicon glyphicon-trash"></i></a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php

$this->registerJS("
       $('.delete').click(function(){
            if(!confirm('กรุณายืนยันการลบข้อมูล')){
                return false;
            }           
       });
         ");
?>