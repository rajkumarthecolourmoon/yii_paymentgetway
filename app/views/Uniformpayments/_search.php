<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UniformpaymentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uniform-payments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'transaction_id') ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'cart_reference_id') ?>

    <?= $form->field($model, 'response') ?>

    <?php // echo $form->field($model, 'added_on') ?>

    <?php // echo $form->field($model, 'added_by') ?>

    <?php // echo $form->field($model, 'added_ip') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'payment_status') ?>

    <?php // echo $form->field($model, 'added_from') ?>

    <?php // echo $form->field($model, 'isvalidchecksum') ?>

    <?php // echo $form->field($model, 'academic_year') ?>

    <?php // echo $form->field($model, 'gateway') ?>

    <?php // echo $form->field($model, 'building_code') ?>

    <?php // echo $form->field($model, 'varna_receipt_id') ?>

    <?php // echo $form->field($model, 'pay_success_api_response') ?>

    <?php // echo $form->field($model, 'branch_name') ?>

    <?php // echo $form->field($model, 'merchant_id') ?>

    <?php // echo $form->field($model, 'merchant_key') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'updated_ip') ?>

    <?php // echo $form->field($model, 'updated_on') ?>

    <?php // echo $form->field($model, 'razorpay_order_id') ?>

    <?php // echo $form->field($model, 'response_2') ?>

    <?php // echo $form->field($model, 'razorpay_branch_account_id') ?>

    <?php // echo $form->field($model, 'razorpay_branch_merchant_key') ?>

    <?php // echo $form->field($model, 'branch_transfer_response') ?>

    <?php // echo $form->field($model, 'capture_response') ?>

    <?php // echo $form->field($model, 'razorpay_payment_id') ?>

    <?php // echo $form->field($model, 'verify_payment_status') ?>

    <?php // echo $form->field($model, 'branch_account_no') ?>

    <?php // echo $form->field($model, 'status_code') ?>

    <?php // echo $form->field($model, 'status_message') ?>

    <?php // echo $form->field($model, 'admission_no') ?>

    <?php // echo $form->field($model, 'student') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
