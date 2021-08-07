<?php

class Homepage extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function home_page()
    {
        $this->templates->show("Home Page",'homepage/homepage');
    }
}

?>