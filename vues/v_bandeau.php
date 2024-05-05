<!-- header-->
<header>
	<div class="bandeau">
	<h1> HT AUTO (Henry THIBERT Automobiles)</h1>
	</div>

	<div class="nav1">
	<?php 
		if(isset($_SESSION['email'])){

	?>
    <a href="index.php?uc=accueil">Accueil</a>
    <a href="index.php?uc=voitures&action=voirLesVoitures">Voir le catalogue des voitures</a>
    <a href="index.php?uc=gestion">Administrer</a>
	<a href="index.php?uc=administrer&action=deconnexion">deconnexion</a>

	<?php

		}else{

	?>
	<a href="index.php?uc=accueil">Accueil</a>
	<a href="index.php?uc=voitures&action=voirLesVoitures">Voir le catalogue des voitures</a>
	<a href="index.php?uc=administrer">connexion</a>
	<?php
		}
	?>
</div>

</header>


	


