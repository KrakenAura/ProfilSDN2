<?php

class m_kegiatanRutin extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('kegiatan_rutin');
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
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('kegiatan_rutin', array('id' => $id))->row();
        return $query;
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
    public function getByID($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('kegiatan_rutin');

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
    public function tampil_galeri($id_kegiatan = NULL)
    {
        return $this->db->where('id_kegiatan', $id_kegiatan)->get('galeri_kegiatan')->result();
    }
}
