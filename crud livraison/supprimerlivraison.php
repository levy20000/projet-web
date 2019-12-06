<?PHP
include "livraisonC.php";
$livraisonC=new LivraisonC();
if (isset($_POST["id_livraison"])){
	$livraisonC->suppLivraison($_POST["id_livraison"]);
	//header('Location: afficherLivreur.php');
}

?>