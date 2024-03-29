<?php

class UserController extends Controller {

    public $layout = 'privateUser';
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
                'actions' => array('view','signup', 'signup2'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'changeName', 'upload', 'settings', 'changeUsername','AjaxChangeUsername', 'changepassword', 'profile', 'editAboutMe', 'editCurrentCity', 'editCurrentState', 'mySolutions', 'changeZipCode', 'submitSolution' ,'create', 'update', 'completeProfile', 'competition', 'competitionSub', 'description', 'awardDetails'),
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
     * Change username.
     */
    public function actionChangeUsername() {
      $model = User::model()->findByPk(Yii::app()->user->id);
      $profileLink = Yii::app()->params['siteUrl'].'/'.$model->username;
      $model->profileUser = $model->username;
      $model->setScenario('changeUsername');

      $this->performAjaxValidation($model, 'changeUsername-form');

      if (isset($_POST['User'])) {
        $model->attributes = $_POST['User'];
        if ($model->validate()) {
            $model->username = $model->profileUser;
            if($model->update()) {
          Yii::app()->user->setFlash('success', "Successfully updated username.");
        }
        }
      }

      $this->renderPartial('changeUsername', array('model' => $model, 'profileLink' => $profileLink), false, true);
    }
    
    
    /**
     * Change username. This is used on the completeProfilePage
     */
    public function actionAjaxChangeUsername() {
      $status = 'Mohamed';  
      $model = User::model()->findByPk(Yii::app()->user->id);
      $profileLink = Yii::app()->params['siteUrl'].'/'.$model->username;
      $model->profileUser = $model->username;
      $model->setScenario('changeUsername');

      $this->performAjaxValidation($model, 'changeUsername-form');

      if (isset($_POST['User'])) {
        $model->attributes = $_POST['User'];
        if ($model->validate()) {
            $model->username = $model->profileUser;
            if($model->update()) {
          Yii::app()->user->setFlash('success', "Successfully updated username.");
          
          
            echo '<script type="text/javascript">$("#usernameChange").slideUp();</script>';
        }
        }
      }

      $this->renderPartial('changeUsername', array('model' => $model, 'profileLink' => $profileLink, 'status' => $status), false, true);
    }
    
    
    public function actionSignUp()
    {
        $model = new User();
            $model->setScenario('signup');
            
             // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model, 'user-form');

        /*
          if(!$model->hasErrors('firstName')) {
          Yii::app()->user->setFlash('success','<b>&#10004;</b> &nbsp First name looks great!');
          }
         */
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];

