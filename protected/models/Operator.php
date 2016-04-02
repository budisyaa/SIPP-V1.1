<?php

class Operator extends CActiveRecord
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
		return 'operator';
	}

	public function rules()
	{

		return array(
			array('nama_opr, username, password, foto_opr', 'required'),
			array('nama_opr, username, password', 'length', 'max'=>200),
			array('foto_opr', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_opr, nama_opr, username, password, foto_opr', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_opr' => 'Id Opr',
			'nama_opr' => 'Nama Opr',
			'username' => 'Username',
			'password' => 'Password',
			'foto_opr' => 'Foto Opr',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_opr',$this->id_opr);
		$criteria->compare('nama_opr',$this->nama_opr,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('foto_opr',$this->foto_opr,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Operator the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
