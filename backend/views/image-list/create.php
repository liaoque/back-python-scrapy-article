<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ImageList */

$this->title = 'Create Image List';
$this->params['breadcrumbs'][] = ['label' => 'Image Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="image-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
