<?php 


/**
* 
*/
class Daftar extends CI_Controller
{
	
	function __construct() {
		parent::__construct();
	}

	function pelamar() {
		$this->data['content'] = 'daftar/pelamar';
		$this->load->view( 'main', $this->data );
	}

	function pelamar_madya() {
		$this->load->model( 'm_daftar' , 'daftar' );
		$id = $this->input->post('id');
		$data = $this->daftar->pelamar_madya( $id );
		
		$e = array();
		$no = 1;
		foreach ( $data->result() as $d ) {
			if ( $d->status == 'Belum Proses' ) {
				$status = 'Belum Proses';
			} elseif ( $d->status == 'Terima' ) {
				$status = 'Terima';
			} else {
				$status = 'Tidak Diterima';
			}
			$e[$d->id_pelamar]['id_pelamar'] = $d->id_pelamar;
			$e[$d->id_pelamar]['nip'] = $d->nip;
			$e[$d->id_pelamar]['nama'] = strtoupper( $d->nama );
			$e[$d->id_pelamar]['jabatan'] = $d->jabatan;
			$e[$d->id_pelamar]['status'] = $status;
			$e[$d->id_pelamar]['lamar'][] = $d->nama_formasi;
			$e[$d->id_pelamar]['aksi'] = '<a class="btn btn-xs btn-success"><span><i class="fa fa-pencil"></i></span> Edit</a> <a class="btn btn-xs btn-danger detail"><span><i class="fa fa-eye"></i></span> Lihat</a>';
		}

		if ( !empty( $e ) ) {
			
			foreach ( $e as $g ) {
			$formasi = '';
			
			foreach ( $g['lamar'] as $x) {
				$formasi .= $x . ' - ';
			}

			$result[] = array(
								'nip' => $g['nip'],
								'nama' => $g['nama'],
								'jabatan' => $g['jabatan'],
								'golongan' => '',
								'status' => $g['status'],
								'formasi' => rtrim( $formasi , ' - '),
								'aksi' => '<a class="btn btn-xs btn-success edit" data-pelamar="'.$g['id_pelamar'].'"><span><i class="fa fa-pencil"></i></span> Edit</a> <a class="btn btn-xs btn-danger detail" data-pelamar="'.$g['id_pelamar'].'"><span><i class="fa fa-eye"></i></span> Lihat</a>'
							);
			}
		} else {
			$result = '';
		}
		echo json_encode( $result );
	}

	function pelamar_one() {
		$this->load->model( 'm_daftar' , 'daftar' );
		$id_pelamar = $this->input->post('id');
		$d = $this->daftar->pelamar_one( $id_pelamar );

		$formasi = '';
		$d_formasi = '';
		$result_status = '';

		foreach ( $d->result() as $datas ) {

			if ( $datas->status == 'Belum Proses' ) {
				$status = 'Belum Proses';
			} elseif ( $datas->status == 'Terima' ) {
				$status = 'Terima';
			} else {
				$status = 'Tidak Diterima';
			}

			$d_formasi .=  '<label>
					      		<input type="checkbox" checked="checked"> '.$datas->nama_formasi.'
					    	</label>';

			$formasi .= $datas->nama_formasi . ' - ';

			$data = array(
							'nip' 		=> $datas->nip,
							'nama' 		=> strtoupper( $datas->nama ),
							'jabatan' 	=> $datas->jabatan,
							'golongan' 	=> '',
							'formasi'	=> rtrim( $formasi , ' - ' ),
							'data_formasi' => $d_formasi,
							'status'	=> $status,
							'orig_status' => $datas->status
						 );
		}
		echo json_encode( $data );
	}

	function pengguna() {
		$this->data['content'] = 'daftar/pengguna';
		$this->load->view( 'main', $this->data );
	}

	function pengaturan() {
		$this->data['content'] = 'daftar/pengaturan';
		$this->load->view( 'main', $this->data );
	}
}

?>