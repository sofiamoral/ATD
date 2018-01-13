<?php
include_once(dirname(__FILE__) . '/controller.php');
include_once(dirname(__FILE__) . '/curlController.php');
include_once(dirname(__FILE__) . '/viewController.php');

/*
*
* Class Controller to manage how to list the results
*
*/
class ApiController extends Controller { 

    public function __construct(){
    	if(isset($_POST['title'])){
    		$json = json_encode($this->jsonp_decode($this->getFiltered('title',$_POST['title'])));
    	} else {
    		$json = json_encode($this->jsonp_decode($this->getAll()));
    	}
    	
    	$this->show('products','datos', $json); 
    }	
	protected function getAll(){
		$curl = new CurlController; 
		return $curl->curlInit();
	}
	protected function getFiltered($varname,$value){
		$curl = new CurlController; 
		$curl->setVarName($varname);
		$curl->setVarValue($value);
		return $curl->curlInit();
	}	
}

?>