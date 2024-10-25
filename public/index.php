<?php
require_once '../app/controllers/HomeController.php';

$controller = new HomeController();

// Determine which action to perform
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($action == 'addContact') {
    $controller->addContact();
} elseif ($action == 'addInstitution') {
    $controller->addInstitution();
} else {
    $controller->index();
}
