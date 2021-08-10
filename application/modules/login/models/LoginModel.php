<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginModel extends CI_Model
{
    private $user_db;

    public function __construct()
    {
        parent::__construct();
        $this->user_db = $this->load->database('users', TRUE);
        $this->load->library('encrypt');
    }

    public function insert_user($data)
    {
        $data['firstname'] = $this->encrypt->encode($data['firstname']);
        $data['lastname'] = $this->encrypt->encode($data['lastname']);
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
                $data = $query->row();
                $data->firstname = $this->encrypt->decode($data->firstname);
                $data->lastname = $this->encrypt->decode($data->lastname);
                return $data;
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

    public function check_username($username)
    {
        $this->user_db->select('username');
        $this->user_db->from('users');
        $this->user_db->where('username' , $username);

        $query = $this->user_db->get();

        $rows = $query->num_rows();
        if($rows === 0)
        {
            return TRUE;
        }
        
        return FALSE;
        
    }
}

?>