<?php

class PendaftaranController extends Controller
{
	
	public $layout='//layouts/column2';

	const URLUPLOAD = '/../upload/foto_peserta/';

	
	public function actionView($id)
	{
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	
	public function actionCreate()
	{
		$model=new Peserta;

		
		if(isset($_POST['Peserta']))
		{
			$model->attributes=$_POST['Peserta'];
			$model->code_reg=Peserta::randomCode();
			$model->FOTO_PESERTA=CUploadedFile::getInstance($model,'FOTO_PESERTA');
			if($model->save())
				$model->FOTO_PESERTA->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->FOTO_PESERTA . '');
				$this->redirect(array('view','id'=>$model->ID_PESERTA));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionIndex()
	{
		IsAuth::Peserta();

		$dataProvider=new CActiveDataProvider('Peserta');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	
	public function loadModel($id)
	{
		$model=Peserta::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pendaftaran-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
