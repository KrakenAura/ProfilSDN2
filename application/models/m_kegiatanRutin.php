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
}
