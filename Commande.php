<?PHP
class Commande{
    private $id_commande;
    private $id_client;
	private $id_produit;
	private $dateAchat;
	private $qtte;
    private $valide;
    private $adresse;
	function __construct($id_commande,$id_client,$id_produit,$dateAchat,$qtte,$adresse,$valide)
	{
		$this->id_commande=$id_commande;
        $this->id_client=$id_client;
        $this->id_produit=$id_produit;
		$this->dateAchat=$dateAchat;
		$this->qtte=$qtte;
        $this->valide=$valide;
        $this->adresse=$adresse;
	}
	
	function getidc(){
		return $this->id_commande;
	}
	function getidcl(){
		return $this->id_client;
    }
    function getidp(){
		return $this->id_produit;
    }
    function getqtt(){
		return $this->qtte;
	}
	function getda(){
		return $this->dateAchat;
	}
	function geta(){
		return $this->adresse;
	}
	function getvalide(){
		return $this->valide;
	}

	function setidc($id_commande){
		$this->id_commande=$id_commande;
	}
	function setidc($id_client){
		$this->id_client=$id_client;
	}
	function setda($dateAchat){
		$this->dateAchat=$dateAchat;
	}
	function setta($qtte){
		$this->qtte=$qtte;
	}
	function setvalide($valide){
		$this->valide=$valide;
    }
    function setvalide($adresse){
		$this->adresse=$adresse;
	}
	
}

?>