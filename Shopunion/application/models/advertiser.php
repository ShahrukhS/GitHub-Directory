<?php
class Advertiser extends MY_Model{
	const DB_TABLE = 'advertisers';
	const DB_TABLE_PK = 'ad_id';
	
	public $ad_id;
	public $plan_id;
	public $city_id;
	public $cat_id;
	public $freq_id;
	public $Fname;
	public $Lname;
	public $email;
	public $password;
	public $phone;
	public $business_name;
	public $type;
	public $address;
	public $website;
	public $desc;
	public $pic;
	public $updates;
	public $followers;
}
?>