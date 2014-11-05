<?php
class MY_Model extends CI_Model{
	const DB_TABLE = 'abstract';
	const DB_TABLE_PK = 'abstract';
	
	public function delete(){
		$this->db->delete($this::DB_TABLE, array(
			$this::DB_TABLE_PK => $this->{$this::DB_TABLE_PK},
		));
	}
	/*
	public function delete() {
        $this->db->delete($this::DB_TABLE, array(
           $this::DB_TABLE_PK => $this->{$this::DB_TABLE_PK},//why not? $user_id;
        ));
        unset($this->{$this::DB_TABLE_PK});
    }*/
	public function insert(){
		$this->db->insert($this::DB_TABLE, $this);
		//$this->{$this::DB_TABLE_PK} = $this->db->insert_id(); // not necessary because the database is auto_increment
	}
}
?>