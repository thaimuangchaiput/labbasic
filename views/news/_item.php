<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php
$baseUrl = Yii::getAlias('@web');
$basePath = Yii::getAlias('@webroot');
//echo $baseUrl;
//echo $basePath;

//echo $basePath.'\uploaded\news\icons'.$model->id.'.png';

$iconUrl = '/uploaded/news/icons/'.$model->id.'.jpg';

if(is_file($basePath.$iconUrl)){
    $img = $baseUrl.$iconUrl;
}else {
    $img = $baseUrl.'/uploaded/news/icons/default.png';
    
}
?>

    <div class="thumbnail">
        <img src="<?= $img;?>" style="width: 128px; height: 128px;" >
      <div class="caption">
        <h3><?php echo $model->title;?></h3>
        <p><a href="<?= Url::to(['/news/view', 'id' => $model->id]);?>" class="btn btn-primary" role="button">อ่านต่อ</a> 
      </div>
    </div>

