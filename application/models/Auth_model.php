<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model { 

    function __construct()
    {
        parent::__construct();
    }

    function login($username, $password)
    {
        return $username == 'admin' && $password == 'admin' ? true : false;
    }

    function get_username($username)
    {
    	$dispatcher = $this->username;
    	$this->login;
    	return $dispatcher;
    }

}
