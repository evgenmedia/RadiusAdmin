<?php
/**
 	Filename:   autoloader.php
 	Date:       2016-01-20
 	Author:     Lars Veldscholte
 	            lars@veldscholte.eu
 	            http://lars.veldscholte.eu

 	Copyright 2016 Lars Veldscholte

 	This file is part of RadiusAdmin.

 	RadiusAdmin is free software: you can redistribute it and/or modify
 	it under the terms of the GNU General Public License as published by
 	the Free Software Foundation, either version 3 of the License, or
 	(at your option) any later version.

 	RadiusAdmin is distributed in the hope that it will be useful,
 	but WITHOUT ANY WARRANTY; without even the implied warranty of
 	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 	GNU General Public License for more details.

 	You should have received a copy of the GNU General Public License
 	along with RadiusAdmin. If not, see <http://www.gnu.org/licenses/>.
 */

// Normal classes
spl_autoload_register(function($className) {
	$file = __DIR__ . "/../classes/$className.php";
	file_exists($file) and require($file);
});

// All messages are in one file
spl_autoload_register(function($className) {
	if(strpos($className, "Message") != false) {
		require(__DIR__ . "/../classes/messages.php");
	}
});

// All exceptions are in one file
spl_autoload_register(function($className) {
	if(strpos($className, "Exception") != false) {
		require(__DIR__ . "/../classes/exceptions.php");
	}
});

// Chainload Composer's autoloader
require(__DIR__ . "/../../vendor/autoload.php");

?>