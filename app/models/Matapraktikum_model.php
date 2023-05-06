<?php

class Matapraktikum_Model {

    private $table = 'matapraktikum';
    private $db;//untuk menampung koneksi ke database

     public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllMatapraktikum()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resulSet();
    }
   
    public function getMatapraktikum($id_matapraktikum)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_matapraktikum=:id_matapraktikum');
        $this->db->bind('id_matapraktikum', $id_matapraktikum);
    
        return $this->db->single();
    }

    public function tambahMatapraktikum($data)
    {
        $query = "INSERT INTO matapraktikum
                    VALUES
                    ('',:kode_mp, :matapraktikum, :jenis_mp, :biaya)";

        $this->db->query($query);
        $this->db->bind('kode_mp', $data['kode_mp']);
        $this->db->bind('matapraktikum', $data['matapraktikum']);
        $this->db->bind('jenis_mp', $data['jenis_mp']);
        $this->db->bind('biaya', $data['biaya']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusMatapraktikum($id_matapraktikum){
        $query = "DELETE FROM registrasi WHERE id_matapraktikum = :id_matapraktikum";
        $this->db->query($query);
        $this->db->bind('id_matapraktikum', $id_matapraktikum);
        $this->db->execute();

        $query = "DELETE FROM matapraktikum WHERE id_matapraktikum = :id_matapraktikum";
        $this->db->query($query);
        $this->db->bind('id_matapraktikum', $id_matapraktikum);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function edit( $kode_mp, $matapraktikum, $jenis_mp, $biaya, $id_matapraktikum){
        
            $query = "UPDATE matapraktikum SET kode_mp = :kode_mp, matapraktikum = :matapraktikum, jenis_mp = :jenis_mp, biaya = :biaya WHERE id_matapraktikum = :id_matapraktikum";
            
            
            $this->db->query($query);
            
            $this->db->bind('kode_mp', $kode_mp);
            $this->db->bind('id_matapraktikum', $id_matapraktikum);
            $this->db->bind('matapraktikum', $matapraktikum);
            $this->db->bind('jenis_mp', $jenis_mp);
            $this->db->bind('biaya', $biaya);
            
            $this->db->execute();
            return $this->db->rowCount();
    }

}
