<?php

// On démarre la session AVANT d'écrire du code HTML

session_start();


// On s'amuse à créer quelques variables de session dans $_SESSION

//$_SESSION['image'] = "1488221657899.jpeg";
$_SESSION['image'] = "image_de_fond.jpg";

//$_SESSION['nom'] = 'Dupont';

//$_SESSION['age'] = 24;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Variables</title> <!--Titre de l'onglet-->
    <link rel="icon" type="image/png" href="LogoSN.png"> <!--Afficher le logo dans l'onglet-->
    <link rel="stylesheet" type="text/css" href="style_div.css">
  <style>
    .texteenrouge {
        color: red;
    }
  </style>

  </head>


  <body background="https://sdz-upload.s3.amazonaws.com/prod/upload/test1.jpeg">

<?php
$prenom = 'moi';
//$image="1488221657899.jpeg";
echo '<h1><center>Bonjour '.$prenom.'</center></h1>'
?>



<!--<div id="bandeau">Ceci est le bandeau</div>-->
<div id="contenu">

  <pre>
	<h2> Accueil: </h2>
	<p> fjosghsispss
  mflshglshlghslighlshglislshgsh
  hgfoizhglhlghdg
  oshgisgsjgj
  shgmgm
  sdbgflsdglsg
  ohjgsjdgjsd
  eiohtozhtlqeht
  ezpoitji
  giulfjqnf
  ufuyduduf
   <p> œ
  </pre>
  <a href="page2.php"><div id="start">Start</div></a>
</div>

<div id="piedpage">
   <div id="blocnews"><pre>
Lycée Jean De Latttre de Tassigny
85000 La Roche sur Yon

Année: 2017-2018
   </pre></div> 
<pre>

Lucie COUTAUD TS3
Florian SAUTEJEAU TS3
Louise WANG TS2
</pre></div>
  </body>

</html>

