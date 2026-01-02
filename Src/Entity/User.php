<?php

class User
{
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $password;
    private string $city;

    public function __construct($firstname, $lastname, $email, $password, $city)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->city = $city;
    }

    
}