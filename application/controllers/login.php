
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller {

		public function __construct(){
		parent::__construct();
		$this->load->model('mlogin');
		$this->load->helper('url');
		$this->load->library('session','form_validation');
		
	}
	
		public function index(){
		$this->load->view('vlogin');

	}


	public function dologin()
{
		

	if($this->input->post('login'))
	{
		
				
							if($this->mlogin->userCheck() == false)	
						{		
							$this->session->set_flashdata('announce', 'Invalid username or password');
							//$this->session->set_flashdata('announce', 'Account disabled');
							redirect('login/index');		
						} 				
							if ($this->mlogin->ew()==false) 
						{
							$this->session->set_flashdata('announce', 'Account disabled');
							redirect('login/index');
						}
							else
						{
							redirect('home/index');
						}

		}
		
		

	}

	
	public function logout(){
		
		$this->session->sess_destroy();
		redirect('login');
	}


}
	
	/* End of file login.php */
	/* Location: ./application/controllers/login.php */
