<?php

class ManageadminController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	const URLUPLOAD = '/../upload/foto_admin/';

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
		$model=new Admin;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Admin']))
		{
			$model->attributes=$_POST['Admin'];
			$model->FOTO_ADMIN=CUploadedFile::getInstance($model,'FOTO_ADMIN');
			if($model->save())
			$model->FOTO_ADMIN->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->FOTO_ADMIN . '');

				$this->redirect(array('view','id'=>$model->admin_id));
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

	public function actionUpdateadmin() {
        /* untuk cek apakah user telah login atau belum */
        IsAuth::Admin();
        /* findbyPK data user yang login */
        $model = Admin::model()->findByPk(Yii::app()->user->id);
        /* jika POST maka
         * ubahpassword */
        if (isset($_POST['Admin'])) {
            $model->setAttributes($_POST['Admin']);
            $model->FOTO_PESERTA=CUploadedFile::getInstance($model,'FOTO_ADMIN');
            $model->password = md5($model->password);            
            /* jika changepassword maka direct ke halaman success */
            if ($model->save()){
                $model->FOTO_ADMIN->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->FOTO_ADMIN . '');
                $this->redirect(array('manageadmin/admin/'));
            }
        }
        /* render ke view ubah password */
        $this->render('updateadmin', array('model' => $model));
    }

	public function actionUpdate($id)
	{
		IsAuth::Admin();
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Admin']))
		{
			$model->attributes=$_POST['Admin'];
			$model->FOTO_ADMIN=CUploadedFile::getInstance($model,'FOTO_ADMIN');

			if($model->save())
			$model->FOTO_ADMIN->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->FOTO_ADMIN . '');
			$this->redirect(array('view','id'=>$model->admin_id));
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
		/*IsAuth::Admin();
		$dataProvider=new CActiveDataProvider('Admin');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/
		# mPDF
        $mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');
 
         # render (full page)
        $mPDF1->WriteHTML(utf8_encode($this->renderPartial('index', array(), true)));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		IsAuth::Admin();
		$model=new Admin('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Admin']))
			$model->attributes=$_GET['Admin'];

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
		$model=Admin::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='admin-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
