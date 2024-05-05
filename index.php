<?php
session_start();
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;
require_once("util/class.PDO.htauto.php");


$uc = isset($_REQUEST['uc']) ? $_REQUEST['uc'] : 'accueil';



switch($uc)
{
	case 'accueil':
		{
			include("vues/v_accueil.php");
			break;
		}

	case 'voitures' :
		{
			include("vues/v_lesVoitures.php");
            break;
		}
		
	case 'administrer' :
	  { 
		include("controleurs/c_gestionProduits.php");
        include("vues/v_connexion.php");
        break;  
		
        
          }

	 case 'connexion' :
			{ 
			  break;  
			  
			  
				}
	case 'gestion':
		{
			include("controleurs/c_gestionProduits.php");
			include("vues/v_gestionVehicule.php");

			//include ("vues/v_modifier.php");


			break;
		}

		case 'formulaire' :
			{ 
			include ("vues/v_modifier.php");
			  break;  
			  
			  
				}

		

}
include("vues/v_pied.php") ;


?>
