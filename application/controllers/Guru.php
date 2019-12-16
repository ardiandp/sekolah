<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_guru');
	}

	public function index()
	{
		$data['judul']="Data Guru";
		$data['guru']=$this->Model_guru->tampil()->result();
		$this->load->view('guru/tampil', $data, FALSE);
		
	}

	public function input()
	{
		if(isset($_POST['simpan']))
		{
			$data=array(
				'nip'=>$this->input->post('nip'),
				'nama'=>$this->input->post('nama'),
				'email'=>$this->input->post('email'),
				'jk'=>$this->input->post('jk'),
			);

			$this->Model_guru->simpan($data);
			redirect('guru','refresh');
		}
		else
		{
			$data['judul']="Input Data Guru";
			$this->load->view('guru/input', $data, FALSE);
		}
	}

	public function edit()
	{
		if(isset($_POST['update']))
		{
			$nip=$this->input->post('nip');
			$data=array(
				'nip'=>$this->input->post('nip'),
				'nama'=>$this->input->post('nama'),
				'email'=>$this->input->post('email'),
				'jk'=>$this->input->post('jk'),
			);

			$this->Model_guru->update($data,$nip);
			redirect('guru','refresh');

		}
		else
		{
			$data['Judul']="Edit Data Guru";
			$nip=$this->uri->segment(3);
			$data['edit']=$this->Model_guru->getnip($nip)->row_array();
			$this->load->view('guru/edit', $data, FALSE);
		}
	}

	public function hapus()
	{
		$nip=$this->uri->segment(3);
		$this->db->where('nip', $nip);
		$this->db->delete('guru');
		redirect('guru/tampil','refresh');
	}

}

/* End of file Sekolah.php */
/* Location: ./application/controllers/Sekolah.php */