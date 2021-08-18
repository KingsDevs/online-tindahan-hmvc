<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TindahanModel extends CI_Model
{
    private $tindahan_db;
    public function __construct()
    {
        parent::__construct();
        $this->tindahan_db =  $this->load->database('tindahan', TRUE);
        $this->load->library(array('encrypt'));
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

    public function get_current_tindahan($id)
    {
        $this->tindahan_db->select('*');
        $this->tindahan_db->from('tindahans');
        $this->tindahan_db->where('tindahan_id' , $id);
        $this->tindahan_db->limit(1);

        $query = $this->tindahan_db->get();

        $data = $query->row();

        $data->title = $this->encrypt->decode($data->title);
        $data->description = $this->encrypt->decode($data->description);

        return $data;

    }

    public function check_title($title, $user_id)
    {
        $this->tindahan_db->select('user_id, title');
        $this->tindahan_db->from('tindahans');
        $this->tindahan_db->where('user_id' , $user_id);
        $this->tindahan_db->where('title' , $title);

        $query = $this->tindahan_db->get();
        
        $rows = $query->num_rows();

        if($rows === 0)
        {
            return TRUE;
        }
        return FALSE;

    }

    
}