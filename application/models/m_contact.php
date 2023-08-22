<?php

class m_contact extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('sosial_media');
    }
    public function input($data)
    {
        $this->db->insert('sosial_media', $data);
    }
    public function hapus($where)
    {
        $this->db->where($where);
        $this->db->delete('sosial_media');
    }
    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function getByID($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('sosial_media');

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
