	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Home extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->model('mhome');
		$this->load->helper('url');
		if($this->session->userdata('logged_in') == false)
		{
				redirect('login');
		}


	}
	
		public function index()
		{
			$set=$this->session->userdata('class');
			$idu=$this->session->userdata('id');
			$data = array(
			
			'obtCount'			=> $this->mhome->pelanggan($idu,$set),
			'psnCount'			=> $this->mhome->pembayaran($idu,$set),
			'akunCount'			=> $this->mhome->tagihan($set,$idu),
			'trCount'			=> $this->mhome->tarif(),
			'sudahbayar'		=> $this->mhome->sudahbayar($idu,$set),
			'belumbayar'		=> $this->mhome->belumbayar($idu,$set),
			'tunggukonfirmasi'	=> $this->mhome->tunggukonfirmasi($idu,$set),
			
		);
			
			$data['main_view']="dashboard";
		$this->load->view('template', $data);
		}
	
	}
	
	/* End of file home.php */
	/* Location: ./application/controllers/home.php */
 ?>