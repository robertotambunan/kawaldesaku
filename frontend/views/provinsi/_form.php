<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Provinsi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="provinsi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_provinsi')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
