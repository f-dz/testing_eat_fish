<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Transaksi_model');
        $this->load->model('Keranjang_model');
        $this->load->model('Barang_model');
    }

	public function index()
	{
        if($this->session->userdata('user_logged_in') !== TRUE){
            redirect('Login');
        } else {
            $data['judul'] = 'Transaksi';
            $data['transaksi'] = $this->Transaksi_model->getSemuaTransaksi();
            $this->load->view('template/header', $data);
            $this->load->view('daftar_transaksi', $data);
            $this->load->view('template/footer');
        }
    }

    public function produk()
	{
        $data['judul'] = 'Produk Eat-Fish';
        $data['ikan'] = $this->Barang_model->getBarangJenis('Ikan');
        $data['produk_olahan'] = $this->Barang_model->getBarangJenis('Produk Olahan');
        $data['keranjang'] = $this->Keranjang_model->getSemuaKeranjang();
		$this->load->view('template/header2', $data);
        $this->load->view('produk');
		$this->load->view('template/footer2');
    }

//--CONTROLLER KERANJANG--//
    public function tambah_keranjang($namabarang, $harga)
    {
        $jumlah = $this->input->post('jumlah',TRUE);
        $total_harga = $jumlah * $harga;
        $data = array(
            'id_keranjang' => $this->input->post('id_keranjang',TRUE),
            'nama_barang' => $namabarang,
            'jumlah' => $jumlah,
            'total_harga' => $total_harga,
        );
       $this->Keranjang_model->tambahKeranjang($data);
       redirect('Transaksi/produk'); 
    }

    public function hapus_keranjang($id_keranjang)
    {
        $this->Keranjang_model->hapusKeranjang($id_keranjang);
        redirect('Transaksi/produk');
    }

    public function reset_keranjang()
    {
        $this->Keranjang_model->resetKeranjang();
        redirect('Transaksi/produk');
    }

//--CONTROLLER TRANSAKSI--//
    public function tambah_transaksi()
    {
        $tanggal = date("Y-m-d");
        $jam = date("h:i:s");
        $data = array(
            'id_transaksi' => $this->input->post('id_transaksi',TRUE),
            'nama_pembeli' => $this->input->post('nama_pembeli',TRUE),
            'total_harga' => $this->input->post('total_harga',TRUE),
            'jam' => $jam,
            'tanggal' => $tanggal,
            'status' => 'Proses',
        );
        $result = $this->Transaksi_model->tambahTransaksi($data);
        if ($result==true) {
            $this->reset_keranjang();
            ?>
            <script type="text/javascript">
                alert("Berhasil melakukan transaksi");
                window.location.href="<?php echo base_url('Transaksi/produk')?>"
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert("Gagal melakukan transaksi");
                window.location.href="<?php echo base_url('Transaksi/produk')?>"
            </script>
            <?php
        }
    }

    public function update_status($id_transaksi)
    {
        if($this->session->userdata('user_logged_in') !== TRUE){
            redirect('Login');
        } else {
            if($this->session->userdata('level')=='admin'){
                $data = array(
                    'status' => 'Selesai',
                );
                $result = $this->Transaksi_model->editTransaksi($id_transaksi, $data);
                if ($result==true) {
                    ?>
                    <script type="text/javascript">
                        alert("Berhasil memperbarui status");
                        window.location.href="<?php echo base_url('Transaksi')?>"
                    </script>
                    <?php
                } else {
                    ?>
                    <script type="text/javascript">
                        alert("Gagal memperbarui status");
                        window.location.href="<?php echo base_url('Transaksi')?>"
                    </script>
                    <?php
                }
            }
        }
    }

    public function update_stok($id_barang, $jumlahbeli)
    {
        $jumlah = $this->Barang_model->getJumlah($id_barang) - $jumlahbeli;
        $data = array(
            'jumlah' => $jumlah,
        );
        $this->Transaksi_model->editTransaksi($id_barang, $data);
    }  

}
