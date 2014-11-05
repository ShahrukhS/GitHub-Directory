<?php
class Database_model extends CI_Model{
	const DB_TABLE = 'abstract';
	const DB_TABLE_PK = 'abstract';
	
	function getData(){
		return $this->db->get($this::DB_TABLE)->result();
	}
	function insert($record){
		$this->db->insert($this::DB_TABLE, $record);
	}
	function insert_batch($datarows){
		$this->db->insert_batch($this::DB_TABLE, $datarows);
	}
	function update($data){
		$this->db->update($this::DB_TABLE,$data,"id = 2");
	}
}
?>