<?php

namespace app\controllers;

class UniformController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }


public function actionList(){

	  $data =     'http://202.65.141.182/fountainhead/api/uniform_products.php?token=chaitanya&branch_id=33&class_id=035bde94-de08-93b2-cca5-63e4a37c&gender=8bb0af9a-c173-41dd-9c0c-ab5864cf24bc';  

 $ch = curl_init();
        $optArray = array(
                CURLOPT_URL => $data,
                //            CURLOPT_POST => TRUE,
                //            CURLOPT_POSTFIELDS => $params,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_CONNECTTIMEOUT => 10
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        $result = json_decode($result, true);
        $data  =[];    
        $a = 0;
        $b= 0;
        foreach ($result as $dress) {
           if ($b==0) {
           	$data[$b]['product_name'] =  $dress['product_name'];
           	$data[$b]['products'][]  =[
           		'product_id'     => $dress['product_id'],
           		'product_name'   => $dress['product_name'],
           		'category_id'    => $dress['category_id'],
           		'size'           => $dress['size'],
           		'category_name'  => $dress['category_name'],
           		'category_short_code'=> $dress['category_short_code'],
           		'sale_price'     => $dress['sale_price'],
           		'tax_rate'       => $dress['tax_rate'],
           		'spmid'          => $dress['spmid'],
           	];
           }
        }
        // echo "<pre/>";
        // print_r($data);die();
}
}
