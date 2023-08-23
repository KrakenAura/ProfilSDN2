<?php

class m_auth extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('auth');
    }
    public function register_user($username, $password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $data = array(
            'username' => $username,
            'password' => $hashed_password
        );
        $this->db->insert('auth', $data);
    }
    public function authenticate($username, $password)
    {
        $query = $this->db->get_where('auth', ['username' => $username]);
        if ($query->num_rows() === 1) {
            $user = $query->row();
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }
    public function update_username($newUsername)
    {
        $data = array('username' => $newUsername);
        $this->db->where('id', 1);
        $this->db->update('auth', $data);
    }
    public function update_password($newPassword)
    {
        $hashed_password = password_hash($newPassword, PASSWORD_DEFAULT);
        $data = array('password' => $hashed_password);
        $this->db->where('id', 1);
        $this->db->update('auth', $data);
    }
    public function detail_data()
    {
        $query = $this->db->get('auth')->row_array();
        return $query;
    }
}
