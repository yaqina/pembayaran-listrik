<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mhome extends CI_Model {


		public function pelanggan($idu,$set)
	{
		 if($set=='admin1'){
       return $this->db
                    ->where('a.class','user')
                    ->where('p.status','Belum Ditagih')
                    
                    
                    ->join('admin a','p.id_admin=a.id')
                    ->from('pelanggan p')->count_all_results();
                }
                else{
                   return $this->db
                    ->where('id_admin',$idu)
                    ->where('status','Belum Ditagih')
                    
                   
                    ->from('pelanggan p')->count_all_results();
                }
	}

	public function pembayaran($idu,$set)
	{
		
				if ($set=='admin1') {
					 return $this->db
                   				->where('class','user')
                   				->join('tagihan t','t.id=pm.id_tagihan')
                   				->join('pelanggan p','p.id=t.id_pelanggan')
                   				->join('admin a','a.id=p.id_admin')
                   				->from('pembayaran pm')->count_all_results();
                   			}
                 else{
                 	 return $this->db
                   				->where('a.id',$idu)
                   				->join('tagihan t','t.id=pm.id_tagihan')
                   				->join('pelanggan p','p.id=t.id_pelanggan')
                   				->join('admin a','a.id=p.id_admin')
                   				->from('pembayaran pm')->count_all_results();
                 }
                  
                
	}
	public function tagihan($set,$idu)
	{
		
		
		  if ($set=='admin1') {
                 return $this->db
                             ->where('t.status','Belum Bayar')
                             ->where('a.class','user')
                             
                             ->join('pelanggan p','p.id=t.id_pelanggan')
                             ->join('admin a','a.id=p.id_admin')
                             ->from('tagihan t')->count_all_results();
                            }
          else {
                 return $this->db
                             ->where('t.status','Belum Bayar')
                             ->where('p.id_admin',$idu)
                            
                             ->join('pelanggan p','p.id=t.id_pelanggan')
                             ->from('tagihan t')->count_all_results();
                            }
              
	}
	public function tarif()
	{
		return $this->db->count_all('tarif');
	}

	public function belumbayar($idu,$set)
	{
		
		
		  if ($set=='admin1') {
                 return $this->db
                             ->where('t.status','Belum Bayar')
                             ->where('a.class','user')
                             
                             ->join('pelanggan p','p.id=t.id_pelanggan')
                             ->join('admin a','a.id=p.id_admin')
                             ->from('tagihan t')->count_all_results();
                            }
          else {
                 return $this->db
                             ->where('t.status','Belum Bayar')
                             ->where('p.id_admin',$idu)
                            
                             ->join('pelanggan p','p.id=t.id_pelanggan')
                             ->from('tagihan t')->count_all_results();
                            }
              
	}

	public function sudahbayar($idu,$set)
	{
		
		
		 if ($set=='admin1') {
					 return $this->db
                   				->where('pm.status','Sudah Bayar')
                            	->where('a.class','user')
                   				->join('tagihan t','t.id=pm.id_tagihan')
                   				->join('pelanggan p','p.id=t.id_pelanggan')
                   				->join('admin a','a.id=p.id_admin')
                   				->from('pembayaran pm')->count_all_results();
                   			}
                 else{
                 	 return $this->db
                   				 ->where('pm.status','Sudah Bayar')
                             	 ->where('p.id_admin',$idu)
                   				->join('tagihan t','t.id=pm.id_tagihan')
                   				->join('pelanggan p','p.id=t.id_pelanggan')
                   				->join('admin a','a.id=p.id_admin')
                   				->from('pembayaran pm')->count_all_results();
                 }
              
	}

	public function tunggukonfirmasi($idu,$set)
	{
		
		
if ($set=='admin1') {
					 return $this->db
                   				->where('pm.status','Tunggu Konfirmasi')
                            	->where('a.class','user')
                   				->join('tagihan t','t.id=pm.id_tagihan')
                   				->join('pelanggan p','p.id=t.id_pelanggan')
                   				->join('admin a','a.id=p.id_admin')
                   				->from('pembayaran pm')->count_all_results();
                   			}
                 else{
                 	 return $this->db
                   				 ->where('pm.status','Tunggu Konfirmasi')
                             	 ->where('p.id_admin',$idu)
                   				->join('tagihan t','t.id=pm.id_tagihan')
                   				->join('pelanggan p','p.id=t.id_pelanggan')
                   				->join('admin a','a.id=p.id_admin')
                   				->from('pembayaran pm')->count_all_results();
                 }

    }

}
/* End of file mhome.php */
/* Location: ./application/models/mhome.php */
?>