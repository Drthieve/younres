<?php
$title = "TD7";

include('includes/header.inc.php');
    ?>
<main>

    <section>
      <h2>  les noms des régions de France</h2>
    <?php
                    // require_once('includes/constantes.inc.php'); // Inclure le fichier constantes.inc.php qui contient les tableaux associatifs
                    require_once('includes/fonctions.inc.php'); // inclusion du fichier contenant les fonctions
                    // Utilisation de la fonction afficher_regions
                    $affichage = afficher_regions();
                    echo $affichage;
    ?>      
    </section>
    
    <section>          
    <h2>  Exercice 4</h2>
    <?php
                    $originesEtymologiques = origineEtymologiqueDateCourante();
                    $origineJour = $originesEtymologiques[0];
                    $origineMois = $originesEtymologiques[1];
                    
                    echo "Origine étymologique du jour de la semaine courant : " . $origineJour . "<br>";
                    echo "Origine étymologique du mois courant : " . $origineMois . "<br>";
    ?>   
    </section>

    <section>
        <h2> Exercice 7</h2>

        <?php
        require_once('includes/fonctions.inc.php'); // inclusion du fichier contenant les fonctions

        // Utilisation de la fonction safeWebPalette()
        $couleur = safeWebPalette();

        // Création du tableau
        echo '<table>';
        for ($i = 0; $i < count($couleur); $i += 5) {
            echo '<tr>';
            for ($j = $i; $j < $i + 5 && $j < count($couleur); $j++) {
                echo '<td style="background-color: ' . $couleur[$j] . '; height: 5px; width: 20px; text-align: center;">' . $couleur[$j] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        ?>   
    </section>
    
</main>    

<?php
include('includes/footer.inc.php');
?>