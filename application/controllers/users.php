<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		//$usuario=$data['Usuario'];
		//$usuario="Jose";
		//if($usuario!=null){
			$this->load->view('users');
		//}
		//else{
		//	$this->load->view('login');
		//}
	}
}

