<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('User');
		$this->load->model('Form_model');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function signin()
	{
		//echo var_dump($_POST);
		$flag = 0;
		$hasil = $this->User->getLogin();
		if(empty($_POST['username']) || empty($_POST['password']))
		{
			$kirim["error"] = "Masukkan Username dan Password Anda..";
			$this->load->view('login',$kirim);	
		}
		else
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			foreach ($hasil as $key) 
			{
				if($username == $key->username)
				{
					if($password == $key->password)
					{
						$this->session->set_userdata('id_login',$key->id_login);
						$this->session->set_userdata('lastvisit_at',$key->lastvisit_at);
						$this->session->set_userdata('default_loc',$key->ld_id);
						$flag=2;
						break;
					}
				}
			}
			if($flag == 1)
			{
				//admin
				$data = array('lastvisit_at' => date('Y-m-d H:i:s'));
				$this->User->LastVisit($data,$this->session->userdata('id_login'));
				echo "sukses";
			}
			else if ($flag == 2) 
			{
				//user
				$data = array('lastvisit_at' => date('Y-m-d H:i:s'));
				$this->User->LastVisit($data,$this->session->userdata('id_login'));
				$this->user_dashboard();
			}
			else
			{
				$kirim["error"] = "Maaf, Username atau Password yang anda masukkan salah..";
				$this->load->view('login',$kirim);	
			}
		}
		
	}
	public function signout()
	{
		$data = array('lastvisit_at' => date('Y-m-d H:i:s'));
		$this->User->LastVisit($data, $this->session->userdata('id_login'));
		$kirim["error"] = "";
		$this->session->sess_destroy();
		$this->load->view("login", $kirim);
	}

	public function user_dashboard()
	{
		$kirim['jenis_barang'] = $this->Form_model->get_jenis_barang();
		$kirim['location'] = $this->Form_model->get_location();
		$kirim['selected_kode_baru'] = 1;
		$this->load->view('user/dashboard', $kirim);
	}

}
