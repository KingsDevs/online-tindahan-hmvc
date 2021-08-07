<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginModel extends CI_Model
{
    public function insert_user($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        
        return $this->db->insert('users', $data);
    }

    public function login_user($data)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username' , $data['username']);
        $this->db->limit(1);

        $query = $this->db->get();
        if($query->num_rows() == 1)
        {
            if(password_verify($data['password'], $query->row()->password))
            {
                return $query->row();
            }
            else
            {
                return FALSE;
            }
        } 
        else
        {
            return FALSE;
        }
    }
}

?>