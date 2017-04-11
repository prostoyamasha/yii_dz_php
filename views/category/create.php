<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\components\Category;

?>
<h1>Create Category</h1>
<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'title') ?>

<?php echo Html::dropDownList('status','1', Category::getStatuses()); ?>

<?php echo Html::submitButton('Create',['class'=>'btn btn-primary']); ?>

<?php ActiveForm::end(); ?>
