<?php

class m_login extends CI_Model
{
    public function login()
    {
        return $this->db->get('admin');
    }
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
