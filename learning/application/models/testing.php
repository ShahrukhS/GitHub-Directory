<?php
class Testing extends MY_Model{
	const DB_TABLE = 'students';
	const DB_TABLE_PK = 'id';
	
	public $id;
	public $name;
	public $current_year;
	public $grad_year;
}

?>