<?php

namespace app\controllers;

use Yii;
use app\models\Users;
use app\models\UsersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\helpers\Url;
/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('payment', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Users model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Users();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Users model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Users model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


   public function actionPay(){

    return $this->render('payment');
}
public function beforeAction($action) 
{ 
    $this->enableCsrfValidation = false; 
    return parent::beforeAction($action); 
}
public function actionPayment(){
// print_r($_POST);
// die();
  require('../thirdparty/paytmkit/lib/config_paytm.php');
  require('../thirdparty/paytmkit/lib/encdec_paytm.php');
    $checkSum = "";
   $paramList = array();
$data = array(
$ORDER_ID = $_POST["ORDER_ID"],
$CUST_ID = $_POST["CUST_ID"],
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"],
$CHANNEL_ID = $_POST["CHANNEL_ID"],
$TXN_AMOUNT = $_POST["TXN_AMOUNT"],

);
// echo "<pre/>";
// print_r($data);die();

$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$paramList["CALLBACK_URL"] = "http://localhost:8080/app/web/users/paytmresponse";
       $paramList["MSISDN"] = '9848604561'; //Mobile number of customer
       $paramList["EMAIL"] = 'rajkumar@thecolourmoon.com'; //Email ID of customer
       $paramList["VERIFIED_BY"] = "EMAIL"; //
       $paramList["IS_USER_VERIFIED"] = "YES"; //

$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);
return $this->render('send', ['paramList'=>$paramList,
 'checkSum'=>$checkSum]);


}




 public function actionPaytmresponse(){
  require('../thirdparty/paytmkit/lib/config_paytm.php');
    require('../thirdparty/paytmkit/lib/encdec_paytm.php');
 $paytmChecksum = "";
 $paramList = array();
 $isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return
if($isValidChecksum == "TRUE") {
    echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
    if ($_POST["STATUS"] == "TXN_SUCCESS") {
        echo "<b>Transaction status is success</b>" . "<br/>";
    }else {
        echo "<b>Transaction status is failure</b>" . "<br/>";
    }

    if (isset($_POST) && count($_POST)>0 )
    { 
        foreach($_POST as $paramName => $paramValue) {
                echo "<br/>" . $paramName . " = " . $paramValue;
        }
    }
}
else {
    echo "<b>Checksum mismatched.</b>";
    //Process transaction as suspicious.
}
}
     public function actionStatus(){
         require('../thirdparty/paytmkit/lib/config_paytm.php');
    require('../thirdparty/paytmkit/lib/encdec_paytm.php');
     $ORDER_ID = "";
    $requestParamList = array();
    $responseParamList = array();

    if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {
        $ORDER_ID = $_POST["ORDER_ID"];
        $requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
        $StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
        $requestParamList['CHECKSUMHASH'] = $StatusCheckSum;
        $responseParamList = getTxnStatusNew($requestParamList);
    }

     }





}
