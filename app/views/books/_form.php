<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bookname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'class')->dropDownList([ 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V', 'VI' => 'VI', 'VII' => 'VII', 'VIII' => 'VIII', 'XI' => 'XI', 'X' => 'X', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'orientation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'academic_year')->dropDownList([ '2016-2017' => '2016-2017', '2017-2018' => '2017-2018', '2018-2019' => '2018-2019', '2019-2020' => '2019-2020', '2020-201' => '2020-201', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'books_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
