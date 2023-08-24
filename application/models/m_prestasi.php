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
        $this->db->where('id_prestasi', $id_prestasi);
        return $this->db->get('galeri_prestasi');

        // return $this->db->get('galeri_prestasi')->where('id_prestasi', $id_prestasi)->row();
        //return $this->db->where('id_prestasi', $id_prestasi)->get('galeri_prestasi')->row();
    }
}
