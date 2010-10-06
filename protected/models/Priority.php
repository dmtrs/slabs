<?php

/**
 * This is the model class for table "slabs_priority".
 */
class Priority extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'slabs_priority':
	 * @var integer $py_id
	 * @var string $py_description
	 * @var string $py_color
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return Priority the static model class
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
		return 'slabs_priority';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('py_description, py_color', 'required'),
			array('py_description', 'length', 'max'=>20),
			array('py_color', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('py_id, py_description, py_color', 'safe', 'on'=>'search'),
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
			'issues' => array(self::HAS_MANY, 'Issue', 'py_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'py_id' => 'Id',
			'py_description' => 'Description',
			'py_color' => 'Color',
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

		$criteria->compare('py_id',$this->py_id);

		$criteria->compare('py_description',$this->py_description,true);

		$criteria->compare('py_color',$this->py_color,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
