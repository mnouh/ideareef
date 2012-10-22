<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'IdeaReef',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.extensions.yii-mail.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'hello1234',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
            
                'mailbox'=> array(  
                                    'userClass' => 'User',
                                    'userIdColumn' => 'id',
                                    'usernameColumn' =>  'email',
                ),
	
	),
    
        'defaultController' => 'account',

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
                        'class'=>'WebUser',
		),
        
                'file'=>array(
                        'class'=>'application.extensions.file.CFile',
                ),
            
            
                's3upload' => array(
                            'class'=>'ext.s3upload.CS3Upload',
                            'aKey'=>'AKIAJ4XVAQWX3SVEAOOQ', 
                            'sKey'=>'bJX5NWKXPqd2mpibP5BQtoG/g9nhcolNBCS1ms1m',
                            'bucket' =>'ideareef',
                ),
            
                's3' => array(
                             'class'=>'ES3',
                             'aKey'=>'AKIAJ4XVAQWX3SVEAOOQ', 
                             'sKey'=>'bJX5NWKXPqd2mpibP5BQtoG/g9nhcolNBCS1ms1m',
                ),
                
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName' => false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				array('api/list', 'pattern' => 'api/<model:\w+>', 'verb' => 'GET'),
                                array('api/view', 'pattern' => 'api/<model:\w+>/<id:\d+>', 'verb' => 'GET'),
                                array('api/update', 'pattern' => 'api/<model:\w+>/<id:\d+>', 'verb' => 'PUT'),
                                array('api/delete', 'pattern' => 'api/<model:\w+>/<id:\d+>', 'verb' => 'DELETE'),
                                array('api/create', 'pattern' => 'api/<model:\w+>', 'verb' => 'POST'),
                                array('api/login', 'pattern' => 'api/<model:\w+>', 'verb' => 'POST'),
                                array('api/competitions', 'pattern' => 'api/<model:\w+>', 'verb' => 'POST'),
                                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                                'aboutus' => 'account/aboutus',
                                'companies' => 'account/business',
                                'competition' => 'competition/index',
                                'login' => 'account/login',
                                'signup' => 'account/signup',
                                'logout' => 'account/logout',
                                'business' => 'business/index', 
                                'business/<bizurl>'=>'business/view',
                                'user' => 'user/index',
                                '<username>'=>'user/view',
			),
		),
            
                'mail' => array(
                    'class' => 'application.extensions.yii-mail.YiiMail',
                    'transportType' => 'smtp',
                    'transportOptions' => array(
                        'host' => 'smtp.gmail.com',
                        'username' => 'admin@ideareef.com',
                        'password' => 'ideareef4625',
                        'encryption' => 'tls',
                        'port' => '465',
                ),
            'viewPath' => 'application.views.mail',
            'logging' => true,
            'dryRun' => false,
        ),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=ideareef.com;dbname=main_ideareef',
			'emulatePrepare' => true,
			'username' => 'main',
			'password' => 'chief4625',
			'charset' => 'utf8',
                        'tablePrefix' => 'tbl_',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'account/error',
        ),
            
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
            'facebook'=>array(
                'class' => 'ext.yii-facebook-opengraph.SFacebook',
                'appId'=>'107950266030152', // needed for JS SDK, Social Plugins and PHP SDK
                'secret'=>'2574b6d33249b23be143901b121aa3a8', // needed for the PHP SDK
                //'fileUpload'=>false, // needed to support API POST requests which send files
                //'trustForwarded'=>false, // trust HTTP_X_FORWARDED_* headers ?
                //'locale'=>'en_US', // override locale setting (defaults to en_US)
                //'jsSdk'=>true, // don't include JS SDK
                //'async'=>true, // load JS SDK asynchronously
                //'jsCallback'=>false, // declare if you are going to be inserting any JS callbacks to the async JS SDK loader
                //'status'=>true, // JS SDK - check login status
                //'cookie'=>true, // JS SDK - enable cookies to allow the server to access the session
                //'oauth'=>true,  // JS SDK - enable OAuth 2.0
                //'xfbml'=>true,  // JS SDK - parse XFBML / html5 Social Plugins
                //'frictionlessRequests'=>true, // JS SDK - enable frictionless requests for request dialogs
                //'html5'=>true,  // use html5 Social Plugins instead of XFBML
                //'ogTags'=>array(  // set default OG tags
                    //'title'=>'MY_WEBSITE_NAME',
                    //'description'=>'MY_WEBSITE_DESCRIPTION',
                    //'image'=>'URL_TO_WEBSITE_LOGO',
                //),
  ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'mnouh@ideareef.com',
                'siteUrl'=>'www.ideareef.com',
	),
);
