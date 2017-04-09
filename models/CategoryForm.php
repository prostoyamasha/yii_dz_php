<?php
/**
 * Created by PhpStorm.
 * User: marysia
 * Date: 06.04.17
 * Time: 17:18
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


class CategoryForm extends ActiveRecord
{
    //public $id;
    //public $title;
    //public $status;

    public static function tableName()
    {
        return 'category';
    }

    public function rules()
    {
        return [
            ['id', 'integer'],
            ['title', 'string', 'max' => 255],
            ['status', 'integer', 'min' => 0, 'max' => 1]

        ];
    }


}