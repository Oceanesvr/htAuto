<?php
$pdo = PdoHtauto :: getPdoHtauto();
$idVoiture = $_REQUEST['id'];
$selectionVoiture = $pdo -> getSelectionVoitures($idVoiture);
?>
    
        <form action="index.php?uc=gestion&action=modifierProduit&id=<?php echo $selectionVoiture[0]['idVoiture']; ?>" class="form-container" method="POST">
            <h2>HT AUTO</h2>
            <label for="categorie">Photo:</label>
            <input type="file" id="categorie" name="photo"><br>
            <label for="modele">Modèle:</label>
            <input type="text" id="modele" name="modele" value="<?php echo $selectionVoiture[0]['modele']; ?>"><br>
            <label for="marque">Marque:</label>
            <input type="text" id="marque" name="marque" value="<?php echo $selectionVoiture[0]['marque']; ?>"><br>
            <label for="descrip">Description:</label>
            <textarea id="descrip" name="descrip"><?php echo $selectionVoiture[0]['descrip']; ?></textarea><br>
            <label for="prix">Prix:</label>
            <input type="text" id="prix" name="prix" value="<?php echo $selectionVoiture[0]['prix']; ?>"><br>
            <label for="categorie">Catégorie:</label>
            <input type="text" id="categorie" name="categorie" value="<?php echo $selectionVoiture[0]['categorie']; ?>"><br>
            <button type="submit" class="btn">Modifier</button>
            <button type="submit" class="btn cancel">Fermer</button>
        </form>

</body>