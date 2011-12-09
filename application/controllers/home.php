<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	
	public function perabotRumah()
	{
		$this->load->view('perabotRumah');
	}
	
	public function desainInterior()
	{
		$this->load->view('desainInterior');
	}
	
	public function tips()
	{
		$this->load->view('tips');
	}
	
	public function arsitektur()
	{
		$this->load->view('arsitektur');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */