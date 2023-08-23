<?php

class m_artikel extends CI_Model
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
}
