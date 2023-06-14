<?php

class User
{
    private $email;
    private $username;
    private $telephone;
    private $firstName;
    private $lastName;
    private $middleName;
    private $isActive;
    private $isStaff;
    private $createdAt;
    private $updatedAt;
    private $lastDevice;

    public function __construct($email, $username, $telephone, $firstName, $lastName, $middleName, $isActive, $isStaff, $createdAt, $updatedAt, $lastDevice)
    {
        $this->email = $email;
        $this->username = $username;
        $this->telephone = $telephone;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->isActive = $isActive;
        $this->isStaff = $isStaff;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->lastDevice = $lastDevice;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    public function isActive()
    {
        return $this->isActive;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    public function isStaff()
    {
        return $this->isStaff;
    }

    public function setIsStaff($isStaff)
    {
        $this->isStaff = $isStaff;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public function getLastDevice()
    {
        return $this->lastDevice;
    }

    public function setLastDevice($lastDevice)
    {
        $this->lastDevice = $lastDevice;
    }
}
