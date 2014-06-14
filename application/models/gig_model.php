<?php
//gig_model.php

class Gig_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	function SaveForm($form_data)
	{
		$this->db->insert('gig_table', $form_data);
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		return FALSE;
	}
	
	public function get_gig($limit, $start)
	{
		$query = $this->db->get('gig_table', $limit, $start);
		
		return $query;
	}
	
	public function get_id($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('gig_table');
	}
	
	public function num_records() {
		return $this->db->count_all('gig_table');
	}
}
?>