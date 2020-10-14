<?php
class User_model extends CI_Model{

  public function validate($username,$password)
  {
      $this->db->where('username',$username);
      $this->db->where('password',$password);
      $result = $this->db->get('user',1);
      return $result;
  }

  public function getSemuaUser()
  {
      $query = $this->db->query("SELECT * FROM user");
      return $query->result_array();
  }

  public function getFoto($id_user)
  {
    $data['foto'] = $this->db->query("SELECT foto FROM user WHERE id_user='$id_user'")->result_array();
    foreach ($data['foto'] as $row) :
        $foto = $row['foto'];
    endforeach;
    return $foto;
  }

  public function tambahUser($data)
  {
      $result = $this->db->insert('user', $data);
      if ($result) {
            return true;
        } else {
            return false;
        }
  }

  public function hapusUser($id_user)
  {
      $this->db->where('id_user', $id_user);
      $this->db->delete('user');
      if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }  
  }

  public function editUser($id_user, $data)
  {
      $this->db->where('id_user', $id_user);
      $this->db->update('user', $data);
      if ($this->db->affected_rows() > 0) {
          return true;
      } else {
          return false;
      }    
  }

}

?>