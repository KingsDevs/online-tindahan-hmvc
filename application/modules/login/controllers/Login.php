<?php 

class Login extends MY_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login/LoginModel');

        if($this->session->has_userdata('login_data'))
        {
            $this->session->set_flashdata('status', 'You are already logged in! ');
            redirect(site_url('home'));
        }
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
            print_r($result);
            if($result === FALSE)
            {
                $this->session->set_flashdata('status_login', 'Wrong Username or Password');
                redirect(site_url('login'));
            }
            else
            {
                $login_data = array(
                    'user_id' => $result->user_id,
                    'username' => $result->username,
                    'firstname' => $result->firstname,
                    'lastname' => $result->lastname,
                    'created_at' => $result->created_at,
                );

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
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|alpha_numeric|callback_check_username');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('c_password', 'Confirm Password', 'trim|required|min_length[8]|matches[password]', array('matches'=>'Passwords do not match'));

        if ($this->form_validation->run() == FALSE)
        {
            $this->register_page();
        }
        else
        {
            $data = array(
                'username' => $this->input->post('username'),
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
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

    public function check_username($str)
    {
        $rows = $this->LoginModel->check_username($str);
        if($rows > 0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }

    }

    public function test()
    {

        $rows = $this->LoginModel->check_username('karlmsvxD');
        if($rows > 0)
        {
            echo 'not unique';
        }
        else
        {
            echo 'unique';
        }

    }
  


}