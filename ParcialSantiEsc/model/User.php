<?php

namespace model;

 class User{

    private $name;
    private $dni;
    private $birthdate;
    private $email;
    private $pass;

    function __construct($name,$dni,$birthdate,$email,$pass)
    {
        $this->name=$name;
        $this->dni=$dni;
        $this->birthdate=$birthdate;
        $this->email=$email;
        $this->pass=$pass;



    }

    public function getName()
    {
        return $this->name;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->pass;
    }

    public function setName($name)
    {
        $this->name=$name;
    }
    public function setDni($dni)
    {
        $this->dni=$dni;
    }
    public function setBirthday($birthdate)
    {
        $this->birthdate=$birthdate;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function setPass($pass)
    {
        $this->pass=$pass;
    }






 }








?>