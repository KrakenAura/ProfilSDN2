<?php

class m_strukturOrganisasi extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('struktur_organisasi');
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
}
