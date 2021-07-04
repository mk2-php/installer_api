<?php

/**
 * ===================================================
 * 
 * PHP Framework "Mk2"
 *
 * ErrorController
 * 
 * URL : https://www.mk2-php.com/
 * 
 * Copylight : Nakajima-Satoru 2021.
 *           : Sakaguchiya Co. Ltd. (https://www.teastalk.jp/)
 * 
 * ===================================================
 */

namespace App\Controller;

class ErrorController extends Controller{

	/**
	 * index
	 * @param $exception
	 */
	public function index($exception){

		// Set the response(Error message content) with return.
		// It will be automatically converted to JSON with handleAfter.
		return [
			"status"=>false,
			"error"=>$exception->getMessage(),
		];
	}

}