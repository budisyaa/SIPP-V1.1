<?php

class PesertaController extends Controller
{
	
	public $layout='//layouts/column2';

	const URLUPLOAD = '/../upload/foto_peserta/';

	
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

	public function actionPeserta()
	{
		IsAuth::Admin();
		$model=new Peserta('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Peserta']))
			$model->attributes=$_GET['Peserta'];

		$this->render('peserta',array(
			'model'=>$model,
		));
	}

		public function actionPesertahasil()
	{
		IsAuth::Admin();
		$model=new Peserta('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Peserta']))
			$model->attributes=$_GET['Peserta'];

		$this->render('pesertahasil',array(
			'model'=>$model,
		));
	}

	public function actionUpdatestatus($id)
	{
		IsAuth::Admin();
		
		$model=$this->loadModel($id);

		
		if(isset($_POST['Peserta']))
		{
			$model->attributes=$_POST['Peserta'];
			$model->MASA_BERLAKU_AWAL= new CDbExpression('NOW()');
			$model->MASA_BERLAKU_AKHIR=date('Y-m-d', strtotime("+3 months"));

			//$model->MASA_BERLAKU_AKHIR= new CDbExpression('NOW()');
			if($model->save()){
				$status = $model ->findByAttributes(array('ID_PESERTA' => $id, 'STATUS' => '1'));
				if($status !=null){
					$model -> status_peserta = '1';
					$model->save();
				}
				$status = $model ->findByAttributes(array('ID_PESERTA' => $id, 'STATUS' => '2'));
				if($status !=null){
					$model -> status_peserta = '0';
					$model->save();
				}
				
			}
				$this->redirect(array('view','id'=>$model->ID_PESERTA));
		}

		$this->render('updatestatus',array(
			'model'=>$model,
		));
	}
	
	public function actionUpdatestatushasil($id)
	{
		IsAuth::Admin();
		
		$model=$this->loadModel($id);

		
		if(isset($_POST['Peserta']))
		{
			$model->attributes=$_POST['Peserta'];
			
			if($model->save()){
				$model->save();
				
				
			}
				$this->redirect(array('view','id'=>$model->ID_PESERTA));
		}

		$this->render('updatestatushasil',array(
			'model'=>$model,
		));
	}
	

	public function actionUpdate($id)
	{
		IsAuth::Admin();
		
		$model=$this->loadModel($id);

		
		if(isset($_POST['Peserta']))
		{
			$model->attributes=$_POST['Peserta'];
			$model->MASA_BERLAKU_AWAL= new CDbExpression('NOW()');
			$model->MASA_BERLAKU_AKHIR=date('Y-m-d', strtotime("+3 months"));
			//$model->MASA_BERLAKU_AKHIR= new CDbExpression('NOW()');
			$model->FOTO_PESERTA=CUploadedFile::getInstance($model,'FOTO_PESERTA');
			if($model->save()){
				$model->FOTO_PESERTA->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->FOTO_PESERTA . '');
			}
				$this->redirect(array('view','id'=>$model->ID_PESERTA));
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

		$dataProvider=new CActiveDataProvider('Peserta');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	
	public function actionAdmin()
	{
		IsAuth::Admin();
		$model=new Peserta('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Peserta']))
			$model->attributes=$_GET['Peserta'];

		$this->render('admin',array(
			'model'=>$model,
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='peserta-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
