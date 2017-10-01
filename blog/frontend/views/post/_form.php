<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Category;
use vova07\imperavi\Widget;



/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<div class="row">

    <div class="col-md-4">
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name')) ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'imageFile')->fileInput() ?>

    </div>

</div>

<?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

<div class="row">

    <div class="col-md-6">
        <?= $form->field($model, 'lead_text')->widget(Widget::className(), [
            'settings' => [
                'lang' => 'en',
                'minHeight' => 300,
                'plugins' => [
                    'fullscreen',
                    'table',
                    'video',
                    'fontsize',
                    'fontfamily'
                ]
            ]
        ]) ?>
    </div>

    <div class="col-md-6">
        <?= $form->field($model, 'content')->widget(Widget::className(), [
            'settings' => [
                'lang' => 'en',
                'minHeight' => 300,
                'plugins' => [
                    'fullscreen',
                    'table',
                    'video',
                    'fontsize',
                    'fontfamily'
                ]
            ]
        ]) ?>
    </div>

</div>

<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-block btn-success' : 'btn btn-block btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>


</div>
