<?php
/*
*
* Class Controller to manage external call in curl
*
*/
class CurlController{
	private $restUrl = "https://atd.atdtravel.com/api/products";
	private $username = "dev-interview";
	private $password = "asdf1234";
	private $varname = null;
	private $varvalue = null;

	// Set the curl attributes
    protected function setCurlVar($url = null, $usr = null, $pwd = null) {
		if (isset($url) && $url !== $this->restUrl){ 
			$this->restUrl = $url;
			if ($usr !== $this->username){
				$this->username = $usr;
			}
			if ($pwd !== $this->password){
				$this->password = $pwd;
			} 			
		}      	
    } 

    // Set the curl params
    protected function setCurlVarParam(){
    	if(isset($this->varname) && isset($this->varvalue)){
    		$this->restUrl.='?'.$this->varname.'='.$this->varvalue;
    	}    	
    }

    // Set varname value
    public function setVarName( $varname){
    	$this->varname = $varname;
    } 

    // Set varvalue value
    public function setVarValue( $varvalue){
    	$this->varvalue = $varvalue;
    } 

    // Init the curl and returning results
    public function curlInit($url = null, $usr = null, $pwd = null){
    	$this->setCurlVar($url, $usr, $pwd);
		$this->setCurlVarParam();

		//  Initiate curl
		$ch = curl_init();
		// Disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERPWD, "$this->username:$this->password");
		// Set the url
		curl_setopt($ch, CURLOPT_URL,$this->restUrl);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch); 
		return $result;   	
    }

}

?>