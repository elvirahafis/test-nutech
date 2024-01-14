<?php

namespace App\Controllers;
use App\Models\HomeModel;
use App\Models\productModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function home()
    {
        return view('home');
    }
    public function tambahproduct()
    {
        return view('TambahProduct');
    }
     public function profil()
    {
        return view('profil');
    }
    public function getKategori()
    {
        $response = new \stdClass();
        $muser = new HomeModel();
        $result = $muser->get_kategoriproduct();
        // $ListProduct = $result->result_array();
        // print_r($result);
         if ($result)
            {
                $response->data = $result;
                $response->pesan = 'Login Berhasil';
                $response->kode = 'SC';
                $response->status = 1;
                $response->length = 1;
                
            } else {
                $response->pesan = 'Akun Salah';
                $response->kode = 'GL';
                $response->status = 0;
            }
        header('Content-Type: application/json');
		echo json_encode($response);
    }
    public function editproduct()
    {
        $nama_product = $this->request->uri->getSegment(2);
        $data['nama_product'] = $nama_product;
        return view('EditProduct',$data);
    }
    public function deleteProduck()
    {
        // return view('profil');
        $response = new \stdClass();
        $id= $this->request->getPost('namabarang');
        // var_dump($id);
        $news = new HomeModel();
        $cek=$news->deleteproduct($id);  
        //  var_dump($cek);      
        if ($cek)
            {
                // $response->login = $cek;
                $response->pesan = 'Berhasil';
                $response->kode = 'SC';
                $response->status = 1;
                
            } else {
                $response->pesan = ' Salah';
                $response->kode = 'GL';
                $response->status = 0;
            }
        header('Content-Type: application/json');
		echo json_encode($response);
    }
    public function editproddata()
    {
        $response = new \stdClass();
        $news = new HomeModel();

        $data = array(
                'nama_product' => $this->request->getPost('namabarang'),
                'kategori_product' => $this->request->getPost('kategori'),
                'harga_beli' => $this->request->getPost('hargabeli'),
                'harga_jual' => $this->request->getPost('hargajual'),
                'stock' => $this->request->getPost('stock')
        );
        // var_dump($data);
        $cek=$news->simpandataproduct($data);
        // var_dump($this->db->last_query());
        if ($cek)
            {
                // $response->login = $cek;
                $response->pesan = 'Berhasil';
                $response->kode = 'SC';
                $response->status = 1;
                
            } else {
                $response->pesan = ' Salah';
                $response->kode = 'GL';
                $response->status = 0;
            }
        header('Content-Type: application/json');
		echo json_encode($response);
    }
     public function editdataprod()
    {
        $response = new \stdClass();
        $news = new HomeModel();
        $id=$this->request->getPost('namabarang');
        $data = array(
                'nama_product' => $this->request->getPost('namabarang'),
                'kategori_product' => $this->request->getPost('kategori'),
                'harga_beli' => $this->request->getPost('hargabeli'),
                'harga_jual' => $this->request->getPost('hargajual'),
                'stock' => $this->request->getPost('stock')
        );
        // var_dump($data);
        $cek=$news->simpanproduct($data,$id);
        // var_dump($this->db->last_query());
        if ($cek)
            {
                // $response->login = $cek;
                $response->pesan = 'Berhasil';
                $response->kode = 'SC';
                $response->status = 1;
                
            } else {
                $response->pesan = ' Salah';
                $response->kode = 'GL';
                $response->status = 0;
            }
        header('Content-Type: application/json');
		echo json_encode($response);
		//  return view('TambahProduct');

    }
    public function getListProduct()
    {
        $response = new \stdClass();
        $muser = new HomeModel();
        $result = $muser->get_product();
        // $ListProduct = $result->result_array();
        // print_r($result);
         if ($result)
            {
                $response->data = $result;
                $response->pesan = 'Login Berhasil';
                $response->kode = 'SC';
                $response->status = 1;
                $response->length = 1;
                
            } else {
                $response->pesan = 'Akun Salah';
                $response->kode = 'GL';
                $response->status = 0;
            }
        header('Content-Type: application/json');
		echo json_encode($response);
    }
    public function editbyproduct()
    {
        //  return view('EditProduct');
        $response = new \stdClass();
        $nama_product = $this->request->getVar('nama_product');
        // $nama_product = $this->request->uri->getSegment(2);
        $muser = new HomeModel();
        $result = $muser->get_byproduct($nama_product);
        // $ListProduct = $result->result_array();
         if ($result)
            {
                $response->data = $result;
                $response->pesan = 'Login Berhasil';
                $response->kode = 'SC';
                $response->status = 1;
                $response->length = 1;
                
            } else {
                $response->pesan = $nama_product;
                $response->kode = 'GL';
                $response->status = 0;
            }
        header('Content-Type: application/json');
		echo json_encode($response);
    }
    public function login()
    {
        $response = new \stdClass();
        $muser = new HomeModel();
		$email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $cek = $muser->get_data($email, $password);
        
        if ($cek)
            {
                session()->set('nama', $cek['nama']);
                session()->set('posisi', $cek['posisi']);
                $response->pesan = 'Login Berhasil';
                $response->kode = 'SC';
                $response->status = 1;
                
            } else {
                $response->pesan = 'Akun Salah';
                $response->kode = 'GL';
                $response->status = 0;
            }
        header('Content-Type: application/json');
		echo json_encode($response);
		
    }
}
