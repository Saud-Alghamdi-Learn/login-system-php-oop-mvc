<?php

class ErrorMessage extends User {

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function empty_input() {
        if(empty($this->username)) 
        {
            return "username cannot be empty!";
        } 
        else if(empty($this->password)) 
        {
            return "password cannot be empty!";
        }
    }


    public function incorrect_credentials() {
        return "username or password is incorrect";
    }


    public function already_exists() {
        return "Sorry! " . $this->username . "already exists";
    }

}