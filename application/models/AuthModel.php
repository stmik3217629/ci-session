<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

	public function auth($username, $password)
	{
        if ($username == 'admin' && $password == 'admin123') {
            $this->session->set_userdata('id', '1');
            $this->session->set_userdata('username', $username);
            return true;
        } else {
            return false;
        }
    }
    
    public function signout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        return true;
    }
}
