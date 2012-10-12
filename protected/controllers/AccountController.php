<?php

class AccountController extends Controller
{
    
    public $layout = 'public';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=account/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
            $this->layout = 'index';
            echo "WOW";
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
                
	}
        
        
        /**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionAboutUs()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('aboutus');
                
	}
        
        public function actionBusiness()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('business');
                
	}
        
        public function actionCompetitions()
	{
            //$this->layout='privateUser';
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('competitions');
                
	}
        

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
        
        

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model = new LoginForm;

        // if it is ajax validation request
       $this->performAjaxValidation($model, 'login-form');

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid'
			if($model->validate() && $model->login()) {    
                           
                                if(Yii::app()->user->isBusiness){
                                    
                                    $model = Business::model()->findByPk(Yii::app()->user->id);
                                    if($model->profileComplete == 0)
                                    {
                                        
                                        $this->redirect(array('/business/completeProfile'));
                                    }
                                    
                                    
                                }
                                else {
                                    $model = User::model()->findByPk(Yii::app()->user->id);
                                    if($model->profileComplete == 0)
                                    {
                                        $this->redirect(array('/user/completeProfile'));
                                        
                                    }
                                    
                                    
                                }
                                $this->redirect(Yii::app()->user->returnUrl);
                           
                        }
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
        
        /**
         * Sign up 
         */
        public function actionSignUp()
        {
            
            $model = new User('signup');
            
            
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
                
                if($model->save())
                {
                    Yii::app()->user->setFlash('success', "Successfully Registered");
                }
                
            }
            
            }
            
            
            $this->render('signup', array('model' => $model));
        }
        
        public function actionSettings()
        {
            
            $this->render('settings');
        }
        
        public function actionEmailRecovery()
        {
            
            $this->render('emailrecovery');
        }
        
        public function actionRecover()
        {
    
            if (isset($_GET['memberId']) && isset($_GET['tok']) && isset($_GET['status'])) {
            $memberId = $_GET['memberId'];
            $token = $_GET['tok'];
            $status = $_GET['status'];
            if (!empty($memberId) && !empty($token) && !empty($status)) {

                if ($status == 'user') {
                    $user = User::model()->findByPk($memberId);
                    if ($user != null && $user->isVerificationCodeValid($token)) {
                        Yii::app()->user->setState('accountType', 'user');
                        Yii::app()->user->setState('memberId', $user->id);
                        $this->redirect(array('account/RecoveryChangePassword'));
                    }
                } elseif ($status == 'business') {
                    $business = Business::model()->findByPk($memberId);
                    
                    if($business != null && $business->isVerificationCodeValid($token))
                    {
                        Yii::app()->user->setState('accountType', 'business');
                        Yii::app()->user->setState('memberId', $business->id);
                        $this->redirect(array('account/RecoveryChangePassword'));
                    }
                    
                } else {
                    throw new CHttpException(404, 'The requested page does not exist.');
                }
            }
        }
        
            
        
        
            
        }
        
        /**
         * Recover your account, password and etc. 
         */
        public function actionRecovery()
        {
            
            $model = new RecoveryForm;
            

        // if it is ajax validation request
       $this->performAjaxValidation($model, 'account-recovery-form');

		// collect user input data
		if(isset($_POST['RecoveryForm']))
		{
			$model->attributes=$_POST['RecoveryForm'];
                        
                        if($model->validate()) {
                            
                            $user = User::model()->find('LOWER(email)=?', array(strtolower($model->email)));
                            
                            if($user === null) {
                                $business = Business::model()->find('LOWER(email)=?', array(strtolower($model->email)));
                                
                                if($business != null) {
                                    $business->verifyCode = $this->createVerificationCode();
                                    $business->verifyCodeDate = new CDbExpression('NOW()');
                                }
                                        if($business->update())
                                            $this->sendAccountBusinessRecoveryConfirmation($business);    
                            }
                            else {  
                                $user->verifyCode = $this->createVerificationCode();
                                $user->verifyCodeDate = new CDbExpression('NOW()');
                                    if($user->update())
                                        $this->sendAccountUserRecoveryConfirmation($user);
                                        
                            }
                            
                            Yii::app()->user->setFlash('status','An email has been sent out with instructions on resetting your password.');
                        
                            $model->setScenario('verify');
                            //$this->redirect('account/verify-code');
                        
                            $this->redirect(array('account/emailrecovery'), array('model' => $model));
                        }
                        
                }    
                    $this->render('recovery', array('model' => $model));
                
                
            
                
            
        }
        
        
        public function actionVerifyCode()
        {
            $model = new RecoveryForm('verify');
            
        // if it is ajax validation request
       $this->performAjaxValidation($model, 'account-recovery-step-two-form');
        
            // collect user input data
		if(isset($_POST['RecoveryForm']))
		{
			$model->attributes=$_POST['RecoveryForm'];
                        
                        if($model->validate()) {
                            
                            //echo "Model Validated Succesfully";
                            $user = User::model()->find('LOWER(email)=?', array(strtolower($model->email)));
                            
                            if($user != null)
                            {
                                
                                echo 'Database Verification Code: '.$user->verifyCode.'<br>';
                                echo 'User Input: '.$model->verifyCode.'<br>';
                                
                                if($user->verifyCode == $model->verifyCode)
                                {
                                    
                                    echo "Verified Thanks!";
                                    
                                    $this->renderPartial('recovery-change-password', false, true);
                                }
                                else 
                                    echo "Bad Verification Code";
                                
                            }
                            
                            
                        }
                }
                else {
            $this->render('verify-code', array('model' => $model));
                }
        }
        
        public function actionRecoveryChangePassword()    
        {
            $model = new RecoveryChangePasswordForm;
            $this->performAjaxValidation($model, 'recovery-change-password-form');
        
            
            $memberId = Yii::app()->user->getState('memberId');
            $accountType = Yii::app()->user->getState('accountType');
            
            if(isset($memberId) && isset($accountType)) {
                
                if(!empty($memberId) && !empty($accountType)) {
              
		if(isset($_POST['RecoveryChangePasswordForm']))
		{
			$model->attributes=$_POST['RecoveryChangePasswordForm'];
                        
                        if($model->validate()) {
                            
                            if($accountType == 'user') {
                                
                                $user = User::model()->findByPk($memberId);
                                if($user === null)
                                    throw new CHttpException(404, 'The requested page does not exist.');
                                else {
                                    
                                    if($user->changePasswordRecovery($model->password) && $user->update()) {
                                        
                                        $loginUser = new LoginForm;
                                        $loginUser->password = $model->password;
                                        $loginUser->email = $user->email;
                                        if($loginUser->validate() && $loginUser->login())
                                        {
                                            Yii::app()->user->setState('accountType', null);
                                            Yii::app()->user->setState('memberId', null);
                                            $this->redirect(array('user/'));
                                            
                                        }
                                    }
                                        
                                }
                                
                            }
                            elseif($accountType == 'business') {
                                
                                $business = Business::model()->findByPk($memberId);
                                if($business === null)
                                    throw new CHttpException(404, 'The requested page does not exist.');
                                else {
                                    
                                    if($business->changePasswordRecovery($model->password) && $business->update()) {
                                        
                                        $loginUser = new LoginForm;
                                        $loginUser->password = $model->password;
                                        $loginUser->email = $business->email;
                                        if($loginUser->validate() && $loginUser->login())
                                        {
                                            Yii::app()->user->setState('accountType', null);
                                            Yii::app()->user->setState('memberId', null);
                                            $this->redirect(array('business/'));
                                            
                                        }
                                    }
                                        
                                }
                                
                            }
                            else {
                                throw new CHttpException(404, 'The requested page does not exist.');
                                
                            }
                            
                        }
                }
                           
            
                $this->render('recovery-change-password', array('model' => $model));
                
            
                }
            
            }
            
        }
        
        
        public function createVerificationCode() {
            $uniqueID = str_shuffle(uniqid());
            $uniqueID = $uniqueID . '_' . uniqid();
            $randomGenerated = '';

            for ($i = 0; $i < strlen($uniqueID); $i++) {
                $x = rand(0, 1);
                if ($x == 0)
                    $randomGenerated = $randomGenerated . strtoupper($uniqueID[$i]);
                else
                    $randomGenerated = $randomGenerated . $uniqueID[$i];
            }

        return $randomGenerated;
        }

    /**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        
        
        /**
     * This will email the user, the confirmation code.
     * @param type $model 
     */
    protected function sendAccountBusinessRecoveryConfirmation(&$model) {

        $recoveryEmail = New YiiMailMessage;
        $recoveryEmail->view = 'accountBusinessRecovery';
        $recoveryEmail->setBody(array('model' => $model), 'text/html');
        $recoveryEmail->setFrom(array('no-reply@ideareef.com' => 'IdeaReef'));
        $recoveryEmail->setSubject('Account Recovery- IdeaReef');
        $recoveryEmail->addTo($model->email);
        Yii::app()->mail->send($recoveryEmail);
    }
        
    
    
    
       /**
     * This will email the user, the confirmation code.
     * @param type $model 
     */
    protected function sendAccountUserRecoveryConfirmation(&$model) {

        $recoveryEmail = New YiiMailMessage;
        $recoveryEmail->view = 'accountUserRecovery';
        $recoveryEmail->setBody(array('model' => $model), 'text/html');
        $recoveryEmail->setFrom(array('no-reply@ideareef.com' => 'IdeaReef'));
        $recoveryEmail->setSubject('Account Recovery- IdeaReef');
        $recoveryEmail->addTo($model->email);
        Yii::app()->mail->send($recoveryEmail);
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
}