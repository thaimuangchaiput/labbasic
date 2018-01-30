<?php
use yii\widgets\ListView;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
 <div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>


<br/>
    </div>

    <div class="body-content">

    </div>
</div>  


<div class="site-index">
<?php
echo ListView::widget([
   'dataProvider' => $dataProvider,
    'itemView' => '/news/_item',
    'itemOptions' => [
        'class' => 'col-sm-6 col-md-4'
        ],
    //'layout' => '{sorter}{summary}{items}{pager}',
    'layout' => '{items}',
        ]);
?>
    <a href="<?= Url::to(['/news']); ?>" class="btn btn-primary">ข่าวทั้งหมด</a>
</div>