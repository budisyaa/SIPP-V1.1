<?php

class AkunController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';
    const URLUPLOAD = '/../upload/foto_peserta/';
    const URLUPLOADHASIL = '/../upload/hasil/';
    const URLUPLOADSYARAT = '/../upload/syarat/';
    const URLUPLOADPROPOSAL = '/../upload/proposal/';

	public function actionIndex() {
        if (!isset(Yii::app()->user->pesertaLogin)) {
            $model = new PesertaLoginForm;
            // jika ajax maka divalidasi dengan ajax
            if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
                /* tampilkan hasil validasi form */
                echo CActiveForm::validate($model);
                /* end/exit/die */
                Yii::app()->end();
            }

            // ambil data yang diinput oleh user
            if (isset($_POST['PesertaLoginForm'])) {
                $model->attributes = $_POST['PesertaLoginForm'];
                /* validaasi data yang diinput oleh user dan
                 * jika valid maka ...
                 */
                if ($model->validate() && $model->login()) {
                    /* redirect ke halaman yang diinginkan
                     * */
                    $this->redirect(array('/'));
                }
            }
            $this->render("login", array('model' => $model));
        }
        else {
            $this->render("index");
        }
    }

    public function actionDaftar() {
        $model = new Peserta;
        if (isset($_POST['Peserta'])) {
            $model->attributes = $_POST['Peserta'];
            $model->FOTO_PESERTA=CUploadedFile::getInstance($model,'FOTO_PESERTA');
            $model->status_peserta='1';
            $model->TANGGAL_MODIFIKASI= new CDbExpression('NOW()');
            $model->STATUS='0';
            $model->STATUS_HASIL='0';
            $model->password = md5($model->password);
            if ($model->save()) {
            $model->FOTO_PESERTA->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->FOTO_PESERTA . '');
            $name = getcwd() . '/upload/foto_peserta/' . $model->FOTO_PESERTA;
            $image = Yii::app()->image->load($name);
            $image->resize(151,201);
            $image->save();
            $this->redirect(array('site/login/'));
            }
        }
        $this->render('daftar', array("model" => $model));
    }


    public function actionUbahprofil() {
        /* untuk cek apakah user telah login atau belum */
        IsAuth::Peserta();
        /* findbyPK data user yang login */
        $model = Peserta::model()->findByPk(Yii::app()->user->id);
        /* jika POST maka
         * ubahpassword */
        if (isset($_POST['Peserta'])) {
            $model->setAttributes($_POST['Peserta']);
            $model->FOTO_PESERTA=CUploadedFile::getInstance($model,'FOTO_PESERTA');
            $model->password = md5($model->password);            
            /* jika changepassword maka direct ke halaman success */
            if ($model->save()){
                $model->FOTO_PESERTA->saveAs(Yii::app()->basePath . self::URLUPLOAD . $model->FOTO_PESERTA . '');
                $this->redirect(array('akun/pesertainfo/'));
            }
        }
        /* render ke view ubah password */
        $this->render('ubahprofil', array('model' => $model));
    }

    public function actionTambahSyarat() {
        /* untuk cek apakah user telah login atau belum */
        IsAuth::Peserta();
        /* findbyPK data user yang login */
        $model = new Syarat;
        if (isset($_POST['Syarat'])) 
        {
            $model->attributes = $_POST['Syarat'];
            $model->ID_PESERTA=Yii::app()->user->id;
            $model->SYARAT1=CUploadedFile::getInstance($model,'SYARAT1');
            $model->SYARAT2=CUploadedFile::getInstance($model,'SYARAT2');
            $model->SYARAT3=CUploadedFile::getInstance($model,'SYARAT3');
 
            /* jika changepassword maka direct ke halaman success */
            if ($model->save()) {
                $model->SYARAT1->saveAs(Yii::app()->basePath . self::URLUPLOADSYARAT . $model->SYARAT1 . '');
                $model->SYARAT2->saveAs(Yii::app()->basePath . self::URLUPLOADSYARAT . $model->SYARAT2 . '');
                $model->SYARAT3->saveAs(Yii::app()->basePath . self::URLUPLOADSYARAT . $model->SYARAT3 . '');
                
                $this->redirect(array('/site/logout/'));
            }
        }
        /* render ke view ubah password */
        $this->render('tambahsyarat', array('model' => $model));
    }

    public function actionTambahProposal() {
        /* untuk cek apakah user telah login atau belum */
        IsAuth::Peserta();
        /* findbyPK data user yang login */
        $model = new Proposal;
        $pesertaModel = Peserta::model()->findByAttributes(array('ID_PESERTA' => Yii::app()->user->id));
        if (isset($_POST['Proposal'])) 
        {
            $model->attributes = $_POST['Proposal'];
            $model->ID_PESERTA=Yii::app()->user->id;
            $pesertaModel->status_peserta='0';
            $model->NAMA_PROPOSAL=CUploadedFile::getInstance($model,'NAMA_PROPOSAL');
                        /* jika changepassword maka direct ke halaman success */
            if ($model->save()) {
                $pesertaModel->save();
                $model->NAMA_PROPOSAL->saveAs(Yii::app()->basePath . self::URLUPLOADPROPOSAL . $model->NAMA_PROPOSAL . '');
                $this->redirect(array('akun/tambahsyarat/'));
            }
        }
        /* render ke view ubah password */
        $this->render('tambahproposal', array('model' => $model));
    }

    public function actionTambahhasil() {
        /* untuk cek apakah user telah login atau belum */
        IsAuth::Peserta();
        /* findbyPK data user yang login */
        $model = new Hasil;
        /* jika POST maka
         * ubahpassword */
        if (isset($_POST['Hasil'])) 
        {
            $model->attributes = $_POST['Hasil'];
            $model->ID_PESERTA=Yii::app()->user->id;
            $model->NAMA_HASIL=CUploadedFile::getInstance($model,'NAMA_HASIL');
            $model->NAMA_HASIL2=CUploadedFile::getInstance($model,'NAMA_HASIL2');
            /* jika changepassword maka direct ke halaman success */
            if ($model->save()) {
                $model->NAMA_HASIL->saveAs(Yii::app()->basePath . self::URLUPLOADHASIL . $model->NAMA_HASIL . '');
                $model->NAMA_HASIL2->saveAs(Yii::app()->basePath . self::URLUPLOADHASIL . $model->NAMA_HASIL2 . '');
                $this->redirect(array('akun/pesertainfo/'));
            }
        }
        /* render ke view ubah password */
        $this->render('tambahhasil', array('model' => $model));
    }

    public function actionPesertainfo()
    {
        //IsAuth::Peserta();
        $model = Peserta::model()->findByPk(Yii::app()->user->id);
        if (isset($_POST['Peserta'])){
          $model->setAttributes($_POST['Peserta']);  
        }
        $this->render('pesertainfo',array(
            'model'=>$model)
        );
    }


        public function loadModel($id) {
        $model = Peserta::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'Peserta-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
