<?php
/*

function connexion()
{
    $serveur="localhost";
    $login="root";
    $mdp="";
    $base="htauto";
    //Connexion  au serveur de BD
    $infosBdd=mysqli_connect($serveur, $login, $mdp, $base) or die("Erreur " . mysqli_error($infosBdd));

    return $infosBdd;

  

}

// Fermez la connexion à la base de données
mysqli_close($infosBdd);
}

 public function nouveauProduit($description, $prix, $image, $type)
{
            /*A Compl�ter
}
public function modifProduit($description, $prix, $image, $type)
{
            /*A Compl�ter
}

public function getLesVoitures($infosBdd)
{
	$req = "select * from voiture";
    $resultat=mysqli_query($resultat,$infosBdd);
		
	return $resultat;
	}*/