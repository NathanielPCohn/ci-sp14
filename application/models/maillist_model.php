<?php
//MailList_model.php

class MailList_model extends CI_Model
{
	public function __construct()
	{//creates an active connection to DB
		$this->load->database();
	}

	public function get_maillist()
	{//will show all data in table named mail_list
		$query = $this->db->get('mailing_list');
		
		return $query->result_array();
	}
}

?>