<section>
    <div class="container2">
        <div class="block-img">
            <!-- <table border="1">
               <tr>
                    <th>Aperçu</th>
                    <th>prix</th>
                    <th>marque</th>
                    <th>modele</th>
                    <th>description</th>
                </tr>-->
            <?php 
            $pdo = PdoHtauto :: getPdoHtauto();
            $lesVoitures = $pdo->getLesVoitures();

    foreach((array) $lesVoitures as $uneVoiture) {
        echo '<div class="product product-item">';

        echo'<div class ="product-image">';
        echo "<th> <img src='" .$uneVoiture['photo']." ' ></th>";
        echo '</div>';
        
        echo '<h2 class="product-title">' . $uneVoiture['modele'] . '</h2>';
        echo '<p class="product-description">' . $uneVoiture['descrip'] . '</p>';
        echo '<p class="product-price">' . $uneVoiture['prix'] . '</p>';

        echo '</div>';

    }

?>
            </table>
        </div>
    </div>
</section>








