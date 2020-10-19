<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class')->dropDownList([ 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V', 'VI' => 'VI', 'VII' => 'VII', 'VIII' => 'VIII', 'XI' => 'XI', 'X' => 'X', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'orientation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dob')->textInput() ?>

    <?= $form->field($model, 'academic_year')->dropDownList([ '2016-2017' => '2016-2017', '2017-2018' => '2017-2018', '2018-2019' => '2018-2019', '2019-2020' => '2019-2020', '2020-2021' => '2020-2021', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

   
    <?= $form->field($model, 'student_id')->radioList(['label' => 'male','data-size'=>'small','class'=>'bs_switch'
,'style'=>'margin-bottom:4px;', 'id'=>'active1']) ?>

        
        <?= $form->field($model, 'student_id')->radioList([1 => 'Male', 0 => 'Female'], ['separator' => '', 'tabindex' => 3,'id'=>'active1']); ?>
         <?= $form->field($model, 'student_id')->radioList([1 => 'Male', 0 => 'Female'], ['separator' => '', 'tabindex' => 3,'id'=>'active2']); ?>
          <?= $form->field($model, 'student_id')->radioList([1 => 'Male', 0 => 'Female'], ['separator' => '', 'tabindex' => 3,'id'=>'active3']); ?>








    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
