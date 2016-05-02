<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Desa */

$this->title = 'Create Desa';
$this->params['breadcrumbs'][] = ['label' => 'Desas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
