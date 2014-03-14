<?php

class Venmobets_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
  
  	public function test() {
		$query = $this->db->query("SELECT * FROM users");

	}
	
	public function make_bet() {
		$query = $this->db->query("INSERT INTO users (name) values () ");

	}
	
	public function record_visit() {
		$query = $this->db->query("INSERT INTO log_views (view) values (1)");
	}

}

