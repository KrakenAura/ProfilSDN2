<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EkstrakulikulerController extends CI_Controller
{
    public function index()
    {
        $data['ekstrakulikuler'] = $this->m_ekstrakulikuler->tampil_data('ekstrakulikuler')->result();
        $data['hero'] = $this->m_hero->tampil_data('Ekstrakulikuler');
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/ekstrakulikuler', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function dashboard()
    {
        $data['ekstrakulikuler'] = $this->m_ekstrakulikuler->tampil_data('ekstrakulikuler')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/ekstrakulikuler/ekstrakulikuler', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function detail($id)
    {
        $this->load->model('m_ekstrakulikuler');
        $detail = $this->m_ekstrakulikuler->detail_data($id);
        $data['detail'] = $detail;
        $data['hero'] = $this->m_hero->tampil_data('Ekstrakulikuler');
        $data['galeri_ekstrakulikuler'] = $this->m_ekstrakulikuler->tampil_galeri($id);

        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/detail_ekstrakulikuler', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function tambah()
    {
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $manfaat = $this->input->post('manfaat');
        $jadwal = $this->input->post('jadwal');

        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/Resource/ekstrakulikuler';
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
            'deskripsi' => $deskripsi,
            'manfaat' => $manfaat,
            'jadwal' => $jadwal,
            'foto' => $foto
        );

        $this->m_ekstrakulikuler->input('ekstrakulikuler', $data);
        redirect('index.php/EkstrakulikulerController/dashboard');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_ekstrakulikuler->hapus('ekstrakulikuler', $where);
        redirect('index.php/EkstrakulikulerController/dashboard');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['ekstrakulikuler'] = $this->m_ekstrakulikuler->edit($where, 'ekstrakulikuler')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/ekstrakulikuler/edit', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $manfaat = $this->input->post('manfaat');
        $jadwal = $this->input->post('jadwal');
        $foto = $_FILES['foto'];

        // Get the existing data by ID
        $existingData = $this->m_ekstrakulikuler->getByID($id);

        // Check if a file is uploaded
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/Resource/galeri_ekstrakulikuler';
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
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'jadwal' => $jadwal,
            'manfaat' => $manfaat,
            'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->m_ekstrakulikuler->update($where, $data, 'ekstrakulikuler');
        redirect('index.php/EkstrakulikulerController/dashboard');
    }
    public function tambahFoto($id)
    {
        $data['galeri_ekstrakulikuler'] = $this->m_ekstrakulikuler->tampil_galeri($id);
        $data['id_ekstrakulikuler'] = $id;

        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/ekstrakulikuler/tambahFoto', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function inputFoto()
    {
        $id = $this->input->post('id');
        $id_ekstrakulikuler = $this->input->post('id_ekstrakulikuler');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/Resource/galeri_ekstrakulikuler';
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
            'id' => $id,
            'foto' => $foto,
            'id_ekstrakulikuler' => $id_ekstrakulikuler
        );
        print_r($data);

        $this->m_ekstrakulikuler->input('galeri_ekstrakulikuler', $data);
        redirect('index.php/EkstrakulikulerController/dashboard');
    }
    public function hapusFoto($id)
    {
        $where = array('id' => $id);
        $this->m_ekstrakulikuler->hapus('galeri_ekstrakulikuler', $where);
        redirect('index.php/EkstrakulikulerController/dashboard');
    }
}
