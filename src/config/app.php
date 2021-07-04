<?php

/**
 * ===================================================
 * 
 * PHP Framework "Mk2"
 *
 * config/app
 * 
 * URL : https://www.mk2-php.com/
 * 
 * Copylight : Nakajima-Satoru 2021.
 *           : Sakaguchiya Co. Ltd. (https://www.teastalk.jp/)
 * 
 * ===================================================
 */

namespace Mk2\Libraries;

return [

	/**
	 * - appName
	 * 
	 * Specify the development application name here.
	 */
	'appName'=>'Mk2 SYS',

	/**
	 *  - version
	 */
	"version"=>1,

	/**
	 * - debugMode
	 * 
	 * If this is set to true, debug trace results etc. will be displayed by default when an error occurs.
	 */
	'debugMode' => true,

	/**
	 * - autoRouting
	 * 
	 * If this is set to true, the assigned Controller and action will be automatically determined by the URL even if there is no routing setting.
	 * 
	 */
	'autoRouting'=>false,

	/**
	 * - defaultRouting
	 * 
	 * If ʻautoRouting` is true, be sure to specify the default Controller and action.
	 */
	'defaultRouting'=>[
		'controller' => 'main',
		'action' => 'index',
	],

	/**
	 * - fullPath
	 * 
	 * If this is set to true, route information etc. will be displayed with the full path including the domain name.
	 */
	'fullPath'=>false,

	/**
	 * - coreblock
	 * 
	 * In the CoreBlock class that is the core of each class, it is possible to enable / disable the subclass to be used.
	 */
	'coreBlock'=>[
		'useLoading'=>true,
		'useRequest'=>true,
		'useResponse'=>true,
	],

	/**
	 * - useClass
	 * 
	 * Be sure to list each class to be used here.
	 */
	'useClass'=>[
		'Controller',
		'Backpack',
		'UI',
		'Model',
		'Table',
		'Validator',
		'Render',
		'Shell',
		'Middleware',
	],

	/**
	 *  - routing
	 * 
	 */
	'routing'=>[
		'pages'=>Config::require("routing/pages.php"),
		'shell'=>Config::require("routing/shell.php"),
	],

	/**
	 *  - database
	 * 
	 */
	'database'=>Config::require("database.php"),

	/**
	 *  - middleware
	 * 
	 */
	'middleware'=>[
		'pages'=>Config::require("middleware/pages.php"),
		'shell'=>Config::require('middleware/shell.php'),
	],

	/**
	 * - require
	 * 
	 * List the configuration files that have been converted to external files here.
	 */
	'require'=>[
		'const',
	],
	
];