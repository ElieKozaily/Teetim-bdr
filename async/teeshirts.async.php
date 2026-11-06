<?php
// Librairie du catalogue de produits.
include('lib/catalogue.lib.php');

// Définir la variable $page pour indiquer la page affichée.
$page = 'teeshirts';

/******* GESTION DU TRI ************/
$tri = isset($_GET['tri']) ? $_GET['tri'] : "aleatoire";

[$themes, $produits] = obtenirCatalogue($page, $langue, $tri);
