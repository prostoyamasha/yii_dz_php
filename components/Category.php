<?php

namespace app\components;

use yii\base\Component;

class Category extends Component
{

    public function getStatuses()
    {
        return [
            0 => 'не активная',
            1 => 'активная'
        ];
    }
}