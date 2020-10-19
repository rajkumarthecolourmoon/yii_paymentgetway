<?php

namespace app\api\modules\controllers;

class ApiController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	//echo "string";die();
        return $this->render('index');
    }

}
