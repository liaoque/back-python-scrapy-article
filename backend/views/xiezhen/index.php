<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\XiezhenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xiezhens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xiezhen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Xiezhen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'title',
//            'thumbnail',
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
