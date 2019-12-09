<?php
header("Cache-Control:no-cache");
session_start();


if (isset($_SESSION['l']) && isset($_SESSION['p'])) {
	if (strcmp($_SESSION['r'], 'Admin') == 0) {
		?>

		<!DOCTYPE html>
		<html lang="en">

		<head>
			<title>Ajouter un produit</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!--===============================================================================================-->
			<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="css/util.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/File.css">
			<!--===============================================================================================-->
			<style>
				.frmSearch {
					background-color: #95e66c87;
					margin: 2px 0px;
					padding: 40px;
					border-radius: 4px;
				}

				#Categorie-list {
					float: left;
					list-style: none;
					margin-top: -3px;
					padding: 0;
					width: 190px;
					position: absolute;
					cursor: default;
					z-index: 30 !important;
				}

				#Categorie-list li {
					padding: 10px;
					background: #f0f0f0;
					border-bottom: #bbb9b9 1px solid;
				}

				#Categorie-list li:hover {
					background: #ece3d2;
					cursor: pointer;
				}

				#search-box {
				padding: 10px;	
				}
			</style>
			<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
			<script>
				$(document).ready(function() {
					$("#search-box").keyup(function() {
						$.ajax({
							type: "POST",
							url: "readCategorie.php",
							data: 'keyword=' + $(this).val(),
							beforeSend: function() {
								$("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
							},
							success: function(data) {
								$("#suggesstion-box").show();
								$("#suggesstion-box").html(data);
								$("#search-box").css("background", "#FFF");
							}
						});
					});
				});

				function selectCategorie(val) {
					$("#search-box").val(val);
					$("#suggesstion-box").hide();
				}
			</script>
		</head>

		<body>
			<form method="POST" name="f" action="../Core/AjouterProduit.php" enctype="multipart/form-data">
				<div class="limiter">
					<div class="container-login100">
						<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
							<form class="login100-form validate-form flex-sb flex-w">
								<span class="login100-form-title p-b-32">
									Ajouter un produit
								</span>

								<span class="txt1 p-b-11">
									Identifiant
								</span>
								<div class="wrap-input100 validate-input m-b-36" data-validate="Identifiant is required">
									<input class="input100" type="text" name="Identifiant">
									<span class="focus-input100"></span>
								</div>
								<span class="txt1 p-b-11">
									Nom
								</span>
								<div class="wrap-input100 validate-input m-b-36" data-validate="Nom is required">
									<input class="input100" type="text" name="Nom">
									<span class="focus-input100"></span>
								</div>
								<span class="txt1 p-b-11">
									Prix
								</span>
								<div class="wrap-input100 validate-input m-b-36" data-validate="Prix is required">
									<input class="input100" type="text" name="Prix">
									<span class="focus-input100"></span>
								</div>
								<span class="txt1 p-b-11">
									Categorie
								</span>
								<div class="frmSearch" data-validate = "Categorie is required">
									<input type="text" id="search-box" name="Categorie" autocomplete="off" placeholder="Categorie Name" />
									<div id="suggesstion-box"></div>
								</div>
								<br>
								<span class="txt1 p-b-11">
									Marque
								</span>
								<div class="wrap-input100 validate-input m-b-12" data-validate="Marque is required">
									<input class="input100" type="text" name="Marque">
									<span class="focus-input100"></span>
								</div>
								<span class="txt1 p-b-11">
									Image
								</span>
								<span class="btn btn-default btn-file">
									Browse <input type="file" name="Prod_File" multiple />
								</span>
								<br><br>
								<div class="container-login100-form-btn">
									<input class="login100-form-btn" type="submit" value="Back now">
								</div>
								<div class="container-login100-form-btn" style="
					margin-left: 80%;
					margin-top: -7%;">
									<a href="../tables-regular.php">
										<h5 style="text-align: right; font-weight: bold; font-size: .88rem;">Cancel</h5>
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div id="dropDownSelect1"></div>

				<!--===============================================================================================-->
				<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
				<!--===============================================================================================-->
				<script src="vendor/animsition/js/animsition.min.js"></script>
				<!--===============================================================================================-->
				<script src="vendor/bootstrap/js/popper.js"></script>
				<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
				<!--===============================================================================================-->
				<script src="vendor/select2/select2.min.js"></script>
				<!--===============================================================================================-->
				<script src="vendor/daterangepicker/moment.min.js"></script>
				<script src="vendor/daterangepicker/daterangepicker.js"></script>
				<!--===============================================================================================-->
				<script src="vendor/countdowntime/countdowntime.js"></script>
				<!--===============================================================================================-->
				<script src="js/main.js"></script>
			</form>
		</body>

		</html>
<?php
	}
} else {
	echo 'Veuillez vous connecter </br>';
	echo '<a href="../index.php">Cliquer pour se connecter</a>';
}
?>