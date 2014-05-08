<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('parts/header');
		$this->load->view('dashboard/dashboard');
		$this->load->view('parts/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */