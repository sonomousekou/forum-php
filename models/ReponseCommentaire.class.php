<?php

class ReponseCommentaire
{
    private $id;
    private $reponse;
    private $contenu;
    private $auteur;
    private $createdAt;

    public function __construct($id, $reponse, $contenu, $auteur, $createdAt)
    {
        $this->id = $id;
        $this->reponse = $reponse;
        $this->contenu = $contenu;
        $this->auteur = $auteur;
        $this->createdAt = $createdAt;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getReponse()
    {
        return $this->reponse;
    }

    public function setReponse($reponse)
    {
        $this->reponse = $reponse;
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
