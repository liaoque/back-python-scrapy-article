<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Xiezhen */

$this->title = 'Create Xiezhen';
$this->params['breadcrumbs'][] = ['label' => 'Xiezhens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xiezhen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
