<?php

class BusinessController extends Controller {

    public $layout = 'privateBusiness';
    
    /**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
        
        
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
                'actions' => array('index', 'changeUsername', 'changepassword', 'create', 'update', 'pavilion', 'pavilionEdit', 'completeProfile', 'edittext', 'editAboutUs', 'competition', 'competitionDetail'),
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
    
    public function actionIndex() {
        if(Yii::app()->user->isBusiness){
            $model = Business::model()->findByPk(Yii::app()->user->id);
            $sort=new CSort();
            $sort->attributes = array('*');
            $dataProvider= new CActiveDataProvider('Competition', 
                    array('criteria' => 
                        array('condition'=>'businessId='.$model->id),
                        'sort'=>$sort,
                        'pagination' => array('pageSize' => 4)));
          
                    
            $this->render('index', array('model' => $model, 'dataProvider' => $dataProvider));
        }
    }
    
    public function actionCompleteProfile()
    {
        
        if(Yii::app()->user->isBusiness) {
            
            $model = Business::model()->findByPK(Yii::app()->user->id);
            $this->render('completeProfile', array('model' => $model));
        }
        
    }
    
    public function actionEditAboutUs()
    {
        if(Yii::app()->user->isBusiness) {
            if(isset($_POST['id']) && isset($_POST['value']) && !empty($_POST['value']))
            {
                if($_POST['id'] == 'aboutus') {    
                    $aboutUs = $_POST['value'];
                    $model = Business::model()->findByPk(Yii::app()->user->id);
                    $model->aboutUs = $aboutUs;
                if($model->update())
                    echo $model->aboutUs;
               
                }
            }
        }    
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
        $this->performAjaxValidation($model, 'business-form');

        if (isset($_POST['Business'])) {
            $model->attributes = $_POST['Business'];
            $decryptedPassword = $model->password;

            if ($model->validate()) {
                
                if($model->save())
                {
                    $this->sendConfirmation($model);
                    $loginUser = new LoginForm();
                    $loginUser->email = $model->email;
                    $loginUser->password = $decryptedPassword;
                    $loginUser->rememberMe = false;
                    
                    if($loginUser->validate() && $loginUser->login())
                    {
                        
                        $this->redirect(array('/business/completeProfile'));
                        
                    }
                    else {
                        
                        throw new CHttpException(404, 'The system had some difficulties processing your request.');
                    }
                    
                    
                }
                
            }
            
            }
            
            $this->renderPartial('signup', array('model' => $model, 'businessType' => $businessType), false, true);
            
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

    
     public function actionPavilion() {
        if(Yii::app()->user->isBusiness){
            $model = Business::model()->findByPk(Yii::app()->user->id);
            
            $sort=new CSort();
            $sort->attributes = array('*');
            $dataProvider= new CActiveDataProvider('Competition', 
                    array('criteria' => 
                        array('condition'=>'businessId='.$model->id),
                        'sort'=>$sort,
                        'pagination' => array('pageSize' => 4)));           
            $this->render('pavilion', array('model' => $model, 'dataProvider' => $dataProvider));
         
        }
    }
    
    public function actionPavilionEdit() {
        if(Yii::app()->user->isBusiness){
            
            $model = Business::model()->findByPk(Yii::app()->user->id);
            $model->setScenario('pavilionEdit');
            $this->performAjaxValidation($model, 'pavilionEdit-form');
            
            if (isset($_POST['Business'])) {
            $model->attributes = $_POST['Business'];

            if ($model->validate()) {
                if($model->update())
                    Yii::app()->user->setFlash('success', "Information Successfully Changed");
                }
            
            }
            $this->render('pavilionEdit', array('model' => $model));
        }
    }
    
    public function actionCompetition() {
        if(Yii::app()->user->isBusiness){
            $model = Business::model()->findByPk(Yii::app()->user->id);
            $this->render('competition', array('model' => $model));
        }
    }
    
    public function actioncompetitionDetail($id) {
        if(Yii::app()->user->isBusiness){
            $model = Business::model()->findByPk(Yii::app()->user->id);
            $this->render('competitionDetail', array('model' => $this->loadCompetitionModel($id)));
        }
    }
    
    /**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadCompetitionModel($id)
	{
		$model=Competition::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
     public function actioneditText() {
        if(Yii::app()->user->isBusiness){
            
            $model = Business::model()->findByPk(Yii::app()->user->id);
            
            if (isset($_POST['Business'])) {
            $model->attributes = $_POST['Business'];

            if ($model->validate()) {
                if($model->update())
                    Yii::app()->user->setFlash('success', "Information Successfully Changed");
                }
            
            }
            $this->render('edittext', array('model' => $model));
        }
    }
    
    
    /**
     * This will email the user, the confirmation code.
     * @param type $model 
     */
    protected function sendConfirmation(&$model) {

        $signUpEmail = New YiiMailMessage;
        $signUpEmail->view = 'businessSignup';
        $signUpEmail->setBody(array('model' => $model), 'text/html');
        $signUpEmail->setFrom(array('welcome@ideareef.com' => 'IdeaReef'));
        $signUpEmail->setSubject('Welcome - IdeaReef');
        $signUpEmail->addTo($model->email);
        Yii::app()->mail->send($signUpEmail);
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
