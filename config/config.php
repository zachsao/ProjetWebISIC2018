<?php
	
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Debug
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	// define (__DEBUG, false);
	// define (__DEBUG, true);

	// if(__DEBUG) {
		// error_reporting(E_ALL);
		// ini_set("display_errors", E_ALL);
	// } else {
		// error_reporting(0);
		// ini_set("display_errors", 0);
	// }

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// DB
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	if($_SERVER['DOCUMENT_ROOT']=='/Users\pierr\Desktop\Mines Douai\UwAmp\UwAmp\www\ProjetWebISIC2018') {
		define('_MYSQL_HOST','localhost');
		define('_MYSQL_PORT',8080);	
		define('_MYSQL_DBNAME','user');
		define('_MYSQL_USER','root');
		define('_MYSQL_PASSWORD','root');
	}
	else if($_SERVER['DOCUMENT_ROOT']=='/Logiciels/UwAmp/www/ProjetWebISIC2018') {
		define('_MYSQL_HOST','localhost');
		define('_MYSQL_PORT',80);	
		define('_MYSQL_DBNAME','user');
		define('_MYSQL_USER','root');
		define('_MYSQL_PASSWORD','root');
	} else {
		// on the isic server for example
		define('_MYSQL_HOST','localhost');
		//define('_MYSQL_PORT',2222);	
		define('_MYSQL_DBNAME','pierre_galus');
		define('_MYSQL_USER','pierre.galus');
		define('_MYSQL_PASSWORD','HdZjQ4os');	
	}
	
?>