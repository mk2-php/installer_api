<?php

/**
 *  Mk2 Startor
 * 
 *  Run the Generator of the PHP framework "Mk2".  
 *  Check if the following required dependent packages are installed from Composer.
 * 
 *  - mk2\libraries
 * 
 */

use Mk2\Libraries\Generator;

$composerPath = "../../vendor/autoload.php";

if(!file_exists($composerPath)){
    // If the Composer Autoloader does not exist, display the following message and exit.
    echo "Dependent packages not found. <br>Check if the dependent packages are installed from Composer.";
    return;
}

require $composerPath;

define("MK2_ROOT",dirname(__DIR__));

new Generator();