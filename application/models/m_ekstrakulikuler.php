<?php

class m_ekstrakulikuler extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('ekstrakulikuler');
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
        $query = $this->db->get_where('ekstrakulikuler', array('id' => $id))->row();
        return $query;
    }
    public function input($data)
    {
        $this->db->insert('ekstrakulikuler', $data);
    }
    public function hapus($where)
    {
        $this->db->where($where);
        $this->db->delete('ekstrakulikuler');
    }
    public function getByID($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('ekstrakulikuler');

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
}
