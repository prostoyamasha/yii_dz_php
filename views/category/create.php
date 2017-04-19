<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\components\Category;

?>
<h1>Create Category</h1>
<?php $form = ActiveForm::begin(); ?>
<div>
    <?php echo $form->field($model, 'title'); ?>
</div>
<div>
    <?php echo $form->field($model, 'status')->dropDownList(Category::getStatuses()); ?>
</div>
<div>
    <?php echo Html::submitButton('Create',['class'=>'btn btn-primary']); ?>
</div>
<?php ActiveForm::end(); ?>
