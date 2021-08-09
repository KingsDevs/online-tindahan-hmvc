<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginModel extends CI_Model
{
    private $user_db;

    public function __construct()
    {
        parent::__construct();
        $this->user_db = $this->load->database('online_tindahan_users', TRUE);
    }

    public function insert_user($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        
        return $this->user_db->insert('users', $data);
    }

    public function login_user($data)
    {
        $this->user_db->select('*');
        $this->user_db->from('users');
        $this->user_db->where('username' , $data['username']);
        $this->user_db->limit(1);

        $query = $this->user_db->get();
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