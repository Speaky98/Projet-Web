<?PHP
include 'userC.PHP';
include '../Entities/userfirst.php';




    
$UserC=new UserC();
$UserC->Supprimer_User($_POST['user_idd']);

    
     //echo "<script type='text/javascript'> document.location = '../tables-regular.php'; </script>";
   // header ('Location : ../tables-regular.php');

 
 

?>