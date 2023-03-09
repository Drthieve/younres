

<?php
$title = "TD6";

include('includes/header.inc.php');
    ?>


        
     
      
  <main >
    <section>
      <h2>Exercice 1 : Table de multiplication</h2>
      <div id="tablemultiplication" class="tablemultiplication">
      <?php
    require_once('includes/fonctions.inc.php'); // inclusion du fichier contenant les fonctions

// Utilisation de la fonction afficheTableMultiplication avec une taille de 15
$tableMultiplication = afficheTableMultiplication(15);
echo $tableMultiplication;

?>
</div>


    </section>

    <section id="tableascii">
      <h2>Exercice 2 : Table de caractères ASCII</h2>
      <?php

      // Utilisation de la fonction afficheTableAscii
$tableAscii = afficheTableAscii();
echo $tableAscii;
?>
</section>  </main> 
  <?php
include('includes/footer.inc.php');
?>
