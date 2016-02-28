<?php

/**
 * This is the model class for table "hasil".
 *
 * The followings are the available columns in table 'hasil':
 * @property integer $ID_HASIL
 * @property integer $ID_PESERTA
 * @property string $NAMA_HASIL
 * @property string $NAMA_HASIL2
 *
 * The followings are the available model relations:
 * @property Peserta $iDPESERTA
 */
class Hasil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hasil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_PESERTA', 'numerical', 'integerOnly'=>true),
			array('NAMA_HASIL, NAMA_HASIL2', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_HASIL, ID_PESERTA, NAMA_HASIL, NAMA_HASIL2', 'safe', 'on'=>'search'),
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
			'iDPESERTA' => array(self::BELONGS_TO, 'Peserta', 'ID_PESERTA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_HASIL' => 'Id Hasil',
			'ID_PESERTA' => 'Nama Peserta',
			'NAMA_HASIL' => 'Nama Hasil',
			'NAMA_HASIL2' => 'Nama Hasil2',
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

		$criteria->compare('ID_HASIL',$this->ID_HASIL);
		$criteria->compare('ID_PESERTA',$this->ID_PESERTA);
		$criteria->compare('NAMA_HASIL',$this->NAMA_HASIL,true);
		$criteria->compare('NAMA_HASIL2',$this->NAMA_HASIL2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Hasil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
