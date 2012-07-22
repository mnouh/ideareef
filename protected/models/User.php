<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $salt
 * @property string $firstName
 * @property string $lastName
 * @property integer $gender
 * @property string $verify_code
 * @property integer $verified
 * @property integer $terms
 * @property string $lookup
 * @property string $joined_date
 * @property string $city
 * @property string $state
 */
class User extends CActiveRecord
{
        var $oldPassword;
        var $confirmPassword;
        var $newPassword;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, confirmPassword, firstName, lastName', 'required', 'on' =>'signup'),
                        array('confirmPassword', 'compare', 'compareAttribute'=>'password', 'on' => 'signup'),
                        array('username', 'checkUser', 'on' => array('signup', 'changeUsername')),
			array('username', 'email', 'on'=>array('signup', 'changeUsername')),
                        array('zipcode', 'required', 'on' => 'changeZipCode'),
                        array('zipcode', 'length', 'min' => 5, 'on' => 'changeZipCode'),
                        array('oldPassword, newPassword, confirmPassword', 'required', 'on' =>'changePassword'),
                        array('firstName, lastName', 'required', 'on' => 'changeName'),
                        //array('password, newPassword','ext.validators.EPasswordStrength', 'min'=>7),
                        array('confirmPassword', 'compare', 'compareAttribute'=>'newPassword', 'on' => 'changePassword'),
			array('username, password, firstName, lastName, lookup, city, state', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, firstName, lastName, verified, lookup, joinedDate, city, state', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'salt' => 'Salt',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
			'verifyCode' => 'Verify Code',
			'verified' => 'Verified',
			'lookup' => 'Lookup',
			'joinedDate' => 'Joined Date',
			'city' => 'City',
			'state' => 'State',
		);
	}
        
        /**
         * Check if User already exists in the database.
         * @param type $attribute
         * @param type $params 
         */
        public function checkUser($attribute, $params) {
            
            $user=$this->find('LOWER(username)=?',array(strtolower($this->username)));
		
                if($user!=null) {
                    
                    $this->addError('username', '<b>&#10006;</b> &nbsp; This email already exists.');
                    //$this->addError('confirmEmail', '<b>&#10006;</b> &nbsp; This email already exists.');
    
                }
                else {
                    
                    $business= Business::model()->find('LOWER(username)=?',array(strtolower($this->username)));
                    if($business != null)
                    {
                        $this->addError('username', '<b>&#10006;</b> &nbsp; This email already exists.');
                        
                    }
                    
                }
                
                
            
            
        }
        
        
        /**
     * Checks if the given password is correct.
     * @param string the password to be validated
     * @return boolean whether the password is valid
     */
    public function validatePassword($password) {
        return $this->hashPassword($password, $this->salt) === $this->password;
    }


    /**
     * Checks if the password supplied is the same as the old password
     * If it is setup the new password and the new salt.
     * Return true if the old password is good.
     * Return false is the old password was incorrect.
     * @return boolean 
     */
    public function changePassword() {
     
        if($this->validatePassword($this->oldPassword))
        {
            $this->salt = $this->generateSalt();
            $this->password = $this->hashPassword($this->newPassword, $this->salt);
            return true;
            
        }
        else {
            $this->addError('oldPassword', '<b>&#10006;</b> &nbsp; Your old password does not match our records.');
            return false;
        }
        
        
    }

    /**
     * Generates the password hash.
     * @param string password
     * @param string salt
     * @return string hash
     */
    public function hashPassword($password, $salt) {
        return md5($salt . $password);
    }

    /*
     * Generates the verification code for the user
     */

    public function verifyCode($username, $firstName) {


        return md5($username . $firstName); //Will Change this to incorporate time.
    }

    /**
     * Generates a salt that can be used to generate a password hash.
     * @return string the salt
     */
    public function generateSalt() {
        return uniqid('', true);
    }

    protected function beforeSave() {

        if ($this->isNewRecord) {

            $this->salt = $this->generateSalt();
             
            $this->password = $this->hashPassword($this->password, $this->salt);
            $this->verifyCode = $this->verifyCode($this->username, $this->firstName);
            
            $user = str_shuffle(uniqid());
            $user = $user.'_'.uniqid();
            $str1 = '';
    
            for ($i=0; $i<strlen($user); $i++) {  

            $x = rand(0, 1);
            if($x == 0)
                $str1 = $str1.strtoupper($user[$i]);
            else {
            $str1 = $str1.$user[$i];    
            
            }
        
            } 
            $this->lookup = $str1;
            $this->joinedDate = new CDbExpression('NOW()');
            
            
            
        }


        return parent::beforeSave();
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('verifyCode',$this->verify_code,true);
		$criteria->compare('verified',$this->verified);
		$criteria->compare('lookup',$this->lookup,true);
		$criteria->compare('joinedDate',$this->joined_date,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
