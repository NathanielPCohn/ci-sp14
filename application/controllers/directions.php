<?php
//directions.php is a CodeIgniter controller

class Directions extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}//end constructor
	
	public function index()
	{//here we're making data available to our header and footer
		$this->load->helper('form');
		
		$data['title'] = "Here is our title tag!";
		$data['style'] = "cerulean.css";
		$data['banner'] = "Here we find directions to wherever we want!";
		$data['copyright'] = "Copyright goes here";
		$data['base_url'] = base_url();
		$this->load->view('header',$data);
		
		$this->load->view('directions/view_directions',$data);

		$this->load->view('footer',$data);
	}//end index()
	
	public function map()
	{//will insert the data entered via add()
		$this->load->model('Mailing_list_model');
		$this->load->library('form_validation');
		
		//must have at least one validation rule to insert
		$this->form_validation->set_rules('address','Address','trim|required');
		 
		if($this->form_validation->run() == FALSE)
		{//failed validation = send back to form
			//VIEW DATA ON FAILURE GOES HERE!!
			
			$this->load->helper('form');
			$data['title'] = "Adding a record!";
			$data['style'] = "cerulean.css";
			$data['banner'] = "Data Entry Error!";
			$data['copyright'] = "Copyright goes here";
			$data['base_url'] = base_url();
			$this->load->view('header',$data);
			
			$this->load->view('directions/view_directions',$data);

			$this->load->view('footer',$data);			
			
		}else{//insert data
			$post = array(
				'address'=> $this->input->post('address'),
				'latitude' => $this->input->post('lat'),
				'longitude' => $this->input->post('lng'),
			);
			
			$this->Directions_model->getLocation($post[address]);
			echo 'Data inserted';
			
		}	
	}//end insert
}
?>