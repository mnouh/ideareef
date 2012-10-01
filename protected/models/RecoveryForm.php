<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RecoveryForm extends CFormModel
{
	public $email;
        public $verifyCode;
	

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('email', 'required', 'message' => '<b>&#10006;</b> &nbsp; {attribute} is a required field.'),
                        array('email', 'emailExist'),
                        array('verifyCode', 'required', 'on' => 'verify')
		);
	}
        
        
        public function emailExist($attributes, $params)
        {
            $user = User::model()->find('LOWER(email)=?', array(strtolower($this->email)));
            $business = Business::model()->find('LOWER(email)=?', array(strtolower($this->email)));
            
            if(($user === null) && ($business === null))
            {
                $this->addError('email', '<b>&#10006;</b> &nbsp; We could not find that email.');
                
            }
                
            
            
        }
        

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}
}
