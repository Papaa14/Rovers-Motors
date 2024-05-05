<?php

class signupctrl{
    private $name;
    private $username;
    private $password;
    private $email;
    public function _construct($name,$email,$username,$password){
        $this->$name=$name
        $this->$username=$username
        $this->$email=$email
        $this->$password=$password
    }
}