<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TindahanModel extends CI_Model
{
    public function insert_tindahan($data)
    {
        return $this->db->insert('tindahans', $data);
    }

    public function get_tindahan($owner)
    {
        $this->db->select('*');
        $this->db->from('tindahans');
        $this->db->where('owner' , $owner);

        $query = $this->db->get();
        return $query->result();
    }

}