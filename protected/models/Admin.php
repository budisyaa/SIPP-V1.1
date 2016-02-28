<?php


class Admin extends CActiveRecord
{
     
    protected function beforeSave() {
        if (parent::beforeSave()) {
            $this->password = $this->encrypt($this->password);
            return TRUE;
        } else {
            return FALSE;
        }
    }


    public function encrypt($value) {
        return md5($value);
    }
	
	public function tableName()
	{
		return 'admin';
	}

	public function rules()
	{
		
		return array(
			array('NAMA_ADMIN, username, password, FOTO_ADMIN', 'length', 'max'=>1024),
			
			array('admin_id, NAMA_ADMIN, username, password, FOTO_ADMIN', 'safe', 'on'=>'search'),
		);
	}

	
	public function relations()
	{
		
		return array(
		);
	}

	
	public function attributeLabels()
	{
		return array(
			'admin_id' => 'Admin',
			'NAMA_ADMIN' => 'Nama Admin',
			'username' => 'Username',
			'password' => 'Password',
			'FOTO_ADMIN' => 'Foto Admin',
		);
	}


	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('admin_id',$this->admin_id);
		$criteria->compare('NAMA_ADMIN',$this->NAMA_ADMIN,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('FOTO_ADMIN',$this->FOTO_ADMIN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
