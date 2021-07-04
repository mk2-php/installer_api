<?php

/**
 * ===================================================
 * 
 * PHP Framework "Mk2"
 *
 * MainController
 * 
 * URL : https://www.mk2-php.com/
 * 
 * Copylight : Nakajima-Satoru 2021.
 *           : Sakaguchiya Co. Ltd. (https://www.teastalk.jp/)
 * 
 * ===================================================
 */

namespace App\Controller;

class MainController extends Controller{

	/**
	 * handleBefore
	 */
	public function handleBefore(){
		
		// handle before area
		parent::handleBefore();
	}

	/**
	 * handleAfter
	 * @param $input
	 */
	public function handleAfter($input){

		// handle after area
		parent::handleAfter($input);
	}

	/**
	 * index
	 */
	public function index(){
		
		// Set the response with return.
		// It will be automatically converted to JSON with handleAfter.
		return [
			"status"=>true,
			"message"=>"Hallow World! PHP-FW \"Mk2\" API Installer Sample",
		];
	}
}