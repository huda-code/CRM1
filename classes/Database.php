<?php
class Database {
    private $host = 'localhost';
    private $user = 'root'; // Change this if necessary
    private $pass = ''; // Change this if necessary
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
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() {
        return $this->stmt->execute();
    }

    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
