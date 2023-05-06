<?php

class MataPraktikum extends Controller{
    public function index(){
        $data['judul'] = 'List Matapraktikum';
        $data['mp'] = $this->model('Matapraktikum_model')->getAllMatapraktikum();
        $this->view('layout/dashboard');
        $this->view('matapraktikum/index', $data);
    }
    public function tambahData()
    {
        // var_dump($_POST);
        if ($this->model('Matapraktikum_model')->tambahMatapraktikum($_POST) > 0) {
            header('Location: ' . BASEURL . '/matapraktikum');
            exit;
        }else{
            header('Location: ' . BASEURL . '/matapraktikum');
            exit;
        }
    }

    public function detail($id_matapraktikum)
    {
        $data['mhs'] = $this->model('Matapraktikum_model')->getMatapraktikum($id_matapraktikum);
        $this->view('layout/matapraktikum', $data); 
    }
    

    public function hapus($id_matapraktikum)
    {
        $this->model('Matapraktikum_model')->hapusMatapraktikum($id_matapraktikum);
        Flasher::setFlash('Berhasil', 'Data berhasil dihapus', 'success');
        header('Location: ' . BASEURL . '/matapraktikum');
        exit();
    }

    public function edit($id_matapraktikum){

        $kode_mp = $_POST['kode_mp'];
        $matapraktikum = $_POST['matapraktikum'];
        $jenis_mp = $_POST['jenis_mp'];
        $biaya = $_POST['biaya'];

        $data['mp'] = $this->model('Matapraktikum_model')->edit($kode_mp, $matapraktikum, $jenis_mp, $biaya, $id_matapraktikum);
        var_dump($_POST['matapraktikum']);
        var_dump($_POST['kode_mp']);

        header('location: ' . BASEURL . '/matapraktikum');
        exit();
    }
}



        // echo $biaya;
        // echo $jenis_mp;
        // echo $matapraktikum;
        // echo $kode_mp;
        // header('location: ' . BASEURL . '/matapraktikum');