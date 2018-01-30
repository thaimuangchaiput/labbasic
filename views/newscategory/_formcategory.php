<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

//print_r($model);
//echo "<br/>";
//echo $dateC = $model['create_date'];
?>

<div class="well">
    <?php  $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(); ?>
    <?php /* if(!$model->isNewRecord){
    echo $form->field($model, 'create_date')->textInput();

    }*/
    ?>

            <?php
            if(!$model->isNewRecord){
        echo yii\jui\DatePicker::widget([

                'model' => $model,
                'attribute' => 'create_date',
                'language' => 'th',
                'dateFormat' => 'yyyy-MM-dd',

        ]);
            }
        echo '<br/>';
        ?>
    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
    <?php Activeform::end(); ?>
</div>
