<?php
namespace app\models;

use yii\db\ActiveRecord;

class CategoryForm extends ActiveRecord
{
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

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'status' => 'Status',
        ];
    }
}