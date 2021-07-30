<?php
defined('BASEPATH') or exit('No direct scrip access allowed');
/**
 * 
 */
class buku extends CI_Controller
{
	
	public function __construct()
	{ parent::__construct();
		$this ->load-> model('buku_model');
		# code...
	}
	public function index()
	{
		$data['data_buku']= $this->buku_model->isidata();

		$this->load->view('buku_view', $data);  
		# code...
	}
}
?>