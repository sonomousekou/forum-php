<?php

class Role {
    private $id;
    private $name;
    private $description;
    private $permissions;
    
    public function __construct($id, $name, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->permissions = [];
    }
    
    // Méthodes getter et setter pour les propriétés
    
    public function getId() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function getPermissions() {
        return $this->permissions;
    }
    
    public function addPermission($permission) {
        $this->permissions[] = $permission;
    }
    
    public function hasPermission($permission) {
        return in_array($permission, $this->permissions);
    }
}
