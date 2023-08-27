<?php
// class LoginController extends CI_Controller
// {

//     public function index()
//     {

//         $data['admin'] = $this->m_login->login()->result();
//         print_r($data);
//         $this->load->view('templates/dashboard/login', $data);
//     }

//     function aksi_login()
//     {
//         $username = $this->input->post('username');
//         $password = $this->input->post('password');


//         $where = array(
//             'username' => $username,
//             'password' => $password
//         );
//         $cek = $this->m_login->cek_login("admin", $where)->num_rows();
//         if ($cek > 0) {

//             $data_session = array(
//                 'nama' => $username,
//                 'status' => "login"
//             );

//             $this->session->set_userdata($data_session);

//             redirect(base_url("DashboardController/index"));
//         } else {
//             echo '<script type="text/javascript">';
//             echo 'alert("Username dan Password salah!");';
//             echo 'window.location = "' . base_url('LoginController/index') . '"';
//             echo '</script>';
//         }
//     }

//     public function logout()
//     {
//         $this->session->unset_userdata('user_id');
//         $this->session->sess_destroy();
//         redirect(base_url("DashboardController/index"));
//     }
// }
class LoginController extends CI_Controller
{
    public function index()
    {
        $data['admin'] = $this->m_login->login()->result();
        print_r($data);
        $this->load->view('templates/dashboard/login', $data);
    }

    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->m_login->cek_login('admin', $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);

            redirect('DashboardController/index');
        } else {
            $this->session->set_flashdata('error', 'Username dan Password salah!');
            redirect('LoginController/index');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        redirect('DashboardController/index');
    }
}
