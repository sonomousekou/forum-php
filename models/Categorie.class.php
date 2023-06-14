<?php

class Categorie
{
    private $id;
    private $nom;
    private $description;
    private $image;
    private $created;
    private $updated;
    private $auteur;

    public function __construct($nom, $description, $image, $auteur)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->image = $image;
        $this->auteur = $auteur;
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

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
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

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    // Méthode pour récupérer une catégorie par son ID
    public static function getById($id) {
        // Instanciez une nouvelle connexion à la base de données

        // Exécutez la requête SELECT pour récupérer la catégorie avec l'ID spécifié
        $query = "SELECT * FROM categorie WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Vérifiez si la requête a réussi et si la catégorie a été trouvée
        if ($stmt->rowCount() > 0) {
            // Récupérez les données de la catégorie depuis le résultat de la requête
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Créez une instance de la classe Categorie et affectez les valeurs des propriétés
            $categorie = new Categorie();
            $categorie->id = $row['id'];
            $categorie->nom = $row['nom'];
            $categorie->description = $row['description'];
            $categorie->image = $row['image'];
            $categorie->created = $row['created_at'];
            $categorie->updated = $row['updated_at'];
            $categorie->auteurId = $row['auteur_id'];

            // Retournez la catégorie
            return $categorie;
        } else {
            // La catégorie n'a pas été trouvée, retournez null ou une valeur indiquant l'absence de catégorie
            return null;
        }
    }
}
