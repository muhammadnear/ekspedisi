<?php
	class Form_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		function get_jenis_barang()
		{
			$value = $this->db->get('device_name')->result();
			return $value;
		}
		function get_location()
		{
			$value = $this->db->get('stlocation')->result();
			return $value;
		}
		function get_barang_today()
		{
			$value = $this->db->query("SELECT COUNT(*) as jumlah FROM `stdevice` WHERE DATE(`creation_date`) = CURDATE()")->result();
			return $value;
		}
		function get_device_Bycode($query)
		{
			$this->db->like('dev_code', $query);
			$value = $this->db->get('stdevice')->result();
			return $value;
		}
		function get_device_Byname($query)
		{
			$this->db->like('dev_desc', $query);
			$value = $this->db->get('stdevice')->result();
			return $value;
		}
		function get_device_Byserial($query)
		{
			$this->db->like('dev_serial', $query);
			$value = $this->db->get('stdevice')->result();
			return $value;
		}
		function get_device_Bybrand($query)
		{
			$this->db->like('dev_brand', $query);
			$value = $this->db->get('stdevice')->result();
			return $value;
		}
		function get_device_Bymodel($query)
		{
			$this->db->like('dev_model', $query);
			$value = $this->db->get('stdevice')->result();
			return $value;
		}
		//CREATE
		function insert_barang($data)
		{
			$this->db->insert("stdevice",$data);
			return $this->db->insert_id();
		}
		//READ
		function get_detail_location($id_location)
		{
			$this->db->where('stdev_id', $id_location);
			$value = $this->db->get('location_details')->result();
			return $value;
		}
		//UPDATE
		function update_barang($data, $id)
		{
			$this->db->where('id', $id);
			$this->db->update('stdevice', $data);
		}
		//DELETE
		function Delete($id)
		{
			$this->db->where('id_pk',$id);
			$this->db->delete('table');
		}
		
		function Custom_Query()
		{
			$value = $this->db->query("SELECT * from `table` where 1")->result();
			return $value;
		}
	}
?>