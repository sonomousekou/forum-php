<?php

class Reponse
{
    private $id;
    private $question;
    private $contenu;
    private $auteur;
    private $createdAt;

    public function __construct($id, $question, $contenu, $auteur, $createdAt)
    {
        $this->id = $id;
        $this->question = $question;
        $this->contenu = $contenu;
        $this->auteur = $auteur;
        $this->createdAt = $createdAt;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function setQuestion($question)
    {
        $this->question = $question;
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
