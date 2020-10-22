<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('User_model');
        $this->load->model('Barang_model');
        $this->load->model('Transaksi_model');
        if($this->session->userdata('user_logged_in') !== TRUE){
            redirect('Login');
        }
    }

	public function index()
	{
        $data['judul'] = 'Dashboard';
        $data['total_barang'] = $this->Barang_model->getJumlahBarang();
        $data['total_ikan'] = $this->Barang_model->getJumlahJenis("Ikan");
        $data['total_produk_olahan'] = $this->Barang_model->getJumlahJenis("Produk Olahan");
        $data['total1'] = $this->Transaksi_model->totalTransaksi("01");
        $data['total2'] = $this->Transaksi_model->totalTransaksi("02");
        $data['total3'] = $this->Transaksi_model->totalTransaksi("03");
        $data['total4'] = $this->Transaksi_model->totalTransaksi("04");
        $data['total5'] = $this->Transaksi_model->totalTransaksi("05");
        $data['total6'] = $this->Transaksi_model->totalTransaksi("06");
        $data['total7'] = $this->Transaksi_model->totalTransaksi("07");
        $data['total8'] = $this->Transaksi_model->totalTransaksi("08");
        $data['total9'] = $this->Transaksi_model->totalTransaksi("09");
        $data['total10'] = $this->Transaksi_model->totalTransaksi("10");
        $data['total11'] = $this->Transaksi_model->totalTransaksi("11");
        $data['total12'] = $this->Transaksi_model->totalTransaksi("12");
		$this->load->view('template/header', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');
    }
    
    public function daftar_user()
	{
        $data['judul'] = 'Daftar User';
        $data['user'] = $this->User_model->getSemuaUser();
		$this->load->view('template/header', $data);
		$this->load->view('daftar_user', $data);
		$this->load->view('template/footer');
	}

    public function tambah_user()
    {
        if($this->session->userdata('level')=='manager'){
            $data = array(
                'id_user' => $this->input->post('id_user',TRUE),
                'username' => $this->input->post('username',TRUE),
                'password' => $this->input->post('password',TRUE),
                'level' => $this->input->post('level',TRUE),
            );
            $result = $this->User_model->tambahUser($data);
            if ($result==true) {
                ?>
                <script type="text/javascript">
                    alert("Berhasil menambah data user");
                    window.location.href="<?= filter_var(base_url('User/daftar_user'), FILTER_SANITIZE_URL);?>"
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert("Gagal menambah data user");
                    window.location.href="<?= filter_var(base_url('User/daftar_user'), FILTER_SANITIZE_URL);?>"
                </script>
                <?php
            }
        }
    }

    public function hapus_user($id_user){
        if($this->session->userdata('level')=='manager'){
            $result = $this->User_model->hapusUser($id_user);
            if ($result==true) {
                ?>
                <script type="text/javascript">
                    alert("Berhasil menghapus data user");
                    window.location.href="<?= filter_var(base_url('User/daftar_user'), FILTER_SANITIZE_URL);?>"
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert("Gagal menghapus data user");
                    window.location.href="<?= filter_var(base_url('User/daftar_user'), FILTER_SANITIZE_URL);?>"
                </script>
                <?php
            }
        }
    }

    public function edit_user($id_user)
    {
        if($this->session->userdata('level')=='manager'){
            $data = array(
                'username' => $this->input->post('username',TRUE),
                'password' => $this->input->post('password',TRUE),
                'level' => $this->input->post('level',TRUE),
            );
            $result = $this->User_model->editUser($id_user, $data);

            if ($result==true) {
                ?>
                <script type="text/javascript">
                    alert("Berhasil mengedit data user");
                    window.location.href="<?= filter_var(base_url('User/daftar_user'), FILTER_SANITIZE_URL);?>"
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert("Gagal mengedit data user");
                    window.location.href="<?= filter_var(base_url('User/daftar_user'), FILTER_SANITIZE_URL);?>"
                </script>
                <?php
            }
        }
    }

}
