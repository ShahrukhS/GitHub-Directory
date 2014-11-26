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
	public function get(){
		$query = $this->db->get($this::DB_TABLE);
		return $query->result();
	}
	//not needed
	public function get_record(){
		$query = $this->db->get_where($this::DB_TABLE, array(
			$this::DB_TABLE_PK => $this->{$this::DB_TABLE_PK}
		));
		return $query->result();
	}
	public function get_PK_where($column, $value){
		$this->db->select($this::DB_TABLE_PK);
		$query = $this->db->get_where($this::DB_TABLE, array($column => $value));
		//return $query->result();
		$this->populate($query->row());
	}
	public function populate($row) {
        foreach ($row as $key => $value) {
            $this->$key = $value;
        }
    }
	public function load($id) {
        $query = $this->db->get_where($this::DB_TABLE, array(
            $this::DB_TABLE_PK => $id
        ));
        $this->populate($query->row());
    }
}
?>