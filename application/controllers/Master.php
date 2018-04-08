<?php 


/**
* 
*/
class Master extends CI_Controller
{
	
	function __construct() {
		parent::__construct();
		if ( $this->session->userdata('logged') != TRUE ) {
			redirect('welcome');
		}
	}

	function periode() {
		$this->data['madya'] = $this->db->get_where( 'm_periode' , array( 'eselon' => '1' ) );
		$this->data['pratama'] = $this->db->get_where( 'm_periode' , array( 'eselon' => '2' ) );
		$this->data['content'] = 'master/periode';
		$this->load->view( 'main', $this->data );
	}

	function add_periode() {
		$this->load->model( 'm_master' , 'master' );
		$data = $this->master->save_periode();
		echo json_encode($data);
	}

	function list_periode() {
		$d = $this->db->get_where( 'm_periode' , array( 'eselon' => '1' ) );
		$nomor = 1;
		$e = array();
		foreach ( $d->result() as $data ) {

			if ( $data->aktif == '0' ) {
				$status = 'Tidak Aktif';
			} else {
				$status = 'Aktif';
			}

			$e[] = array(
						'nomor' => $nomor++,
						'id'	=> $data->id,
						'nama'  => $data->nama,
						'waktu' => date_translate(date('j F Y' , strtotime( $data->tanggal_mulai))) . ' s.d ' . date_translate( date('j F Y' , strtotime( $data->tanggal_selesai ) ) ),
						'status' => $status,
						'aksi' => '<a class="btn btn-xs btn-success"> <span><i class="fa fa-pencil"></i></span> Edit</a> <a class="btn btn-xs btn-danger hapus" data-id="'.$data->id.'"> <span><i class="fa fa-trash-o fa-lg"></i></span> Hapus</a>'
					  );
		}
		echo json_encode($e);
	}

	function periode_pratama() {
		$d = $this->db->get_where( 'm_periode' , array( 'eselon' => '2' ) );
		$nomor = 1;
		$e = array();
		foreach ( $d->result() as $data ) {

			if ( $data->aktif == '0' ) {
				$status = 'Tidak Aktif';
			} else {
				$status = 'Aktif';
			}

			$e[] = array(
						'nomor' => $nomor++,
						'id'	=> $data->id,
						'nama'  => $data->nama,
						'waktu' => date_translate(date('j F Y' , strtotime( $data->tanggal_mulai))) . ' s.d ' . date_translate( date('j F Y' , strtotime( $data->tanggal_selesai ) ) ),
						'status' => $status,
						'aksi' => '<a class="btn btn-xs btn-success"> <span><i class="fa fa-pencil"></i></span> Edit</a> <a class="btn btn-xs btn-danger hapus" data-id="'.$data->id.'"> <span><i class="fa fa-trash-o fa-lg"></i></span> Hapus</a>'
					  );
		}
		echo json_encode($e);
	}

	function delete_periode() {
		$id = $this->input->post('id');
		$data = $this->db->where('id' , $id)->delete('m_periode');
		echo json_encode($data);
	}

	function list_periode_pratama() {
		$d = $this->db->get_where( 'm_periode' , array( 'eselon' => '2' ) );
		$nomor = 1;
		$e = array();
		foreach ( $d->result() as $data ) {

			if ( $data->aktif == '0' ) {
				$status = 'Tidak Aktif';
			} else {
				$status = 'Aktif';
			}

			$e[] = array(
						'nomor' => $nomor++,
						'id'	=> $data->id,
						'nama'  => $data->nama,
						'waktu' => date_translate(date('j F Y' , strtotime( $data->tanggal_mulai))) . ' s.d ' . date_translate( date('j F Y' , strtotime( $data->tanggal_selesai ) ) ),
						'status' => $status,
						'aksi' => '<a class="btn btn-xs btn-success"> <span><i class="fa fa-pencil"></i></span> Edit</a> <a class="btn btn-xs btn-danger hapus-jpt-pratama" data-id="'.$data->id.'"> <span><i class="fa fa-trash-o fa-lg"></i></span> Hapus</a>'
					  );
		}
		echo json_encode($e);
	}

	/*part tahapan*/
	function tahapan() {
		$this->data['content'] = 'master/tahapan';
		$this->load->view( 'main', $this->data );
	}

