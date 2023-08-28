<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TentangKamiController extends CI_Controller
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
        $data['visi'] = $this->m_visimisi->tampil_data('visi')->result();
        $data['misi'] = $this->m_visimisi->tampil_data('misi')->result();
        $data['profil_sekolah'] = $this->m_profilSekolah->tampil_data()->result();
        $data['struktur_organisasi'] = $this->m_strukturOrganisasi->tampil_data()->result();
        $data['hero'] = $this->m_hero->tampil_data('Tentang Kami');
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/about', $data);
        $this->load->view('/templates/landing/footer');
        //$this->load->view('/templates/landing/about');
    }
    public function dashboardVisiMisi()
    {
        $data['visi'] = $this->m_visimisi->tampil_data('visi')->result();
        $data['misi'] = $this->m_visimisi->tampil_data('misi')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/visi_misi/visi_misi', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function dashboardProfil()
    {
        $data['profil_sekolah'] = $this->m_profilSekolah->tampil_data('profil_sekolah')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/profil_sekolah/profil_sekolah', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function hapus($id, $table)
    {
        $where = array('id' => $id);
        $table = array($table);
        $this->m_visimisi->hapus($where, $table);
        redirect('index.php/TentangKamiController/dashboardVisiMisi');
    }
    public function update($table)
    {

        $id = $this->input->post('id');
        $data = array();

        if ($table === 'visi') {
            $data['visi'] = $this->input->post('visi');
        } elseif ($table === 'misi') {
            $data['misi'] = $this->input->post('misi');
        }

        $where = array('id' => $id);
        $this->m_visimisi->update($where, $data, $table);
        redirect('index.php/TentangKamiController/dashboardVisiMisi');
    }
    public function edit($id, $table)
    {
        $where = array('id' => $id);
        $data['visi'] = $this->m_visimisi->edit($where, $table)->result();
        $data['misi'] = $this->m_visimisi->edit($where, $table)->result();

        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        if ($table === 'visi') {
            $this->load->view('/templates/dashboard/database/visi_misi/edit_visi', $data);
        } elseif ($table === 'misi') {
            $this->load->view('/templates/dashboard/database/visi_misi/edit_misi', $data);
        }
        $this->load->view('/templates/dashboard/footer');
    }
    public function editProfil($id)
    {
        $where = array('id' => $id);
        $data['profil_sekolah'] = $this->m_profilSekolah->edit($where, 'profil_sekolah')->result();

        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/profil_sekolah/edit', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function updateProfil()
    {
        $id = $this->input->post('id');
        $deskripsi = $this->input->post('deskripsi');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/Resource/profil_sekolah';
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
            'deskripsi' => $deskripsi,
            'foto' => $foto,
        );

        $where = array(
            'id' => $id
        );

        $this->m_profilSekolah->update($where, $data, 'profil_sekolah');
        redirect('TentangKamiController/dashboardProfil');
    }

    public function tambah($table)
    {

        $data = array();

        if ($table === 'visi') {
            $data['visi'] = $this->input->post('visi');
        } elseif ($table === 'misi') {
            $data['misi'] = $this->input->post('misi');
        }

        $this->m_visimisi->input($data, $table);
        redirect('index.php/TentangKamiController/dashboardVisiMisi');
    }
}
