<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UniformPayments;

/**
 * UniformpaymentsSearch represents the model behind the search form of `app\models\UniformPayments`.
 */
class UniformpaymentsSearch extends UniformPayments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'amount', 'added_by', 'added_ip', 'status', 'academic_year', 'varna_receipt_id', 'updated_by', 'updated_ip', 'updated_on', 'student'], 'integer'],
            [['transaction_id', 'cart_reference_id', 'response', 'added_on', 'payment_status', 'added_from', 'isvalidchecksum', 'gateway', 'building_code', 'pay_success_api_response', 'branch_name', 'merchant_id', 'merchant_key', 'razorpay_order_id', 'response_2', 'razorpay_branch_account_id', 'razorpay_branch_merchant_key', 'branch_transfer_response', 'capture_response', 'razorpay_payment_id', 'verify_payment_status', 'branch_account_no', 'status_code', 'status_message', 'admission_no'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = UniformPayments::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'amount' => $this->amount,
            'added_on' => $this->added_on,
            'added_by' => $this->added_by,
            'added_ip' => $this->added_ip,
            'status' => $this->status,
            'academic_year' => $this->academic_year,
            'varna_receipt_id' => $this->varna_receipt_id,
            'updated_by' => $this->updated_by,
            'updated_ip' => $this->updated_ip,
            'updated_on' => $this->updated_on,
            'student' => $this->student,
        ]);

        $query->andFilterWhere(['like', 'transaction_id', $this->transaction_id])
            ->andFilterWhere(['like', 'cart_reference_id', $this->cart_reference_id])
            ->andFilterWhere(['like', 'response', $this->response])
            ->andFilterWhere(['like', 'payment_status', $this->payment_status])
            ->andFilterWhere(['like', 'added_from', $this->added_from])
            ->andFilterWhere(['like', 'isvalidchecksum', $this->isvalidchecksum])
            ->andFilterWhere(['like', 'gateway', $this->gateway])
            ->andFilterWhere(['like', 'building_code', $this->building_code])
            ->andFilterWhere(['like', 'pay_success_api_response', $this->pay_success_api_response])
            ->andFilterWhere(['like', 'branch_name', $this->branch_name])
            ->andFilterWhere(['like', 'merchant_id', $this->merchant_id])
            ->andFilterWhere(['like', 'merchant_key', $this->merchant_key])
            ->andFilterWhere(['like', 'razorpay_order_id', $this->razorpay_order_id])
            ->andFilterWhere(['like', 'response_2', $this->response_2])
            ->andFilterWhere(['like', 'razorpay_branch_account_id', $this->razorpay_branch_account_id])
            ->andFilterWhere(['like', 'razorpay_branch_merchant_key', $this->razorpay_branch_merchant_key])
            ->andFilterWhere(['like', 'branch_transfer_response', $this->branch_transfer_response])
            ->andFilterWhere(['like', 'capture_response', $this->capture_response])
            ->andFilterWhere(['like', 'razorpay_payment_id', $this->razorpay_payment_id])
            ->andFilterWhere(['like', 'verify_payment_status', $this->verify_payment_status])
            ->andFilterWhere(['like', 'branch_account_no', $this->branch_account_no])
            ->andFilterWhere(['like', 'status_code', $this->status_code])
            ->andFilterWhere(['like', 'status_message', $this->status_message])
            ->andFilterWhere(['like', 'admission_no', $this->admission_no]);

        return $dataProvider;
    }
}
