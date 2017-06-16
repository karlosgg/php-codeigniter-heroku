<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function index()
	{
		//$usuario=$data['Usuario'];
		//$usuario="Jose";
		//if($usuario!=null){
			$this->load->view('panel');
		//}
		//else{
		//	$this->load->view('login');
		//}
	}
	public function users()
	{
		$this->load->view('users');
	}
}

