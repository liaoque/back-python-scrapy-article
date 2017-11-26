<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'username',
             'email',
            [
                'attribute' => 'status',
                'value' => function($model){
                    $status = $model::getStatusOptions();
                    return $status[$model['status']];
                },
                'label' => '状态'
            ],
             [
                 'attribute' => 'created_at',
                 'format' => [
                     'Datetime',
                     'php:Y-m-d H:i:s'
                 ],
                 'label' => '创建时间',
             ],
            [
                'attribute' => 'updated_at',
                'format' => [
                    'Datetime',
                    'php:Y-m-d H:i:s'
                ],
                'label' => '更新时间',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
