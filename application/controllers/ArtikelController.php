<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArtikelController extends CI_Controller
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
        $data['artikel'] = $this->M_artikel->tampil_data()->result();
        $data['hero'] = $this->M_hero->tampil_data('Artikel');
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/artikel/artikel', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function artikel($id)
    {

        //$data['artikel'] = $this->M_artikel->tampil_data()->result();
        $this->load->model('M_artikel');
        $artikel = $this->M_artikel->detail_data($id);
        $data['artikel'] = $artikel;
        $data['hero'] = $this->M_hero->tampil_data('Artikel');
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/artikel/isiArtikel', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function berita()
    {
        $data['artikel'] = $this->M_artikel->tampil_data()->result();
        $data['hero'] = $this->M_hero->tampil_data('Artikel');
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/artikel/berita', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function informasi()
    {
        $data['artikel'] = $this->M_artikel->tampil_data()->result();
        $data['hero'] = $this->M_hero->tampil_data('Artikel');
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/artikel/informasi', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function dashboard()
    {
        $data['artikel'] = $this->M_artikel->tampil_data()->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/artikel/artikel', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['artikel'] = $this->M_artikel->edit($where, 'artikel')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/artikel/edit', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_artikel->hapus('artikel', $where);
        redirect('ArtikelController/dashboard');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $penulis = $this->input->post('penulis');
        $tanggal = $this->input->post('tanggal');
        $isi = $this->input->post('isi');
        $jenis = $this->input->post('jenis');
        $foto = $_FILES['foto'];

        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/Resource/artikel';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        } else {
            $existingData = $this->M_artikel->getById($id); // Assuming this method fetches existing data
            $foto = $existingData->foto;
        }

        $data = array(
            'judul' => $judul,
            'penulis' => $penulis,
            'tanggal' => $tanggal,
            'isi' => $isi,
            'jenis' => $jenis,
            'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->M_artikel->update($where, $data, 'artikel');
        redirect('ArtikelController/dashboard');
    }
}
