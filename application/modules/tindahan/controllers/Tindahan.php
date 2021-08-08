<?php

class Tindahan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tindahan/TindahanModel');

    }

    public function your_tindahan_page()
    {
        
        $result = $this->TindahanModel->get_tindahan($this->session->userdata('login_data')['username']);
        $this->session->set_userdata('tindahan_data', $result);
        
        
        $this->templates->show("Your Tindahan Page",'tindahan/your_tindahan_page');
    }

    public function add_tindahan_page()
    {
        $this->templates->show("Add Tindahan", 'tindahan/add_tindahan');
        
    }
    public function add_tindahan()
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required|alpha_numeric_spaces|is_unique[tindahans.title]');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->add_tindahan_page();
        }
        else
        {
            $data = array(
                'owner' => $this->session->userdata('login_data')['username'],
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'image_name' => 'no-image.jpg'
            );

            $result = $this->TindahanModel->insert_tindahan($data);
            if($result)
            {
                $this->session->set_flashdata('status', "Added Tindahan Sucessfully!");
                $result = $this->TindahanModel->get_tindahan($this->session->userdata('login_data')['username']);
                $this->session->set_userdata('tindahan_data', $result);
                redirect(site_url('your-tindahan'));
            }
            else
            {
                $this->session->set_flashdata('status', "Something Went Wrong!");
                redirect(site_url('your-tindahan'));
            }
        }
    }
}

?>