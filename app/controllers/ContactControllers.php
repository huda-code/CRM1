<?php
class ContactController {
    private $contactModel;

    public function __construct() {
        $this->contactModel = new Contact(new Database());
    }

    public function index() {
        $contacts = $this->contactModel->getAllContacts();
        require '../app/views/home.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
            ];
            $this->contactModel->addContact($data);
            header('Location: index.php');
        }
        require '../app/views/add_contact.php';
    }
}
