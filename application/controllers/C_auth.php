<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_auth extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('m_ssp');
	}

	public function index()
	{
		$data['title'] = 'Sign In';
		$this->load->view('auth/content/login', $data);
		$this->load->view('layout/footer');
	}

	public function proses_login()
	{

		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == false) {
			
			$data['title'] = 'Sign In';

			$this->load->view('auth/content/login', $data);
			$this->load->view('layout/footer');
		}

		else {

			$table = 'user';
			$where['username'] = $this->input->post('username');
			$where['password'] = md5($this->input->post('password'));

			$cek_login = $this->m_ssp->get_where_data($table, $where)->num_rows();

			if ($cek_login != 0) {
				
				$foreach = $this->m_ssp->get_where_data($table, $where)->result();

				foreach($foreach as $data) :

					$data_account['id'] = $data->id;
					$data_account['name'] = $data->nama;
					$data_account['username'] = $data->username;
					$data_account['password'] = $data->password;
					$data_account['level'] = $data->level;
					$data_account['status'] = $data->status;

				endforeach;

				$data_account['session'] = 'online';

				$this->session->set_userdata($data_account);

				redirect('dashboard');
			}


			else {

				$this->session->set_flashdata('alert', 'Username atau Password Salah');
				redirect('login');
			}
		}
	}

	public function proses_logout() 
	{
		$this->session->sess_destroy();
		redirect('dashboard');
	}
}
