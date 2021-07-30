<?php
defined('BASEPATH') or exit('No direct scrip access allowed');
/**
 * 
 */
class siswa extends CI_Controller
{
	
	public function __construct()
	{ parent::__construct();
		$this ->load-> model('mhs_model');
		# code...
	}
	public function index()
	{
		$data['data_mhs']= $this->mhs_model->isidata();

		$this->load->view('mhs_view', $data);  
		# code...
	}
}
?>