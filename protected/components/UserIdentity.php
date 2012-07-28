<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;
    public $user;

    /**
     * Authenticates a user.
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $user = User::model()->find('LOWER(email)=?', array(strtolower($this->email)));
        if ($user === null) {
            
            $business = Business::model()->find('LOWER(email)=?', array(strtolower($this->email)));
            
            if($business === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
            else if(!$business->validatePassword($this->password)) {
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            }
            else {    
            $this->_id = $business->id;
            $this->email = $business->email;
            $this->setUser($business);
            $this->setState('isBusiness', true);
            $this->errorCode = self::ERROR_NONE;
            return $this->errorCode == self::ERROR_NONE;
            }
        }
            
        else if (!$user->validatePassword($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->_id = $user->id;
            $this->email = $user->email;
            $this->setUser($user);
            $this->setState('isBusiness', false);
            $this->errorCode = self::ERROR_NONE;
        }
        return $this->errorCode == self::ERROR_NONE;
    }

    /**
     * @return integer the ID of the user record
     */
    public function getId() {
        return $this->_id;
    }
    
    public function getUser() {
        return $this->user;
    }

    public function setUser(CActiveRecord $user) {
        $this->user = $user->attributes;
    }

}