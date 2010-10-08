<?php

/**
 * This is the model class for table "slabs_user".
 *
 * The followings are the available columns in table 'slabs_user':
 * @property integer $us_id
 * @property string $us_username
 * @property string $us_fullname
 * @property string $us_passwd
 * @property string $us_email
 *
 * The followings are the available model relations:
 * @property Issue[] $issues
 * @property Report[] $reports
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	private $_salt = "4cac33f104ec8";
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			$this->us_passwd = $this->hashPasswd($this->us_passwd);
			return true;
		}
		return false;
	}
	public function validatePasswd($passwd)
	{
		return $this->hashPasswd($passwd) === $this->us_passwd;
	}
	public function hashPasswd($passwd)
	{
		return sha1($this->_salt.$passwd);
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
		return 'slabs_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('us_username, us_passwd', 'required'),
			array('us_username, us_fullname, us_passwd, us_email', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('us_id, us_username, us_fullname, us_passwd, us_email', 'safe', 'on'=>'search'),
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
			'issues' => array(self::HAS_MANY, 'Issue', 'us_name'),
			'reports' => array(self::HAS_MANY, 'Report', 'us_name'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'us_id' => 'Us',
			'us_username' => 'Us Username',
			'us_fullname' => 'Us Fullname',
			'us_passwd' => 'Us Passwd',
			'us_email' => 'Us Email',
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

		$criteria->compare('us_id',$this->us_id);
		$criteria->compare('us_username',$this->us_username,true);
		$criteria->compare('us_fullname',$this->us_fullname,true);
		$criteria->compare('us_passwd',$this->us_passwd,true);
		$criteria->compare('us_email',$this->us_email,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