            if ($model->validate()) {
                
                $tempPassword = $model->password;
                if($model->save())
                {
                    $login = new LoginForm;
                    $login->email = $model->email;
                    $login->password = $tempPassword;
                    
                    if($login->login()) {
                        Yii::app()->user->setFlash('success', "Successfully Registered");
                    //Remember to Send Email Support.
                       return $this->render('completeProfile', array('model' => $model));
                    }
                }
                
            }
            
            }
            
        $this->renderPartial('signup', array('model' => $model), false, true);
    }
    
    public function actionView()
    {
        
        $username = Yii::app()->request->getQuery('username');
        $model = User::model()->find("username='" . $username . "'");
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');

        
        $this->render('view', array('model' => $model));
    }
    
    
    public function actionChangeZipCode()
    {
        $model = User::model()->findByPk(Yii::app()->user->id);
        $model->setScenario('changeZipCode');
        
        $this->performAjaxValidation($model, 'changeZipCode-form');
        
        if (isset($_POST['User'])) {
            
            $model->attributes = $_POST['User'];
            
            if($model->validate() && $model->update())
            {
                
                Yii::app()->user->setFlash('success', "Your zipcode was sucessfully changed");
                
            }
            
        }
        
        $this->render('changeZipCode', array('model' => $model));
    }
    
    
    /**
     *Change Password 
     */
    public function actionChangePassword() {

        $model = User::model()->findByPk(Yii::app()->user->id);
        $model->setScenario('changePassword');
        $status = false;
        
         $this->performAjaxValidation($model, 'changepassword-form');

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];

            if ($model->validate()) {
                
                if($model->changePassword())
                {
                    $changedPassword = new PasswordChanged();
                    $changedPassword->userId = $model->id;
                    $changedPassword->dateChanged = new CDbExpression('NOW()');
                    $changedPassword->ipAddress = CHttpRequest::getUserHostAddress();
                    if($model->update() && $changedPassword->save()) {
                        Yii::app()->user->setFlash('success', "Successfully Changed Password");
                        $status = true;
                        
                    }
                        
                }
                
            }
            
            }

        if($status == false)
            $this->renderPartial('changePassword', array('model' => $model), false, true);
    }
    
    
    public function actionChangeName()
    {
        $model = User::model()->findByPk(Yii::app()->user->id);
        $model->setScenario('changeName');
        
        
        $this->performAjaxValidation($model, 'changename-form');
        
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];

            if ($model->validate()) {
                    if($model->update())
                        Yii::app()->user->setFlash('success', "Successfully Changed Username");
                
            }
            
            }
        
        $this->renderPartial('changeName', array('model' => $model), false, false);
    }
    
    
    public function actionSignUp2()
    {
        
        $model = new User;
        $model->setScenario('signup');
        
        $this->performAjaxValidation($model, 'signup-form');
        
        if(isset($_POST['User'])){
            
            $model->attributes = $_POST['User'];
            
            if($model->validate() && $model->save())
            {
                
                echo "You've registered";
                
            }
            
        }
        
        $user = User::model()->findByPk('1');
        
        
        echo $user->firstName.'<br>';
        echo $user->lastName.'<br>';
        
        $user->firstName = "Josh";
        
        $user->update();
        echo 'After Update<br>';
        echo $user->firstName;
        
        
       
        
        
        $this->render('signup2', array('model' => $model));
        
    }
    
    
    public function actionProfile()    
    {
        
        $model = User::model()->findByPk(Yii::app()->user->id);
        $this->render('profile', array('model' => $model));
        
    }
    
    public function actionEditAboutMe()
    {
        if(!Yii::app()->user->isBusiness) {
            if(isset($_POST['id']) && isset($_POST['value']) && !empty($_POST['value']))
            {
                if($_POST['id'] == 'aboutme') {    
                    $aboutMe = $_POST['value'];
                    $model = User::model()->findByPk(Yii::app()->user->id);
                    $model->aboutMe = $aboutMe;
                if($model->update())
                    echo $model->aboutMe;
               
                }
            }
        }    
    }
    
    public function actionEditCurrentCity()
    {
        if(!Yii::app()->user->isBusiness) {
            if(isset($_POST['id']) && isset($_POST['value']) && !empty($_POST['value']))
            {
                if($_POST['id'] == 'currentCity') {    
                    $currentCity = $_POST['value'];
                    $model = User::model()->findByPk(Yii::app()->user->id);
                    $model->city = $currentCity;
                if($model->update())
                    echo $model->city;
               
                }
            }
        }    
    }
    
    public function actionEditCurrentState()
    {
        if(!Yii::app()->user->isBusiness) {
            if(isset($_POST['id']) && isset($_POST['value']) && !empty($_POST['value']))
            {
                if($_POST['id'] == 'currentState') {    
                    $currentState = $_POST['value'];
                    $model = User::model()->findByPk(Yii::app()->user->id);
                    $model->state = $currentState;
                if($model->update())
                    echo $model->state;
               
                }
            }
        }    
    }
    
    
    public function actionSettings()
    {
        $model = User::model()->findByPk(Yii::app()->user->id);
        
        $this->render('settings', array('model' => $model));
        
    }
    
    public function actionCompetition()
    {
        $model = User::model()->findByPk(Yii::app()->user->id);
        $this->render('competition', array('model' => $model));
        
    }
    
    public function actionCompleteProfile() {
        
            $model = User::model()->findByPk(Yii::app()->user->id);
            $profileLink = Yii::app()->params['siteUrl'].'/'.$model->username;
            $model->profileUser = $model->username;
            $this->render('completeProfile', array('model' => $model, 'profileLink' => $profileLink));
        
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
    
        public function loadSolutionModel($id)
	{
		$model=Solution::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
    public function actionCompetitionSub($id) {
            
            $model = User::model()->findByPk(Yii::app()->user->id);
            $mySolutions = Solution::model()->findAll(array(
                    'select' => '*',
                    'condition' => 'userId=:userId AND competitionId =:competitionId',
                    'params' => array(':userId' => $model->id, ':competitionId' => $id),
                        ));
            
            //
            ////$model->solutions->with('.id')->findByPk($id);
            $this->render('competitionSub', array('model' => $model, 'mySolutions' => $mySolutions, 'competition' => $this->loadCompetitionModel($id)));
        
    }
    
    public function actionSubmitSolution()    
    {
        $solution = new Solution;
        
        $this->performAjaxValidation($solution, 'solution-form');
        
        if(isset($_POST['Solution'])){
            
            $solution->attributes = $_POST['Solution'];
            
            if($solution->validate() && $solution->save()) {
                
                
            }
            }
        
        
        $this->renderPartial('_solutionForm', array('solution' => $solution), false, true);
    
           // $this->render('_solutionForm', array('solution' => $solution));
    }
    
    public function actionMySolutions($id)
    {
        
        $model = User::model()->findByPk(Yii::app()->user->id);
        $mySolutions = Solution::model()->findAll(array(
                    'select' => '*',
                    'condition' => 'userId=:userId AND competitionId =:competitionId',
                    'params' => array(':userId' => $model->id, ':competitionId' => $id),
                        ));
        
        $this->renderPartial('_mySolutions', array('mySolutions' => $mySolutions), false, true);
    }
    
    public function actionDescription($id)
    {
        $model = User::model()->findByPk(Yii::app()->user->id);
        $this->renderPartial('_description', array('model' => $model, 'competition' => $this->loadCompetitionModel($id)), false, true);
    }
    
    
    public function actionAwardDetails($id)
    {
        $model = User::model()->findByPk(Yii::app()->user->id);
        $this->renderPartial('_awardDetails', array('model' => $model, 'competition' => $this->loadCompetitionModel($id)),false, true);
    }
    
    
    public function actionIndex() {
        $this->render('index');
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
    
    
    /**
     * This will email the user, the confirmation code.
     * @param type $model 
     */
    protected function sendSignUpConfirmation(&$model) {

        $signUpEmail = New YiiMailMessage;
        $signUpEmail->view = 'userSignup';
        $signUpEmail->setBody(array('model' => $model), 'text/html');
        $signUpEmail->setFrom(array('welcome@ideareef.com' => 'IdeaReef'));
        $signUpEmail->setSubject('Welcome - IdeaReef');
        $signUpEmail->addTo($model->email);
        Yii::app()->mail->send($signUpEmail);
    }
    
    public function actionUpload()
    {
        
        if (isset($_GET['key']))
        {
            echo $_GET['key'];
            
        }
        
        $this->render('upload');
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
