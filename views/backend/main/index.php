<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\search\models\MainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


echo <<<EOF

<h1 align="center" style="padding-top:140px;color:#337ab7;font-family:Times New Roman Bold;font-weight:bold;font-size:55px" >Search Module</h1>
<br/><br/>
EOF;


?>


<div class="main-index" style="border:2px dotted #337ab7; padding:20px;-moz-border-radius: 20px;-webkit-border-radius: 20px;border-radius: 20px;">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,


        'columns' => [
           
            'keyword',
            ['class' => 'yii\grid\ActionColumn'],
            
        ],
    ]); ?>
</div>
