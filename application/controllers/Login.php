<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('User_model');
    }

	public function index()
	{
        $data['judul'] = 'Login';
		$this->load->view('template/header2', $data);
        $this->load->view('login');
		$this->load->view('template/footer2');
	}

	public function auth(){
        $username = $this->input->post('username',TRUE);
        $password = $this->input->post('password',TRUE);
        $validate = $this->User_model->validate($username,$password);
        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            $id_user  = $data['id_user'];
            $level = $data['level'];
            $sesuser = array(
                'id_user'  => $id_user,
                'username'  => $username,
                'level'     => $level,
                'user_logged_in' => TRUE
            );
            $this->session->set_userdata($sesuser);
            redirect('User');
        }else{
            echo $this->session->set_flashdata('notif','Username atau Password salah !');
            redirect('Login');
		}
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('Login');
    }

}
