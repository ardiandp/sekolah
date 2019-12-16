<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_guru extends CI_Model {

	public function tampil()
	{
		return $this->db->get('guru');
	}

	public function simpan($data)
	{
		return $this->db->insert('guru');
	}

	public function update($data,$nip)
	{
		$this->db->where('nip', $nip);
		$this->db->update('guru', $data);
	}

	

}

/* End of file Model_guru.php */
/* Location: ./application/models/Model_guru.php */