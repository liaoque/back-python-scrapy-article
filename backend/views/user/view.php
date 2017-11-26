<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确认要删除嘛?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'password_hash',
            'email:email',
            [
                'attribute' => 'status',
                'value' => function($model){
                    $status = $model::getStatusOptions();
                    return $status[$model['status']];
                },
                'label' => '状态',
            ],
            [
                'attribute'=> 'created_at',
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
        ],
    ]) ?>

</div>
