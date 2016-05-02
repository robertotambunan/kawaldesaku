<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KecamatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kecamatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kecamatan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kecamatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kecamatan',
            'id_kabupaten',
            'nama_kecamatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
