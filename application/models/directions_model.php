<?php
//directions_model.php

class Directions_model extends CI_Model
{
	public function __construct()
	{//creates an active connection to DB
		//$this->load->database();
	}//end constructor
	
	static private $url = "http://maps.googleapis.com/maps/api/geocode/json?sensor=false&address=";

    static private function getLocation($address){
        $url = self::$url.urlencode($address);
        
        $resp_json = self::curl_file_get_contents($url);
        $resp = json_decode($resp_json, true);
	
        if($resp['status']='OK'){
            return $resp['results'][0]['geometry']['location'];
        }else{
            return false;
        }
		
    }

    static private function curl_file_get_contents($URL){
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $URL);
        $contents = curl_exec($c);
        curl_close($c);

        if ($contents) return $contents;
            else return FALSE;
    }
	
	static public function getDestination($address) {
			$address = urlencode($address);
			$loc = Directions_model::getLocation($address);
			
			return $loc;
	}
}

?>