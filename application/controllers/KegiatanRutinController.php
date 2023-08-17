<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KegiatanRutinController extends CI_Controller
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
        $data['kegiatan_rutin'] = $this->m_kegiatanRutin->tampil_data()->result();
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/kegiatan', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function detail($id)
    {
        $this->load->model('m_kegiatanRutin');
        $detail = $this->m_kegiatanRutin->detail_data($id);
        $data['detail'] = $detail;

        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/detail_kegiatan', $data);
        $this->load->view('/templates/landing/footer');
    }
}
