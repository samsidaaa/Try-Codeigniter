<?php
defined('BASEPATH')	OR exit('No direct script access allowed');
/**
 * 
 */
class Control_data extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('model_data');
			$data['data_dosen'] = $this->model_data->get_data();
			$this->load->view('view_data',$data);
		# code...
	}
	public function index2()
	{
		$this->load->model('model_data');
			$data['data_jadwal'] = $this->model_data->get_jadwal();
			$this->load->view('view_jadwal',$data);
		# code...
	}
	
	//menampilkan form tambah  tambah data
	 function tambah2(){
		$this->load->view('tambah_jadwal');
	}

	 function tambah(){
		$this->load->view('tambah_dosen');
	}
	//mengirim data ke model_data
	 function insert()
	{
		$data = array(
			"nidn" => $this->input->post('nidn'),
			"nama" => $this->input->post('nama'),
			"bidang_ilmu" => $this->input->post('bidang_ilmu'),
			"alamat" => $this->input->post('alamat')
		);
		$this->load->model('model_data');
		$this->model_data->insertDosen($data);
		$this->index();
		# code...
	}
		 function insert2()
	{
		$data = array(
			"kode_jadwal" => $this->input->post('kode_jadwal'),
			"kelas" => $this->input->post('kelas'),
			"hari" => $this->input->post('hari'),
			"jam" => $this->input->post('jam'),
			"makul" => $this->input->post('makul'),
			"dosen" => $this->input->post('dosen'),
			"ruang" => $this->input->post('ruang')
		);
		$this->load->model('model_data');
		$this->model_data->insertJadwal($data);
		$this->index2();
		# code...
	}

	 function edit($nidn){
		$this->load->model('model_data');
		$data['data_edit'] = $this->model_data->get_data_by_id('dosen', $nidn)->row();
		$this->load->view('edit_dosen',$data);
	}

	 function edit2($kode_jadwal){
		$this->load->model('model_data');
		$data['data_edit2'] = $this->model_data->get_data_by_id2('jadwal', $kode_jadwal)->row();
		$this->load->view('edit_jadwal',$data);
	}	
	 function update(){
		$data = array (
			"nidn" => $this->input->post('nidn'),
			"nama" => $this->input->post('nama'),
			"bidang_ilmu" => $this->input->post('bidang_ilmu'),
			"alamat" => $this->input->post('alamat')

			);
			$this->load->model('model_data');
			$this->model_data->update('dosen', $this->input->post('nidn'), $data);
			$this->index();
	}
		 function update2(){
		$data = array (
			"kode_jadwal" => $this->input->post('kode_jadwal'),
			"kelas" => $this->input->post('kelas'),
			"hari" => $this->input->post('hari'),
			"jam" => $this->input->post('jam'),
			"makul" => $this->input->post('makul'),
			"dosen" => $this->input->post('dosen'),
			"ruang" => $this->input->post('ruang')

			);
			$this->load->model('model_data');
			$this->model_data->update2('jadwal', $this->input->post('kode_jadwal'), $data);
			$this->index2();
	}

	function hapus($nidn){
		$this->load->model('model_data');
		$this->model_data->del_by_id('dosen', $nidn);
		$this->index();
	}
	function hapus2($kode_jadwal){
		$this->load->model('model_data');
		$this->model_data->del_by_id2('jadwal', $kode_jadwal);
		$this->index2();
	}

}


?>