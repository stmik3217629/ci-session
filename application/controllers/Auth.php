<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

	public function index()
	{
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $isAuthenticated = !!$this->session->userdata('id');

        $this->load->model('AuthModel');
        
        if ($this->input->post('action')) {
            if ($this->AuthModel->auth($username, $password)) {
                $isAuthenticated = true;
            }else {
                $error = 'Username dan password salah';
            }
        }
 
        if ($isAuthenticated) return redirect('Welcome');
        
        $this->load->view('auth/form', [
            'error' => @$error
        ]);
    }
    
    public function logout()
    {
        $this->load->model('AuthModel');
        $this->AuthModel->signout();
        redirect('Welcome');
    }
}
