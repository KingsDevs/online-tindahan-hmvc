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
        $this->load->helper(array('form', 'security'));

        //$key =  $this->encryption->create_key(16);
    }

    // protected function check_username($str)
	// {
    //     $this->load->model('login/LoginModel');
	// 	$rows = $this->LoginModel->check_username($str);
    //     if($rows === 0)
    //     {
    //         return TRUE;
    //     }

    //     return FALSE;
	// }

}