<?php

namespace app\controllers;

use Yii;
use app\models\News;
use app\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(), 
                //action ทั้งหมดที่มี
                'only' => ['index','admin','view','create','update','delete'], 
                'rules' => [
                    [
                    'actions' => ['admin','create','update','delete'],
                    'allow' => true,
                    'roles' => ['@']
                ],
                [
                    'actions' => ['index','view'],
                    'allow' => true,
                    'roles' => ['?','@']
                ]
            ]
          ]
        ];
    }

    public function actionIndex() {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //$dataProvider->pagination->pageSize = 3;
        $dataProvider->sort->defaultOrder = ['id' => 'DESC'];
        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    // public function actionIndex()
    public function actionAdmin() {
        $this->layout = 'admin';
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        //return $this->render('index', [
        return $this->render('admin', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $this->layout = 'admin';
        $model = new News();

        /*  if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->id]);
          } else {
          return $this->render('create', [
          'model' => $model,
          ]);
          } */
        if ($model->load(Yii::$app->request->post())) {
            $curentDate = date('Y-m-d H:i:s');
            $model->post_date = $curentDate;
            $model->update_date = $curentDate;
            $model->view = 0;

            if ($model->save()) {
                $model->icon = UploadedFile::getInstance($model, 'icon');
                if ($model->icon) {
                    $iconFullName = Yii::getAlias('@webroot') . '/uploaded/news/icons/';
                    $iconFullName .= $model->id;
                    $iconFullName .= '.' . $model->icon->extension;
                    $model->icon->saveAs($iconFullName);
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $this->layout = 'admin';
        $model = $this->findModel($id);
        $iconExtension = ['jpg', 'png'];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->icon = UploadedFile::getInstance($model, 'icon');
            if ($model->icon) {
                $iconFullName = Yii::getAlias('@webroot') . '/uploaded/news/icons/';
                $iconFullName .= $model->id;
                foreach ($iconExtension as $key => $ext) {
                    $iconUnlink = $iconFullName . '.' . $ext;
                    if (is_file($iconUnlink)) {
                        unlink($iconUnlink);
                    }
                }
                $iconFullName .= '.' . $model->icon->extension;

                $model->icon->saveAs($iconFullName);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['admin']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
