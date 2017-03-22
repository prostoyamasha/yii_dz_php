<?php

namespace app\controllers;


/**
 * Description of PostController
 *
 * @author marysia
 */
class PostController extends AppControler{
    
    public function actionIndex() {
        $hello = 'Привет, мир!';
        $hi = 'Hi!';
        return $this->render('index', compact('hello', 'hi'));
        
    }
    public function actionTest() {
        return $this->render('test');
        
    }
    
}
