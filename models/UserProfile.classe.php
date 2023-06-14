<?php

class UserProfile
{
    private $uid;
    private $user;
    private $sexe;
    private $dateNaissance;
    private $photo;
    private $background;
    private $bio;
    private $location;
    private $addresse1;
    private $addresse2;
    private $isActive;
    private $createdAt;
    private $updatedAt;
    private $whatsappLine;
    private $facebookLink;
    private $twitterLink;
    private $instagramLink;
    private $youtubeLink;
    private $linkedinLink;

    public function __construct($uid, $user, $sexe, $dateNaissance, $photo, $background, $bio, $location, $addresse1, $addresse2, $isActive, $createdAt, $updatedAt, $whatsappLine, $facebookLink, $twitterLink, $instagramLink, $youtubeLink, $linkedinLink)
    {
        $this->uid = $uid;
        $this->user = $user;
        $this->sexe = $sexe;
        $this->dateNaissance = $dateNaissance;
        $this->photo = $photo;
        $this->background = $background;
        $this->bio = $bio;
        $this->location = $location;
        $this->addresse1 = $addresse1;
        $this->addresse2 = $addresse2;
        $this->isActive = $isActive;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->whatsappLine = $whatsappLine;
        $this->facebookLink = $facebookLink;
        $this->twitterLink = $twitterLink;
        $this->instagramLink = $instagramLink;
        $this->youtubeLink = $youtubeLink;
        $this->linkedinLink = $linkedinLink;
    }

    public function getUid()
    {
        return $this->uid;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function getBackground()
    {
        return $this->background;
    }

    public function getBio()
    {
        return $this->bio;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getAddresse1()
    {
        return $this->addresse1;
    }

    public function getAddresse2()
    {
        return $this->addresse2;
    }

    public function isActive()
    {
        return $this->isActive;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function getWhatsappLine()
    {
        return $this->whatsappLine;
    }

    public function getFacebookLink()
    {
        return $this->facebookLink;
    }

    public function getTwitterLink()
    {
        return $this->twitterLink;
    }

    public function getInstagramLink()
    {
        return $this->instagramLink;
    }

    public function getYoutubeLink()
    {
        return $this->youtubeLink;
    }

    public function getLinkedinLink()
    {
        return $this->linkedinLink;
    }
}
