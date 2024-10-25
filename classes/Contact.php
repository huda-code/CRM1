<?php
class Contact {
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;

    public function __construct($id, $first_name, $last_name, $email, $phone_number) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->phone_number = $phone_number;
    }
}
?>
