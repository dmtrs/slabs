<?php

/**
 * This is the model class for table "slabs_person".
 *
 * The followings are the available columns in table 'slabs_person':
 * @property integer $cs_id
 * @property string $cs_name
 * @property string $cs_phone
 * @property string $cs_email
 */
class Person extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Person the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'slabs_person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cs_name', 'required'),
			array('cs_name', 'length', 'max'=>20),
			array('cs_phone', 'length', 'max'=>30),
			array('cs_email', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cs_id, cs_name, cs_phone, cs_email', 'safe', 'on'=>'search'),
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
			'slabs_services' => array(self::HAS_MANY, 'Service', 'ps_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cs_id' => 'Cs',
			'cs_name' => 'Cs Name',
			'cs_phone' => 'Cs Phone',
			'cs_email' => 'Cs Email',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cs_id',$this->cs_id);

		$criteria->compare('cs_name',$this->cs_name,true);

		$criteria->compare('cs_phone',$this->cs_phone,true);

		$criteria->compare('cs_email',$this->cs_email,true);

		return new CActiveDataProvider('Person', array(
			'criteria'=>$criteria,
		));
	}
}