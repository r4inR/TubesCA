<?php

class Registrasi extends Controller
{
    public function index()
        {       
            $data['judul'] ='List Registrasi'; 
            $data['mp']=$this->model('Matapraktikum_model')->getAllMatapraktikum();            
            $this->view('layout/dashboard');
            $this->view('registrasi/index', $data);
        }

    public function detailRegistrasi($id_matapraktikum)
    {
        $data['judul'] ='List Registrasi';
        $data['regis'] = $this->model('Registrasi_model')->getRegistrasi($id_matapraktikum);
        $data['lunas'] = $this->model('Registrasi_model')->getLunas($id_matapraktikum);
        $data['ditolak'] = $this->model('Registrasi_model')->getTolak($id_matapraktikum);
        $data['blm_lunas'] = $this->model('Registrasi_model')->getBelumLunas($id_matapraktikum);
        $data['setTolak'] = $this->model('Registrasi_model')->setTolak($id_matapraktikum);
        $data['setLunas'] = $this->model('Registrasi_model')->setLunas($id_matapraktikum);

        $this->view('layout/dashboard');
        $this->view('registrasi/detail_registrasi', $data);
    }   
    
}