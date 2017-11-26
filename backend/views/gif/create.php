<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Gif */

$this->title = 'Create Gif';
$this->params['breadcrumbs'][] = ['label' => 'Gifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gif-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
