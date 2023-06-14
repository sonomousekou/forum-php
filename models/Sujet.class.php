<?php

class Sujet
{
    private $id;
    private $nom;
    private $description;
    private $auteur;
    private $categorie;
    private $created;
    private $updated;

    public function __construct($id, $nom, $description, $auteur, $categorie, $created, $updated)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->auteur = $auteur;
        $this->categorie = $categorie;
        $this->created = $created;
        $this->updated = $updated;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
}
