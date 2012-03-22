<?php
class User extends AppModel {
	var $name = 'User';
	
	var $validate = array(
		/* 'username' => array(
			'Must be atleast 5 to 15 characters' => array(
				'rule' => array('between', 5, 15),
				'message' => 'Must be atleast 5 to 15 characters'	
			),
			'That username has already been taken' => array(
				'rules' => 'isUnique',
				'message' => 'That username has already been taken'
			)
		) */
		/* 'password' => array(
			'Must be atleast 5 to 15 characters' => array(
				'rule' => array('between', 5, 15),
				'message' => 'Must be atleast 5 to 15 characters'	
			),
			'The password do not match' => array(
				'rules' => 'matchPasswords',
				'message' => 'The password do not match'
			)
		) */
	);
	
	function beforeSave() {
		$this->hashPasswords(null, true);
		return true;
	}
	
	function hashPasswords($data) {
		if(isset($this->data['User']['password'])) {
			$this->data['User']['password'] = Security::hash($this->data['User']['password'], null, true);	
			return $data;
		}
		return $data;
	}
	
	function matchPasswords($data) {
		if($this->data['password'] == $this->data['User']['password_confirmation']) {
			return true;
		}
		$this->invalidate('password_confirmation', 'The password do not match');
		return false;
	}
}
