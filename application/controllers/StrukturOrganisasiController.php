<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StrukturOrganisasiController extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/welcome
     *	- or -
     * 		http://example.com/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $data['struktur_organisasi'] = $this->M_strukturOrganisasi->tampil_data()->result();
        $data['hero'] = $this->M_hero->tampil_data('Struktur Organisasi');
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/struktur_organisasi', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function dashboard()
    {
        $data['struktur_organisasi'] = $this->M_strukturOrganisasi->tampil_data()->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        //$this->load->view('/templates/dashboard/struktur_organisasi/struktur_organisasi', $data);
        $this->load->view('/templates/dashboard/database/struktur_organisasi/struktur_organisasi', $data);
        //$this->load->view('/templates/dashboard/struktur_organisasi', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['struktur_organisasi'] = $this->M_strukturOrganisasi->edit($where, 'struktur_organisasi')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/struktur_organisasi/edit', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $jabatan = $this->input->post('jabatan');
        $foto = $_FILES['foto'];

        // Check if a file is uploaded
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/Resource/struktur_organisasi';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        } else {
            // No file uploaded, keep the existing value
            $existingData = $this->M_strukturOrganisasi->getById($id); // Assuming this method fetches existing data
            $foto = $existingData->foto;
        }

        $data = array(
            'nama' => $nama,
            'nip' => $nip,
            'jabatan' => $jabatan,
            'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->M_strukturOrganisasi->update($where, $data, 'struktur_organisasi');
        redirect('StrukturOrganisasiController/dashboard');
    }

    public function tambah()
    {
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $jabatan = $this->input->post('jabatan');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/Resource/struktur_organisasi';
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
            'nama' => $nama,
            'nip' => $nip,
            'jabatan' => $jabatan,
            'foto' => $foto
        );

        $this->M_strukturOrganisasi->input($data);
        redirect('StrukturOrganisasiController/dashboard');
    }

    public function detail($id)
    {
        $this->load->model('M_strukturOrganisasi');
        $detail = $this->M_strukturOrganisasi->detail_data($id);
        $data['detail'] = $detail;
        $data['hero'] = $this->M_hero->tampil_data('Kegiatan Rutin');

        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/detail_guru', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_strukturOrganisasi->hapus($where);
        redirect('StrukturOrganisasiController/dashboard');
    }
}
