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
}
