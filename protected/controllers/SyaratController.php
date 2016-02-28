<?php

class SyaratController extends Controller
{
	
	public $layout='//layouts/column2';

	const URLUPLOAD = '/../upload/syarat/';


	
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
		$model=new Syarat;

		if(isset($_POST['Syarat']))
		{
			$model->attributes=$_POST['Syarat'];
			$model->SYARAT1=CUploadedFile::getInstance($model,'SYARAT1');
			$model->SYARAT2=CUploadedFile::getInstance($model,'SYARAT2');
			$model->SYARAT3=CUploadedFile::getInstance($model,'SYARAT3');
			$model->SYARAT4=CUploadedFile::getInstance($model,'SYARAT4');
			$model->SYARAT5=CUploadedFile::getInstance($model,'SYARAT5');
			if($model->save())
				
			$model->SYARAT1->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->SYARAT1 . '');
			$model->SYARAT2->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->SYARAT2 . '');
			$model->SYARAT3->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->SYARAT3 . '');
			$model->SYARAT4->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->SYARAT4 . '');
			$model->SYARAT5->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->SYARAT5 . '');
			$this->redirect(array('view','id'=>$model->ID_SYARAT));

		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
		IsAuth::Admin();
		$model=$this->loadModel($id);

		

		if(isset($_POST['Syarat']))
		{
			$model->attributes=$_POST['Syarat'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_SYARAT));
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
		$dataProvider=new CActiveDataProvider('Syarat');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	
	public function actionAdmin()
	{
		IsAuth::Admin();
		$model=new Syarat('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Syarat']))
			$model->attributes=$_GET['Syarat'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	
	public function loadModel($id)
	{
		$model=Syarat::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='syarat-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
