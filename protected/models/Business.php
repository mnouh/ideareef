<?php

/**
 * This is the model class for table "{{business}}".
 *
 * The followings are the available columns in table '{{business}}':
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $salt
 * @property string $name
 * @property string $businessType
 * @property string $address
 */
class Business extends CActiveRecord
{
    
        var $oldPassword;
        var $confirmPassword;
        var $newPassword;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Business the static model class
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
		return '{{business}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, password, name, confirmPassword, businessType', 'required', 'on' => 'signup'),
                        array('confirmPassword', 'compare', 'compareAttribute'=>'password', 'on' => 'signup'),
                        array('email', 'email', 'on' => 'signup'),
                        array('email', 'checkBusiness', 'on' => 'signup'),
			array('email, password, address', 'length', 'max'=>64, 'on' => 'signup'),
			array('name', 'length', 'max'=>32, 'on' => 'signup'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, email, password, name, address', 'safe', 'on'=>'search'),
		);
	}
        
        /**
         *Checks if user is already signed up. Gives Error if true
         * @param type $attribute
         * @param type $params 
         */
        public function checkBusiness($attribute, $params) {
            
            $user=$this->find('LOWER(email)=?',array(strtolower($this->email)));
		
                if($user!=null) {
                    
                    $this->addError('email', '<b>&#10006;</b> &nbsp; This email already exists.');
                    //$this->addError('confirmEmail', '<b>&#10006;</b> &nbsp; This email already exists.');
    
                }
                else {
                    
                    $business= User::model()->find('LOWER(email)=?',array(strtolower($this->email)));
                    if($business != null)
                    {
                        $this->addError('email', '<b>&#10006;</b> &nbsp; This email already exists.');
                        
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

    public function verifyCode($email, $firstName) {


        return md5($email . $firstName); //Will Change this to incorporate time.
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
            $this->verifyCode = $this->verifyCode($this->email, $this->name);
    /*        
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
     * 
     */
            $this->joinedDate = new CDbExpression('NOW()');
            
            
            
        }


        return parent::beforeSave();
    }
        
        
        

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'type' => array(self::HAS_ONE, 'BusinessType', array('id' => 'businessType')),
                    'competitions' => array(self::HAS_MANY, 'Competition', 'businessId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => 'Email',
			'password' => 'Password',
			'salt' => 'Salt',
			'name' => 'Business Name',
			'businessType' => 'Business Type',
			'address' => 'Address',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('businessType',$this->businessType,true);
		$criteria->compare('address',$this->address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}