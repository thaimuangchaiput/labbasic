<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property integer $cat_id
 * @property string $title
 * @property string $detail
 * @property string $post_date
 * @property string $update_date
 * @property integer $view
 *
 * @property NewsCategory $cat
 */
class News extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public $icon;

    public static function tableName() {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['cat_id', 'title', 'detail', 'post_date', 'update_date', 'view'], 'required'],
            [['cat_id', 'view'], 'integer'],
            [['detail'], 'string'],
            [['post_date', 'update_date'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => NewsCategory::className(), 'targetAttribute' => ['cat_id' => 'id']],
            [['icon'], 'file', 'extensions' => 'jpg, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'cat_id' => 'หมวดหมู่',
            'title' => 'หัวข้อข่าว',
            'detail' => 'รายละเอียด',
            'post_date' => 'วันที่โพสต์',
            'update_date' => 'ปรับปรุงเมื่อ',
            'view' => 'จำนวนการเข้าชม',
            'icon' => 'ICON',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat() {
        return $this->hasOne(NewsCategory::className(), ['id' => 'cat_id']);
    }

}
