<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
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
        $data['sambutan'] = $this->m_sambutan->tampil_data()->result();

        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/index',$data);
        $this->load->view('/templates/landing/footer');
        //$this->load->view('/templates/landing/about');
    }
    public function contact()
    {
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/contact');
        $this->load->view('/templates/landing/footer');
        //$this->load->view('/templates/landing/about');
    }
}
