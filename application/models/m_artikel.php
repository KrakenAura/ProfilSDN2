<?php

class M_artikel extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('artikel');
    }
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('artikel', array('id' => $id))->row();
        return $query;
    }
    public function hapus($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
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
    public function getByID($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('artikel');

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
}
