<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'voirLesVoitures':
	{
  	$lesVoitures = $pdoHtauto->getLesVoitures();
		include("vues/v_lesVoitures.php");
  		break;
	}
}
?>


