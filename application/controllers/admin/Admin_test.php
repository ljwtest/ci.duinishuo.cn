<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_test extends CI_Controller {

	public function index($a="",$bb="")
	{
		echo "this is Admin Module test Controller";
		$this->load->database();
		$res=$this->input->post();
		var_dump($res);
		//$model=$this->load->model("Test");
		//var_dump($model);

		$query=$this->db->get("table1")->row_array();
		//echo $query[0]['id'];die;
		var_dump($query);
		$this->load->view("test/index");
	}
}
