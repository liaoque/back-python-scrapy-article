<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Duanzi */

$this->title = 'Create Duanzi';
$this->params['breadcrumbs'][] = ['label' => 'Duanzis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="duanzi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
