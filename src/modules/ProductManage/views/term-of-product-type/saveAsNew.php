<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\TermOfProductType */

$this->title = t('app', 'Save As New {modelClass}: ', [
    'modelClass' => 'Term Of Product Type',
]). ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => t('app', 'Term Of Product Type'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = t('app', 'Save As New');
?>
<div class="term-of-product-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
