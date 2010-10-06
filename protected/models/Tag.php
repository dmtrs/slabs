<?php

/**
 * This is the model class for table "slabs_tag".
 */
class Tag extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'slabs_tag':
	 * @var integer $tg_id
	 * @var string $tg_descr
	 * @var string $tg_freq
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return Tag the static model class
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
		return 'slabs_tag';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tg_id, tg_descr', 'required'),
			array('tg_id', 'numerical', 'integerOnly'=>true),
			array('tg_descr, tg_freq', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tg_id, tg_descr, tg_freq', 'safe', 'on'=>'search'),
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
			'slabsIssues' => array(self::MANY_MANY, 'Issue', 'slabs_tag_for_issue(tg_id, is_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tg_id' => 'Tag id',
			'tg_descr' => 'Tag Description',
			'tg_freq' => 'Tag Frequency',
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

		$criteria->compare('tg_id',$this->tg_id);

		$criteria->compare('tg_descr',$this->tg_descr,true);

		$criteria->compare('tg_freq',$this->tg_freq,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
