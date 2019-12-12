<?php


class Panier 
{
private $id_prodpanier;
private  $nom;
private  $prix;



function __construct( $id_prodpanier,$nom,$prix)
{

$this->id_prodpanier =$id_prodpanier;
$this->nom=$nom;
$this->prix=$prix;
}


function getid_prodpanier()
{return $this->id_prodpanier;}
function getnom()
{return $this->nom;}
function getprix()
{return $this->prix;}



function setid_prodpanier($id_prodpanier)
{ $this->id_prodpanier=$id_prodpanier;}
function setnom($nom)
{ $this->nom=$nom;}
function setprix($prix)
{$this->prix=$prix;}


}





?>