<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UniformPayments */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Uniform Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="uniform-payments-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'transaction_id',
            'amount',
            'cart_reference_id',
            'response',
            'added_on',
            'added_by',
            'added_ip',
            'status',
            'payment_status',
            'added_from',
            'isvalidchecksum',
            'academic_year',
            'gateway',
            'building_code',
            'varna_receipt_id',
            'pay_success_api_response',
            'branch_name',
            'merchant_id',
            'merchant_key',
            'updated_by',
            'updated_ip',
            'updated_on',
            'razorpay_order_id',
            'response_2',
            'razorpay_branch_account_id',
            'razorpay_branch_merchant_key',
            'branch_transfer_response',
            'capture_response',
            'razorpay_payment_id',
            'verify_payment_status',
            'branch_account_no',
            'status_code',
            'status_message',
            'admission_no',
            'student',
        ],
    ]) ?>

</div>
