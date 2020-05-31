<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		return $this->load->view('user_dashboard');
	}

	public function input()
	{
		return $this->load->view('input');
	}


}
