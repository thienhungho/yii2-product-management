<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductManage\search\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Title']) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true, 'placeholder' => 'Slug']) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?php /* echo $form->field($model, 'author')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => __t('app', 'Choose User')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'feature_img')->textInput(['maxlength' => true, 'placeholder' => 'Feature Img']) */ ?>

    <?php /* echo $form->field($model, 'sku')->textInput(['maxlength' => true, 'placeholder' => 'Sku']) */ ?>

    <?php /* echo $form->field($model, 'quantity')->textInput(['placeholder' => 'Quantity']) */ ?>

    <?php /* echo $form->field($model, 'status')->textInput(['maxlength' => true, 'placeholder' => 'Status']) */ ?>

    <?php /* echo $form->field($model, 'comment_status')->textInput(['maxlength' => true, 'placeholder' => 'Comment Status']) */ ?>

    <?php /* echo $form->field($model, 'rating_status')->textInput(['maxlength' => true, 'placeholder' => 'Rating Status']) */ ?>

    <?php /* echo $form->field($model, 'promotional_price')->textInput(['placeholder' => 'Promotional Price']) */ ?>

    <?php /* echo $form->field($model, 'price')->textInput(['placeholder' => 'Price']) */ ?>

    <?php /* echo $form->field($model, 'gallery')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'product_parent')->textInput(['placeholder' => 'Product Parent']) */ ?>

    <?php /* echo $form->field($model, 'product_type')->textInput(['maxlength' => true, 'placeholder' => 'Product Type']) */ ?>

    <?php /* echo $form->field($model, 'language')->textInput(['maxlength' => true, 'placeholder' => 'Language']) */ ?>

    <?php /* echo $form->field($model, 'assign_with')->textInput(['placeholder' => 'Assign With']) */ ?>

    <div class="form-group">
        <?= Html::submitButton(t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
