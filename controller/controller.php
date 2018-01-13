<?php
/*
*
* Abstract class Controller
* to be extended by the controller classes
*
*/

abstract class Controller{
	// loading all the records
	abstract protected function getAll();
	// loading filtered records
	abstract protected function getFiltered($varname,$value);
	// loading data in a custom template
    public function show($template,$varname,$values){
        $view = new View($template);
        $view->assign($varname, $values);         
    }  
    // decoding jsonp data results 
	public function jsonp_decode($jsonp, $assoc = false) { // PHP 5.3 adds depth as third parameter to json_decode
	    if($jsonp[0] !== '[' && $jsonp[0] !== '{') { // we have JSONP
	       $jsonp = substr($jsonp, strpos($jsonp, '('));
	    }
	    return json_decode(trim($jsonp,'();'), $assoc);
	}    
}

?>