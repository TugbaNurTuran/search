<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\search\models\Main */

$this->title = 'Update Main: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Mains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->keywordID, 'url' => ['view', 'id' => $model->keywordID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="main-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
