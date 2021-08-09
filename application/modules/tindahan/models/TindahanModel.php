<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TindahanModel extends CI_Model
{
    private $tindahan_db;
    public function __construct()
    {
        parent::__construct();
        $this->tindahan_db =  $this->load->database('tindahan', TRUE);
        $this->load->library('encrypt');
    }

    public function insert_tindahan($data)
    {
        $data['title'] = $this->encrypt->encode($data['title']);
        $data['description'] = $this->encrypt->encode($data['description']);
        return $this->tindahan_db->insert('tindahans', $data);
    }

    public function get_tindahan($user_id)
    {
        $this->tindahan_db->select('*');
        $this->tindahan_db->from('tindahans');
        $this->tindahan_db->where('user_id' , $user_id);

        $query = $this->tindahan_db->get();
        $data = $query->result();
        foreach($data as $col)
        {
            $col->title  = $this->encrypt->decode($col->title);
            $col->description  = $this->encrypt->decode($col->description);
        }

        return $query->result();
    }

}