	function list_tahapan_madya() {
		$this->load->model('m_master' , 'master');
		$data = $this->master->list_tahapan_madya();
		$e = array();
		$no = 1;
		foreach ( $data->result() as $d ) {
			$e[] = array(
							'nomor'			=> $no++,
							'nama_periode'  => $d->nama_periode,
							'nama_tahapan'	=> $d->nama,
							'waktu'			=> date_translate(date('j F Y' , strtotime($d->tanggal_mulai) )) . ' s.d ' . date_translate( date('j F Y' , strtotime( $d->tanggal_selesai ) ) ),
							'dokumen'		=> $d->dokumen,
							'aksi'			=> '<a class="btn btn-xs btn-success"><span><i class="fa fa-pencil"></i></span> Edit</a> <a class="btn btn-xs btn-danger btn-hapus-madya" data-id="'.$d->id.'"><span><i class="fa fa-trash-o fa-lg"></i></span> Hapus</a> '
						);
		}
		echo json_encode($e);
	}

	function add_tahapan() {

	}

	function list_tahapan_pratama() {
		$this->load->model('m_master' , 'master');
		$data = $this->master->list_tahapan_pratama();
		$e = array();
		$no = 1;
		foreach ( $data->result() as $d ) {
			$e[] = array(
							'nomor'			=> $no++,
							'nama_periode'  => $d->nama_periode,
							'nama_tahapan'	=> $d->nama,
							'waktu'			=> date_translate(date('j F Y' , strtotime($d->tanggal_mulai) )) . ' s.d ' . date_translate( date('j F Y' , strtotime( $d->tanggal_selesai ) ) ),
							'dokumen'		=> $d->dokumen,
							'aksi'			=> '<a class="btn btn-xs btn-success btn-hapus-pratama"><span><i class="fa fa-pencil"></i></span> Edit</a> <a class="btn btn-xs btn-danger"><span><i class="fa fa-trash-o fa-lg"></i></span> Hapus</a>'
						);
		}
		echo json_encode($e);
	}

	function delete_tahapan() {
		$id = $this->input->post('id');
		$data = $this->db->where('id',$id)->delete('t_tahapan_periode');
		echo json_encode($data);
	}

	/*formasi*/

	function formasi() {
		$this->data['content'] = 'master/formasi';
		$this->load->view( 'main', $this->data );
	}

	function formasi_madya() {
		$this->load->model( 'm_master' , 'master' );
		$d = $this->master->formasi_madya();
		$e = array();
		$no = 1;
		foreach ( $d->result() as $data ) {
			$e[] = array(
							'nomor' 		=> $no++,
							'id'			=> $data->id,
							'id_periode'	=> $data->id_periode,
							'nama_periode' 	=> $data->nama_periode,
							'jabatan' 		=> $data->nama,
							'aksi'			=> '<a class="btn btn-xs btn-success"><span><i class="fa fa-pencil"></i></span> Edit</a> <a class="btn btn-xs btn-danger hapus-formasi" data-id="'.$data->id.'"> <span><i class="fa fa-trash-o fa-lg"></i></span> Hapus</a>'
						);
		}

		echo json_encode($e);
	}

	function formasi_pratama() {
		$this->load->model( 'm_master' , 'master' );
		$d = $this->master->formasi_pratama();
		$e = array();
		$no = 1;
		foreach ( $d->result() as $data ) {
			$e[] = array(
							'nomor' 		=> $no++,
							'id'			=> $data->id,
							'id_periode'	=> $data->id_periode,
							'nama_periode' 	=> $data->nama_periode,
							'jabatan' 		=> $data->nama,
							'aksi'			=> '<a class="btn btn-xs btn-success"><span><i class="fa fa-pencil"></i></span> Edit</a> <a class="btn btn-xs btn-danger hapus-formasi-pratama" data-id="'.$data->id.'"> <span><i class="fa fa-trash-o fa-lg"></i></span> Hapus</a>'
						);
		}

		echo json_encode($e);
	}

	function delete_formasi() {
		$id = $this->input->post('id');
		$data = $this->db->where('t_formasi_periode.id',$id)->delete('t_formasi_periode');
		echo json_encode($data);
	}
}

?>