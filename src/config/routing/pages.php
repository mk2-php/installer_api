<?php

// set middlewares
$middleware=[
	"Main",
];

return [

	// pages url scope enable
	// "scope"=>true,

	// pages release list
	"release"=>[
		"/"=>"main@index",
	],

	// error url scope enable
	// "errorScope"=>true,

	// error list
	"error"=>[
		"Exception"=>"error@index",
	],
	
];