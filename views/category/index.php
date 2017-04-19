<h1>Table Category</h1>
<?php
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

?>

<?php echo GridView::widget([
    'dataProvider' => $dataProvider,
    ['class' => 'yii\grid\SerialColumn'],

    'id',
    'title',
    'status',

    ['class' => 'yii\grid\ActionColumn'],
]); ?>