<?php

class Tindahan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();


    }

    public function your_tindahan_page()
    {
        $this->templates->show("Your Tindahan Page",'tindahan/your_tindahan_page');
    }

    public function add_tindahan_page()
    {
        $this->templates->show("Add Tindahan", 'tindahan/add_tindahan');
    }
    public function add_tindahan()
    {
        
    }
}

?>