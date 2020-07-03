<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_ssp');

		if ($this->session->userdata('session') != 'online') {

			redirect('login');
		}

		if ($this->session->userdata('status') == 'blokir') {

			$this->session->set_flashdata('alert', 'anda di blokir');
			redirect('login');
		}
	}

	// Function Panggil View

	public function index()
	{
		$where['level'] = 'peminjam';
		$data['total_barang'] = $this->M_ssp->get_data('barang')->num_rows();
		$data['total_suplier'] = $this->M_ssp->get_data('suplier')->num_rows();
		$data['total_pinjam'] = $this->M_ssp->get_data('pinjam_barang')->num_rows();
		$data['total_peminjam'] = $this->M_ssp->get_where_data('user', $where)->num_rows();
		$data['title'] = 'Dashboard';

		$this->load->view('layout/header', $data);

		$this->load->view('dashboard/content/homepage', $data);
		$this->load->view('layout/footer');
	}

	public function menu_data_barang()
	{

		$data['title'] = 'Baramg';

		$table1 = 'barang';
		$table2 = 'suplier';
		$table3 = 'stok';

		$where = 'barang.id_suplier = suplier.id_suplier';
		$data['barang'] = $this->M_ssp->join_data($table1, $table2, $where)->result();
		$data['stok'] = $this->M_ssp->get_data($table3)->result();

		$this->load->view('layout/header', $data);
		$this->load->view('dashboard/content/data_barang', $data);
		$this->load->view('layout/footer');
	}

	public function menu_tambah_barang()
	{
		$data['title'] = 'Tambah Barang';
		$table = 'suplier';

		$data['suplier'] = $this->M_ssp->get_data($table)->result();

		$this->load->view('layout/header', $data);
		$this->load->view('dashboard/content/form_tambah_barang', $data);
		$this->load->view('layout/footer');
	}

	public function menu_edit_barang($id)
	{
		$data['title'] = 'Edit Barang';
		$table = 'barang';
		$where['id_barang'] = $id;
		$table2 = 'suplier';

		$data['suplier'] = $this->M_ssp->get_data($table2)->result();

		$data['barang'] = $this->M_ssp->get_where_data($table, $where)->result();

		$this->load->view('layout/header', $data);
		$this->load->view('dashboard/content/form_edit_barang', $data);
		$this->load->view('layout/footer');
	}

	public function menu_stok()
	{
		$data['title'] = 'Stok Barang';
		$table = 'stok';
		$data['stok'] = $this->M_ssp->get_data($table)->result();

		$this->load->view('layout/header', $data);
		$this->load->view('dashboard/content/data_stok', $data);
		$this->load->view('layout/footer');
	}

	public function menu_suplier()
	{
		$data['title'] = 'Suplier';

		$table = 'suplier';
		$data['suplier'] = $this->M_ssp->get_data($table)->result();

		$this->load->view('layout/header', $data);
		$this->load->view('dashboard/content/data_suplier', $data);
		$this->load->view('layout/footer');
	}

	public function menu_tambah_suplier()
	{
		$data['title'] = 'Tambah Suplier';

		$this->load->view('layout/header', $data);
		$this->load->view('dashboard/content/form_tambah_suplier');
		$this->load->view('layout/footer');
	}

	public function menu_edit_suplier($id)
	{
		$data['title'] = 'Edit Suplier';
		$table = 'suplier';
		$where['id_suplier'] = $id;

		$data['suplier'] = $this->M_ssp->get_where_data($table, $where)->result();

		$this->load->view('layout/header', $data);
		$this->load->view('dashboard/content/form_edit_suplier', $data);
		$this->load->view('layout/footer');
	}

	public function menu_data_pinjam()
	{
		$data['title'] = 'Data Pinjam';

		$table = 'pinjam_barang';
		$table2 = 'stok';

		$where = 'pinjam_barang.id_barang = stok.id_barang';
		$data['pinjam'] = $this->M_ssp->join_data($table, $table2, $where)->result();

		$this->load->view('layout/header', $data);
		$this->load->view('dashboard/content/data_pinjam', $data);
		$this->load->view('layout/footer');
	}

	public function menu_pinjam()
	{
		$data['title'] = 'Menu Pinjam';

		$table = 'stok';
		$data['stok'] = $this->M_ssp->get_data($table)->result();

		$this->load->view('layout/header', $data);
		$this->load->view('dashboard/content/opsi_pinjam_barang', $data);
		$this->load->view('layout/footer');
	}

	public function menu_tambah_pinjam($id)
	{
		$data['title'] = 'Pinjam Barang';
		$data['id'] = $id;

		$this->load->view('layout/header', $data);
		$this->load->view('dashboard/content/form_pinjam_barang', $data);
		$this->load->view('layout/footer');
	}

	public function menu_user()
	{
		$data['title'] = 'Kelola User';

		$table = 'user';
		$data['akun'] = $this->M_ssp->get_data($table)->result();

		$this->load->view('layout/header', $data);

		$this->load->view('dashboard/content/data_akun', $data);
		$this->load->view('layout/footer');
	}

	public function menu_tambah_user()
	{
		$data['title'] = 'Tambah User';

		$this->load->view('layout/header', $data);

		$this->load->view('dashboard/content/form_tambah_user');
		$this->load->view('layout/footer');
	}

	public function menu_edit_user($id)
	{
		$table = 'user';
		$where['id_user'] = $id;

		$data['data_user'] = $this->M_ssp->get_where_data($table, $where)->result();

		$data['title'] = 'Edit User';

		$this->load->view('layout/header', $data);

		$this->load->view('dashboard/content/form_edit_user', $data);
		$this->load->view('layout/footer');
	}

	// Function Proses View

	public function add_barang()
	{
		$this->form_validation->set_rules('id', 'id', 'required');
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
		$this->form_validation->set_rules('tgl_masuk', 'tgl_masuk', 'required');
		$this->form_validation->set_rules('jml_masuk', 'jml_masuk', 'required');
		$this->form_validation->set_rules('id_suplier', 'id_suplier', 'required');
		$this->form_validation->set_rules('kondisi', 'kondisi', 'required');
		$this->form_validation->set_rules('lokasi', 'lokasi', 'required');
		$this->form_validation->set_rules('sumber_dana', 'sumber_dana', 'required');
		$this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'required');

		if ($this->form_validation->run() == false) {

			$this->session->set_flashdata('alert', 'Tidak dapat di proses, mohon lengkapi form pengisian');
			redirect('tambah-barang');
		} else {

			$table = 'barang';

			$data['id_barang'] = $this->input->post('id');
			$data['nama_barang'] = $this->input->post('nama_barang');
			$data['tgl_masuk'] = md5($this->input->post('tgl_masuk'));
			$data['jml_masuk'] = $this->input->post('jml_masuk');
			$data['id_suplier'] = $this->input->post('id_suplier');
			$data['kondisi'] = $this->input->post('kondisi');
			$data['lokasi'] = $this->input->post('lokasi');
			$data['sumber_dana'] = $this->input->post('sumber_dana');
			$data['spesifikasi'] = $this->input->post('spesifikasi');

			$this->M_ssp->insert_data($table, $data);

			$this->session->set_flashdata('alert', 'Barang Berhasil di Tambahkan');
			redirect('barang');
		}
	}

	public function edit_barang($id)
	{
		$this->form_validation->set_rules('id', 'id', 'required');
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
		$this->form_validation->set_rules('tgl_masuk', 'tgl_masuk', 'required');
		$this->form_validation->set_rules('id_suplier', 'id_suplier', 'required');
		$this->form_validation->set_rules('kondisi', 'kondisi', 'required');
		$this->form_validation->set_rules('lokasi', 'lokasi', 'required');
		$this->form_validation->set_rules('sumber_dana', 'sumber_dana', 'required');
		$this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'required');

		if ($this->form_validation->run() == false) {

			$this->session->set_flashdata('alert', 'Tidak dapat di proses, mohon lengkapi form pengisian');
			redirect('tambah-barang');
		} else {

			$table = 'barang';
			$where['id_barang'] = $id;

			$data['id_barang'] = $this->input->post('id');
			$data['nama_barang'] = $this->input->post('nama_barang');
			$data['tgl_masuk'] = $this->input->post('tgl_masuk');
			$data['id_suplier'] = $this->input->post('id_suplier');
			$data['kondisi'] = $this->input->post('kondisi');
			$data['lokasi'] = $this->input->post('lokasi');
			$data['sumber_dana'] = $this->input->post('sumber_dana');
			$data['spesifikasi'] = $this->input->post('spesifikasi');

			$this->M_ssp->edit_data($table, $where, $data);

			$this->session->set_flashdata('alert', 'Barang Berhasil di Ubah');
			redirect('barang');
		}
	}

	public function delete_barang($id)
	{
		$table = 'barang';
		$where['id_barang'] = $id;
		$this->M_ssp->hapus_data($table, $where);

		$this->session->set_flashdata('alert', 'Data berhasil di hapus');
		redirect('barang');
	}

	public function add_stok()
	{
		$this->form_validation->set_rules('id_barang', 'id_barang', 'required');
		$this->form_validation->set_rules('tambah_stok', 'tambah_stok', 'required');

		if ($this->form_validation->run() == false) {

			$this->session->set_flashdata('peringatan', 'Tidak dapat di proses, mohon lengkapi form pengisian');
			redirect('tambah-stok');
		} else {

			$table = 'stok';
			$where['id_barang'] = $this->input->post('id_barang');

			$total_barang = $this->M_ssp->get_where_data($table, $where)->result();

			foreach ($total_barang as $tb) :

				$data['total_barang'] = $tb->total_barang + $this->input->post('tambah_stok');
				$data['jml_masuk'] = $tb->jml_masuk + $this->input->post('tambah_stok');

			endforeach;

			$this->M_ssp->edit_data($table, $where, $data);

			$this->session->set_flashdata('alert', 'Stok Berhasil Ditambah');
			redirect('tambah-stok');
		}
	}

	public function add_suplier()
	{
		$this->form_validation->set_rules('id_suplier', 'id_suplier', 'required');
		$this->form_validation->set_rules('nama_suplier', 'nama_suplier', 'required');
		$this->form_validation->set_rules('telp_suplier', 'telp_suplier', 'required');
		$this->form_validation->set_rules('alamat_suplier', 'alamat_suplier', 'required');

		if ($this->form_validation->run() == false) {

			$this->session->set_flashdata('alert', 'Tidak dapat di proses, mohon lengkapi form pengisian');
			redirect('tambah-suplier');
		} else {

			$table = 'suplier';

			$data['id_suplier'] = $this->input->post('id_suplier');
			$data['nama_suplier'] = $this->input->post('nama_suplier');
			$data['telp_suplier'] = $this->input->post('telp_suplier');
			$data['alamat_suplier'] = $this->input->post('alamat_suplier');

			$this->M_ssp->insert_data($table, $data);

			$this->session->set_flashdata('alert', 'Suplier Berhasil di Tambahkan');
			redirect('suplier');
		}
	}

	public function edit_suplier($id)
	{
		$this->form_validation->set_rules('id_suplier', 'id_suplier', 'required');
		$this->form_validation->set_rules('nama_suplier', 'nama_suplier', 'required');
		$this->form_validation->set_rules('telp_suplier', 'telp_suplier', 'required');
		$this->form_validation->set_rules('alamat_suplier', 'alamat_suplier', 'required');

		if ($this->form_validation->run() == false) {

			$this->session->set_flashdata('alert', 'Tidak dapat di proses, mohon lengkapi form pengisian');
			redirect('tambah-suplier');
		} else {

			$table = 'suplier';
			$where['id_suplier'] = $id;

			$data['id_suplier'] = $this->input->post('id_suplier');
			$data['nama_suplier'] = $this->input->post('nama_suplier');
			$data['telp_suplier'] = $this->input->post('telp_suplier');
			$data['alamat_suplier'] = $this->input->post('alamat_suplier');

			$this->M_ssp->edit_data($table, $where, $data);

			$this->session->set_flashdata('alert', 'Suplier Berhasil di Ubah');
			redirect('suplier');
		}
	}

	public function delete_suplier($id)
	{
		$table = 'suplier';
		$where['id_suplier'] = $id;

		$this->M_ssp->hapus_data($table, $where);

		$this->session->set_flashdata('alert', 'data berhasil di hapus');
		redirect('suplier');
	}

	public function add_pinjam_barang($id)
	{
		$this->form_validation->set_rules('pinjam', 'pinjam', 'required');
		$this->form_validation->set_rules('jml_barang', 'jml_barang', 'required');
		$this->form_validation->set_rules('tgl_pinjam', 'tgl_pinjam', 'required');
		$this->form_validation->set_rules('tgl_kembali', 'tgl_kembali', 'required');
		$this->form_validation->set_rules('lokasi', 'lokasi', 'required');
		$this->form_validation->set_rules('kondisi', 'kondisi', 'required');

		if ($this->form_validation->run() == false) {

			$this->session->set_flashdata('alert', 'Tidak dapat di proses, mohon lengkapi form pengisian');
			redirect('pinjam-barang/' . $id);
		} else {

			$table = 'pinjam_barang';

			$data['peminjam'] = $this->input->post('pinjam');
			$data['jml_barang'] = $this->input->post('jml_barang');
			$data['tgl_pinjam'] = $this->input->post('tgl_pinjam');
			$data['tgl_kembali'] = $this->input->post('tgl_kembali');
			$data['id_barang'] = $id;
			$data['lokasi'] = $this->input->post('lokasi');
			$data['kondisi'] = $this->input->post('kondisi');
			$data['status'] = 'pinjam';

			$this->M_ssp->insert_data($table, $data);

			$this->session->set_flashdata('alert', $data['peminjam'] . ' Berhasil Pinjam Barang');
			redirect('pinjam');
		}
	}


	public function add_user()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');

		if ($this->form_validation->run() == false) {

			$this->session->set_flashdata('alert', 'Tidak dapat di proses, mohon lengkapi form pengisian');
			redirect('tambah-user');
		} else {

			$table = 'user';

			$data['nama'] = $this->input->post('nama');
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));
			$data['level'] = $this->input->post('level');
			$data['status'] = 'aktif';

			$this->M_ssp->insert_data($table, $data);

			$this->session->set_flashdata('alert', 'User Berhasil di Tambahkan');
			redirect('user');
		}
	}

	public function selesaikan_pinjam_barang($id)
	{
		$table = 'pinjam_barang';
		$where['id_pinjam'] = $id;

		$data['status'] = 'selesai';

		$this->M_ssp->edit_data($table, $where, $data);

		$this->session->set_flashdata('alert', 'Status Pinjam Berhasil Selesaikan');
		redirect('data-pinjam');
	}

	public function hapus_pinjam_barang($id)
	{
		$table = 'pinjam_barang';
		$where['id_pinjam'] = $id;

		$this->M_ssp->hapus_data($table, $where);

		$this->session->set_flashdata('alert', 'Pinjaman Berhasil di Hapus');
		redirect('data-pinjam');
	}

	public function edit_user($id)
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');

		if ($this->form_validation->run() == false) {

			$this->session->set_flashdata('alert', 'Tidak dapat di proses, mohon lengkapi form pengisian');
			redirect('edit-user/' . $id);
		} else {

			$table = 'user';
			$where['id_user'] = $id;

			$data['nama'] = $this->input->post('nama');
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));
			$data['level'] = $this->input->post('level');

			$this->M_ssp->edit_data($table, $where, $data);

			$this->session->set_flashdata('alert', 'User berhasil di ubah');
			redirect('user');
		}
	}

	public function update_status($id, $kondisi)
	{
		$table = 'user';
		$where['id_user'] = $id;

		$data['status'] = $kondisi;

		$this->M_ssp->edit_data($table, $where, $data);

		$this->session->set_flashdata('alert', 'Status user berhasil di ubah');
		redirect('user');
	}

	public function delete_user($id)
	{
		$table = 'user';
		$where['id_user'] = $id;

		$this->M_ssp->hapus_data($table, $where);

		$this->session->set_flashdata('alert', 'data berhasil di hapus');
		redirect('user');
	}
}
