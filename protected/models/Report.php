<?php

/**
 * This is the model class for table "slabs_report".
 *
 * The followings are the available columns in table 'slabs_report':
 * @property integer $rp_id
 * @property string $rp_date
 * @property string $is_code
 * @property string $rp_report
 * @property integer $st_id
 * @property string $us_name
 *
 * The followings are the available model relations:
 * @property User $usName0
 * @property Issue $isCode0
 * @property Status $st
 * @property Parts[] $slabsParts
 */
class Report extends CActiveRecord
{

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
			array('is_code, rp_report, st_id', 'required'),
			array('st_id', 'numerical', 'integerOnly'=>true),
			array('is_code', 'length', 'max'=>30),
			array('us_name', 'length', 'max'=>45),
			array('rp_comment','safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rp_id, rp_date, is_code, rp_report, st_id, us_name, rp_comment', 'safe', 'on'=>'search'),
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
			'us' => array(self::BELONGS_TO, 'User', 'us_name'),
			'isCode0' => array(self::BELONGS_TO, 'Issue', 'is_code'),
			'st' => array(self::BELONGS_TO, 'Status', 'st_id'),
			'slabsParts' => array(self::MANY_MANY, 'Parts', 'slabs_report_used_parts(rp_id, pa_id)'),
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
			'is_code' => 'Is Code',
			'rp_report' => 'Rp Report',
			'st_id' => 'St',
			'us_name' => 'Us Name',
			'rp_comment'=>'Comment',
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
		$criteria->compare('is_code',$this->is_code,true);
		$criteria->compare('rp_report',$this->rp_report,true);
		$criteria->compare('st_id',$this->st_id);
		$criteria->compare('us_name',$this->us_name,true);
		$criteria->compare('rp_comment',$this->rp_comment,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
