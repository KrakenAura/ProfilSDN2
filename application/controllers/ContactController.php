<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactController extends CI_Controller
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
        $data['sosial_media'] = $this->m_contact->tampil_data()->result();
        $this->load->view('/templates/landing/header');
        $this->load->view('/templates/landing/navbar');
        $this->load->view('/templates/landing/contact', $data);
        $this->load->view('/templates/landing/footer');
    }
    public function dashboard()
    {
        $data['sosial_media'] = $this->m_contact->tampil_data()->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/kontak/kontak', $data);
        $this->load->view('/templates/dashboard/footer');
    }
    public function tambah()
    {
        $platform = $this->input->post('platform');
        $kontak = $this->input->post('kontak');
        $link = $this->input->post('link');
        $icon = $_FILES['icon'];
        if ($icon = '') {
        } else {
            $config['upload_path'] = './assets/Resource/iconSosmed';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('icon')) {
                echo "Upload Gagal";
                die();
            } else {
                $icon = $this->upload->data('file_name');
            }
        }
        $data = array(
            'platform' => $platform,
            'kontak' => $kontak,
            'link' => $link,
            'icon' => $icon
        );
        $this->m_contact->input($data);
        redirect('index.php/ContactController/dashboard');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_contact->hapus($where);
        redirect('index.php/ContactController/dashboard');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $platform = $this->input->post('platform');
        $kontak = $this->input->post('kontak');
        $link = $this->input->post('link');
        $icon = $_FILES['icon'];

        if (!empty($_FILES['icon']['name'])) {
            $config['upload_path'] = './assets/Resource/iconSosmed';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('icon')) {
                echo "Upload Gagal";
                die();
            } else {
                $icon = $this->upload->data('file_name');
            }
        } else {
            // No file uploaded, keep the existing value
            $existingData = $this->m_contact->getById($id); // Assuming this method fetches existing data
            $icon = $existingData->icon;
        }

        $data = array(
            'platform' => $platform,
            'kontak' => $kontak,
            'link' => $link,
            'icon' => $icon
        );

        $where = array(
            'id' => $id
        );

        $this->m_contact->update($where, $data, 'sosial_media');
        redirect('index.php/ContactController/dashboard');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['sosial_media'] = $this->m_contact->edit($where, 'sosial_media')->result();
        $this->load->view('/templates/dashboard/header');
        $this->load->view('/templates/dashboard/sidebar');
        $this->load->view('/templates/dashboard/database/kontak/edit', $data);
        $this->load->view('/templates/dashboard/footer');
    }
}
