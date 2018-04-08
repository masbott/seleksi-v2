<?php 


/**
* 
*/
class M_dashboard extends CI_Model
{
	
	function __construct() {
		parent::__construct();
	}

	function periode_aktif() {
		$get = $this->db->get_where( 'm_periode' , array('aktif' => 1 ) );
		return $get;
	}

	function pelamar_jpt_madya() {
		$data = $this->db->query("SELECT a.id , a.periode , c.nama as nama_periode
			                      FROM m_pelamar a 
			                      INNER JOIN m_eselon b ON a.id_eselon = b.id 
			                      INNER JOIN m_periode c ON a.periode = c.id
			                      WHERE c.eselon = '1' ");
			                          
		return $data;
	}

	function pelamar_jpt_pratama() {
		$data = $this->db->query("SELECT a.id , a.periode , c.nama as nama_periode
			                      FROM m_pelamar a 
			                      INNER JOIN m_eselon b ON a.id_eselon = b.id 
			                      INNER JOIN m_periode c ON a.periode = c.id
			                      WHERE c.eselon = '2' ");
			                          
		return $data;
	}
}

?>