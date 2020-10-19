<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uniform_payments".
 *
 * @property int|null $id
 * @property string $transaction_id
 * @property int $amount
 * @property string $cart_reference_id
 * @property string $response
 * @property string $added_on
 * @property int $added_by
 * @property int $added_ip
 * @property int $status
 * @property string $payment_status
 * @property string $added_from
 * @property string $isvalidchecksum
 * @property int $academic_year
 * @property string $gateway
 * @property string $building_code
 * @property int $varna_receipt_id
 * @property string $pay_success_api_response
 * @property string $branch_name
 * @property string $merchant_id
 * @property string $merchant_key
 * @property int $updated_by
 * @property int $updated_ip
 * @property int $updated_on
 * @property string $razorpay_order_id
 * @property string $response_2
 * @property string $razorpay_branch_account_id
 * @property string $razorpay_branch_merchant_key
 * @property string $branch_transfer_response
 * @property string $capture_response
 * @property string $razorpay_payment_id
 * @property string $verify_payment_status
 * @property string $branch_account_no
 * @property string $status_code
 * @property string $status_message
 * @property string $admission_no
 * @property int $student
 */
class UniformPayments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uniform_payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'amount', 'added_by', 'added_ip', 'status', 'academic_year', 'varna_receipt_id', 'updated_by', 'updated_ip', 'updated_on', 'student'], 'integer'],
            [['transaction_id', 'amount', 'cart_reference_id', 'response', 'added_by', 'added_ip', 'payment_status', 'added_from', 'isvalidchecksum', 'academic_year', 'gateway', 'building_code', 'varna_receipt_id', 'pay_success_api_response', 'branch_name', 'merchant_id', 'merchant_key', 'updated_by', 'updated_ip', 'updated_on', 'razorpay_order_id', 'response_2', 'razorpay_branch_account_id', 'razorpay_branch_merchant_key', 'branch_transfer_response', 'capture_response', 'razorpay_payment_id', 'verify_payment_status', 'branch_account_no', 'status_code', 'status_message', 'admission_no', 'student'], 'required'],
            [['added_on'], 'safe'],
            [['transaction_id', 'cart_reference_id', 'response', 'merchant_id', 'merchant_key', 'razorpay_order_id', 'response_2', 'razorpay_branch_account_id', 'razorpay_branch_merchant_key', 'branch_transfer_response', 'capture_response', 'razorpay_payment_id', 'verify_payment_status', 'branch_account_no', 'status_code'], 'string', 'max' => 150],
            [['payment_status', 'added_from', 'isvalidchecksum', 'branch_name', 'status_message', 'admission_no'], 'string', 'max' => 50],
            [['gateway', 'building_code'], 'string', 'max' => 120],
            [['pay_success_api_response'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transaction_id' => 'Transaction ID',
            'amount' => 'Amount',
            'cart_reference_id' => 'Cart Reference ID',
            'response' => 'Response',
            'added_on' => 'Added On',
            'added_by' => 'Added By',
            'added_ip' => 'Added Ip',
            'status' => 'Status',
            'payment_status' => 'Payment Status',
            'added_from' => 'Added From',
            'isvalidchecksum' => 'Isvalidchecksum',
            'academic_year' => 'Academic Year',
            'gateway' => 'Gateway',
            'building_code' => 'Building Code',
            'varna_receipt_id' => 'Varna Receipt ID',
            'pay_success_api_response' => 'Pay Success Api Response',
            'branch_name' => 'Branch Name',
            'merchant_id' => 'Merchant ID',
            'merchant_key' => 'Merchant Key',
            'updated_by' => 'Updated By',
            'updated_ip' => 'Updated Ip',
            'updated_on' => 'Updated On',
            'razorpay_order_id' => 'Razorpay Order ID',
            'response_2' => 'Response 2',
            'razorpay_branch_account_id' => 'Razorpay Branch Account ID',
            'razorpay_branch_merchant_key' => 'Razorpay Branch Merchant Key',
            'branch_transfer_response' => 'Branch Transfer Response',
            'capture_response' => 'Capture Response',
            'razorpay_payment_id' => 'Razorpay Payment ID',
            'verify_payment_status' => 'Verify Payment Status',
            'branch_account_no' => 'Branch Account No',
            'status_code' => 'Status Code',
            'status_message' => 'Status Message',
            'admission_no' => 'Admission No',
            'student' => 'Student',
        ];
    }
}
