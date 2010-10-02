<?php

/**
 * This is the model class for table "slabs_issue".
 *
 * The followings are the available columns in table 'slabs_issue':
 * @property integer $is_id
 * @property string $is_code
 * @property integer $sc_id
 * @property string $is_date
 * @property integer $se_id
 * @property integer $st_id
 * @property string $is_title
 * @property string $is_report
 * @property integer $py_id
 */
class Issue extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Issue the static model class
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
		return 'slabs_issue';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('is_code, sc_id, st_id, is_title, is_report, py_id', 'required'),
			array('sc_id, se_id, st_id, py_id', 'numerical', 'integerOnly'=>true),
			array('is_code', 'length', 'max'=>30),
			array('is_title', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('is_id, is_code, sc_id, is_date, se_id, st_id, is_title, is_report, py_id', 'safe', 'on'=>'search'),
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
			'sc' => array(self::BELONGS_TO, 'ServiceCategory', 'sc_id'),
			'se' => array(self::BELONGS_TO, 'Service', 'se_id'),
			'st' => array(self::BELONGS_TO, 'Status', 'st_id'),
			'py' => array(self::BELONGS_TO, 'Priority', 'py_id'),
			'slabs_reports' => array(self::HAS_MANY, 'Report', 'is_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'is_id' => 'Is',
			'is_code' => 'Is Code',
			'sc_id' => 'Sc',
			'is_date' => 'Is Date',
			'se_id' => 'Se',
			'st_id' => 'St',
			'is_title' => 'Is Title',
			'is_report' => 'Is Report',
			'py_id' => 'Py',
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

		$criteria->compare('is_id',$this->is_id);

		$criteria->compare('is_code',$this->is_code,true);

		$criteria->compare('sc_id',$this->sc_id);

		$criteria->compare('is_date',$this->is_date,true);

		$criteria->compare('se_id',$this->se_id);

		$criteria->compare('st_id',$this->st_id);

		$criteria->compare('is_title',$this->is_title,true);

		$criteria->compare('is_report',$this->is_report,true);

		$criteria->compare('py_id',$this->py_id);

		return new CActiveDataProvider('Issue', array(
			'criteria'=>$criteria,
		));
	}
}
