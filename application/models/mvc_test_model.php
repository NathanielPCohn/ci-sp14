<?php
//mvc_test_model.php

class Mvc_test_model extends CI_Model
{
	public function __construct()
	{//creates an active connection to DB
		$this->load->database();
	}

	
}

?>