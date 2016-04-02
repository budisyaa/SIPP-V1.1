<?php

class OperatorLoginForm extends CFormModel {
    /* deklarasi public variabel */

    public $username;
    public $password;
    public $rememberMe;
    /* deklarasi private variabel */
    private $_identity;

    /**
     * deklarasi validatasi
     * yang menyatakan username dan password harus diisi.
     */
    public function rules() {
        return array(
            // username dan password dibutuhkan
            array('username, password', 'required'),
            // untuk rememberMe dan harus sebuah boolean
            array('rememberMe', 'boolean'),
            // password akan diauthenticated
            array('password', 'authenticate'),
        );
    }

    /**
     * deklarasi atribut labels.
     */
    public function attributeLabels() {
        return array(
            'rememberMe' => 'Remember me next time',
        );
    }

    /**
     * buat auth password.
     */
    public function authenticate($attribute, $params) {
        /* jika tidak hasErrors maka */
        if (!$this->hasErrors()) {
            /* panggil component AdminLogin dengan param
             * username, dan password
             * dan ditampung oleh variabel _identity
             */
            $this->_identity = new OperatorLogin($this->username, $this->password);
            /* jika tidak authenticate/authenticate==failed maka */
            if (!$this->_identity->authenticate()) {
                /* kasih error */
                $this->addError('password', 'Incorrect username or password.');
            }
        }
    }

    /**
     * admin login, dengan meng-input username dan password
     */
    public function login() {
        /* jika _indentity null maka */
        if ($this->_identity === null) {
            /* panggil component AdminLogin dengan param
             * username, dan password
             * dan ditampung oleh variabel _identity
             */
            $this->_identity = new OperatorLogin($this->username, $this->password);
            /* panggil fungsi authenticate()
             * yang ada di component AdminLogin
             * yang akan memvalidasi username dan password */
            $this->_identity->authenticate();
        }
        /* jika errorCode/error username dan password benar maka */
        if ($this->_identity->errorCode === OperatorLogin::ERROR_NONE) {
            //membuat remember me durasi 30 hari
            $duration = $this->rememberMe ? 3600 * 24 * 30 : 0;
            // 30 days
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        } else {
            return false;
        }
    }

}

?>