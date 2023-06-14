<?php

class CategorieController {
    // Méthode pour créer une nouvelle catégorie
    public function createCategorie($nom, $description, $image, $auteur_id) {
        // Créez une instance de la classe Categorie avec les données reçues
        $categorie = new Categorie($nom, $description, $image, $auteur_id);

        // Appelez la méthode create() de la classe Categorie pour insérer la catégorie dans la base de données
        $result = $categorie->create();

        if ($result) {
            // La catégorie a été créée avec succès
            // Traitez le résultat et retournez une réponse appropriée (ex: ID de la catégorie créée)
            return "La catégorie a été créée avec succès. ID : " . $categorie->getId();
        } else {
            // La création de la catégorie a échoué
            // Traitez l'erreur et retournez une réponse appropriée
            return "Erreur lors de la création de la catégorie.";
        }
    }

    // Méthode pour récupérer une catégorie par son ID
    public function getCategorieById($id) {
        // Appelez la méthode getById() de la classe Categorie pour récupérer la catégorie depuis la base de données
        $categorie = Categorie::getById($id);

        if ($categorie) {
            // La catégorie a été trouvée
            // Traitez la catégorie et retournez une réponse appropriée
            return $categorie;
        } else {
            // La catégorie n'a pas été trouvée
            // Traitez l'absence de catégorie et retournez une réponse appropriée
            return "La catégorie n'a pas été trouvée.";
        }
    }

    // Méthode pour mettre à jour une catégorie
    public function updateCategorie($id, $nom, $description, $image, $auteur_id) {
        // Appelez la méthode getById() de la classe Categorie pour récupérer la catégorie depuis la base de données
        $categorie = Categorie::getById($id);

        if ($categorie) {
            // La catégorie a été trouvée
            // Mettez à jour les propriétés de la catégorie avec les nouvelles valeurs
            $categorie->setNom($nom);
            $categorie->setDescription($description);
            $categorie->setImage($image);
            $categorie->setAuteurId($auteur_id);

            // Appelez la méthode update() de la classe Categorie pour mettre à jour la catégorie dans la base de données
            $result = $categorie->update();

            if ($result) {
                // La catégorie a été mise à jour avec succès
                // Traitez le résultat et retournez une réponse appropriée (ex: nombre de lignes affectées)
                return "La catégorie a été mise à jour avec succès.";
            } else {
                // La mise à jour de la catégorie a échoué
                // Traitez l'erreur et retournez une réponse appropriée
                return "Erreur lors de la mise à jour de la catégorie.";
            }
        } else {
            // La catégorie n'a pas été trouvée
            // Traitez l'absence de catégorie et retournez une réponse appropriée
            return "La catégorie n'a pas été trouvée.";
        }
    }

    // Méthode pour supprimer une catégorie
    public function deleteCategorie($id) {
        // Appelez la méthode getById() de la classe Categorie pour récupérer la catégorie depuis la base de données
        $categorie = Categorie::getById($id);

        if ($categorie) {
            // La catégorie a été trouvée
            // Appelez la méthode delete() de la classe Categorie pour supprimer la catégorie de la base de données
            $result = $categorie->delete();

            if ($result) {
                // La catégorie a été supprimée avec succès
                // Traitez le résultat et retournez une réponse appropriée (ex: nombre de lignes affectées)
                return "La catégorie a été supprimée avec succès.";
            } else {
                // La suppression de la catégorie a échoué
                // Traitez l'erreur et retournez une réponse appropriée
                return "Erreur lors de la suppression de la catégorie.";
            }
        } else {
            // La catégorie n'a pas été trouvée
            // Traitez l'absence de catégorie et retournez une réponse appropriée
            return "La catégorie n'a pas été trouvée.";
        }
    }

    // Méthode pour récupérer toutes les catégories
    public function getAllCategories() {
        // Appelez la méthode getAll() de la classe Categorie pour récupérer toutes les catégories depuis la base de données
        $categories = Categorie::getAll();

        // Traitez les catégories et retournez une réponse appropriée (ex: tableau de catégories)
        return $categories;
    }
}