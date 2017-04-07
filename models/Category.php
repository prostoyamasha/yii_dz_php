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


class Category extends ActiveRecord
{
    public $idOfCategory;
    public $titleOfCategory;
    public $statusOfCategory;

    public static function tableName()
    {
        return 'category';
    }


    public function rules()
    {
        return [
            ['idOfCategory', 'integer'],
            ['titleOfCategory', 'varchar'],
            ['statusOfCategory', 'integer', 'min' => 0, 'max' => 1]

        ];
    }



}