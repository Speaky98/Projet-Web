<?PHP
include 'userC.PHP';
include '../Entities/userfirst.php';


session_start ();  


if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 
	if(strcmp($_SESSION['r'], 'Client') == 0)
{
  
$UserC=new UserC();
$UserC->Modifier_User($_POST['user_idd'],$_POST['user_name'],$_POST['user_email'],$_POST['user_pass'],$_POST['role']);

echo "<script type='text/javascript'> document.location = '../index.php'; </script>";
}
}
else { 
	echo 'Veuillez vous connecter </br>';  
	echo '<a href="../home1_2.php">Cliquer pour se connecter</a>';

}
?>
