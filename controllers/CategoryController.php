<?php
namespace app\controllers;

use Yii;
use app\models\CategoryForm;

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
}
