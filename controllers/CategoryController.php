<?php
/**
 * Created by PhpStorm.
 * User: marysia
 * Date: 07.04.17
 * Time: 23:23
 */

namespace app\controllers;


use app\models\CategoryForm;
use yii\base\Controller;


class CategoryController extends BaseController
{
    public function actionCreate()
    {
        $model = new CategoryForm();

        return $this->render('create', [
            'model' => $model
        ]);
    }
}
