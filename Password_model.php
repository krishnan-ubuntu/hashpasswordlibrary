<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Password_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
	}


	public function password_hashing($password) {
 		$cost = 10;
 		$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
 		$salt = sprintf("$2a$%02d$", $cost) . $salt;
 		return $password_hash = crypt($password, $salt);
	}

}
