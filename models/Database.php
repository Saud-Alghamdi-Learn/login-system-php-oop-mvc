<?php

class Database {

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db_name = "login_system";

    public function connect() {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
        return $conn;
    }

}