<?php
class Institution {
    public $id;
    public $name;
    public $address;
    public $phone_number;

    public function __construct($id, $name, $address, $phone_number) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->phone_number = $phone_number;
    }
}
?>
