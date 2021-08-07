<?php 

class Login extends MY_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login/LoginModel');
        

        
    }

    public function login_page()
    {
        $this->templates->show("Login Page",'login/login_page');
    }

    public function register_page()
    {
        $this->templates->show("Register Page", 'login/register_page');
    }

    public function register()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|alpha_numeric_spaces');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('c_password', 'Confirm Password', 'trim|required|min_length[8]|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->register_page();
        }
        else
        {
            $this->LoginModel->insert_user();
        }
    }



}