<section>
    <div class="container3">
        <div class="block-img">
            <table border="1">
                <tr>
                    <th>Aperçu</th>
                    <th>Modele</th>
                    <th>Marque</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Catégorie</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            <?php 
     $pdo = PdoHtauto :: getPdoHtauto();
     $lesVoitures = $pdo->getLesVoitures();

     foreach ((array)$lesVoitures as $uneVoiture) {

        ?>
    <tr>
    <td class="product-image2">
        <img src="<?php echo $uneVoiture['photo']; ?>" width="200" height="100">
    </td>
    <td><?php echo $uneVoiture['modele']; ?></td>
    <td><?php echo $uneVoiture['marque']; ?></td>
    <td><?php echo $uneVoiture['descrip']; ?></td>
    <td><?php echo $uneVoiture['prix']; ?></td>
    <td><?php echo $uneVoiture['categorie']; ?></td>
    <td>
        <button name="edit">
            <a href="index.php?uc=formulaire&action=formulaireModifier&id=<?php echo $uneVoiture['idVoiture']; ?>">
                <img src="images/crayon.png" class="crayon">
            </a>
        </button>
    </td>

    <td>
        <button name="trash">
            <a href="index.php?uc=formulaire&action=formulaireModifier&id=<?php echo $uneVoiture['idVoiture']; ?>">
                <img src="images/trash.png" class="crayon">
            </a>
        </button>
    </td>
</tr>


       
        <?php
     }
        ?>
    
    <!--

        // echo '<td class="crayon"><button name="edit"><a href="index.php?uc=formulaire&action=formulaireModifier&id=' . $idVoiture .'"><img src="images/crayon.png"></a></button></td>';
//SUPPRIMER
        $idVoiture = $uneVoiture['idVoiture'];
        echo '<td class="crayon"><button name="trash"><a href="index.php?uc=administrer&action=supprimerProduit&id=' . $idVoiture . '"><img src="images/trash.png"></a></button></td>';
        echo '</tr>';
    }
    


    /*foreach( (array)$lesVoitures as $uneVoiture) {
        echo '<tr>';

        echo'<div class ="product-image2">';
        echo "<th> <img src='" .$uneVoiture['photo']." 'widht="200" height="100" ></th>";
        echo '</div>';

        echo '<th>'.($uneVoiture['modele'].'$</th>');
        echo '<th>'.($uneVoiture['marque'].'</th>');
        echo '<th>'.($uneVoiture['descrip'].'</th>');
        echo '<th>'.($uneVoiture['prix'].'</th>');
        echo '<th>'.($uneVoiture['catégorie'].'</th>');
        echo '<th class="crayon"> <button name="edit"><a href=""><img src="images/crayon.png"</a></button> </th>';
        $id = $uneVoiture['id'];
        echo '<th class="crayon"> <button name="trash"><a href="index.php?uc=administrer&action=supprimerProduit&id='.$id.'"><img src="images/trash.png"</a></button> </th>';                  
        echo '</tr>';
    }-->


            </table>
        </div>
    </div>
</section>