<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PrestasiController extends CI_Controller
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
        $data['prestasi'] = $this->m_prestasi->tampil_data('prestasi')->result();
        $data['hero'] = $this->m_hero->tampil_data('Prestasi');
        //$data['galeri_prestasi'] = $this->m_prestasi->tampil_data('galeri_prestasi')->result();

        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/prestasi', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function detail($id)
    {
        $this->load->model('m_prestasi');
        $detail = $this->m_prestasi->detail_data($id);
        $data['detail'] = $detail;
        $data['hero'] = $this->m_hero->tampil_data('Kegiatan Rutin');
        $data['galeri_prestasi'] = $this->m_prestasi->tampil_galeri($id);

        print_r($data['galeri_prestasi']);

        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/detail_prestasi', $data);
        $this->load->view('/templates/landing/footer');
    }
}
