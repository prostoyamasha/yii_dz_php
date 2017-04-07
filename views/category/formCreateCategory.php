
<?php
/**
 * Created by PhpStorm.
 * User: marysia
 * Date: 07.04.17
 * Time: 23:37
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $f = ActiveForm::begin(); ?>

<?= $f->field($formCreateCategory, 'id') ?>
<?= $f->field($formCreateCategory, 'title') ?>
<?= $f->field($formCreateCategory, 'status') ?>
<?= Html::submitButton('Add'); ?>

<?php ActiveForm::end(); ?>
