<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\NewsCategory;
use Yii;

class NewscategoryController extends Controller{
    public $layout = 'admin';
    public function actionCategory(){
        $cat = NewsCategory::find()->all();
        return $this->render('category',['cat' => $cat]);
    }
    public function actionCategorycreate(){
        $model = new NewsCategory();
        if(Yii::$app->request->post()){
          //โหลดค่าที่รับจาก form ,เก็บไว้ใน model
            $model->load(Yii::$app->request->post());
            //ดึงวันที่ปัจจุบัน
            $model->create_date = date('Y-m-d');
            if($model->save()){
                return $this->redirect(['category']);
            }
        }
        return $this->render('categorycreate',['model' => $model]);
    }
    public function actionCategoryupdate($id){
        $model = NewsCategory::findOne($id);
        if(Yii::$app->request->post()){
          //โหลดค่าที่รับจาก form ,เก็บไว้ใน model
            $model->load(Yii::$app->request->post());
           if($model->save()){
                return $this->redirect(['category']);
            }
        }

        return $this->render('categoryupdate',['model' => $model]);
    }
    public function actionCategorydelete($id){
        $model = NewsCategory::findOne($id);
        if($model->delete()){
            return $this->redirect(['category']);
        }else{
            echo 'Fail....';
        }
    }


}
