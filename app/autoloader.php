<?php
function loader($class){
	$class_file=DIR.DS.$class.'.php';
	if(file_exists($class_file)){
		require_once($class_file);
	}
	else
	{
		foreach(inserialize(AUTOLOAD_CLASSES) as $path){
			$class_file=$path.DS.$class.'.php';
			if(file_exists($class_file))require_once($class_file);
		}
	}
}