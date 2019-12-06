<?php

include "config.php";
class LivraisonC
{
    function ajouterLivraison($livraison)
    {
        $sql= " INSERT INTO livraison_produit.livraison (date_depart, date_arrive,user_client ,id_livreur, id_commandes) VALUES
         (:date_depart, :date_arrive, :id_client, :id_livreur, :id_commandes )";
         $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            //$id_livraison=$livraison->getid_livraison();
            $date_depart=$livraison->getdate_depart();
            $date_arriver=$livraison->getdate_arrive();
            $id_client=$livraison->getid_client();
            $id_livreur=$livraison->getid_livreur();
            $id_commandes=$livraison->getid_commandes();
            
            //$req->bindValue(':id_livraison',$id_livraison);
            $req->bindValue(':date_depart',$date_depart);
            $req->bindValue(':date_arrive',$date_arriver);
            $req->bindValue(':id_client',$id_client);
            $req->bindValue(':id_livreur',$id_livreur);
            $req->bindValue(':id_commandes',$id_commandes);
            

            $req->execute();

        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

    }
    function afficherLivraison()
    {

        $sql="select * from livraison ";
        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


    function suppLivraison($id_livraison)
    {
        $sql="DELETE FROM livraison_produit.`livraison` WHERE id_livraison='$id_livraison' ";
        echo $sql;
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierLivraison($id_livraison,$date_depart,$date_arriver)
    {
        $sql="UPDATE livraison_produit.livraison set date_depart='$date_depart', date_arrive='$date_arriver' where id_livraison='$id_livraison'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

}

?>