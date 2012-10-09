<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RecoveryChangePasswordForm extends CFormModel
{
	public $password;
        public $confirmPassword;
	

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('password, confirmPassword', 'required', 'message' => '<b>&#10006;</b> &nbsp; {attribute} is a required field.'),
                        array('confirmPassword', 'compare', 'compareAttribute'=>'password'),
		);
	}
        
        

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			
		);
	}
}
