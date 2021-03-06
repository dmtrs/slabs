<?php

/**
 * This is the model class for table "slabs_person".
 *
 * The followings are the available columns in table 'slabs_person':
 * @property integer $ps_id
 * @property string $ps_name
 * @property string $ps_phone
 * @property string $ps_email
 *
 * The followings are the available model relations:
 * @property Issue[] $issues
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
			array('ps_name', 'required'),
			array('ps_name', 'length', 'max'=>60),
			array('ps_phone', 'length', 'max'=>30),
			array('ps_email', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ps_id, ps_name, ps_phone, ps_email', 'safe', 'on'=>'search'),
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
			'issues' => array(self::HAS_MANY, 'Issue', 'ps_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ps_id' => 'Ps',
			'ps_name' => 'Ps Name',
			'ps_phone' => 'Ps Phone',
			'ps_email' => 'Ps Email',
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

		$criteria->compare('ps_id',$this->ps_id);
		$criteria->compare('ps_name',$this->ps_name,true);
		$criteria->compare('ps_phone',$this->ps_phone,true);
		$criteria->compare('ps_email',$this->ps_email,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
