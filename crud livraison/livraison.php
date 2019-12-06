<?PHP
class Livraison{
    //private $id_livraison;
	private $date_depart;
    private $date_arrive;
    private $id_client;
    private $id_livreur;
    private $id_commandes;

	function __construct($date_depart,$date_arrive,$id_client,$id_livreur,$id_commandes){

       // $this->id_livraison=$id_livraison;
        $this->date_depart=$date_depart;
        $this->date_arrive=$date_arrive;
        $this->id_client=$id_client;
        $this->id_livreur=$id_livreur;
        $this->id_commandes=$id_commandes;
       
    }
  /*function getid_livraison(){
      return $this->id_livraison;
  }*/
	function getdate_depart(){
        return $this->date_depart;
    }
	function getdate_arrive(){
        return $this->date_arrive;
    }
    function getid_client(){
        return $this->id_client;
    }
	function getid_livreur(){
        return $this->id_livreur;
    }
    function getid_commandes(){
        return $this->id_commandes;
    }

  function setdate_depart($date_depart){
        $this->date_depart=$date_depart;
  }
	function setdate_arrive($date_arrive){
        $this->date_arrive=$date_arrive;
    }
}

?>











