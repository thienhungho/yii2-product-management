<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\ProductUnitEquivalent */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Product Unit Equivalent',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Unit Equivalent'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="product-unit-equivalent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
