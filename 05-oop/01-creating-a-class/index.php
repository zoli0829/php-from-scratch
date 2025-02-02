<?php

class User
{
    // Properties
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    // Methods
    public function login()
    {
        echo "{$this->name} logged in.";
    }
}

// Instantiate a new object
$user1 = new User("John Doe", "john@gmail.com");

$user1->login();
