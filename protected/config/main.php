<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
		'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'Sistem Informasi Penelitian Dan Pengembangan',
		// preloading 'log' component
		'preload'=>array('log'),

		// autoloading model and component classes
		'import'=>array(
				'application.models.*',
				'application.components.*',
				'application.helpers.*',
		),

		'modules'=>array(
				// uncomment the following to enable the Gii tool

				'gii'=>array(
						'class'=>'system.gii.GiiModule',
						'password'=>'admin',
						// If removed, Gii defaults to localhost only. Edit carefully to taste.
						'ipFilters'=>array('*'),
				),
				'forum',

		),

		// application components
		'components'=>array(
				'ePdf' => array(
					'class' => 'ext.yii-pdf.EYiiPdf',
					'params' => array(
						'mpdf' => array(
							'librarySourcePath' => 'application.vendor.mpdf.*',
							'constants' => array (
								'_MPDF_TEMP_PATH' => Yii::getPathOfAlias('application.runtime'),
							),
							'class' => 'mpdf',
						),
						'HTML2PDF' => array(
							'librarySourcePath' => 'application.vendor.html2pdf.*',
							'classFile' => 'html2pdf.class.php',
						),
					),
				),
				'image'=>array(
					'class'=>'application.extensions.image.CImageComponent',
					'driver'=>'GD',
					),

				'user'=>array(
						// enable cookie-based authentication
						'allowAutoLogin'=>true,
				),
				// uncomment the following to enable URLs in path-format

				'urlManager'=>array(
						'urlFormat'=>'path',
						'showScriptName'=>false,
						'rules'=>array(
								'<controller:\w+>/<id:\d+>'=>'<controller>/view',
								'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
								'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
						),
				),

				
				

				'db'=>array(
				 'connectionString' => 'mysql:host=localhost;dbname=sipp_db',
						'emulatePrepare' => true,
						'username' => 'root',
						'password' => '',
						'charset' => 'utf8',
				), 

				'errorHandler'=>array(
						// use 'site/error' action to display errors
						'errorAction'=>'site/error',
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
				'adminEmail'=>'webmaster@example.com',
		),
);