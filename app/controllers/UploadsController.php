<?php

namespace app\controllers;

use Yii;
use app\models\Uploads;
use app\models\UploadsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * UploadsController implements the CRUD actions for Uploads model.
 */
class UploadsController extends Controller
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
     * Lists all Uploads models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Uploads();
        $searchModel = new UploadsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        $finalData = array();
		$crops_data = array();
		if (Yii::$app->request->post()) {
			$model->file = UploadedFile::getInstance($model, 'file');
                //      if (empty($model->file)) {
                         
                //       $flash = Yii::$app->session->setFlash('standards-empty');
                //      //
				// return $this->redirect(['index']);
                //      }
                $upload = $model->file->saveAs(Yii::getAlias('@webroot').'/upload/'.$model->file);
                $csv = $model->file;
                $inputFile = '../web/upload/'.$csv;
                try {
                    
                    $inputFileType = \PHPExcel_IOFactory::identify($inputFiles);
                    $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader ->load($inputFiles);
                  } catch (Exception $ex) {
                    die('Error');
                  }
                                echo "<pre>";print_r($inputFileType);die();
                $sheet = $objPHPExcel->getSheet(0);
                $highestRow = $sheet->getHighestRow();
                $highestColumn = $sheet->getHighestColumn();
                $dataColumn = $sheet->getHighestDataColumn();
                            //echo "<pre>";print_r($highestColumn);die();
                $check = 1;
                $row2 = 1;
                $duplicates = array();
                $rowDataheader = $sheet->rangeToArray('A'.$row2.':'.$dataColumn.$row2,NULL,TRUE,FALSE);
    //                        echo "<pre>";print_r($rowDataheader);die();
    
                if(empty($rowDataheader[0][0])) {
                                 
                    $check = 0;
                    $flash = Yii::$app->session->setFlash('standards-wrong-file');
                                   
                    return $this->redirect(['index']);
                     
                }

        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
    }

    /**
     * Displays a single Uploads model.
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
     * Creates a new Uploads model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Uploads();
            if (isset($_POST['submit'])) {
            if (!empty($_POST['name'])  && $model->unique()) {
                $model->name = strip_tags(trim($_POST['name']));
                $model->subject = strip_tags(trim($_POST['subject']));
                $model->class = strip_tags(trim($_POST['class']));
                $model->save(false);
                 Yii::$app->session->setFlash('success ');
             }
            }else{
               Yii::$app->session->setFlash('danger');
            }

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->id]);
        // }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Uploads model.
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
     * Deletes an existing Uploads model.
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
     * Finds the Uploads model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Uploads the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Uploads::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


}
