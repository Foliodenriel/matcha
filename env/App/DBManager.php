<?php

namespace App;

use PDO;

class DBManager {

    private $conn;
    private $dbName;
    private $file;

    public function getDBName() { return $this->dbName; }
    public function getConn() { return $this->conn; }

    public function __construct(String $file) {

        $this->file = $file;
        if (file_exists($file))
        {
            $json_data = file_get_contents($file);
            $json_obj = json_decode($json_data, true);
            $this->startConn($json_obj);
        }
    }

    protected function startConn($json_obj) {

        if (isset($json_obj['database']) && isset($json_obj['database']['user'], $json_obj['database']['password'], $json_obj['database']['db']))
        {
            $this->dbName = $json_obj['database']['db'];
            $this->conn = new PDO('mysql:host=127.0.0.1;port=3308;dbname=' . $this->dbName, $json_obj['database']['user'], $json_obj['database']['password']);
        }
    }
}