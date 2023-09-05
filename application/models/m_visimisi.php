<?php

class M_visimisi extends CI_Model
{
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function input($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
