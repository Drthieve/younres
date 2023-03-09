<!-- fichier footer.inc.php -->
<footer>
<?php     
    require_once('includes/util.inc.php'); // inclusion du fichier contenant les fonctions
 ?>
    <p>Copyright &copy; Réalisé par Youssef Souissi 
    Contact </p>
    <ul>       
        <li>youssefsouissi099@gmail.com</li>
    </ul>
    <p>Date du jour : <?php echo getDateFormatted(); ?></p>
    <p>Navigateur utilisé : <?php echo get_navigateur(); ?></p>
</footer>
</body>
</html>
