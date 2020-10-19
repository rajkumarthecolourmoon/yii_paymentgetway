<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UniformPayments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uniform-payments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'transaction_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'cart_reference_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'response')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'added_on')->textInput() ?>

    <?= $form->field($model, 'added_by')->textInput() ?>

    <?= $form->field($model, 'added_ip')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'payment_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'added_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isvalidchecksum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'academic_year')->textInput() ?>

    <?= $form->field($model, 'gateway')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'building_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'varna_receipt_id')->textInput() ?>

    <?= $form->field($model, 'pay_success_api_response')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'merchant_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'merchant_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'updated_ip')->textInput() ?>

    <?= $form->field($model, 'updated_on')->textInput() ?>

    <?= $form->field($model, 'razorpay_order_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'response_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'razorpay_branch_account_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'razorpay_branch_merchant_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch_transfer_response')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capture_response')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'razorpay_payment_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verify_payment_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch_account_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_message')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admission_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
