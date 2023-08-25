<?php

class m_prestasi extends CI_Model
{
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('prestasi', array('id' => $id))->row();
        return $query;
    }
    public function tampil_galeri($id_prestasi = NULL)
    {
        return $this->db->where('id_prestasi', $id_prestasi)->get('galeri_prestasi')->result();
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
    public function input($table, $data)
    {
        $this->db->insert($table, $data);
    }
    public function hapus($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
