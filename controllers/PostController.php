<?php

namespace app\controllers;

use Yii;
use app\models\Category;

class PostController extends BaseController{
    
    public function actionIndex() {
        Yii::$app->content->setContent('New Content!');
        $content = Yii::$app->content->getContent();
        return $this->render('index', ['contentVariable' => $content]);
   
    }
    public function actionTest() {
        
        
    }
    
    public function actionHello() {
        return $this->render('hello');
    
    }
    
}
