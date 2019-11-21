<?php


class Produit 
{
private $Identifiant;
private  $Nom;
private  $Prix;
private $Categorie;
private  $Marque;




function __construct( $Identifiant,$Nom,$Prix,$Categorie,$Marque)
{

$this->Identifiant =$Identifiant;
$this->Nom=$Nom;
$this->Prix=$Prix;
$this->Categorie=$Categorie;
$this->Marque=$Marque;

}


function getIdentifiant()
{return $this->Identifiant;}
function getNom()
{return $this->Nom;}
function getPrix()
{return $this->Prix;}
function getCategorie()
{return $this->Categorie;}
function getMarque()
{return $this->Marque;}


 
function setNom($Nom)
{ $this->Nom=$Nom;}
function setPrix($Prix)
{$this->Prix=$Prix;}
function setCategorie($Categorie)
{$this->Categorie=$Categorie;}
function setMarque($Marque)
{ $this->Marque=$Marque;}



}





?>