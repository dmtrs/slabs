<?php

/**
 * This is the model class for table "slabs_parts_in_report".
 *
 * The followings are the available columns in table 'slabs_parts_in_report':
 * @property integer $slabs_report_rp_id
 * @property integer $slabs_parts_pa_id
 */
class PartsInReport extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return PartsInReport the static model class
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
		return 'slabs_parts_in_report';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('slabs_report_rp_id, slabs_parts_pa_id', 'required'),
			array('slabs_report_rp_id, slabs_parts_pa_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('slabs_report_rp_id, slabs_parts_pa_id', 'safe', 'on'=>'search'),
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
			'slabs_report_rp_id' => 'Slabs Report Rp',
			'slabs_parts_pa_id' => 'Slabs Parts Pa',
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

		$criteria->compare('slabs_report_rp_id',$this->slabs_report_rp_id);

		$criteria->compare('slabs_parts_pa_id',$this->slabs_parts_pa_id);

		return new CActiveDataProvider('PartsInReport', array(
			'criteria'=>$criteria,
		));
	}
}