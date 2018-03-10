<?php

// Load my root class 
require_once(__ROOT_DIR . '/classes/MyObject.class.php');

class AutoLoader extends MyObject {
	
	public function __construct() { 
		spl_autoload_register(array($this, 'load')); 
	}
	// This method will be automatically executed by PHP whenever it encounters 
	// an unknown class name in the source code 
	private function load($className) { 
		// TODO
		$paths = array('/classes/','/model/','/controller/','/view/');
		$i = 0;
		do{
			$classPath = __ROOT_DIR .$paths[$i] . ucfirst($className) . ".class.php";
			
			$i++;
		}while ($i < count($paths) && !is_readable($classPath));
		
		if(!is_readable($classPath))
			throw new Exception('Unknown class ' . $className);
		
		
		require_once($classPath);
	}
}
$__LOADER = new AutoLoader(); 

?>