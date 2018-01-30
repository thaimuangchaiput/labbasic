<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
?>
<!-- <div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

พื้นที่ทำงาน
<br/>
    </div>

    <div class="body-content">

    </div>
</div> --!>

<?php
echo ListView::widget([
   'dataProvider' => $dataProvider,
    'itemView' => '/news/_item',
    'itemOptions' => [
        'class' => 'col-sm-6 col-md-4'
        ],
    //'layout' => '{sorter}{summary}{items}{pager}',
    'layout' => '{items}{pager}',
        ]);
?>
