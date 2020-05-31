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
		$this->load->view('welcome_message');
	}

	public function login()
	{

		$username=$this->input->post('username');
		$password=$this->input->post('pass');

		$password=md5($password);
		$password=hash('sha256', $password);
		$builder="SELECT * FROM user WHERE username='$username' AND password='$password'";
		$query = $this->db->query($builder);

		$result= $query->num_rows();

		if($result==0)
		{
			$this->session->mark_as_flash('login');
			$this->session->set_flashdata('login','Email Atau Password Salah');
			redirect(base_url('welcome'), 'refresh');

		}
		else
		{
			redirect(base_url('dashboard'), 'refresh');
		}



//		echo $username;
	}
}
