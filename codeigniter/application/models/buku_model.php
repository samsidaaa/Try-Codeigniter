<?php
class Buku_Model extends CI_Model{

	public function isidata(){
		return array(
			array(
				'judul'=>'Judul1',
				'pengarang'=>'Pengarang1',
				'tahun'=>'9999'),
			array(
				'judul'=>'Judul2',
				'pengarang'=>'Pengarang2',
				'tahun'=>'9999')
		);
	}
}
?>