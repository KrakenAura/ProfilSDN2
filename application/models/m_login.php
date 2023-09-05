<?php

class M_login extends CI_Model
{
    public function login()
    {
        return $this->db->get('admin');
    }
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
