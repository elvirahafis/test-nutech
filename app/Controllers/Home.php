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
    public function editproduct()
    {
        $nama_product = $this->request->uri->getSegment(2);
        $data['nama_product'] = $nama_product;
        return view('EditProduct',$data);
    }
     public function tambahdataproduct()
    {
        $response = new \stdClass();
        $muser = new HomeModel();
		$email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $cek = $muser->get_data($email, $password);
        
        if ($cek)
            {
                // $response->login = $cek;
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
                // $response->login = $cek;
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
