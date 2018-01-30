<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'QOF-Ninja ',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-success  navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'encodeLabels' => FALSE,
                'items' => [
                    ['label' => '<i class="glyphicon glyphicon-home"></i>', 'url' => ['/site/index']],
                    ['label' => '<i class="glyphicon glyphicon-list"></i> QOF',
                        'items' => [
                            ['label' => '1.1ร้อยละของหญิงมีครรภ์ได้รับการฝากครรภ์ครั้งแรกก่อน 12 สัปดาห์', 'url' => ['/qof/indexqanc12w']],
                            ['label' => '1.2ร้อยละของหญิงมีครรภ์ได้รับการฝากครรภ์ครบ 5 ครั้งตามเกณฑ์', 'url' => ['/qof/indexqanc5']],
                            ['label' => '1.3ร้อยละของสตรี 30-60 ปี ได้รับการตรวจคัดกรองมะเร็งปากมดลูกภายใน 5 ปี ', 'url' => ['/qof/indexqpap']],
                            ['label' => '1.4ร้อยละของเด็กอายุน้อยกว่า 3 ปี ได้รับการตรวจช่องปาก', 'url' => ['/qof/indexdental']],
                            ['label' => '1.5ร้อยละของหญิงหลังคลอดได้รับการดูแลครบ 3 ครั้งตามเกณฑ์', 'url' => ['/qof/indexpanthai']],
	       ['label' => '1.6.1อัตราผู้ป่วยเบาหวานรายใหม่', 'url' => ['/qof/indexqdmpredm']],
                            ['label' => '1.6.2อัตราผู้ป่วยความดันโลหิตสูงรายใหม่', 'url' => ['/qof/indexqhtpreht']],
                            //['label' => '4.สัดส่วนการใช้บริการที่หน่วยบริการปฐมภูมิต่อการใช้บริการที่โรงพยาบาล', 'url' => ['/qof/indexqserf']],
                            ['label' => '2.2อัตราการรับไว้รักษาในโรงพยาบาลด้วยโรคหืด สิทธิ UC', 'url' => ['/qof/indexqasthma']],
                            ['label' => '2.3อัตราการรับไว้รักษาในโรงพยาบาลด้วยโรคเบาหวานที่มีภาวะแทรกซ้อนระยะสั้น สิทธิ UC', 'url' => ['/qof/indexqdmadmit']],
                            ['label' => '2.4อัตราการรับไว้รักษาในโรงพยาบาลด้วยความดันโลหิตสูงหรือภาวะแทรกซ้อนความดันโลหิตสูง', 'url' => ['/qof/indexqhtadmit']],
                            //['label' => '8.ร้อยละของเด็กอายุ 1 ปี ได้รับวัคซีนหัด (ตาก)', 'url' => ['/qof/indexqvacmr']],
                            //['label' => '9.ร้อยละของเด็กอายุ 5 ปี ที่ได้รับวัคซีน DTP 5', 'url' => ['/qof/indexqvacdtp']],
                            //['label' => '11.ร้อยละประชาชนอายุตั้งแต่ 35 ปี ได้รับการคัดกรองเบาหวาน', 'url' => ['/qof/indexqdmscreen']],
                            //['label' => '12.ร้อยละประชาชนอายุตั้งแต่ 35 ปี ได้รับการคัดกรองความดันโลหิต', 'url' => ['/qof/indexqhtscreen']],
                            ['label' => '2.5อัตราผู้ป่วยเบาหวานได้รับการตรวจ HbA1C ประจำปี ', 'url' => ['/qof/indexqdmhba1c']],
                            ['label' => '2.6อัตราผู้ป่วยเบาหวานที่ควบคุมระดับน้ำตาลได้ดี ', 'url' => ['/qof/indexqdmcontrol']],
	       ['label' => '2.7อัตราผู้ป่วยเบาหวานได้รับการตรวจจอประสาทตาประจำปี', 'url' => ['/fund/indexfdmeye']],
                            //['label' => '17.ร้อยละผู้ป่วยความดันโลหิตสูง (อย่างเดียว) อยู่ในเกณฑ์ที่ควบคุมได้ดี', 'url' => ['/qof/indexqhtcontrol']],
                            //['label' => '18.อัตราการรับไว้รักษาในโรงพยาบาลด้วยกลุ่มโรคที่ควรรักษาแบบผู้ป่วยนอก (ACSC)', 'url' => ['/qof/indexqmisceladmit']],
                            //['label' => '23.น้ำหนักทารกแรกคลอดต่ำกว่า 2500 กรัม', 'url' => ['/qof/indexqnb2500']],
                            //['label' => '<i class="glyphicon glyphicon-refresh"></i> Run SQL', 'url' => ['/sqlcode/index']],

                            ]
                    ],
                   // ['label' => '<i class="glyphicon glyphicon-list"></i> DATA','url' => ['/fund/countall']],

                    ['label' => '<i class="glyphicon glyphicon-list"></i> DATA',
                        'items' => [
                            ['label' => '<i class="glyphicon glyphicon-list"></i> DATA', 'url' => ['/fund/countall']],
                            ['label' => '<i class="glyphicon glyphicon-list"></i> ไฟล์ 43 แฟ้ม', 'url' => ['/viewfile/viewall']],
                            ['label' => '<i class="glyphicon glyphicon-list"></i> ค้นประวัติการรักษา', 'url' => ['/viewfile/viewalllll']],
                            ['label' => '<i class="glyphicon glyphicon-list"></i> ตัวอย่าง News', 'url' => ['/news']],
                            ['label' => '<i class="glyphicon glyphicon-list"></i> ตัวอย่าง NewsCategory', 'url' => ['newscategory/category']],
                            ['label' => '<i class="glyphicon glyphicon-list"></i> Go To Gii', 'url' => ['/gii']],
                        ]
                    ],

                    ['label' => '<i class="glyphicon glyphicon-refresh"></i> Run SQL',
                        'items' => [
                            ['label' => '<i class="glyphicon glyphicon-refresh"></i> Run SQL', 'url' => ['/sqlcode/index']],
                        ]
                    ],
                    Yii::$app->user->isGuest ?
                            ['label' => 'เข้าสู่ระบบ', 'url' => ['/user/security/login']] :
                            ['label' => '<i class="glyphicon glyphicon-user"></i> (' . Yii::$app->user->identity->username . ')', 'items' => [
                            ['label' => 'จัดการข่าวสาร', 'url' => ['/news/admin']],
                            ['label' => 'ข้อมูลส่วนตัว', 'url' => ['/user/settings/profile']],    
                            ['label' => '<i class="glyphicon glyphicon-exclamation-sign"></i> เพิ่มผู้ใช้', 'url' => ['/user/admin/index']],
                            //['label' => 'Account', 'url' => ['/user/settings/account']],
                            ['label' => 'ออกจากระบบ', 'url' => ['/user/security/logout'], 'linkOptions' => ['data-method' => 'post']],
                        ]],
                    //['label' => '<i class="glyphicon glyphicon-exclamation-sign"></i> เพิ่มผู้ใช้', 'url' => ['/user/registration/register'], 'visible' => !Yii::$app->user->isGuest],
                ['label' => '<i class="glyphicon glyphicon-thumbs-up"> ทีมพัฒนา</i>', 'url' => ['/site/devteam']],
],
            ]);
            NavBar::end();
            ?>

            <div class="container" style="margin-top: 80px;">
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
            <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
        <!--        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>-->
            </div>
        </footer>

<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
