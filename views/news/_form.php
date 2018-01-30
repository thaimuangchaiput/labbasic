<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\medels\NewsCategory;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
//$newsCat = NewsCategory::find()->all();
//$listData = ArrayHelper::map($newsCat,'id','name');
?>
<div class="news-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'icon')->fileInput() ?>

    <?php // $form->field($model, 'cat_id')->textInput() ?>   
    
    <?= $form->field($model, 'cat_id')->dropDownList(
            ArrayHelper::map(app\models\NewsCategory::find()->all(), 'id', 'name')
            ) ?>  

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?php // $form->field($model, 'post_date')->textInput() ?>

    <?php // $form->field($model, 'update_date')->textInput() ?>

    <?php // $form->field($model, 'view')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
