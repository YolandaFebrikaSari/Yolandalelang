<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_masyarakat extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Masyarakat_model');
	
	}
	
	public function index()
	{
		$data['tb_masyarakat'] = $this->Masyarakat_model->tampil_data_masyarakat()->result();
		
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/data_masyarakat/data_masyarakat',$data);
		$this->load->view('templates_admin/footer');
	}

	public function nonaktifkan($id_masyarakat) {
		$this->db->set('status_aktif', 0)
				->where('id_user', $id_masyarakat)
				->update('tb_masyarakat');

		redirect('admin/data_masyarakat');
	}

	public function aktifkan($id_masyarakat) {
		$this->db->set('status_aktif', 1)
				->where('id_user', $id_masyarakat)
				->update('tb_masyarakat');

		redirect('admin/data_masyarakat');
	}
	


}

		
	
