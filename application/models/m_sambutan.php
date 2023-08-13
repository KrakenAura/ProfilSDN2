<?php

class m_sambutan extends CI_Model
{
    public function tampil_data()
    {
        return $this->db-> get('sambutan');

    }
}
