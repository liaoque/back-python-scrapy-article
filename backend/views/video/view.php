<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Video */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-view">

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
                    return \yii\helpers\BaseHtml::img($value);
                },
                'label' => '缩略图'
            ],
            [
                'attribute' => 'src',
                'format' => function ($value) {
//                    \yii\helpers\BaseHtml::beginTag('video');
//                    \yii\helpers\BaseHtml::endTag('video');

                    return \yii\helpers\BaseHtml::tag('video', '', [
                        'src' => $value,
                        'controls'=>"controls",
                        'width' => '500'
                    ]);
//                   $message = yii::$app->get('messgae');
//                    var_dump($message);
//                    return \yii\helpers\BaseHtml::img($value);
                },
                'label' => '视频'
            ],
            'ctime',
            [
                'attribute' => 'status',
                'format' => function ($value) {
                    return \backend\models\Article::statusList()[$value];
                },
                'label' => '状态'
            ],
            'fingerprint',
        ],
    ]) ?>

</div>
