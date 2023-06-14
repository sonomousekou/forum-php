<?php

class Question
{
    private $id;
    private $sujet;
    private $tags;
    private $contenu;
    private $auteur;
    private $createdAt;

    public function __construct($id, $sujet, $tags, $contenu, $auteur, $createdAt)
    {
        $this->id = $id;
        $this->sujet = $sujet;
        $this->tags = $tags;
        $this->contenu = $contenu;
        $this->auteur = $auteur;
        $this->createdAt = $createdAt;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSujet()
    {
        return $this->sujet;
    }

    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
