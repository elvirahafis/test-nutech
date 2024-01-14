<?php
namespace App\Models;

use CodeIgniter\Model;

class productModel extends Model
{
    protected $table      = 'produck';
    protected $primaryKey = 'nama_product';

    protected $returnType     = 'object';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_product', 'kategori_product', 'image', 'harga_beli','harga_jual','stock'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}