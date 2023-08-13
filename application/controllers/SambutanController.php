<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SambutanController extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $data['sambutan'] = $this->m_sambutan->tampil_data()->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/sambutan/sambutan', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['sambutan'] = $this->m_sambutan->edit($where, 'sambutan')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/sambutan/edit', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama_kepsek = $this->input->post('nama_kepsek');
        $foto = $this->input->post('foto');
        $sambutan = $this->input->post('sambutan');

        $data = array(
            'nama_kepsek' =>  $nama_kepsek,
            'foto' => $foto,
            'sambutan' => $sambutan
        );

        $where = array(
            'id' => $id
        );

        $this->m_sambutan->update($where, $data, 'sambutan');
        redirect('index.php/SambutanController/index');
    }
}
