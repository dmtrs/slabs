<?php

/**
 * This is the model class for table "slabs_users".
 */
class Users extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'slabs_users':
	 * @var integer $us_id
	 * @var string $us_username
	 * @var string $us_fullname
	 * @var string $us_passwd
	 * @var string $us_email
	 */
	private $_salt = "jHVhf";

	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			$this->us_username = strtolower($this->us_username);
			$this->us_passwd = $this->hashPasswd($this->us_passwd);
			return true;
		}
		else return false;
	}
	/**
	 * Returns the static model of the specified AR class.
	 * @return Users the static model class
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
		return 'slabs_users';
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
			'reports' => array(self::HAS_MANY, 'Report', 'us_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'us_id' => 'User id',
			'us_username' => 'User Name',
			'us_fullname' => 'User Fullname',
			'us_passwd' => 'User Passwd',
			'us_email' => 'User Email',
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
    	public function hashPasswd($password)
    	{
        	return sha1($this->_salt.$password);
    	}
	public function validatePasswd($password)
	{
		return $this->hashPasswd($password) == $this->us_passwd;
	}
}
