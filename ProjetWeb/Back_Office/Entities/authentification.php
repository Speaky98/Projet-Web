<?php 

include "functions.php";
include "Core/compteClient.php";
include "Core/compteCore.php";

$client= new compteClient;
?>

<form id="inscription" method="POST" action="validation.php">
        <fieldset>
            <legend>Inscription: </legend>
            <label for="Nom">Nom: </label>
            <input type="text" name="Nom" ><br>
            <label for="Prenom">Prenom: </label>
            <input type="text" name="Prenom" ><br>
            <label for="Adresse_email">Email: </label>
            <input type="text" name="Adresse_email" ><br>
            <label for="pw">Password: </label>
            <input type="password" name="pw"><br>
            <input type="submit" value="Submit"/>
        </fieldset>
    </form>


