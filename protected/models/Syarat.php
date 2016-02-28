<?php

/**
 * This is the model class for table "syarat".
 *
 * The followings are the available columns in table 'syarat':
 * @property integer $ID_SYARAT
 * @property integer $ID_PESERTA
 * @property string $SYARAT1
 * @property string $SYARAT2
 * @property string $SYARAT3
 * @property string $SYARAT4
 * @property string $SYARAT5
 *
 * The followings are the available model relations:
 * @property Peserta $iDPESERTA
 */
class Syarat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'syarat';
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
			array('SYARAT1, SYARAT2, SYARAT3, SYARAT4, SYARAT5', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_SYARAT, ID_PESERTA, SYARAT1, SYARAT2, SYARAT3, SYARAT4, SYARAT5', 'safe', 'on'=>'search'),
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
			'ID_SYARAT' => 'Id Syarat',
			'ID_PESERTA' => 'Nama Peserta',
			'SYARAT1' => 'Syarat1',
			'SYARAT2' => 'Syarat2',
			'SYARAT3' => 'Syarat3',
			'SYARAT4' => 'Syarat4',
			'SYARAT5' => 'Syarat5',
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

		$criteria->compare('ID_SYARAT',$this->ID_SYARAT);
		$criteria->compare('ID_PESERTA',$this->ID_PESERTA);
		$criteria->compare('SYARAT1',$this->SYARAT1,true);
		$criteria->compare('SYARAT2',$this->SYARAT2,true);
		$criteria->compare('SYARAT3',$this->SYARAT3,true);
		$criteria->compare('SYARAT4',$this->SYARAT4,true);
		$criteria->compare('SYARAT5',$this->SYARAT5,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Syarat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
