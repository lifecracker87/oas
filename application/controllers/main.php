<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('loadview');
    }

	public function index()
	{
            $this->loadview->loader('dashboard/dashboard');
	}
	public function dashboard()
	{
            $this->loadview->loader('dashboard/dashboard');
	}
        public function dashboard1()
	{
		$this->loadview->loader('dashboard/dashboard1');
	}
        
}