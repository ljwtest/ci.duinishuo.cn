<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {

	public function index()
	{
		echo "this is test Controller";
		$this->load->database();
		//$query = $this->db->query('SELECT * from table2')->result();
		//$query=$this->db->select("id,add_time")->get("table1")->result();
		$arr=array("user"=>"ljw3","age"=>"26");
		//echo config_item("mysql_host");
		$query=$this->db->get("table1")->row_array();
		//echo $query[0]['id'];die;
		var_dump($query);
	}
}
