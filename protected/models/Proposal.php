<?php

/**
 * This is the model class for table "proposal".
 *
 * The followings are the available columns in table 'proposal':
 * @property integer $ID_PROPOSAL
 * @property integer $ID_PESERTA
 * @property string $NAMA_PROPOSAL
 *
 * The followings are the available model relations:
 * @property Peserta $iDPESERTA
 */
class Proposal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proposal';
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
			array('NAMA_PROPOSAL', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_PROPOSAL, ID_PESERTA, NAMA_PROPOSAL', 'safe', 'on'=>'search'),
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
			'ID_PROPOSAL' => 'Id Proposal',
			'ID_PESERTA' => 'Nama Peserta',
			'NAMA_PROPOSAL' => 'Nama Proposal',
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

		$criteria->compare('ID_PROPOSAL',$this->ID_PROPOSAL);
		$criteria->compare('ID_PESERTA',$this->ID_PESERTA);
		$criteria->compare('NAMA_PROPOSAL',$this->NAMA_PROPOSAL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proposal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
