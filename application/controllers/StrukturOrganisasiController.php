<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StrukturOrganisasiController extends CI_Controller
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
        $data['struktur_organisasi'] = $this->m_strukturOrganisasi->tampil_data()->result();
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/struktur_organisasi', $data);

        $this->load->view('/templates/landing/footer');
    }
    public function dashboard()
    {
        $data['struktur_organisasi'] = $this->m_strukturOrganisasi->tampil_data()->result();
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
        $data['struktur_organisasi'] = $this->m_strukturOrganisasi->edit($where, 'struktur_organisasi')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/struktur_organisasi/edit', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        // $nama_kepsek = $this->input->post('nama_kepsek');
        // $foto = $_FILES['foto'];
        // $sambutan = $this->input->post('sambutan');
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $jabatan = $this->input->post('jabatan');
        $status = $this->input->post('status');
        $mata_pelajaran = $this->input->post('mata_pelajaran');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $email = $this->input->post('email');
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
            'status' => $status,
            'mata_pelajaran' => $mata_pelajaran,
            'jenis_kelamin' => $jenis_kelamin,
            'email' => $email,
            'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->m_strukturOrganisasi->update($where, $data, 'sambutan');
        redirect('index.php/StrukturOrganisasiController/index');
    }
    public function tambah()
    {
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $jabatan = $this->input->post('jabatan');
        $status = $this->input->post('status');
        $mata_pelajaran = $this->input->post('mata_pelajaran');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $email = $this->input->post('email');
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
            'status' => $status,
            'mata_pelajaran' => $mata_pelajaran,
            'jenis_kelamin' => $jenis_kelamin,
            'email' => $email,
            'foto' => $foto
        );

        $this->m_strukturOrganisasi->input($data);
        redirect('index.php/StrukturOrganisasiController/dashboard');
    }
}
