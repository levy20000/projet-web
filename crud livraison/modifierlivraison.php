<?php
include "livraisonC.php";

$id_livraison=$_POST["id_livraison"];
$date_depart=$_POST["date_depart"];
$date_arrive=$_POST["date_arrive"];

$livraisonC=new livraisonC();
$livraisonC->modifierLivraison($id_livraison,$date_depart,$date_arrive);
//header("location:afficheLivreur.php");

?>
