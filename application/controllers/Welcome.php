<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		if ( $this->input->post('submit') ) {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password') . 'seleksi');
			$get_account = $this->db->get_where( 't_pengguna' , array('akun' => $username , 'sandi' => $password ) );

			if ( $get_account->num_rows() > 0 ) {
				$success_logged = array( 'level' => $get_account->row()->level );
				$this->session->set_userdata( $success_logged );
				$this->session->set_userdata('logged' , TRUE );
				if ( $success_logged['level'] == '1' ) {
					//$this->data['menus'] = $this->db->get_where( 'm_menu' , array( 'is_login' => '1' , 'level' =>  $success_logged['level'] ) );
					redirect( 'dashboard' );
				}
			} else {
				$this->session->set_flashdata( 'error', 'NIP atau Kata Sandi belum terdaftar pada sistem ini.');
				redirect( 'welcome' );
			}
		}

		$this->data['content'] = 'sign/index';
		$this->load->view( 'main' , $this->data );
	}

	private function set() {
       $cookie= array(

           'name'   => 'remember_me',
           'value'  => 'test',                            
           'expire' => '300',                                                                                   
           'secure' => TRUE

       );

       $this->input->set_cookie($cookie);
   }

   function logout() {
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('logged');
		$this->session->sess_destroy();
		redirect('welcome');
	}

}
