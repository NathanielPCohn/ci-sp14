<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//mvc_test.php is a CodeIgniter controller

class Mvc_test extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Mvc_test_model');
	}//end constructor
	
	public function index()
	{//here we're making data available to our header and footer
		$data['theme_name'] = 'designa';
		$data['title'] = "This is an MVC Test";
		$data['banner'] = "This is an MVC Test";
		$data['copyright'] = "&copy; Nathaniel Cohn";
		$data['content'] = 'This is a test page for an alternative View format.
						The header and footer are called from the view, rather than
						submitted from the controller. The controller&#39;s only
						contribution to the presentation is that it defines a 
						$theme_name which is used to find a styles.css file in the 
						correct themes folder in public.';
		$this->load->view('mvc_test/view_mvc_test',$data);
	}//end index()
}

?>