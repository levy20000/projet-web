<?PHP
include "livraison.php";
include "livraisonC.php";

if(isset($_POST['date_depart']) and isset($_POST['date_arrive']) and isset($_POST['id_client']) and isset($_POST['id_livreur']) and isset($_POST['id_commandes']) )
{
	$livraison1=new Livraison(($_POST['date_depart']),($_POST['date_arrive']),($_POST['id_client']),($_POST['id_livreur']),($_POST['id_commandes']));
	
	/*
	var_dump($employe1);
	}
	*/
	
	$livraison1C=new LivraisonC();
	$livraison1C->ajouterLivraison($livraison1);
	//header('Location: afficherLivreur.php');
}
else
{
	echo "vérifier les champs";
}
//*/

?>