<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Controller.php";

class MY_Controller extends MX_Controller 
{

    //public $key;

    public function __construct()
    {
        parent::__construct();

        $this->load->module('templates');
        $this->load->library(array('form_validation','session', 'encryption'));
        $this->load->helper('form');

        //$key =  $this->encryption->create_key(16);
    }

}