<?php 


/**
* 
*/
class Beranda extends CI_Controller {
 
	function __construct() {
		parent::__construct();
	}

	function index() {
		//$this->data['content'] = 'depan/index';
		$this->load->view( 'depan/index' );
	}
}


?>