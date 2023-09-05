<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
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
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/index');
        $this->load->view('/templates/dashboard/footer');
    }
    public function sambutan()
    {
        $data['sambutan'] = $this->M_sambutan->tampil_data()->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/sambutan', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function profil()
    {
        $this->load->model('M_auth');
        $data['admin'] = $this->M_auth->detail_data();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/account', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function hero()
    {
        $data['hero'] = $this->M_hero->tampil_data_dashboard()->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/hero/hero', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function edit_hero($id)
    {
        $where = array('id' => $id);
        $data['hero'] = $this->M_hero->edit($where, 'hero')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/hero/edit', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function update_hero()
    {
        $id = $this->input->post('id');
        $halaman = $this->input->post('halaman');
        $judul = $this->input->post('judul');
        $sub_judul = $this->input->post('sub_judul');
        $foto = $_FILES['foto'];

        $existingData = $this->M_hero->getByID($id);

        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/Resource/hero';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        } else {
            $foto = $existingData->foto;
        }

        $data = array(
            'halaman' => $halaman,
            'judul' => $judul,
            'sub_judul' => $sub_judul,
            'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->M_hero->update($where, $data, 'hero');
        redirect('index.php/DashboardController/hero');
    }
    public function update_login()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'id' => $id,
            'username' => $username,
            'password' => $password
        );

        $where = array(
            'id' => $id
        );

        $this->M_login->update($where, $data, 'admin');
        redirect('DashboardController/profil');
    }
}
