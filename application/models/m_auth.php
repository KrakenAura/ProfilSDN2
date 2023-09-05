<?php

class M_auth extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('admin');
    }
    public function register_user($username, $password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $data = array(
            'username' => $username,
            'password' => $hashed_password
        );
        $this->db->insert('admin', $data);
    }
    public function authenticate($username, $password)
    {
        $query = $this->db->get_where('admin', ['username' => $username]);
        if ($query->num_rows() === 1) {
            $user = $query->row();
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }
    public function detail_data()
    {
        $query = $this->db->get('admin')->row_array();
        return $query;
    }
}
