<?php
$title = "Ma page d'accueil";

include('includes/header.inc.php');
require_once('includes/fonctions.inc.php'); // inclusion du fichier contenant les fonctions

    ?>
    <main>
        

    <h2> Bienvenue sur mon site d'exercices de TD </h2>
    <article>
        <h3 id="section1"> Introduction </h3>
        <p> Bienvenue sur mon site, la plateforme en ligne qui met à votre disposition une multitude d'exercices de TD pour différentes matières et cours. Notre site a été créé pour aider les étudiants à réussir leurs TD en leur proposant des exercices variés et des corrigés détaillés. Que vous soyez en première année de Licence ou en Master, vous trouverez sur notre site des ressources pédagogiques adaptées à votre niveau. Naviguez facilement sur notre site, trouvez les exercices que vous recherchez et améliorez vos résultats en TD dès maintenant !</p>
    </article>
    <article>
        <h3 id="section2"> Exercices traités </h3>
        <p> Sur ce site nous traitons des exercices en PHP, voici quelques exemples d'énoncés traités :</p>
        <p>Exercice type : fonction PHP et tableau PHP<br>
        À partir de cette question, les exercices sont à traiter dans la page du TD7.
        1. On considère un tableau PHP (array) contenant les noms des régions de France (cf. liste des régions sur la page du cours), l’objectif est de parcourir ce tableau. Écrivez une fonction qui retourne une liste HTML des noms des régions. Ajoutez cette fonction à votre fichiers de fonctions.<br>
        2. Complétez la fonction précédente en ajoutant un paramètre optionnel (au choix : entier, booléen, caractère) permettant de retourner le résultat sous la forme d’une liste à puce (ul ; valeur par défaut) ou d’une liste numérotée (ol) (cf. fonction phpinfo() et phpinfo(INFO_VARIABLES)). Testez les différents appels de votre fonction (avec ou sans paramètre).</p>
    </article>
</body>

<?php
include('includes/footer.inc.php');
?>