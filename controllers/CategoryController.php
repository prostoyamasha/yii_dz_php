<?php
/**
 * Created by PhpStorm.
 * User: marysia
 * Date: 07.04.17
 * Time: 23:23
 */

namespace app\controllers;


use app\models\Category;
use yii\base\Controller;


class CategoryController extends BaseController {
    public function actionCreateCategory ()
    {
        $formCreateCategory = new Category();

        return $this->render('formCreateCategory',
            ['formCreateCategory' => $formCreateCategory]
        );
    }


}
