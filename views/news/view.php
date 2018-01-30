<?php

use yii\helpers\Html;
//use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php 
$view = $model->view +1;
$model->view = $view;
$model->save();
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php if(!Yii::$app->user->isGuest){ //กำหนดว่าถ้าไม่ใช่ admin จะไม่สามารถเห็นปุ่ม updat กับ delete?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php } 
        
    ?>
    <div class="well">
       <?= $model->detail;?>     
    </div>
    <p>วันที่ประกาศข่าว <?= $model->post_date?></p>
    <p>ปรับปรุงล่าสุด <?= $model->update_date?></p>
    <p>จำนวนการเข้าชม <?= $model->view?></p>
    
    
    <?php /* echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'cat_id', 
                        [
              'attribute' => 'cat_id',
              'value' => function($model){return $model->cat->name;}, 
                //สร้าง list menu ที่ดึงข้อมูลจากตาราง NewsCategory        
                'filter' => \yii\helpers\ArrayHelper::map(app\models\NewsCategory::find()->all(), 'id', 'name'),                      
            ],
            'title',
            'detail:ntext',
            'post_date',
            'update_date',
            'view',
        ],
    ]) */ ?>

</div>
