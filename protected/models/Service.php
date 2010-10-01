<?php

/**
 * This is the model class for table "slabs_service".
 *
 * The followings are the available columns in table 'slabs_service':
 * @property integer $se_id
 * @property string $se_description
 * @property string $se_serialnumber
 * @property integer $ps_id
 */
class Service extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Service the static model class
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
		return 'slabs_service';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('se_description, ps_id', 'required'),
			array('ps_id', 'numerical', 'integerOnly'=>true),
			array('se_description, se_serialnumber', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('se_id, se_description, se_serialnumber, ps_id', 'safe', 'on'=>'search'),
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
			'slabs_issues' => array(self::HAS_MANY, 'Issue', 'se_id'),
			'ps' => array(self::BELONGS_TO, 'Person', 'ps_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'se_id' => 'Se',
			'se_description' => 'Se Description',
			'se_serialnumber' => 'Se Serialnumber',
			'ps_id' => 'Ps',
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

		$criteria->compare('se_id',$this->se_id);

		$criteria->compare('se_description',$this->se_description,true);

		$criteria->compare('se_serialnumber',$this->se_serialnumber,true);

		$criteria->compare('ps_id',$this->ps_id);

		return new CActiveDataProvider('Service', array(
			'criteria'=>$criteria,
		));
	}
}