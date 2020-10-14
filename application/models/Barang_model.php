<?php
class Barang_model extends CI_Model{

  public function getSemuaBarang()
  {
      $query = $this->db->query("SELECT * FROM barang");
      return $query->result_array();
  }

  public function getBarangJenis($jenis)
  {
      $query = $this->db->query("SELECT * FROM barang WHERE jenis_barang='$jenis' ");
      return $query->result_array();
  }

  public function getFoto($id_barang)
  {
    $data['foto'] = $this->db->query("SELECT foto FROM barang WHERE id_barang='$id_barang'")->result_array();
    foreach ($data['foto'] as $row) :
        $foto = $row['foto'];
    endforeach;
    return $foto;
  }

  public function getJumlah($id_barang)
  {
    $data['jumlah'] = $this->db->query("SELECT jumlah FROM barang WHERE id_barang='$id_barang'")->result_array();
    foreach ($data['jumlah'] as $row) :
        $jumlah = $row['jumlah'];
    endforeach;
    return $jumlah;
  }

  public function getJumlahBarang()
  {
    $data['jumlah'] = $this->db->query("SELECT sum(jumlah) as jumlah FROM barang")->result_array();
    foreach ($data['jumlah'] as $row) :
        $jumlah = $row['jumlah'];
    endforeach;
    return $jumlah;
  }

  public function getJumlahJenis($jenis)
  {
    $data['jumlah'] = $this->db->query("SELECT sum(jumlah) as jumlah FROM barang WHERE jenis_barang='$jenis'")->result_array();
    foreach ($data['jumlah'] as $row) :
        $jumlah = $row['jumlah'];
    endforeach;
    return $jumlah;
  }

  public function tambahBarang($data)
  {
      $result = $this->db->insert('barang', $data);
      if ($result) {
            return true;
        } else {
            return false;
        }
  }

  public function hapusBarang($id_barang)
  {
      $this->db->where('id_barang', $id_barang);
      $this->db->delete('barang');
      if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }  
  }

  public function editBarang($id_barang, $data)
  {
      $this->db->where('id_barang', $id_barang);
      $this->db->update('barang', $data);
      if ($this->db->affected_rows() > 0) {
          return true;
      } else {
          return false;
      }    
  }

}

?>