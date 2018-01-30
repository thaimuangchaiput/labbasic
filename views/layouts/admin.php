<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;
use app\assets\MaterialAsset;

/* @var $this \yii\web\View */
/* @var $content string */

//AppAsset::register($this);
MaterialAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
            <div class="container" style="margin-top: 80px;">
                <div class="col-md-2">
                    <ul>
                        <li><a href="<?= Url::to(['/news/admin']); ?>">จัดการข่าวสาร</a></li>
                        <li><a href="<?= Url::to(['/newscategory/category']); ?>">จัดการหมวดหมู่ข่าวสาร</a></li>
                    </ul>
                </div>
                <div class="col-md-10">
            <?= $content ?>
            </div>
            </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
