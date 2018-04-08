<?php 


/**
* 
*/
class Dashboard extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
	}


	function index() {
		$this->load->model( 'm_dashboard' , 'dashboard' );
		$this->data['periode'] = $this->dashboard->periode_aktif();
		$madya = $this->dashboard->pelamar_jpt_madya();

		$mad = array();
		foreach ( $madya->result() as $m ) {
			$mad[$m->periode]['nama_periode'] = $m->nama_periode;
			$mad[$m->periode]['jumlah'][] = $m->id;
		}

		$pratama = $this->dashboard->pelamar_jpt_pratama();
		$pra = array();
		foreach ( $pratama->result() as $p ) {
			$pra[$p->periode]['nama_periode'] = $p->nama_periode;
			$pra[$p->periode]['jumlah'][] = $p->id;
		}

		$this->data['madya'] = $mad;
		$this->data['pratama'] = $pra;
		$this->data['content'] = 'dashboard/index';
		$this->load->view( 'main' , $this->data );

	}

}