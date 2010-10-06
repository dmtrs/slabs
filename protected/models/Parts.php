<?php

/**
 * This is the model class for table "slabs_parts".
 */
class Parts extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'slabs_parts':
	 * @var integer $pa_id
	 * @var string $pa_descr
	 * @var string $pa_serial
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return Parts the static model class
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
		return 'slabs_parts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pa_descr', 'required'),
			array('pa_descr, pa_serial', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pa_id, pa_descr, pa_serial', 'safe', 'on'=>'search'),
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
			'slabsReports' => array(self::MANY_MANY, 'Report', 'slabs_report_used_parts(rp_id, pa_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pa_id' => 'Id',
			'pa_descr' => ' Descrription',
			'pa_serial' => 'Serialnumber',
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

		$criteria->compare('pa_id',$this->pa_id);

		$criteria->compare('pa_descr',$this->pa_descr,true);

		$criteria->compare('pa_serial',$this->pa_serial,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
