<?php

class SujetController {
    // ...

    // Méthode pour créer un sujet
    public function createSujet($nom, $description, $auteurId, $categorieId) {
        // Créez une nouvelle instance de la classe Sujet
        $sujet = new Sujet();
        
        // Définissez les propriétés du sujet
        $sujet->setNom($nom);
        $sujet->setDescription($description);
        $sujet->setAuteurId($auteurId);
        $sujet->setCategorieId($categorieId);
        
        // Appelez la méthode save() de la classe Sujet pour enregistrer le sujet dans la base de données
        $result = $sujet->save();
        
        if ($result) {
            // Le sujet a été créé avec succès
            // Traitez le résultat et retournez une réponse appropriée (ex: identifiant du sujet)
            return "Le sujet a été créé avec succès. ID du sujet : " . $sujet->getId();
        } else {
            // La création du sujet a échoué
            // Traitez l'erreur et retournez une réponse appropriée
            return "Erreur lors de la création du sujet.";
        }
    }

    // Méthode pour mettre à jour un sujet
    public function updateSujet($id, $nom, $description) {
        // Appelez la méthode getById() de la classe Sujet pour récupérer le sujet depuis la base de données
        $sujet = Sujet::getById($id);

        if ($sujet) {
            // Le sujet a été trouvé
            // Mettez à jour les propriétés du sujet
            $sujet->setNom($nom);
            $sujet->setDescription($description);
            
            // Appelez la méthode save() de la classe Sujet pour mettre à jour le sujet dans la base de données
            $result = $sujet->save();

            if ($result) {
                // Le sujet a été mis à jour avec succès
                // Traitez le résultat et retournez une réponse appropriée (ex: nombre de lignes affectées)
                return "Le sujet a été mis à jour avec succès.";
            } else {
                // La mise à jour du sujet a échoué
                // Traitez l'erreur et retournez une réponse appropriée
                return "Erreur lors de la mise à jour du sujet.";
            }
        } else {
            // Le sujet n'a pas été trouvé
            // Traitez l'absence de sujet et retournez une réponse appropriée
            return "Le sujet n'a pas été trouvé.";
        }
    }

    // Méthode pour supprimer un sujet
    public function deleteSujet($id) {
        // Appelez la méthode getById() de la classe Sujet pour récupérer le sujet depuis la base de données
        $sujet = Sujet::getById($id);

        if ($sujet) {
            // Le sujet a été trouvé
            // Appelez la méthode delete() de la classe Sujet pour supprimer le sujet de la base de données
            $result = $sujet->delete();

            if ($result) {
                // Le sujet a été supprimé avec succès
                // Traitez le résultat et retournez une réponse appropriée (ex: nombre de lignes affectées)
                return "Le sujet a été supprimé avec succès.";
            } else {
                // La suppression du
            // La suppression du sujet a échoué
            // Traitez l'erreur et retournez une réponse appropriée
            return "Erreur lors de la suppression du sujet.";
        }
    }
    }

    // Méthode pour récupérer tous les sujets
    public function getAllSujets() {
        // Appelez la méthode getAll() de la classe Sujet pour récupérer tous les sujets depuis la base de données
        $sujets = Sujet::getAll();

        // Traitez les sujets récupérés et retournez une réponse appropriée (ex: liste des sujets)
        return $sujets;
    }

    // Méthode pour récupérer un sujet par son ID
    public function getSujetById($id) {
        // Appelez la méthode getById() de la classe Sujet pour récupérer le sujet depuis la base de données
        $sujet = Sujet::getById($id);

        if ($sujet) {
            // Le sujet a été trouvé
            // Traitez le sujet récupéré et retournez une réponse appropriée
            return $sujet;
        } else {
            // Le sujet n'a pas été trouvé
            // Traitez l'absence de sujet et retournez une réponse appropriée
            return "Le sujet n'a pas été trouvé.";
        }
    }

    // ...
}
