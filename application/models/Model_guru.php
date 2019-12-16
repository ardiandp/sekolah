<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_guru extends CI_Model {

	public function tampil()
	{
		return $this->db->get('guru');
	}

	public function simpan($data)
	{
		return $this->db->insert('guru',$data);
	}

	public function update($data,$nip)
	{
		$this->db->where('nip', $nip);
		$this->db->update('guru', $data);
	}

	public function getnip($nip)
	{
		$param = array('nip' =>$nip);
		$this->db->get_where('guru',$param);
	}

	

}

/* End of file Model_guru.php */
/* Location: ./application/models/Model_guru.php */