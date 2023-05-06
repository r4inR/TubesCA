<?php
    class Dashboard extends Controller{
        public function index()
        {       
            $data['judul'] ='Home'; 
            $data['mp']=$this->model('Matapraktikum_model')->getAllMatapraktikum();  
            $this->view('layout/dashboard');
            $this->view('dashboard/index', $data);
        }
    }   