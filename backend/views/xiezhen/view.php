<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Xiezhen */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Xiezhens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xiezhen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            [
                'attribute' => 'thumbnail',
                'format' => function ($value) {
                    return Html::img($value, [
                        'width' => '200',
                    ]);
                }
            ],
            [
                'attribute' => 'dsasd',
                'format' => function ($v) {
                    return $v;
                },
                'value' => function ($model) {
                    $result = $model->imageList;
                    $items = [];
                    foreach ($result as $v) {
                        $items[] = Html::img($v->getAttribute('src'));
                    }
                    return \yii\bootstrap\Carousel::widget([
                        'items' => $items,
                        'options' => [
                            'id' => 'xasmkxoas',
                            'style' => 'width:400px;'
                        ]
                    ]);
                },
                'label' => '图片集'
            ],
            [
                'attribute' => 'status',
                'format' => function ($value) {
                    return \backend\models\Article::statusList()[$value];
                },
                'label' => '状态'
            ],
        ],
    ]) ?>

</div>
