<?php
require_once '../classes/Database.php';

class Contact {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllContacts() {
        $this->db->query("SELECT * FROM contacts");
        return $this->db->resultSet();
    }

    public function addContact($data) {
        $this->db->query("INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        return $this->db->execute();
    }
}
