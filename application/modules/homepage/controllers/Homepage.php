<?php

class Homepage extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('login_data'))
        {
            $this->session->set_flashdata('status_login', 'Log in first');
            redirect(site_url('login'));
        }
    }

    public function home_page()
    {
        $this->templates->show("Home Page",'homepage/homepage');
    }
}

?>