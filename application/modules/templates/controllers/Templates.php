<?php 

class Templates extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function show($title ,$content = "")
    {
        $data['content'] = $content;
        $data['title'] = $title;
        $this->load->view('templates/template_view', $data);
    }
}

?>