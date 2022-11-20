<?php

//|||| Validator methods should return either true or false |||||//

class Validator extends User {
    
    public function check_input_empty() {
        $empty = false;

        if(empty($this->username) === true || empty($this->password) === true) {
            $empty = true;
        }

        return $empty;
    }


    public function check_username_exists() {
        $exists = false;

        $sql = "SELECT username FROM User WHERE username = '$this->username'";
        $result = mysqli_query($this->conn, $sql)->num_rows;

        if($result !== 0) {
            $exists = true;
        }

        return $exists;
    }


    public function check_credentials() {
        $auth = false;

        $sql = "SELECT username, password FROM User WHERE username = '$this->username' AND password = '$this->password'";
        $result = mysqli_query($this->conn, $sql)->num_rows;

        if($result === 1) {
            $auth = true;
        }

        return $auth;
    }

}