<?php


class Client 
{
private $ID;
private  $Nom;
private  $Prenom;
private $Adresse_email;




function __construct( $ID,$Nom,$Prenom,$Adresse_email)
{

$this->ID =$ID;
$this->Nom=$Nom;
$this->Prenom=$Prenom;
$this->Adresse_email=$Adresse_email;

}


function getID()
{return $this->ID;}
function getNom()
{return $this->Nom;}
function getPrenom()
{return $this->Prenom;}
function getAdresse_email()
{return $this->Adresse_email;}


 
function setNom($Nom)
{ $this->Nom=$Nom;}
function setPrenom($Prenom)
{$this->Prenom=$Prenom;}


}


?>