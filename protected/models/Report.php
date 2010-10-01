<?php

/**
 * This is the model class for table "slabs_report".
 *
 * The followings are the available columns in table 'slabs_report':
 * @property integer $rp_id
 * @property string $rp_date
 * @property integer $is_id
 * @property string $rp_report
 * @property integer $st_id
 */
class Report extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Report the static model class
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
		return 'slabs_report';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rp_date, is_id, rp_report, st_id', 'required'),
			array('is_id, st_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rp_id, rp_date, is_id, rp_report, st_id', 'safe', 'on'=>'search'),
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
			'mydb.slabs_parts' => array(self::MANY_MANY, 'Mydb.slabsParts', 'slabs_parts_in_report(slabs_report_rp_id, slabs_parts_pa_id)'),
			'is' => array(self::BELONGS_TO, 'Issue', 'is_id'),
			'st' => array(self::BELONGS_TO, 'Status', 'st_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rp_id' => 'Rp',
			'rp_date' => 'Rp Date',
			'is_id' => 'Is',
			'rp_report' => 'Rp Report',
			'st_id' => 'St',
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

		$criteria->compare('rp_id',$this->rp_id);

		$criteria->compare('rp_date',$this->rp_date,true);

		$criteria->compare('is_id',$this->is_id);

		$criteria->compare('rp_report',$this->rp_report,true);

		$criteria->compare('st_id',$this->st_id);

		return new CActiveDataProvider('Report', array(
			'criteria'=>$criteria,
		));
	}
}