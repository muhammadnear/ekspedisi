<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Form_model');
	}

	public function index()
	{
		$kirim['jenis_barang'] = $this->Form_model->get_jenis_barang();
		$kirim['location'] = $this->Form_model->get_location();
		$kirim['selected_kode_baru'] = 1;
		$this->load->view('user/dashboard', $kirim);
	}

	public function ajax_detail_lokasi()
	{
		$get = $this->Form_model->get_detail_location($_POST['id_loc']);
		echo json_encode($get);
	}

	public function create_barang()
	{
		$get = $this->Form_model->get_barang_today();
		$thn = substr(date('Y'), -2);
		$kode = date('d').date('m').$thn.$get[0]->jumlah;
		$data = array(
			'dev_id' => $_POST['jenis_barang'],
			'dev_code' => $kode,
			'dev_desc' => $_POST['nama_barang'],
			'dev_brand' => $_POST['brand'],
			'dev_status' => 0,
			'status_in_out' => 0,
			'created_by' => $this->session->userdata('id_login'),
			'last_updated_by' => $this->session->userdata('id_login'),
			'last_updated_date' => date("Y-m-d h:i:s")
		);
		if(!empty($_POST['no_berkas']))
			$data['dev_serial'] = $_POST['no_berkas'];
		
		if(!empty($_POST['tipe_berkas']))
			$data['dev_model'] = $_POST['tipe_berkas'];
		
		$id = $this->Form_model->insert_barang($data);
		//image
		$configu['upload_path']          = FCPATH.'/tmp/files/';
		$configu['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc|docx';
		$configu['max_size']             = 2000;
		$configu['max_width']            = 10240;
		$configu['max_height']           = 10240;
 
		$this->load->library('upload', $configu);

		$ext = strtolower(pathinfo($_FILES['files']['name'], PATHINFO_EXTENSION));
		if($ext != "gif" && $ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "pdf" && $ext != "doc" && $ext != "docx")
		{
			$kirim['error'] = "File harus berupa gambar, pdf atau dokumen word.";
		}
		else
		{
			if ( ! $this->upload->do_upload('files')){
				$kirim['error'] = $this->upload->display_errors();
				//echo var_dump($kirim);
			}else{
				$uploaded_file = $this->upload->data();

				$data2 = array(
					'dev_path_file' => $uploaded_file['file_name']
					);
				$this->Form_model->update_barang($data2, $id);
				//echo var_dump($uploaded_file);
			}
		}
		if($id)
			$kirim['sukses'] = "Barang Berhasil dibuat. Kode barang adalah <b>".$kode."</b>";
		$kirim['jenis_barang'] = $this->Form_model->get_jenis_barang();
		$kirim['location'] = $this->Form_model->get_location();
		$kirim['selected_kode_baru'] = 1;
		$this->load->view('user/dashboard', $kirim);
	}

	public function search()
	{
		if(empty($_POST['query']))
			$this->index();

		$result = array();

		$result['kode'] = $this->Form_model->get_device_Bycode($_POST['query']);
		$result['nama'] = $this->Form_model->get_device_Byname($_POST['query']);
		$result['serial'] = $this->Form_model->get_device_Byserial($_POST['query']);
		$result['brand'] = $this->Form_model->get_device_Bybrand($_POST['query']);
		$result['model'] = $this->Form_model->get_device_Bymodel($_POST['query']);

		$kirim['result'] = $result;

		$flag = 0;
		$kirim['submitted'] = "";
		if(!empty($result['nama']))
		{
			$flag = 1;
			$kirim['submitted'] += "Kami menemukan ".sizeof($result['nama'])." nama barang yang sesuai dengan kata kunci anda.<br>";
		}
		if(!empty($result['serial']))
		{
			$flag = 1;
			$kirim['submitted'] += "Kami menemukan ".sizeof($result['serial'])." nama barang yang sesuai dengan kata kunci anda.<br>";
		}
		if(!empty($result['brand']))
		{
			$flag = 1;
			$kirim['submitted'] += "Kami menemukan ".sizeof($result['brand'])." nama barang yang sesuai dengan kata kunci anda.<br>";
		}
		if(!empty($result['model']))
		{
			$flag = 1;
			$kirim['submitted'] += "Kami menemukan ".sizeof($result['model'])." nama barang yang sesuai dengan kata kunci anda.<br>";
		}

		if($flag == 0)
			$kirim['submitted'] = "Mohon maaf, kata kunci anda tidak sesuai dengan data manapun.";

		$kirim['jenis_barang'] = $this->Form_model->get_jenis_barang();
		$kirim['location'] = $this->Form_model->get_location();
		$kirim['selected_cari'] = 1;
		$this->load->view('user/dashboard', $kirim);
	}

	public function submit_edit()
	{

	}

	public function delete()
	{

	}

	public function submit_delete()
	{
		
	}
}	
