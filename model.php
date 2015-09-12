<?php
	
class Model {
	public $data = array();
	public $loaded = false;
	
	function __construct(Boolean $doNotLoad=null) {
		if($doNotLoad == null)
			$this->load();
	}
	
	public function load($name=null) {
		if($name == null)
			$name = get_class($this);
		
		$data = file_get_contents('./' . $name . '.dat');
		$this->data = json_decode($data, true);
		$this->loaded = true;
	}
	
	public function save($name=null) {
		if($name == null)
			$name = get_class($this);
		
		$string = json_encode($this->data);
		file_put_contents('./' . $name . '.dat', $string);
	}
}

class Users extends Model {
	/**
	 * Adds a user to the database
	 * @param User $user - instance of class User
	 * @return Boolean true|false indicating success 
	 */
	public function addUser(User $user) {
		if(!$this->loaded)
			$this->load();
		
		if($this->findUser($user->email) !== null)
			return false;
		
		$this->data[$user->email] = $user;
		return true;
	}
	
	/**
	 * Find a user in the database
	 * @param string $_email
	 * @return User|null if found/not found
	 */
	public function findUser($_email) {
		foreach($this->data as $email => $user) {
			if($email == $_email)
				return $user;
		}
		
		return null;
	}
}

class User {
	public $name;
	public $age;
	public $email;
	public $dreg;
	
	function getFirstName() {
		return explode(' ', $this->name)[0];
	}
}

class Asset extends Model {}