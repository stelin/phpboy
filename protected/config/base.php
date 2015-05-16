<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Yii Blog Demo',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	    'application.extensions.*',
	    'application.extensions.smarty.sysplugins.*',
	),

	'defaultController'=>'post',

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'db'=>array(
			'connectionString' => 'sqlite:protected/data/blog.db',
			'tablePrefix' => 'tbl_',
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=blog',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'post/<id:\d+>/<title:.*?>'=>'post/view',
				'posts/<tag:.*?>'=>'post/index',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
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
	    'smarty'=>array(
	        'class'=>'application.extensions.CSmarty',
	    ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
	    // this is displayed in the header section
	    'title'=>'My Yii Blog',
	    // this is used in error pages
	    'adminEmail'=>'webmaster@example.com',
	    // number of posts displayed per page
	    'postsPerPage'=>10,
	    // maximum number of comments that can be displayed in recent comments portlet
	    'recentCommentCount'=>10,
	    // maximum number of tags that can be displayed in tag cloud portlet
	    'tagCloudCount'=>20,
	    // whether post comments need to be approved before published
	    'commentNeedApproval'=>true,
	    // the copyright information displayed in the footer section
	    'copyrightInfo'=>'Copyright &copy; 2009 by My Company.',
	),
);