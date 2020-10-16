<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Barang_model');
        if($this->session->userdata('user_logged_in') !== TRUE){
            redirect('Login');
        }
    }

	public function index()
	{
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->Barang_model->getSemuaBarang();
		$this->load->view('template/header', $data);
		$this->load->view('daftar_barang', $data);
		$this->load->view('template/footer');
    }

    public function tambah_barang()
    {
        if($this->session->userdata('level')=='admin'){
            $jenis_barang = $this->input->post('jenis_barang',TRUE);
            $jenis = "";
            
            if ($jenis_barang=="Ikan") {
                $jenis = "Ikan";
            } else {
                $jenis = "Produk_Olahan";
            }

            $this->load->library('upload');
            $fileExt = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $foto = $jenis.time().'.'.$fileExt;
            $config['upload_path'] = 'assets/foto_barang/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '5000';
            $config['file_name'] = $foto;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto')) {
                $data = array(
                    'id_barang' => $this->input->post('id_barang',TRUE),
                    'nama_barang' => $this->input->post('nama_barang',TRUE),
                    'jenis_barang' => $jenis_barang,
                    'jumlah' => $this->input->post('jumlah',TRUE),
                    'harga' => $this->input->post('harga',TRUE),
                    'deskripsi' => $this->input->post('deskripsi',TRUE),
                    'foto' => $foto,
                );
                $result = $this->Barang_model->tambahBarang($data);
                if ($result==true) {
                ?>
                <script type="text/javascript">
                    alert("Berhasil menambah data barang");
                    window.location.href="<?= base_url('Barang')?>"
                </script>
                <?php
                } else {
                ?>
                <script type="text/javascript">
                    alert("Gagal menambah data barang");
                    window.location.href="<?= base_url('Barang')?>"
                </script>
                <?php
                }
            } else {
                ?>
                <script type="text/javascript">
                    alert("Gagal menggunggah foto dan menambah barang");
                    window.location.href="<?= base_url('Barang')?>"
                </script>
                <?php
            }
        }
    }

    public function hapus_barang($id_barang)
    {
        if($this->session->userdata('level')=='admin'){
            $result = $this->Barang_model->hapusBarang($id_barang);

            if ($result==true) {
                $fotolama = $this->Barang_model->getFoto($id_barang);
                if (file_exists('assets/foto_barang/'.$fotolama)) {
                    unlink('assets/foto_barang/'.$fotolama);
                }
                ?>
                <script type="text/javascript">
                    alert("Berhasil menghapus data barang");
                    window.location.href="<?= base_url('Barang')?>"
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert("Gagal menghapus data barang");
                    window.location.href="<?= base_url('Barang')?>"
                </script>
                <?php
            }
        }
    }

    public function edit_barang($id_barang)
    {
        if($this->session->userdata('level')=='admin'){
            $jenis_barang = $this->input->post('jenis_barang',TRUE);
            $fotolama = $this->Barang_model->getFoto($id_barang);
            $jenis = "";
            
            if ($jenis_barang=="Ikan") {
                $jenis = "Ikan";
            } else {
                $jenis = "Produk_Olahan";
            }

            $this->load->library('upload');
            $fileExt = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $foto = $jenis.time().'.'.$fileExt;
            $config['upload_path'] = 'assets/foto_barang/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '5000';
            $config['file_name'] = $foto;
            $this->upload->initialize($config);
            
            if ($this->upload->do_upload('foto')) {

                if (file_exists('assets/foto_barang/'.$fotolama)) {
                    unlink('assets/foto_barang/'.$fotolama);
                }

                $data = array(
                    'nama_barang' => $this->input->post('nama_barang',TRUE),
                    'jenis_barang' => $jenis_barang,
                    'jumlah' => $this->input->post('jumlah',TRUE),
                    'harga' => $this->input->post('harga',TRUE),
                    'deskripsi' => $this->input->post('deskripsi',TRUE),
                    'foto' => $foto,
                );
                $result = $this->Barang_model->editBarang($id_barang, $data);
                if ($result==true) {
                ?>
                <script type="text/javascript">
                    alert("Berhasil mengedit data barang");
                    window.location.href="<?= base_url('Barang')?>"
                </script>
                <?php
                } else {
                ?>
                <script type="text/javascript">
                    alert("Gagal mengedit data barang");
                    window.location.href="<?= base_url('Barang')?>"
                </script>
                <?php
                }
            } else {
            ?>
            <script type="text/javascript">
                alert("Gagal menggunggah foto dan mengedit barang");
                window.location.href="<?= base_url('Barang')?>"
            </script>
            <?php
            }
        }
    }

    public function update_stok($id_barang)
    {
        if($this->session->userdata('level')=='admin'){
            $jumlah = $this->input->post('jumlah',TRUE);
            $result = $this->Barang_model->editBarang($id_barang, $jumlah);
            if ($result==true) {
                ?>
                <script type="text/javascript">
                    alert("Berhasil memperbarui stok barang");
                    window.location.href="<?= base_url('Barang')?>"
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert("Gagal memperbarui stok barang");
                    window.location.href="<?= base_url('Barang')?>"
                </script>
                <?php
            }
        }
    }

}
