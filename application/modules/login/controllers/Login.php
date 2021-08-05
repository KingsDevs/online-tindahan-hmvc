<?php 

class Login extends MY_Controller 
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login_page()
    {
        $this->templates->show("Login Page",'login/login_page');
    }

    public function register_page()
    {
        $this->templates->show("Register Page", 'login/register_page');
    }



}