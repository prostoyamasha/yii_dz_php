<?php
namespace app\controllers;

use app\components\Category;
use Yii;
use app\models\CategoryForm;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\db\Query;


class CategoryController extends BaseController
{

    public function actionCreate()
    {
        $model = new CategoryForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }


    public function actionIndex(){
        $dataProvider = new ActiveDataProvider([
            'query' => CategoryForm::find(),
        ]);
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [

                'id',
                'title',
                'status',
            ],
        ]);


    }






}
