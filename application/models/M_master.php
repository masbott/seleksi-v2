<?php 


/**
* 
*/
class M_master extends CI_Model
{
	
	function __construct() {
		parent::__construct();
	}

	/*begin periode*/
	function save_periode() {
		$data = array(
						'nama' => $this->input->post('nama_periode'),
						'eselon' => $this->input->post('eselon'),
						'tanggal_mulai' => $this->input->post('tanggal_mulai'),
						'tanggal_selesai' => $this->input->post('tanggal_selesai')
					 );

		$result = $this->db->insert( 'm_periode' , $data );
		return $result;
	}

	function list_periode() {
		$data = $this->db->get_where( 'm_periode' , array( 'eselon' => '1' ) );
		return $data;
	}

	/*end periode*/

	/*begin tahapan*/
	function list_tahapan_madya() {
		$this->db->select('a.* , m_periode.nama as nama_periode');
		$this->db->from('t_tahapan_periode a');
		$this->db->join('m_periode' , 'a.id_periode = m_periode.id');
		$this->db->where('m_periode.eselon' , '1' );
		return $this->db->get();
	}

	function list_tahapan_pratama() {
		$this->db->select('a.* , m_periode.nama as nama_periode');
		$this->db->from('t_tahapan_periode a');
		$this->db->join('m_periode' , 'a.id_periode = m_periode.id');
		$this->db->where('m_periode.eselon' , '2' );
		return $this->db->get();
	}
	/*end tahapan*/

	/*begin formasi*/
	function formasi_madya() {
		$this->db->select('a.*, m_periode.id as id_periode ,m_periode.nama as nama_periode');
		$this->db->from('t_formasi_periode a');
		$this->db->join('m_periode' , 'a.id_periode = m_periode.id');
		$this->db->where('m_periode.eselon' , '1');
		return $this->db->get();
	}

	function formasi_pratama() {
		$this->db->select('a.*, m_periode.id as id_periode ,m_periode.nama as nama_periode');
		$this->db->from('t_formasi_periode a');
		$this->db->join('m_periode' , 'a.id_periode = m_periode.id');
		$this->db->where('m_periode.eselon' , '2');
		return $this->db->get();
	}
	/*end formasi*/
}

?>