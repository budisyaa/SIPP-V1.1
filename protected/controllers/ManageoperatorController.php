<?php

class ManageoperatorController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	const URLUPLOAD = '/../upload/foto_opr/';

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		IsAuth::Admin();
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		IsAuth::Admin();
		$model=new Operator;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Operator']))
		{
			$model->attributes=$_POST['Operator'];
			$model->foto_opr=CUploadedFile::getInstance($model,'foto_opr');
			if($model->save())
			$model->foto_opr->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->foto_opr . '');

				$this->redirect(array('view','id'=>$model->id_opr));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */

	public function actionUpdateoperator() {
        /* untuk cek apakah user telah login atau belum */
        IsAuth::Admin();
        /* findbyPK data user yang login */
        $model = Operator::model()->findByPk(Yii::app()->user->id);
        /* jika POST maka
         * ubahpassword */
        if (isset($_POST['Operator'])) {
            $model->setAttributes($_POST['Operator']);
            $model->foto_opr=CUploadedFile::getInstance($model,'foto_opr');
            $model->password = md5($model->password);            
            /* jika changepassword maka direct ke halaman success */
            if ($model->save()){
                $model->foto_opr->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->foto_opr . '');
                $this->redirect(array('manageoeprator/admin/'));
            }
        }
        /* render ke view ubah password */
        $this->render('updateoperator', array('model' => $model));
    }

	public function actionUpdate($id)
	{
		IsAuth::Admin();
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Operator']))
		{
			$model->attributes=$_POST['Operator'];
			$model->foto_opr=CUploadedFile::getInstance($model,'foto_opr');

			if($model->save())
			$model->foto_opr->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->foto_opr . '');
			$this->redirect(array('view','id'=>$model->id_opr));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		IsAuth::Admin();
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		if (!isset(Yii::app()->user->operatorLogin) && !isset(Yii::app()->user->adminLogin)) {
            $this->redirect(array('site/'));
        } else {
        	$this->render('index');
        }
		/*$dataProvider=new CActiveDataProvider('Operator');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		IsAuth::Staff();
		$model=new Operator('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Operator']))
			$model->attributes=$_GET['Operator'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Admin the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Operator::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Admin $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='operator-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
