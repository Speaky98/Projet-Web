<?php

class stock{
  private $id_produit;
  private $qte;
  private $marque_prd;
  private $id_fourni;
  private $qte_maj;

  public function __construct($id_produit,$qte,$marque_prd,$id_fourni,$qte_maj)
  {

    $this->id_pro=$id_produit;
    $this->qte=$qte;
    $this->marque_prd=$marque_prd;
    $this->id_fourni=$id_fourni;
    $this->qte_maj=$qte_maj;

  }

  public function getid_produit()
  {
    return $this->id_produit;
  }
  public function getqte()
  {
    return $this->qte;
  }
  public function getmarque_prd()
  {
    return $this->marque_prd;
  }
  public function getid_fourni()
  {
    return $this->id_fourni;
  }
  public function getqte_maj()
  {
    return $this->qte_maj;
  }

}
?>
