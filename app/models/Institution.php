<?php
require_once '../classes/Database.php';

class Institution {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllInstitutions() {
        $this->db->query("SELECT * FROM institutions");
        return $this->db->resultSet();
    }

    public function addInstitution($data) {
        $this->db->query("INSERT INTO institutions (name, address, phone) VALUES (:name, :address, :phone)");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':phone', $data['phone']);
        return $this->db->execute();
    }
}
