<?php 

include "functions.php";
include "Core/compteClient.php";
include "Core/compteCore.php";
include "validation.php";

?>

<form id="login" method="POST" action="verification.php">
        <fieldset>
            <legend>Login: </legend>
            <label for="Adresse_email">Email: </label>
            <input type="text" name="Adresse_email" ><br>
            <label for="pw">Password: </label>
            <input type="password" name="pw"><br>
            <input type="submit" value="Submit"/>
        </fieldset>
    </form>
