<?php
$title = "TD5";

include('includes/header.inc.php');
    ?>
<main>
    <section >
    <h2> Exercice  1 </h2>

        <ul>
   
            <?php 
                        

                for ($i = 1; $i <= 20; $i++) {
                    echo "<li>";
                    echo" hello numero".$i; 
                    echo"</li>";
                }
            ?>
        </ul>
    </section>

    <section >
            
        <h2> Exercice 2 fonction prédéfinie</h2>
            <?php
            
                echo date("d/m/Y H:i:s"."\n");
            
            ?>    

    </section>

    <section >
        
        <h2>Exercice 3 </h2>       
        <article>

            <h3> Méthode 1 avec la fonction dechex()</h3>
              

              <?php

                    for ($i = 0; $i<=15;$i++) {
                        echo dechex($i) . "\n";
                }
                
             ?>
             </article>
            
             <article>
                <h3>Methode 2 avec printf()</h3>
                

                <?php
                       for($i = 0; $i <=15 ; $i++){
                           printf("%x ",$i,"\n");}
                ?> 
             

             </article>

    </section>


    <section > 
        <h2> Exercice 4</h2>
            
        <table >
        <caption>Table de multipliation(10x10)</caption>
       
            <?php
               echo "<thead>"; 
               echo "<tr>" ;
                echo "<th> X </th>";  
               for ($i=1; $i<=10;$i++) 
               {
                echo "<th> $i </th>";  
               }
               echo "</tr>";
               echo "</thead>";
               echo "<tbody>";
            for($i=0;$i<=10 ;$i++){
                
                echo "<tr>";
                    echo "<th>" ;
                    echo $i; 
                    echo "</th>";
                    for ($j = 1; $j <= 10; $j++) {
                        echo "<td>" .$i * $j. "</td>" ;
                        }
                echo "</tr>";
                }
            echo "</tbody>";
        ?>
                

    </table>
    </section>

    <section >

        <h2>Exercice 5</h2>
    
            <article>
        

                    <h3> Premiére Methode :Utilisation de la fonction dechex() </h3>

                      <?php
                           $decimal = 65;
                           $hexadecimal = dechex($decimal);
                           $character = chr($decimal);
                           
                           echo "0x" . $hexadecimal . " = " . $decimal . " = '" . $character . "'";
                           
                           $decimal = 43;
                           $hexadecimal = dechex($decimal);
                           $character = chr($decimal);
                           
                           echo "<br>0x" . $hexadecimal . " = " . $decimal . " = '" . $character . "'";
                         ?>

            </article>

            <article >

                    <h3> Deuxiéme Methode : Utilisation de la fonction hexdec()</h3>

                    <?php
                            $hexadecimal = '41';
                            $decimal = hexdec($hexadecimal);
                            $character = chr($decimal);

                            echo "0x" . $hexadecimal . " = " . $decimal . " = '" . $character . "'";

                            $hexadecimal = '2B';
                            $decimal = hexdec($hexadecimal);
                            $character = chr($decimal);

                            echo "<br>0x" . $hexadecimal . " = " . $decimal . " = '" . $character . "'";
           
           
                    ?>

           
          </article>
            </section>

            <section >
            <h2> Exercice 6</h2>


    <table>
        <caption> table de conversion de nombres dans des differentes bases </caption>
            <thead>     
                <tr>
                    <th>Nombre</th>
                    <th>Binaire</th>
                    <th>Octal</th>
                    <th>Décimal</th>
                     <th>Hexadécimal</th>
                </tr>
            </thead>
            <tbody>
         <?php
            for ($i = 0; $i <= 17; $i++) {
                echo "<tr>";
               echo "<td>" . $i . "</td>";
                  echo "<td>" . decbin($i) . "</td>";
                 echo "<td>" . decoct($i) . "</td>";
                 echo "<td>" . $i . "</td>";
                 echo "<td>" . dechex($i) . "</td>";
                  echo "</tr>";
                }
        ?>
       
        </tbody>
    </table>



     </section>

            </main>
       
<?php
include('includes/footer.inc.php');
?>