<?php 

   // Définir les constantes
   define('DEFAULT_TABLE_SIZE', 10);
   define('MAX_TABLE_SIZE', 100);
    
   // Tableau associatif pour les jours de la semaine
   define('JOURS_SEMAINE', array(
    'monday' => 'Lune',
    'tuesday' => 'Mars',
    'wednesday' => 'Mercure',
    'thursday' => 'Jupiter',
    'friday' => 'Vénus',
    'saturday' => 'Saturne',
    'sunday' => 'Soleil'
));

    // Tableau associatif pour les mois de l'année
    define('MOIS_ANNEE', array(
    'january' => 'mois de Janus',
    'february' => 'mois des purifications',
    'march' => 'mois de Mars',
    'april' => 'mois d\'Aphrodite',
    'may' => 'mois de Maia',
    'june' => 'mois de Junon',
    'july' => 'mois de Jules César',
    'august' => 'mois d\'Auguste',
    'september' => 'mois de Septembre',
    'october' => 'mois d\'Octave',
    'november' => 'mois des morts',
    'december' => 'mois de la déesse romaine Ops'
));
   /**
    * Cette fonction retourne une table de multiplication
    * sous la forme d'un tableau HTML.
    * La dimension de la table est passée en paramètre.
    * Par défaut, la table de multiplication affichée est 10 x 10.
    *
    * @param int $size La dimension de la table de multiplication
    * @return string un tableau en html Le code HTML de la table de multiplication
    */
   function afficheTableMultiplication($size = DEFAULT_TABLE_SIZE) : string
   {
       // Vérifier que la taille est valide
       if ($size <= 0 || $size > MAX_TABLE_SIZE) {
           return '<p>La taille de la table doit être comprise entre 1 et ' . MAX_TABLE_SIZE . '.</p>';
       }

       // Construire la table
       $resultat = '<table>';
       $resultat .= '<caption>Table de multiplication</caption>';
       $resultat .= '<thead>';
       $resultat .= '<tr><th>X</th>';
       for ($i = 1; $i <= $size; $i++) {
           $resultat .= '<th>' . $i . '</th>';
       }
       $resultat .= '</tr></thead><tbody>';
       for ($i = 1; $i <= $size; $i++) {
           $resultat .= '<tr><th>' . $i . '</th>';
           for ($j = 1; $j <= $size; $j++) {
               $resultat .= '<td>' . ($i * $j) . '</td>';
           }
           $resultat .= '</tr>';
       }
       $resultat .= '</tbody></table>';
       return $resultat;
   }

  
    /**
    * Cette fonction affiche la table ASCII standard avec une mise en forme CSS.
    *
    * La table contient les 128 premiers caractères de la table ASCII (de 0 à 127), à l'exception des 32 premiers (de 0 à 31).
    * Les chiffres, les majuscules et les minuscules sont mis en forme avec des couleurs différentes en utilisant des classes CSS internes.
     * Les autres caractères sont sur fond par défaut.
    * Les caractères qui sont également des entités HTML sont traités pour que la page soit valide.
    * Le dernier caractère de la table est remplacé par &#x00A0; pour que la page soit valide HTML et bien formée XML.
    *
    * @return string Un tableau HTML contenant la table ASCII et une mise en forme CSS.
    */
    function afficheTableAscii() :string {
        $resultat = '<table>';
        $resultat .= '<caption>Tableau de code ASCII</caption>';
        $resultat .= '<thead>';
        $resultat .= '<tr><th></th>';
        for ($i = 0; $i <= 15; $i++) {
         if ($i > 9) 
            {
                  $resultat .= '<th class="majuscule">' . chr($i + 55) . '</th>';
            }
         else
            {
                 $resultat .= '<th class="chiffre">' . $i . '</th>';
            }
          }
        $resultat .= '</tr></thead>';
        $resultat .= '<tbody>';
        $compteurAscii = 32;
        for ($i = 2; $i <= 7; $i++) {
            $resultat .= '<tr>';
            $resultat .= '<th class="minuscule">' . $i . '</th>';
          for ($x = 1; $x <= 16; $x++) {
            if ($i == 7 && $x == 16) {
              $resultat .= '<td>&#x00A0;</td>';
            } else 
            {
                $char = chr($compteurAscii);
                switch ($char) 
                {
                    case '<':
                        $resultat .= '<td>&lt;</td>';
                        break;
                    case '>':
                        $resultat .= '<td>&gt;</td>';
                        break;
                    case '&':
                        $resultat .= '<td>&amp;</td>';
                       break;
                    case "\n":
                        $resultat .= '<td class="autre">\\n</td>';
                        break;
                    case "\t":
                        $resultat .= '<td class="autre">\\t</td>';
                        break;
                    default:
                        if (ctype_upper($char)) {
                            $resultat .= '<td class="majuscule">' . $char . '</td>';
                        } elseif (ctype_lower($char)) {
                            $resultat .= '<td class="minuscule">' . $char . '</td>';
                        } else {
                            $resultat .= '<td class="autre">' . $char . '</td>';
                        }
                }
              $compteurAscii++;
            }
          }
          $resultat .= '</tr>';
        }
        $resultat .= '</tbody></table>';
        return $resultat;
    }
   
    function afficher_regions($type = "ul") {
        $tabregions = array(
            "Auvergne-Rhône-Alpes",
            "Bourgogne-Franche-Comté",
            "Bretagne",
            "Centre-Val de Loire",
            "Corse",
            "Grand Est",
            "Hauts-de-France",
            "Île-de-France",
            "Normandie",
            "Nouvelle-Aquitaine",
            "Occitanie",
            "Pays de la Loire",
            "Provence-Alpes-Côte d'Azur"
        );

        $html = "<" . $type . ">";
        foreach ($tabregions as $region) {
            $html .= "<li>" . $region . "</li>";
        }
        $html .= "</" . $type . ">";

        return $html;
    }


   
 /**
 * Retourne les origines étymologiques du jour de la semaine et du mois de l'année pour la date courante.
 *
 * @param array|null $joursSemaine Le tableau associatif des jours de la semaine avec leur origine étymologique. Utilise la constante JOURS_SEMAINE par défaut si aucune valeur n'est fournie.
 * @param array|null $moisAnnee Le tableau associatif des mois de l'année avec leur origine étymologique. Utilise la constante MOIS_ANNEE par défaut si aucune valeur n'est fournie.
 *
 * @return array Un tableau contenant les origines étymologiques du jour de la semaine et du mois de l'année.
 */
function origineEtymologiqueDateCourante($joursSemaine = JOURS_SEMAINE, $moisAnnee = MOIS_ANNEE)
{
    $jourSemaine = strtolower(date('l'));
    $moisAnnee = strtolower(date('F'));

    $origineJourSemaine = isset($joursSemaine[$jourSemaine]) ? $joursSemaine[$jourSemaine] : 'inconnue';
    $origineMoisAnnee = isset($moisAnnee[$moisAnnee]) ? $moisAnnee[$moisAnnee] : 'inconnue';

    return array($origineJourSemaine, $origineMoisAnnee);
}
function safeWebPalette() {
    $redValues = array(0, 51, 102, 153, 204, 255);
    $greenValues = array(0, 51, 102, 153, 204, 255);
    $blueValues = array(0, 51, 102, 153, 204, 255);
    $couleur = array();
    foreach ($redValues as $red) {
        foreach ($greenValues as $green) {
            foreach ($blueValues as $blue) {
                $couleur[] = sprintf('#%02x%02x%02x', $red, $green, $blue);
            }
        }
    }
    return $couleur;
}



    ?>