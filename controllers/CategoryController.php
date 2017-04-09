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
    /**
     * @return string
     */
    public function actionCreate()
    {
        $model = new CategoryForm();
        $model->id;
        $model->title;
        $model->status;

        if ( $model->load( \Yii::$app->request->post())&& $model->validate()){
            $model->save();
            }


        return $this->render('create', [
            'model' => $model
        ]);


    }


}
