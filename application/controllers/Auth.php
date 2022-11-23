<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('template/auth_footer');
        } else {
            // validasi sukses
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // usernya ada
        if ($user) {
            // jika usernya aktif
            
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('Beranda');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Password Salah</div>');
                    redirect('Auth');
                }
                redirect('Auth');
            }else {
            $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Email tidak terdaftar</div>');
            redirect('Auth');
        }
    }



    public function registrasi()
    {
        $this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[user.email]',
            [
                'is_unique' => 'Email sudah terdaftar'
            ]
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[3]|matches[password2]',
            [
                'matches' => 'Password anda tidak sama!',
                'min_length' => 'Password sangat pendek'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Daftar';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/register', $data);
            $this->load->view('template/auth_footer');
        } else {
            $data = [
                'fullname'             => htmlspecialchars($this->input->post('fullname', true)),
                'email'         => htmlspecialchars($this->input->post('email', true)),
                'password'         => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                )

            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat akun anda sudah terdaftar</div>');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Anda sudah logout</div>');
        redirect('Auth');
    }
}
