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

    public function login_p()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->login_page();
        }
        else
        {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );

            $result = $this->LoginModel->login_user($data);
           
            if($result === FALSE)
            {
                $this->session->set_flashdata('status_login', 'Wrong Username or Password');
                redirect(site_url('login'));
            }
            else
            {
                $login_data = array(
                    'firstname' => $result->firstname,
                    'lastname' => $result->lastname,
                    'username' => $result->username,
                );

                //$this->session->set_userdata('is_login', '1');
                $this->session->set_userdata('login_data', $login_data);
                redirect(site_url('home'));

            }
            
        }
    }

    public function register_page()
    {
        $this->templates->show("Register Page", 'login/register_page');
    }

    public function register()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|alpha_numeric_spaces|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('c_password', 'Confirm Password', 'trim|required|min_length[8]|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->register_page();
        }
        else
        {
            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );
            
            $result = $this->LoginModel->insert_user($data);
            if($result)
            {
                $this->session->set_flashdata('status_reg', 'You successfuly registered!');
                redirect(site_url('login'));
            }
            else
            {
                $this->session->set_flashdata('status_reg', 'Something went wrong!');
                redirect(site_url('register'));
            }
        }
    }



}