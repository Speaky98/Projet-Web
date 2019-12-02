<?php
//include 'C:\wamp64\www\ProjetWeb\ProjetWeb\Back_Office\Session\dbconfig.php';

session_start ();  
include 'UserC.php';
include '../Entities/userfirst.php';

if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 
	if(strcmp($_SESSION['r'], 'Client') == 0)
{

$sql ='select * from table_users WHERE user_idd=:user_idd';
$c=new Database();
$conn=$c->connexion();


$req =$conn->prepare($sql);

$req->bindValue(':user_idd',$_GET['user_idd']);

$req->execute();

$row=$req->fetch();

    //var_dump($row);
     //echo "<script type='text/javascript'> document.location = '../tables-regular.php'; </script>";
   // header ('Location : ../tables-regular.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Modifier votre compte</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../View/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../View/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../View/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../View/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../View/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../View/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../View/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../View/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../View/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../View/css/util.css">
	<link rel="stylesheet" type="text/css" href="../View/css/main.css">
<!--===============================================================================================-->
<script src="testuser.js"></script>
</head>
<body>
	<form method="POST" name="f"  action="ModifierUserAfter.php" onsubmit="return test();">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">
				<span hidden class="txt1 p-b-11">
                       Id
					</span>
					<div hidden class="wrap-input100 validate-input m-b-36" data-validate = "Identifiant is required">
						<input class="input100" type="text" name="user_idd"  value="<?PHP  echo $row ['user_idd'] ?>" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
                       Name
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Identifiant is required">
						<input class="input100" type="text" name="user_name"  value="<?PHP  echo $row ['user_name'] ?>" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Adresse_email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Adresse_email is required">
						<input class="input100" type="text" name="user_email" value="<?PHP  echo $row ['user_email'] ?>"  >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Mot de passe
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Mot de passe is required">
						<input class="input100" type="text" name="user_pass" value="<?PHP  echo $row ['user_pass'] ?>" >
						<span class="focus-input100"></span>
                    </div>
                    <span hidden class="txt1 p-b-11">
						Role
					</span>
					<div hidden class="wrap-input100 validate-input m-b-36" data-validate = "Role is required">
						<input class="input100" type="text" name="role" value="<?PHP  echo $row ['role'] ?>" >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Change Now" >
					</div>
					<div class="container-login100-form-btn" style="
					margin-left: 80%;
					margin-top: -7%;">
						<a href="../Front_Office/home1.php"><h5 style="text-align: right; font-weight: bold; font-size: .88rem;">abort the change</h5></a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../View/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../View/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../View/vendor/bootstrap/js/popper.js"></script>
	<script src="../View/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../View/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../View/vendor/daterangepicker/moment.min.js"></script>
	<script src="../View/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../View/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../View/js/main.js"></script>
</form>
</body>
</html>
<?php
}
}
else { 
	echo 'Veuillez vous connecter </br>';  
	echo '<a href="../index.php">Cliquer pour se connecter</a>';

}
?>