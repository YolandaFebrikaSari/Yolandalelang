<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_petugas extends CI_Controller
{
    public function index()
	{
    $data['tb_barang'] = $this->Barang_model->tampil_data()->result();

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar_petugas', $data);
    $this->load->view('petugas/data_barang/data_barang', $data);
    $this->load->view('templates_admin/footer');
    }

    public function tambah_barang()
	{
    $data['tb_barang'] = $this->Barang_model->tampil_data_barang()->result_array();

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar_petugas', $data);
    $this->load->view('petugas/data_barang/tambah', $data);
    $this->load->view('templates_admin/footer');
    }
}




