<?php

class ContactUs extends Controller{
    public function index(){
        $data['judul'] ='Contact Us';
        $this->view('layout/header', $data);
        $this->view('home/contactUs');
        $this->view('layout/footer');

    }
}