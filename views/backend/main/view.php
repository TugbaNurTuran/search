<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kouosl\search\models\Main */




$this->params['breadcrumbs'][] = ['label' => 'Search Module', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<br/><br/><br/><br/><br/><br/><br/>
<div class="main-view" style="border:2px dotted #337ab7; padding:20px;-moz-border-radius: 20px;-webkit-border-radius: 20px;border-radius: 20px;">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'keyword',
            'wordContent',
        ],
    ]) ?>

</div>

