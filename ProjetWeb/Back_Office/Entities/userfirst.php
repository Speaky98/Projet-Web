<?php

class Userfirst 
{
private  $user_name;
private  $user_email;
private $user_pass;
private $role;


function __construct($user_name,$user_email,$user_pass,$role)
{

$this->user_name=$user_name;
$this->user_email=$user_email;
$this->user_pass=$user_pass;
$this->role=$role;
}

function getuser_name()
{return $this->user_name;}
function getuser_email()
{return $this->user_email;}
function getuser_pass()
{return $this->user_pass;}
function getrole()
{return $this->role;}

 
function setuser_name($user_name)
{ $this->user_name=$user_name;}
function setuser_email($user_email)
{$this->user_email=$user_email;}
function setuser_pass($user_pass)
{$this->user_pass=$user_pass;}
function setrole($role)
{$this->role=$role;}
}


?>