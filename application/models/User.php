<?php
	
	class User extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		function GetLogin()
		{
			$value = $this->db->query('SELECT * FROM  `pegawai` WHERE 1')->result();
			return $value;
		}
		
		function LastVisit($data, $id)
		{
			$this->db->where('id_login', $id);
			$this->db->update('pegawai', $data);
		}
		function GetloginById($id)
		{
			$value = $this->db->query("SELECT * FROM  `pegawai` WHERE id_login='$id'")->result();
			return $value;
		}
		function Updatelogin($data, $id)
		{
			$this->db->where('id_login', $id);
			$this->db->update('pegawai', $data);
		}
		function hapuslogin($id)
		{
			$this->db->where('id_login',$id);
			$this->db->delete('pegawai');
		}
		function insertlogin($data)
		{
			return $this->db->insert("pegawai",$data);
		}
	}
?>