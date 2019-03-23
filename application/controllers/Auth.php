<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Auth_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    function index()
    {
        $this->check_logged_in();

        $page = new Page();

        $page->title = 'SBA - Login';
        $page->main  = 'auth/login_view';

        $this->render($page);
    }

    function login()
    {
        if ($this->input->post('login') != null)
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->auth_model->login($username, $password))
            {
                $userdata = array(
                    'logged_in' => true,
                    'username'  => $username
                );

                $this->session->set_userdata($userdata);

                redirect('home');
            }
            else
            {
                $flashdata = array(
                    'username' => $username,
                    'err_msg'  => 'Invalid username or password'
                );

                $this->session->set_flashdata($flashdata);

                redirect('auth');
            }
        }
        else
        {
            show_404();
        }
    }

    function logout()
    {
        session_destroy();

        redirect('auth', 'refresh');
    }

}
