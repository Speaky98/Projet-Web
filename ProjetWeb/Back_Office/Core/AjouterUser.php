<?php

include 'userC.PHP';
include '../Entities/userfirst.php';




    $Userfirst=new Userfirst($_POST['user_name'],$_POST['user_email'],$_POST['user_pass'],$_POST['role']);
    
    $UserC=new UserC();
    $UserC->Ajouter_User($Userfirst);
    //echo "<script type='text/javascript'> document.location = '../tables-regular.PHP'; </script>";
    header('Status: 301 Moved Permanently', false, 301);      
  header('Location: ../index.PHP');      
  exit();
   



?>