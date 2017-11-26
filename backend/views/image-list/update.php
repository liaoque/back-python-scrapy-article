<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ImageList */

$this->title = 'Update Image List: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Image Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="image-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
