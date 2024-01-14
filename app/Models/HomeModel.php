<?php namespace App\Models;
use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'produck';
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
    public function simpanproduct($data,$id)
    {
        return $this->db->table($this->table)
            ->where(array('nama_product'=> $id))
            ->update($data);
            // ->get()->getRowArray();
        // $builder = $this->db->table('produck');
        // return $builder->insert($data);
    }
    public function simpandataproduct($data)
    {
        $builder = $this->db->table('produck');
        return $builder->insert($data);
    }
    public function deleteproduct($id)
    {
        $builder = $this->db->table('produck');
        return $builder->delete(array('nama_product'=> $id));
    }
    public function get_kategoriproduct()
    {
        return $this->db->table('kategori_produk')
             ->get()->getResult();
    }
	//--------------------------------------------------------------------

}