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
                                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                                'aboutus' => 'account/aboutus',
                                'companies' => 'account/business',
                                'competition' => 'competition/index',
                                'login' => 'account/login',
                                'signup' => 'account/signup',
                                'logout' => 'account/logout',
                                'business' => 'business/index', 
                                'business/<bizurl>'=>'business/view',
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
			'connectionString' => 'mysql:host=ideareef.com;dbname=insite',
			'emulatePrepare' => true,
			'username' => 'root',
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
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'mnouh@ideareef.com',
                'siteUrl'=>'www.ideareef.com',
	),
);