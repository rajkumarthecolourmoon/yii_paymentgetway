<?php

namespace app\modules\api\controllers;
use Yii;
use app\modules\api\models\Api;
use yii\db\Expression;

// 
class ApiController extends \yii\web\Controller
{
	public $enableCsrfValidation=false;

    public function actionIndex()
    {
    	
    }
    public function actionEmployecreate()
    {
    	   \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
    	   $api = new Api();
          $api->scenario = Api:: SCENARIO_CREATE;
         $api->attributes = \yii::$app->request->post();
           if($api->validate()){
           $api->save();
       return array('status' => true, 'data'=> 'Api list create successfully');

    }else
      {
       return array('status'=>false,'data'=> $api->getErrors());    
}
    }
    public function actionApilist(){

   \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
		$api = api::find()->all();
		if(count($api) > 0 )
		{
		return array('status' => true, 'data'=> $api);
		}
		else
		{
		return array('status'=>false,'data'=> 'No Student Found');
		}
		}
    public function actionUpdate()
   {
     echo "string";die;
           \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;     
         $attributes = \yii::$app->request->post();
        $api = $this->findModel($id);
             
           if ($api->load(Yii::$app->request->post()) && $model->update()){
            return array('status' => true, 'data'=> $api);

        }else{
    return array('status'=>false,'data'=> 'No Student Found');

        }
      }

    public function actionDelete(){
      \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
       $attributes = \yii::$app->request->post();
          $api = Api::findOne(11);
    
           $api->delete();
             return array('status' => true, 'data'=> $api);
          
      
      return array('status'=>false,'data'=> 'No Student Found');
      }
    
}
