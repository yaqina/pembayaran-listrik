<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tarif extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tarif_model');
        $this->load->helper('url');
        if($this->session->userdata('logged_in') == false)
        {
                redirect('login');
        }

    } 

    /*
     * Listing of tarif
     */
    function index()
    {
        $data['tarif'] = $this->Tarif_model->get_all_tarif();
        
        $data['main_view'] = 'tarif/index';
        $this->load->view('template', $data);    }

    /*
     * Adding a new tarif
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'kode' => $this->input->post('kode'),
				'daya' => $this->input->post('daya'),
				'tarif_perkwh' => $this->input->post('tarif_perkwh'),
				'beban' => $this->input->post('beban'),
            );

            
             $this->session->set_flashdata('announce', 'Berhasil Tambah Data');
            $tarif_id = $this->Tarif_model->add_tarif($params);
            redirect('tarif/index');
        }
        else
        {            
            $data['main_view'] = 'tarif/add';
            $this->load->view('template',$data);
        }
    }  

    /*
     * Editing a tarif
     */
    function edit($id)
    {   
        // check if the tarif exists before trying to edit it
        $data['tarif'] = $this->Tarif_model->get_tarif($id);
        
        if(isset($data['tarif']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'kode' => $this->input->post('kode'),
					'daya' => $this->input->post('daya'),
					'tarif_perkwh' => $this->input->post('tarif_perkwh'),
					'beban' => $this->input->post('beban'),
                );
                $this->session->set_flashdata('announce', 'Berhasil Ubah Data');
                $this->Tarif_model->update_tarif($id,$params);            
                redirect('tarif/index');
            }
            else
            {
                $data['main_view'] = 'tarif/edit';
                $this->load->view('template',$data);
            }
        }
        else
            show_error('The tarif you are trying to edit does not exist.');
    } 

    /*
     * Deleting tarif
     */
    function remove($id)
    {
        $tarif = $this->Tarif_model->get_tarif($id);
       
        // check if the tarif exists before trying to delete it
        if(isset($tarif['id']))
        {
            $this->session->set_flashdata('announce', 'Berhasil Hapus Data');
            $this->Tarif_model->delete_tarif($id);
            redirect('tarif/index');
        }
        else
            show_error('The tarif you are trying to delete does not exist.');
    }
     function cari() {
       $data['tarif']=$this->Tarif_model->caridata();
       
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['tarif']==null) {
          print 'maaf data yang anda cari tidak ada atau keywordnya salah';
          //print br(2);
          print anchor('tarif','kembali');
           $this->load->view('errors/error');
          }
          else {
              $data['main_view'] = 'tarif/index';
        $this->load->view('template', $data); 
            }
        }
    
}
