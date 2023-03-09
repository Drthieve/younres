<!-- fichier header.inc.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="SOUISSI"/>
    <meta name="Date" content="2023"/>
    <meta name="page" content="1"/>
    <meta name="Lieu" content="Cyu_univ"/>
    <meta name="Sujet" content="TD5"/>
    <meta name="Prof" content="Marc_LEMAIRE"/>
    <link rel="icon"  href="images/chatgpt.png">
    <link rel="stylesheet" href="style.css"/>

    <style>
     
  
     #titre-page {
         text-align: center;
         color: #fff;
     }
     #table-multiplication td  {
         border: 1px solid #fff;
         background-color: #DDD;
     }       #table-multiplication th  {
         border: 1px solid #fff;
         background-color: #DDD;
     }
     #tableascii .chiffre {
color: blue;
}

#tableascii .majuscule {
color: red;
}

#tableascii .minuscule {
color: green;
}

#tableascii .autre {
background-color: #DDD;
}

#tableascii table {
border-collapse: collapse;
}

#tableascii th,
#tableascii td {
border: 1px solid black;
padding: 5px;
}

#tableascii caption {
font-weight: bold;
margin-bottom: 10px;

}
#titre-page {
            text-align: center;
            color: #fff;
        }
        #table-multiplication td  {
            border: 1px solid #fff;
            background-color: #DDD;
        }       #table-multiplication th  {
            border: 1px solid #fff;
            background-color: #DDD;
        }

 </style>
    <title><?= $title; ?></title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li> <a href="#tablemultiplication">Table de multiplication</a> </li>
                <li> <a href="#tableascii" >Table ASCII</a></li>
                <li><a href="td5.php">td5</a></li>
                <li><a href="td6.php">td6</a></li>
                <li> <a href="td7.php">td7</a></li>
                <li> <a href="index.php"> Acceuil </a> </li>
            </ul>
        </nav>
        <h1 id="titre-page"><?= $title; ?></h1>
    </header>