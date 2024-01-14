<?php namespace App\Models;
use CodeIgniter\Model;

class HomeModel extends Model
{
	public function get_data($email, $password)
	{
      return $this->db->table('user')
      ->where(array('username' => $email, 'password' => $password))
      ->get()->getRowArray();
	}
    public function get_product()
    {
    return $this->db->table('produck')
      ->get()->getResult();
    }
     public function get_byproduct($nama_product)
    {
    
    return $this->db->table('produck')
      ->where(array('nama_product' => $nama_product))
      ->get()->getRowArray();
    }
	//--------------------------------------------------------------------

}