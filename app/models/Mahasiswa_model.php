<?php

class Mahasiswa_model{
   private $db;

   public function __construct(){
      $this->db = new Database;
   }

   public function getMp()
   {
      $this->db->query('SELECT * FROM matapraktikum');
      return $this->db->resulSet();
   }
}
// private $table ='mahasiswa';
    // private $db;

    // public function __construct()
    // {
    //     $this->db = new Database;
    // }
    // public function getAllMahasiswa()
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table);
    //     return $this->db->resulSet();
    // }
    // public function getMahasiswaById($id)
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    //     $this->db->bind('id', $id);
    //     return $this->db->single();
    // }
    