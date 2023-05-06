<?php

class Registrasi_Model {

    private $db;//untuk menampung koneksi ke database

     public function __construct()
    {
        $this->db = new Database;
    }

    //Tabel Detail Registrasi
    public function getRegistrasi($id_matapraktikum){
        $this->db->query('SELECT user.nama_lengkap, matapraktikum.matapraktikum, registrasi.status FROM registrasi 
                            JOIN user ON registrasi.id_user = user.id_user 
                            JOIN matapraktikum ON registrasi.id_matapraktikum = matapraktikum.id_matapraktikum
                            WHERE registrasi.id_matapraktikum = "'.$id_matapraktikum.'"');
        return $this->db->resulSet();
    }

    public function getLunas($id_matapraktikum){
        $status = 'lunas';
        $this->db->query('SELECT user.nama_lengkap, matapraktikum.matapraktikum, registrasi.status
                            FROM registrasi
                            JOIN user ON registrasi.id_user = user.id_user
                            JOIN matapraktikum ON registrasi.id_matapraktikum = matapraktikum.id_matapraktikum
                            WHERE registrasi.id_matapraktikum = "'.$id_matapraktikum.'"
                            AND registrasi.status = "'.$status.'"');
        return $this->db->resulSet();
    }

    public function getTolak($id_matapraktikum){
        $status = 'ditolak';
        $this->db->query('SELECT user.nama_lengkap, matapraktikum.matapraktikum, registrasi.status
                             FROM registrasi
                             JOIN user ON registrasi.id_user = user.id_user
                             JOIN matapraktikum ON registrasi.id_matapraktikum = matapraktikum.id_matapraktikum
                             WHERE registrasi.id_matapraktikum = "'.$id_matapraktikum.'" 
                             AND registrasi.status = "'.$status.'"');
         return $this->db->resulSet();
    }

    public function getBelumLunas($id_matapraktikum){
        $status = 'belum bayar';
       $this->db->query('SELECT user.nama_lengkap, matapraktikum.matapraktikum, registrasi.status
                            FROM registrasi
                            JOIN user ON registrasi.id_user = user.id_user
                            JOIN matapraktikum ON registrasi.id_matapraktikum = matapraktikum.id_matapraktikum
                            WHERE registrasi.id_matapraktikum = "'.$id_matapraktikum.'"
                            AND registrasi.status = "'.$status.'"');
        return $this->db->resulSet();
    }


    //Button Detail Registrasi
    public function setLunas(){
        $status = 'lunas';
        $this->db->query("UPDATE registrasi SET status = '$status' WHERE status = 'ditolak'");
    }

    public function setTolak(){
        $status = 'ditolak';
        $this->db->query("UPDATE registrasi SET status = '$status' WHERE status = :status");
        $this->db->bind('status', $status);
        $this->db->execute();
    }

    public function setBelumBayar(){
        $status = 'belum bayar';
        $this->db->query("UPDATE registrasi SET status = '$status' WHERE status = :status");
        $this->db->bind('status', $status);
        $this->db->execute();
    }
}