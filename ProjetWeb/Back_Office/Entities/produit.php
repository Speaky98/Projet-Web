<?php


class Produit 
{
private $Identifiant;
private  $Nom;
private  $Prix;
private $Categorie;
private  $Marque;
private $Prod_File;



function __construct( $Identifiant,$Nom,$Prix,$Categorie,$Marque,$Prod_File)
{

$this->Identifiant =$Identifiant;
$this->Nom=$Nom;
$this->Prix=$Prix;
$this->Categorie=$Categorie;
$this->Marque=$Marque;
$this->Prod_File=$Prod_File;

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
function getProd_File()
{return $this->Prod_File;}



 
function setNom($Nom)
{ $this->Nom=$Nom;}
function setPrix($Prix)
{$this->Prix=$Prix;}
function setCategorie($Categorie)
{$this->Categorie=$Categorie;}
function setMarque($Marque)
{ $this->Marque=$Marque;}
function setProd_File($Prod_File)
{ $this->Prod_File=$Prod_File;}




}





?>