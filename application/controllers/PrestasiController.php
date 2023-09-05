<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PrestasiController extends CI_Controller
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
        $data['prestasi'] = $this->M_prestasi->tampil_data('prestasi')->result();
        $data['hero'] = $this->M_hero->tampil_data('Prestasi');
        //$data['galeri_prestasi'] = $this->M_prestasi->tampil_data('galeri_prestasi')->result();

        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/prestasi', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function detail($id)
    {
        $this->load->model('M_prestasi');
        $detail = $this->M_prestasi->detail_data($id);
        $data['detail'] = $detail;
        $data['hero'] = $this->M_hero->tampil_data('Prestasi');
        $data['galeri_prestasi'] = $this->M_prestasi->tampil_galeri($id);

        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/detail_prestasi', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function dashboard()
    {
        $data['prestasi'] = $this->M_prestasi->tampil_data('prestasi')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/prestasi/prestasi', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['prestasi'] = $this->M_prestasi->edit($where, 'prestasi')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/prestasi/edit', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $tingkat = $this->input->post('tingkat');
        $tahun = $this->input->post('tahun');
        $jenis = $this->input->post('jenis');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'nama' => $nama,
            'tingkat' => $tingkat,
            'tahun' => $tahun,
            'jenis' => $jenis,
            'deskripsi' => $deskripsi
        );

        $where = array(
            'id' => $id
        );

        $this->M_prestasi->update($where, $data, 'prestasi');
        redirect('PrestasiController/dashboard');
    }
    public function tambah()
    {
        $nama = $this->input->post('nama');
        $tingkat = $this->input->post('tingkat');
        $tahun = $this->input->post('tahun');
        $jenis = $this->input->post('jenis');
        $deskripsi = $this->input->post('deskripsi');
        $data = array(
            'nama' => $nama,
            'tingkat' => $tingkat,
            'tahun' => $tahun,
            'jenis' => $jenis,
            'deskripsi' => $deskripsi
        );

        $this->M_prestasi->input('prestasi', $data);
        redirect('PrestasiController/dashboard');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_prestasi->hapus('prestasi', $where);
        redirect('PrestasiController/dashboard');
    }
    public function tambahFoto($id)
    {
        $data['galeri_prestasi'] = $this->M_prestasi->tampil_galeri($id);
        $data['id_prestasi'] = $id;

        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/prestasi/tambahFoto', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function inputFoto()
    {
        $id = $this->input->post('id');
        $id_prestasi = $this->input->post('id_prestasi');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/Resource/galeri_prestasi';
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
            'id_prestasi' => $id_prestasi
        );

        $this->M_prestasi->input('galeri_prestasi', $data);
        redirect('PrestasiController/dashboard');
    }
    public function hapusFoto($id)
    {
        $where = array('id' => $id);
        $this->M_prestasi->hapus('galeri_prestasi', $where);
        redirect('PrestasiController/dashboard');
    }
}
