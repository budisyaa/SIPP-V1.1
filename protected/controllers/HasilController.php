<?php

class HasilController extends Controller
{
	
	public $layout='//layouts/column2';
	const URLUPLOAD = '/../upload/hasil/';

	
	public function actionView($id)
	{
		IsAuth::Admin();
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	
	public function actionCreate()
	{
		IsAuth::Admin();
		$model=new Hasil;

		
		if(isset($_POST['Hasil']))
		{
			$model->attributes=$_POST['Hasil'];
			$model->NAMA_HASIL=CUploadedFile::getInstance($model,'NAMA_HASIL');
			$model->NAMA_HASIL2=CUploadedFile::getInstance($model,'NAMA_HASIL2');
			if($model->save())
				$model->NAMA_HASIL->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->NAMA_HASIL . '');
				$model->NAMA_HASIL2->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->NAMA_HASIL2 . '');
				$this->redirect(array('view','id'=>$model->ID_HASIL));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
		IsAuth::Admin();
		$model=$this->loadModel($id);

		
		if(isset($_POST['Hasil']))
		{
			$model->attributes=$_POST['Hasil'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_HASIL));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	
	public function actionDelete($id)
	{
		IsAuth::Admin();
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	
	public function actionIndex()
	{
		IsAuth::Admin();
		$dataProvider=new CActiveDataProvider('Hasil');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	
	public function actionAdmin()
	{
		IsAuth::Admin();
		$model=new Hasil('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Hasil']))
			$model->attributes=$_GET['Hasil'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	
	public function loadModel($id)
	{
		$model=Hasil::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='hasil-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
