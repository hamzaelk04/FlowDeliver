<?php
namespace App\Entity;
class User
{
    private string $role;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $password;
    private string $city;

    // public function __construct($firstname, $lastname, $email, $password, $city)
    // {
    //     $this->firstname = $firstname;
    //     $this->lastname = $lastname;
    //     $this->email = $email;
    //     $this->password = $password;
    //     $this->city = $city;
    // }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}