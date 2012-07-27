<?php

class BusinessController extends Controller {

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('signup'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'changeUsername', 'changepassword', 'create', 'update', 'homepage'),
                'users' => array('@'),
            ),
            /*array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),*/
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }
    
    
    
        /**
         * Business Sign up 
         */
        public function actionSignUp()
        {
            $model = new Business;
            $model->setScenario('signup');
            
            $businessType = BusinessType::model()->findAll();
            
            
        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model, 'businessSignup-form');

        /*
          if(!$model->hasErrors('firstName')) {
          Yii::app()->user->setFlash('success','<b>&#10004;</b> &nbsp First name looks great!');
          }
         */
        if (isset($_POST['Business'])) {
            $model->attributes = $_POST['Business'];

            if ($model->validate()) {
                
                if($model->save())
                {
                    Yii::app()->user->setFlash('success', "Successfully Registered");
                }
                
            }
            
            }
            
            
            $this->render('signup', array('model' => $model, 'businessType' => $businessType));
        }
        
        
        /**
	 * Logs out the current user and redirect to homepage.
	 */
    
    /**
     * Change username.
     */
    public function actionChangeUsername() {
      
        $model = Business::model()->findByPk(Yii::app()->user->id);
      $model->setScenario('changeUsername');

      $this->performAjaxValidation($model, 'changeUsername-form');

      if (isset($_POST['Business'])) {
        $model->attributes = $_POST['Business'];

        if ($model->validate() && $model->update()) {
          Yii::app()->user->setFlash('success', "Successfully updated username.");
        }
      }

      $this->renderPartial('changeUsername', array('model' => $model), false, true);
    }

    /**
     *Change Password 
     */
    public function actionChangePassword() {

        $model = Business::model()->findByPk(Yii::app()->user->id);
        $model->setScenario('changePassword');
        
        
         $this->performAjaxValidation($model, 'changepassword-form');

        if (isset($_POST['Business'])) {
            $model->attributes = $_POST['Business'];

            if ($model->validate()) {
                
                if($model->changePassword())
                {
                    if($model->update())
                        Yii::app()->user->setFlash('success', "Successfully Changed Password");
                        
                }
                
            }
            
            }
        
        

        $this->renderPartial('changePassword', array('model' => $model), false, true);
    }
    
    
    public function actionChangeName()
    {
        $model = Business::model()->findByPk(Yii::app()->user->id);
        $model->setScenario('changeName');
        
        
        $this->performAjaxValidation($model, 'changename-form');
        
        if (isset($_POST['Business'])) {
            $model->attributes = $_POST['Business'];

            if ($model->validate()) {
                    if($model->update())
                        Yii::app()->user->setFlash('success', "Successfully Changed Username");
                
            }
            
            }
        
        $this->renderPartial('changeName', array('model' => $model), false, false);
    }
    
    public function actionSettings()
    {
        $model = Business::model()->findByPk(Yii::app()->user->id);
        
        
        $this->render('settings', array('model' => $model));
        
    }

    public function actionIndex() {
        $this->render('index');
    }
    
    public function actionHomepage() {
        if(Yii::app()->user->isBusiness){
            $model = Business::model()->findByPk(Yii::app()->user->id);
            $this->render('homepage', array('model' => $model));
        }
    } 
    /**
         * Custom function allow validation of forms. Pass the model and the form id and then
         * it will validate via ajax.
         * @param type $model
         * @param type $formId 
         */
        protected function performAjaxValidation($model, $formId) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === $formId) {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
