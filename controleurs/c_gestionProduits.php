<?php
if (!isset($_REQUEST['action']))
    $action = 'accueil';
else
    $action = $_REQUEST['action'];


$pdo = PdoHtAuto::getPdoHtAuto();
switch ($action) {
    case 'connexion': {
            include("vues/v_connexion.php");
            break;
        }
    case 'verifConnex': {
   
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST['email'];
                $mdp = $_POST['pass'];
                
                $_SESSION['email'] = $email;
                $pdo = PdoHtauto::getPdoHtauto(); // Utilisation de PdoHtauto
                $utilisateur = $pdo->verifConnexion($email, $mdp); // Appel de la méthode verifConnexion de PdoHtauto
        
                if ($utilisateur) {
                    header('Location: index.php?uc=gestion');
                } else {
                    $message = 'Identifiants incorrects';
                    include("vues/v_connexion.php");
                }
            }
            break;
        }

    case 'ajouter': {
            break;
        }

    case 'supprimerProduit': {
            $unIdProduit = $_REQUEST['id'];
            $supprimerProduit = $pdo->supprimerProduit($unIdProduit);
            break;
        }

    case 'formulaireModifier': {
        include("vues/v_modifier.php");
            break;
        }

    case 'modifierProduit':{
        
            $modele = isset ($_POST['modele']) ? $_POST['modele'] : '';
            $marque = isset ($_POST['marque']) ? $_POST['marque'] : '';
            $categorie = isset ($_POST['categorie']) ? $_POST['categorie'] : '';
            $descrip = isset ($_POST['descrip']) ? $_POST['descrip'] : '';
            $prix = isset ($_POST['prix']) ? $_POST['prix'] : '';
            $photo = isset ($_POST['photo']) ? $_POST['photo'] : '';

            /*
            $modele = 'test';
            $marque = 'test';
            $categorie = 'test';
            $descrip = 'test';
            $prix = 15;
            $photo = 'test';*/

            $idVoiture = $_REQUEST['id'];

            if (!empty($modele) && !empty ($marque) && !empty($categorie) && !empty($descrip) && !empty($prix) && !empty($photo)){
                $pdo->modifVoiture($modele, $marque, $categorie, $descrip, $prix, $photo,$idVoiture);
                header('location: index.php?uc=gestion'); 
            }
            else{
                echo"Tout les champs sont obligatoires";
            }

            break;
        }


    case 'deconnexion':
    {
        session_destroy();
        header('Location: index.php?uc=administrer');

        break;
    }

    
}
