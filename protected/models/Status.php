<?php

/**
 * This is the model class for table "slabs_status".
 *
 * The followings are the available columns in table 'slabs_status':
 * @property integer $st_id
 * @property string $st_descr
 * @property string $st_color
 */
class Status extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Status the static model class
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
		return 'slabs_status';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('st_descr, st_color', 'required'),
			array('st_descr, st_color', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('st_id, st_descr, st_color', 'safe', 'on'=>'search'),
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
			'slabs_issues' => array(self::HAS_MANY, 'Issue', 'st_id'),
			'slabs_reports' => array(self::HAS_MANY, 'Report', 'st_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'st_id' => 'St',
			'st_descr' => 'St Descr',
			'st_color' => 'St Color',
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

		$criteria->compare('st_id',$this->st_id);

		$criteria->compare('st_descr',$this->st_descr,true);

		$criteria->compare('st_color',$this->st_color,true);

		return new CActiveDataProvider('Status', array(
			'criteria'=>$criteria,
		));
	}
}