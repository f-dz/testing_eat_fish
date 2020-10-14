<?php
class Transaksi_model extends CI_Model{

  public function getSemuaTransaksi()
  {
      $query = $this->db->query("SELECT * FROM transaksi ORDER BY jam DESC , tanggal DESC");
      return $query->result_array();
  }

  public function tambahTransaksi($data)
  {
      $result = $this->db->insert('transaksi', $data);
      if ($result) {
            return true;
        } else {
            return false;
        }
  }

  public function hapusTransaksi($id_transaksi)
  {
      $this->db->where('id_transaksi', $id_transaksi);
      $this->db->delete('transaksi');
      if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }  
  }

  public function editTransaksi($id_transaksi, $data)
  {
      $this->db->where('id_transaksi', $id_transaksi);
      $this->db->update('transaksi', $data);
      if ($this->db->affected_rows() > 0) {
          return true;
      } else {
          return false;
      }    
  }

  public function totalTransaksi($bulan)
  {
        $data['total'] = $this->db->query("SELECT count(id_transaksi) as jumlah FROM transaksi WHERE MONTH(tanggal)=$bulan")->result_array();
        foreach ($data['total'] as $row) :
            $total = $row['jumlah'];
        endforeach;
        return $total;
  }

}

?>