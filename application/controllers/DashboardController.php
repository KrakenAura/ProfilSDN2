<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
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
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/index');
        $this->load->view('/templates/dashboard/footer');
    }
    public function sambutan()
    {
        $data['sambutan'] = $this->m_sambutan->tampil_data()->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/sambutan', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function profil()
    {
        $this->load->model('m_auth');
        $data['auth'] = $this->m_auth->detail_data();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/account', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    // Controller method
    public function auth()
    {
        $this->load->model('m_auth');
        $data['auth'] = $this->m_auth->detail_data();

        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/login', $data);
        $this->load->view('/templates/landing/footer');
    }





    // Controller method to update the profile
    public function update_profile()
    {
        $username = $this->input->post('username');

        $this->load->model('m_auth');
        $this->m_auth->update_username($username);

        redirect('/DashboardController/index');
    }

    // Controller method to update the password
    public function update_password()
    {
        $new_password = $this->input->post('new_password');

        $this->load->model('m_auth');
        $this->m_auth->update_password($new_password);

        redirect('/DashboardController/index');
    }
}
