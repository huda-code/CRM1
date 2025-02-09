<?php
class Database {
    private $host = 'localhost';
    private $user = 'root'; // Change this if needed
    private $pass = ''; // Change this if needed
    private $dbname = 'crm_database';

    private $dbh;
    private $stmt;

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $this->dbh = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($sql) {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function bind($param, $value, $type = null) {
        // Binding logic here
    }

    public function execute() {
        return $this->stmt->execute();
    }

    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
}
