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
    public function input($data)
    {
        $this->db->insert('struktur_organisasi', $data);
    }
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('struktur_organisasi', array('id' => $id))->row();
        return $query;
    }
    public function hapus($where)
    {
        $this->db->where($where);
        $this->db->delete('struktur_organisasi');
    }
}
