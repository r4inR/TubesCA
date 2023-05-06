<?php
    class Home extends Controller{
        public function index()
        {       
            $data['judul'] ='Home'; 
            $data['mhs'] = $this->model('Matapraktikum_model')->getAllMatapraktikum();             
            $this->view('layout/header', $data);
            $this->view('home/index', $data);
            $this->view('layout/footer');
        }
    }   