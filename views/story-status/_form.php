<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StoryStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="story-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'is_backlog')->dropDownList(['0'=>'否','1'=>'是']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'sort')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
