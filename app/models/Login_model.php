<?php

class Login_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($username, $password, $role)
    {
        $this->db->query("SELECT * FROM user WHERE username = :username AND password = :password AND role = :role");
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->bind('role', $role);

        
        return $this->db->resulSet();
    }
}

