<?php

namespace app\modules\admin\components;

use yii\base\Component;
use app\modules\admin\controllers\ProductController;
use app\modules\admin\controllers\CategoryController;
use app\modules\admin\models\Product;


class Category extends Component
{

    public function getStatuses()
    {
        return [
            0 => 'deleted',
            1 => 'available'
        ];
    }



    public function getStatusById($id)
    {
        $statuses = $this->getStatuses();
        return !empty($statuses[$id]) ? $statuses[$id] : null;
    }


}