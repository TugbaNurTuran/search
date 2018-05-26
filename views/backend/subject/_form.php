<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\search\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'keywordID')->textInput() ?>

    <?= $form->field($model, 'keywordType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wordContent')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
