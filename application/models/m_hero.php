<?php

class m_hero extends CI_Model
{
    public function tampil_data($halaman)
    {
        $this->db->where('halaman', $halaman);
        return $this->db->get('hero')->row();
    }
    public function tampil_data_dashboard()
    {
        return $this->db->get('hero');
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
        $query = $this->db->get('hero');

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
}
