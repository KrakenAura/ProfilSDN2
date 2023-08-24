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
        $data['artikel'] = $this->m_artikel->tampil_data()->result();
        $data['hero'] = $this->m_hero->tampil_data('Artikel');
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/artikel/artikel', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function artikel($id)
    {

        //$data['artikel'] = $this->m_artikel->tampil_data()->result();
        $this->load->model('m_artikel');
        $artikel = $this->m_artikel->detail_data($id);
        $data['artikel'] = $artikel;
        $data['hero'] = $this->m_hero->tampil_data('Artikel');
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/artikel/isiArtikel', $data);
        $this->load->view('/templates/landing/footer');
    }
}
