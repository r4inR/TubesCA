<?php

class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = 'Dashboard';
        $data['mp'] = $this->model('Matapraktikum_model')->getAllMatapraktikum();
        $this->view('mahasiswa/mhs', $data);
    }

    public function matapraktikum(){

    }
}