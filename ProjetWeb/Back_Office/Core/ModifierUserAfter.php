<?PHP
include 'userC.php';
include '../Entities/userfirst.php';







$UserC=new UserC();
    $UserC->Modifier_User($_POST['user_name'],$_POST['user_email'],$_POST['user_pass'],$_POST['role']);

    
     echo "<script type='text/javascript'> document.location = '../Session/logout.php'; </script>";

?>
