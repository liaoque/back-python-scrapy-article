<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DuanziSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Duanzis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="duanzi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Duanzi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            [
                'attribute' => 'body',
                'format' => function ($value) {
                    return mb_substr($value, 0, 20, 'utf-8') . '..';
                }
            ],
//            'fingerprint',
            'ctime',
            [
                'attribute' => 'status',
                'format' => function ($value) {
                    return \backend\models\Article::statusList()[$value];
                },
                'label' => '状态'
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
