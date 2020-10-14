<?php
class Keranjang_model extends CI_Model{

  public function getSemuaKeranjang()
  {
      $query = $this->db->query("SELECT * FROM keranjang");
      return $query->result_array();
  }

  public function tambahKeranjang($data)
  {
      $result = $this->db->insert('keranjang', $data);
      if ($result) {
            return true;
        } else {
            return false;
        }
  }

  public function hapusKeranjang($id_keranjang)
  {
      $this->db->where('id_keranjang', $id_keranjang);
      $this->db->delete('keranjang');
  }

  public function resetKeranjang()
  {
    $this->db->query("DELETE FROM keranjang");
  }

}

?>