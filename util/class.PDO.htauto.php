<?php

class PdoHtauto
{
    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=htauto';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $monPdoHtauto = null;

    private function __construct()
    {
        try {
            PdoHtauto::$monPdo = new PDO(
                PdoHtauto::$serveur . ';' . PdoHtauto::$bdd,
                PdoHtauto::$user,
                PdoHtauto::$mdp
            );
            PdoHtauto::$monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }

    public static function getPdoHtauto()
    {
        if (PdoHtauto::$monPdoHtauto == null) {
            PdoHtauto::$monPdoHtauto = new PdoHtauto();
        }
        return PdoHtauto::$monPdoHtauto;
    }

    public function getLesVoitures()
    {
        $req = "select * from voitures";
        $res = PdoHtauto::$monPdo->prepare($req);
        $res->execute();

        $lesLignes = $res->fetchAll(PDO::FETCH_ASSOC);

        return $lesLignes;
    }
    
    public function verifConnexion($email, $mdp)
    {
        // Préparez la requête SQL pour sélectionner l'utilisateur avec l'e-mail et le mot de passe fournis
        $req = "SELECT * FROM users WHERE email = :email AND mdp = :mdp";
        $stmt = PdoHtauto::$monPdo->prepare($req);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $stmt->execute();
    
        // Récupérez l'utilisateur à partir du résultat de la requête
        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // Retournez l'utilisateur s'il existe, sinon retournez null
        return $utilisateur ? $utilisateur : null;
    }
    
    public function modifVoiture($modele, $marque, $categorie, $descrip, $prix, $photo,$idVoiture) :void{
        $req = " UPDATE voitures SET modele = :modele, marque = :marque, categorie = :categorie, descrip = :descrip, prix = :prix, photo = :photo WHERE idVoiture = :idVoiture";
        $stmt = PdoHtauto::$monPdo->prepare($req);
        $stmt->bindParam(':idVoiture', $idVoiture, PDO::PARAM_STR);

        $stmt->bindParam(':modele', $modele, PDO::PARAM_STR);
        $stmt->bindParam(':marque', $marque, PDO::PARAM_STR);
        $stmt->bindParam(':categorie', $categorie, PDO::PARAM_STR);
        $stmt->bindParam(':descrip', $descrip, PDO::PARAM_STR);
        $stmt->bindParam(':prix', $prix, PDO::PARAM_INT);
        $stmt->bindParam(':photo', $photo, PDO::PARAM_STR);
        $stmt->execute();

    }

    public function getSelectionVoitures ($idVoiture){
        $req = "SELECT * FROM voitures WHERE idVoiture = :id";
        $stmt = PdoHtauto::$monPdo->prepare($req);
        $stmt->bindParam(':id', $idVoiture, PDO::PARAM_STR);
        $stmt->execute();

        $lesLignes = $stmt->fetchAll();
        return $lesLignes;

    }
}