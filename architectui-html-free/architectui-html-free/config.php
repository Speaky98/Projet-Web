

<?php


class config 
{


private static $instance =NULL;

public static function getConnexion() 
{


        if (!isset(self::$instance))
        {
try    
 {self::$instance =new PDO ('mysql:host=localhost;dbname=prodigy','root','');}
 catch ( Exception $e)
{die("Erreur  ".$e->getMessage());}}
        return self::$instance;
}
}









?>