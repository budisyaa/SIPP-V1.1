<?php

class AdminController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/login';

	public function actionIndex()
	{
		if (isset(Yii::app()->user->adminLogin) == TRUE) {
            $this->redirect(array('peserta/admin'));
        }
        /* panggil model AdminLoginForm
         * dan di tampung oleh $model */
        $model = new AdminLoginForm;

        // jika ajax maka divalidasi dengan ajax
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            /* tampilkan hasil validasi form */
            echo CActiveForm::validate($model);
            /* end/exit/die */
            Yii::app()->end();
        }

        // ambil data yang diinput oleh user
        if (isset($_POST['AdminLoginForm'])) {
            $model->attributes = $_POST['AdminLoginForm'];
            /* validaasi data yang diinput oleh user dan
             * jika valid maka ...
             */
            if ($model->validate() && $model->login()) {
                /* redirect ke halaman yang diinginkan
                 * (dalam hal ini kita direct ke halaman product/admin)
                 * */
                $this->redirect(array('manageadmin/admin'));
            }
        }
        // tampilkan login form
        $this->render('index', array('model' => $model));
	}

        /**
     * Log out, dan akan didirect ke halaman homepage.
     */
    public function actionLogout() {
        /* logout user */
        Yii::app()->user->logout();
        /* direct ke halaman yang diinginkan */
        $this->redirect(array('/admin'));
    }
}
