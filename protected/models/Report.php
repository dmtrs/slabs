<?php

/**
 * This is the model class for table "slabs_report".
 */
class Report extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'slabs_report':
	 * @var integer $rp_id
	 * @var string $rp_date
	 * @var integer $is_id
	 * @var string $rp_report
	 * @var integer $st_id
	 * @var integer $us_id
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return Report the static model class
	 */
        protected function beforeSave()
        {
                if(parent::beforeSave()) {
                        if($this->isNewRecord)
                        {
                                $this->rp_date =  date("Y-m-d G:i:s",time());
                                $this->us_name = Yii::app()->user->id;
                        }
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
			array('rp_date, is_id, rp_report, st_id, us_id', 'required'),
			array('is_id, st_id, us_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rp_id, rp_date, is_id, rp_report, st_id, us_id', 'safe', 'on'=>'search'),
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
			'is' => array(self::BELONGS_TO, 'Issue', 'is_id'),
			'st' => array(self::BELONGS_TO, 'Status', 'st_id'),
			'us' => array(self::BELONGS_TO, 'Users', 'us_id'),
			'slabsParts' => array(self::MANY_MANY, 'Parts', 'slabs_report_used_parts(rp_id, pa_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rp_id' => 'Id',
			'rp_date' => 'Date',
			'is_id' => 'Related issue',
			'rp_report' => 'Full Report',
			'st_id' => 'Status',
			'us_id' => 'Username',
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

		$criteria->compare('us_id',$this->us_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
