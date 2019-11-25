<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';

$c=new Database();
$conn=$c->connexion();
$user=new User($_POST['login'],$_POST['pwd'],$conn);
$u=$user->Logedin($conn,$_POST['login'],$_POST['pwd']);


$vide=false;
if (!empty($_POST['login']) && !empty($_POST['pwd'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['user_name']==$_POST['login'] && $t['user_pass']==$_POST['pwd']){
		
		session_start();
		$_SESSION['l']=$_POST['login'];
		$_SESSION['p']=$_POST['pwd'];
		$_SESSION['r']=$t['role'];
		header("location:page_membre.php");
		
		}
	
}
if ($vide==false) { 
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         echo '<meta http-equiv="refresh" content="0;URL=index.html">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="index.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>