<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

	public function userCheck(){
		$username = $this->input->post('uname');
		$password = $this->input->post('pass');
		//$status = $this->input->post('status');
		

		$kueri = $this->db->where('uname', $username)->where('pass',$password)->get('admin');
		if($kueri->num_rows() > 0){
			$data = array(
				'uname'	=> $kueri->row()->uname,
				'logged_in'	=> true,
				'class'		=> $kueri->row()->class,
				'id'=>$kueri->row()->id,
				'nama'=>$kueri->row()->nama,
				'alamat'=>$kueri->row()->alamat,
				
				//'status'  => 'active'
			);
			
			$this->session->set_userdata($data);

			return true;
		}
		else
		{
			return false;
		}
	}

	public function ew()
	{
		$username = $this->input->post('uname');
		$password = $this->input->post('pass');
		$status = $this->input->post('status');
		

		$kueri = $this->db->where('uname', $username)->where('pass',$password)->where('status',$status)->get('admin');
		if($kueri->num_rows() > 0){
			$data = array(
				'uname'	=> $kueri->row()->uname,
				'logged_in'	=> true,
				'class'		=> $kueri->row()->class,
				'status'  =>  $kueri->row()->status,
			);
			
			$this->session->set_userdata($data);
			$opoiki = $kueri->row()->status;

			

			return true;
		}else{
			return false;
		}
	}

	
}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */

?>