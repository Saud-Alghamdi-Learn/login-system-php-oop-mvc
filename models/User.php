<?php

class User {

    protected $username;
    protected $password;
    protected $conn;


    public function __construct($username, $password, $conn) {
        $this->username = $username;
        $this->password = $password;
        $this->conn = $conn;
    }


    public function register() {

        $register_result = null;

        $validator = new Validator($this->username, $this->password, $this->conn);
        $username_exists = $validator->check_username_exists();
        $input_empty = $validator->check_input_empty();

        if($input_empty === true) 
        {
            $err = new ErrorMessage($this->username, $this->password);
            $register_result = $err->empty_input();
        } 
        else if($username_exists === true) 
        {
            $err = new ErrorMessage($this->username, $this->password);
            $register_result = $err->already_exists();
        } 
        else {
            $sql = "INSERT INTO User(username, password) VALUES('$this->username', '$this->password')";
            mysqli_query($this->conn, $sql);
            $register_result = true;
        }

        return $register_result;
    }


    public function login() {

        $login_result = null;

        $validator = new Validator($this->username, $this->password, $this->conn);
        $credentials_result = $validator->check_credentials();

        if($credentials_result === false) 
        {
            $err = new ErrorMessage($this->username, $this->password);
            $login_result = $err->incorrect_credentials();
        } 
        else {
            session_start();
            $_SESSION['loggedin_user'] = $this->username;
            $login_result = true;
        }

        return $login_result;
    }


    public static function logout() {
        session_destroy();
    }

}