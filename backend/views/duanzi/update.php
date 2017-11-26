<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Duanzi */

$this->title = 'Update Duanzi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Duanzis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="duanzi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
