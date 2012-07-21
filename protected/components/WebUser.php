<?php
 
/**
 * Extends CWebUser, gives the ability to use Yii::app()->user->getUser()->firstName and etc. 
 */
class WebUser extends CWebUser {
 
  // Store model to not repeat query.
  private $_model;
 
  /**
   * Gives me access to the user model when the user is logged in.
   * @return User Model
   */
  function getUser(){
    return $this->loadUser(Yii::app()->user->id);
  }
 
  // This is a function that checks the field 'role'
  // in the User model to be equal to 1, that means it's admin
  // access it by Yii::app()->user->isAdmin()
 
  // Load user model.
  protected function loadUser($id=null)
    {
        if($this->_model===null)
        {
            if($id!==null)
                if(Yii::app()->user->isBusiness)
                    $this->_model=Business::model()->findByPk($id);
                else
                    $this->_model=User::model()->findByPk($id);
        }
        return $this->_model;
    }
}
?>