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
        $data['sambutan'] = $this->M_sambutan->tampil_data()->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/sambutan/sambutan', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['sambutan'] = $this->M_sambutan->edit($where, 'sambutan')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/sambutan/edit', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama_kepsek = $this->input->post('nama_kepsek');
        $foto = $_FILES['foto'];
        $sambutan = $this->input->post('sambutan');
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/Resource/sambutan';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_kepsek' => $nama_kepsek,
            'foto' => $foto,
            'sambutan' => $sambutan
        );

        $where = array(
            'id' => $id
        );

        $this->M_sambutan->update($where, $data, 'sambutan');
        redirect('SambutanController/index');
    }
}
