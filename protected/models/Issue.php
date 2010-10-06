<?php

/**
 * This is the model class for table "slabs_issue".
 */
class Issue extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'slabs_issue':
	 * @var integer $is_id
	 * @var string $is_code
	 * @var integer $sc_id
	 * @var integer $st_id
	 * @var string $is_title
	 * @var string $is_report
	 * @var integer $py_id
	 * @var string $is_create_date
	 * @var string $is_last_report
	 * @var string $us_name
	 * @var integer $ps_id
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return Issue the static model class
	 */
	protected function beforeSave()
	{
		if(parent::beforeSave()) {
			if($this->isNewRecord)
			{
				$this->is_create_date = $this->is_last_report = date("Y-m-d G:i:s",time());
				$this->us_name = Yii::app()->user->id;
				$this->st_id = Status::model()->find("st_descr LIKE 'open'")->st_id;
			}
			else $this->is_last_report = date("Y-m-d G:i:s",time());
			return true;
		}
		else return false;
	}
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
			array('is_code, sc_id, is_title, is_report, py_id, ps_id', 'required'),
			array('sc_id, st_id, py_id, ps_id', 'numerical', 'integerOnly'=>true),
			array('is_code', 'length', 'max'=>30),
			array('is_title', 'length', 'max'=>50),
			array('us_name', 'length', 'max'=>45),
			array('is_create_date, is_last_report', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('is_id, is_code, sc_id, se_id, st_id, is_title, is_report, py_id, is_create_date, is_last_report, us_name, ps_id', 'safe', 'on'=>'search'),
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
			'ps' => array(self::BELONGS_TO, 'Person', 'ps_id'),
			'sc' => array(self::BELONGS_TO, 'ServiceCategory', 'sc_id'),
			'st' => array(self::BELONGS_TO, 'Status', 'st_id'),
			'py' => array(self::BELONGS_TO, 'Priority', 'py_id'),
			'us' => array(self::BELONGS_TO, 'User', 'us_name'),
			'reports' => array(self::HAS_MANY, 'Report', 'is_code'),
			'slabsTags' => array(self::MANY_MANY, 'Tag', 'slabs_tag_for_issue(tg_id, is_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'is_id' => 'Issue id',
			'is_code' => 'Issue Code',
			'sc_id' => 'Service category',
			'st_id' => 'Status',
			'is_title' => 'Issue Title',
			'is_report' => 'Issue Full report',
			'py_id' => 'Issue Priority',
			'is_create_date' => 'Issue Date',
			'is_last_report' => 'Last issue report date',
			'us_name' => 'User Name',
			'ps_id' => 'Person',
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

		$criteria->compare('st_id',$this->st_id);

		$criteria->compare('is_title',$this->is_title,true);

		$criteria->compare('is_report',$this->is_report,true);

		$criteria->compare('py_id',$this->py_id);

		$criteria->compare('is_create_date',$this->is_create_date,true);

		$criteria->compare('is_last_report',$this->is_last_report,true);

		$criteria->compare('us_name',$this->us_name,true);
		
		$criteria->compare('ps_id', $this->ps_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
