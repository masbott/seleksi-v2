<?php 


/**
* 
*/
class M_daftar extends CI_Model
{
	
	function __construct() {
		parent::__construct();
	}

	function pelamar_madya( $id ) {
		return $this->db->query("SELECT a.id_pelamar, b.nama, b.status, b.jabatan, b.nip, c.nama as nama_formasi
								 FROM `t_pelamar_periode_formasi` a 
								 INNER JOIN m_pelamar b ON a.id_pelamar = b.id
								 INNER JOIN t_formasi_periode c ON a.id_formasi = c.id
								 WHERE a.id_periode = $id ");
	}

	function pelamar_one( $id ) {
		return $this->db->query("SELECT a.id_pelamar, b.nama, b.status, b.jabatan, b.nip, c.nama as nama_formasi
								 FROM `t_pelamar_periode_formasi` a 
								 INNER JOIN m_pelamar b ON a.id_pelamar = b.id
								 INNER JOIN t_formasi_periode c ON a.id_formasi = c.id
								 WHERE b.id = $id ");
	}

	function pengguna( $id ) {
		return $this->db->query("SELECT a.id_pelamar, b.nama, b.jabatan, b.nip, c.nama as nama_formasi
								 FROM `t_pelamar_periode_formasi` a 
								 INNER JOIN m_pelamar b ON a.id_pelamar = b.id
								 INNER JOIN t_formasi_periode c ON a.id_formasi = c.id
								 WHERE a.id_periode = $id ");
	}
}

?>