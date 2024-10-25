<?php
require_once 'classes/Contact.php';

$contact = new Contact(1, 'John', 'Doe', 'john@example.com', '123-456-7890');
echo "Contact: " . $contact->first_name . " " . $contact->last_name . " - " . $contact->email;
?>
<?php
require_once 'classes/Institution.php';

$institution = new Institution(1, 'ABC Corp', '123 Main St', '987-654-3210');
echo "Institution: " . $institution->name . " - " . $institution->phone_number;
?>
