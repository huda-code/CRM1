<?php
require_once '../app/models/Contact.php';

require_once '../app/models/Institution.php';

class HomeController {
    private $contactModel;
    private $institutionModel;

    public function __construct() {
        $this->contactModel = new Contact();
        $this->institutionModel = new Institution();
    }

    public function index() {
        $contacts = $this->contactModel->getAllContacts();
        $institutions = $this->institutionModel->getAllInstitutions();
        require '../app/views/home.php';
    }

    public function addContact() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
            ];
            $this->contactModel->addContact($data);
            header('Location: index.php'); // Redirect to home after adding
        }
    }

    public function addInstitution() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => $_POST['name'],
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
            ];
            $this->institutionModel->addInstitution($data);
            header('Location: index.php'); // Redirect to home after adding
        }
    }
}
