<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UniformpaymentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uniform Payments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uniform-payments-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Uniform Payments', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'transaction_id',
            'amount',
            'cart_reference_id',
           // 'response',
            'added_on',
            'added_by',
            'added_ip',
            'status',
            // 'payment_status',
            // 'added_from',
            // 'isvalidchecksum',
            // 'academic_year',
            // 'gateway',
            // 'building_code',
            // 'varna_receipt_id',
            // 'pay_success_api_response',
            // 'branch_name',
            // 'merchant_id',
            // 'merchant_key',
            // 'updated_by',
            // 'updated_ip',
            // 'updated_on',
            // 'razorpay_order_id',
           // 'response_2',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
