<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KegiatanRutinController extends CI_Controller
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
        $data['kegiatan_rutin'] = $this->M_kegiatanRutin->tampil_data('kegiatan_rutin')->result();
        $data['hero'] = $this->M_hero->tampil_data('Kegiatan Rutin');
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/kegiatan', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function dashboard()
    {
        $data['kegiatan_rutin'] = $this->M_kegiatanRutin->tampil_data('kegiatan_rutin')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/kegiatan_rutin/kegiatan_rutin', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function detail($id)
    {
        $this->load->model('M_kegiatanRutin');
        $detail = $this->M_kegiatanRutin->detail_data($id);
        $data['detail'] = $detail;
        $data['hero'] = $this->M_hero->tampil_data('Kegiatan Rutin');
        $data['galeri_kegiatan'] = $this->M_kegiatanRutin->tampil_galeri($id);

        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/detail_kegiatan', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function tambah()
    {
        $judul_kegiatan = $this->input->post('judul_kegiatan');
        $deskripsi = $this->input->post('deskripsi');
        $jadwal = $this->input->post('jadwal');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/Resource/kegiatan_rutin';
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
            'judul_kegiatan' => $judul_kegiatan,
            'deskripsi' => $deskripsi,
            'jadwal' => $jadwal,
            'foto' => $foto
        );
        $this->M_kegiatanRutin->input('kegiatan_rutin', $data);
        redirect('KegiatanRutinController/dashboard');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_kegiatanRutin->hapus('kegiatan_rutin', $where);
        redirect('KegiatanRutinController/dashboard');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['kegiatan_rutin'] = $this->M_kegiatanRutin->edit($where, 'kegiatan_rutin')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/kegiatan_rutin/edit', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $judul_kegiatan = $this->input->post('judul_kegiatan');
        $deskripsi = $this->input->post('deskripsi');
        $jadwal = $this->input->post('jadwal');
        $foto = $_FILES['foto'];

        // Check if a file is uploaded
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/Resource/kegiatan_rutin';
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
            $existingData = $this->M_kegiatanRutin->getById($id); // Assuming this method fetches existing data
            $foto = $existingData->foto;
        }

        $data = array(
            'judul_kegiatan' => $judul_kegiatan,
            'deskripsi' => $deskripsi,
            'jadwal' => $jadwal,
            'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->M_kegiatanRutin->update($where, $data, 'kegiatan_rutin');
        redirect('KegiatanRutinController/dashboard');
    }
    public function tambahFoto($id)
    {
        $data['galeri_kegiatan'] = $this->M_kegiatanRutin->tampil_galeri($id);
        $data['id_kegiatan'] = $id;

        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/kegiatan_rutin/tambahFoto', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function inputFoto()
    {
        $id = $this->input->post('id');
        $id_kegiatan = $this->input->post('id_kegiatan');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/Resource/galeri_kegiatan';
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
            'id_kegiatan' => $id_kegiatan
        );
        print_r($data);

        $this->M_kegiatanRutin->input('galeri_kegiatan', $data);
        redirect('KegiatanRutinController/dashboard');
    }
    public function hapusFoto($id)
    {
        $where = array('id' => $id);
        $this->M_kegiatanRutin->hapus('galeri_kegiatan', $where);
        redirect('KegiatanRutinController/dashboard');
    }
}
