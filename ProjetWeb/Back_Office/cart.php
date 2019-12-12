<?php
include 'Core/produitC.PHP';
include 'Core/UserC.php';
include 'Entities/userfirst.php';
session_start();


if (isset($_SESSION['l']) && isset($_SESSION['p'])) {
	if (strcmp($_SESSION['r'], 'Client') == 0) {
		$user_name = $_SESSION['l'];

		$sql = 'select * from table_users WHERE user_name=:user_name';
		$c = new Database();
		$conn = $c->connexion();


		$req = $conn->prepare($sql);

		$req->bindValue(':user_name', $user_name);

		$req->execute();

		$row = $req->fetch();

		$sql2 = 'SELECT * FROM table_produits WHERE Identifiant=:Identifiant';

		$req2 = $conn->prepare($sql2);

		$req2->bindValue(':Identifiant', $_GET['Identifiant']);

		$req2->execute();

		$row2 = $req2->fetch();

		if (isset($_POST['q']) and !empty($_POST['q'])) {

			$q = htmlspecialchars($_POST['q']);

			$table_produits = $conn->prepare('SELECT Nom,Categorie,Marque,Identifiant FROM table_produits WHERE Nom LIKE "%' . $q . '%" ORDER BY Identifiant DESC');

			$table_produits->execute();

			if ($table_produits->rowCount() == 0) {

				$table_produits = $conn->prepare('SELECT Nom,Categorie,Marque,Identifiant FROM table_produits WHERE CONCAT(Nom, Categorie, Marque) LIKE "%' . $q . '%" ORDER BY Identifiant DESC');

				$table_produits->execute();
			}
		}
		?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Prodigy project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row" style="
    margin-inline-end: auto;
" >
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="#">Prodigy</a></div>
							<nav class="main_nav" style="margin-left: 80px;">
								<ul>
									<li class="hassubs active">
										<a href="index.php">Téléphone</a>
										<ul>
											<li><a href="categories.php">Smartphone</a></li>
											<li><a href="product.php">Tel fixe</a></li>
											<li><a href="cart.php">Cart</a></li>
											<li><a href="checkout.php">Check out</a></li>
											<li><a href="contact.php">Contact</a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="categories.php">Tablette</a>
										<ul>
											<li><a href="categories.php">Category</a></li>
											<li><a href="categories.php">Category</a></li>
											<li><a href="categories.php">Category</a></li>
											<li><a href="categories.php">Category</a></li>
											<li><a href="categories.php">Category</a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="categories.php">Ordinateurs</a>
										<ul>
											<li><a href="categories.php">Category</a></li>
											<li><a href="categories.php">Category</a></li>
											<li><a href="categories.php">Category</a></li>
											<li><a href="categories.php">Category</a></li>
											<li><a href="categories.php">Category</a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="categories.php">Stockage</a>
										<ul>
											<li><a href="categories.php">Category</a></li>
											<li><a href="categories.php">Category</a></li>
											<li><a href="categories.php">Category</a></li>
											<li><a href="categories.php">Category</a></li>
											<li><a href="categories.php">Category</a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="">Image & son</a>
										<ul >
											<li ><a href="categories.php">Category</a></li>
											<li ><a href="categories.php">Category</a></li>
											<li ><a href="categories.php">Category</a></li>
											<li ><a href="categories.php">Category</a></li>
										</ul>
									</li><?php
                                    if(isset($_SESSION['user_email']))
                                    {
                                        ?>
                                        <li class="hassubs">
                                            <a href="">EspaceClient</a>
                                            <ul >
                                                <li ><a href="forum.php">Forum</a></li>
                                                <li ><a href="deconnexion.php">Deconnexion</a></li>
                                                <li ><a href="profil.php">Profil</a></li>
                                            </ul>
                                        </li>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <li class="hassubs">
                                            <a href="">EspaceClient</a>
                                            <ul >
                                                <li ><a href="authentification.php">Inscription</a></li>
                                                <li ><a href="login.php">Connexion</a></li>
                                                <li ><a href="forum.php">Forum</a></li>
                                            </ul>
                                        </li>
                                        <?php
                                    }
                                    ?>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
							<div class="header_extra ml-auto">
							<div class="shopping_cart" style="
    margin-left: 17.1%;
    margin-bottom: 3%;
">
									<a href="cart.php">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
											<g>
												<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
											</g>
										</svg>
										<div>Cart <span>(0)</span></div>
									</a>									
								</div>
								<div class="search">
									<div class="search_icon">
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										viewBox="0 0 475.084 475.084" style="enable-background:new 0 0 475.084 475.084;"
										 xml:space="preserve">
										<g>
											<path d="M464.524,412.846l-97.929-97.925c23.6-34.068,35.406-72.047,35.406-113.917c0-27.218-5.284-53.249-15.852-78.087
												c-10.561-24.842-24.838-46.254-42.825-64.241c-17.987-17.987-39.396-32.264-64.233-42.826
												C254.246,5.285,228.217,0.003,200.999,0.003c-27.216,0-53.247,5.282-78.085,15.847C98.072,26.412,76.66,40.689,58.673,58.676
												c-17.989,17.987-32.264,39.403-42.827,64.241C5.282,147.758,0,173.786,0,201.004c0,27.216,5.282,53.238,15.846,78.083
												c10.562,24.838,24.838,46.247,42.827,64.234c17.987,17.993,39.403,32.264,64.241,42.832c24.841,10.563,50.869,15.844,78.085,15.844
												c41.879,0,79.852-11.807,113.922-35.405l97.929,97.641c6.852,7.231,15.406,10.849,25.693,10.849
												c9.897,0,18.467-3.617,25.694-10.849c7.23-7.23,10.848-15.796,10.848-25.693C475.088,428.458,471.567,419.889,464.524,412.846z
												 M291.363,291.358c-25.029,25.033-55.148,37.549-90.364,37.549c-35.21,0-65.329-12.519-90.36-37.549
												c-25.031-25.029-37.546-55.144-37.546-90.36c0-35.21,12.518-65.334,37.546-90.36c25.026-25.032,55.15-37.546,90.36-37.546
												c35.212,0,65.331,12.519,90.364,37.546c25.033,25.026,37.548,55.15,37.548,90.36C328.911,236.214,316.392,266.329,291.363,291.358z
												"/>
										</g>
									</svg>
									</div>
								</div>
								<nav class="main_nav">
								<ul>
								<li class="hassubs" style="margin-top: 33%;margin-left: -150%;">
									<a style="font-weight: bold; color:black;" href=""><?php echo $_SESSION['l']; ?>	</a>
										<ul >
										<li><a style="color:black;" href="Core/ModifierUser.php?user_idd=<?PHP echo $row['user_idd']; ?>" class="btn btn-info">Modifier Votre Profile</a></li>
											<li><a style="color:black;" href="Session/logout.php">Déconnecter</a></li>
					
										</ul>
									</li>
									</ul>
									</nav>
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Search Panel -->
		<div class="search_panel trans_300">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
							<form method="POST" style="margin-right: 3%;">
											<input type="search" name="q" class="search_input" autocomplete="off" placeholder="Search" required="required">
											<input hidden type="submit" value="Valider" />
										</form>
										<?php
												if (isset($_POST['q'])) {
													if ($table_produits->rowCount() > 0) {
														?>
												<ul>
													<li class="hassubs" style=" margin-top: 85%;">
														<a style="font-size: 14px;font-weight: 600; color: #767676;">Résultat : </a>
														<ul>
															<?php
																			while ($a = $table_produits->fetch()) {
																				?>
																<li style="color:black;"><a  href="product.php?Identifiant=<?PHP echo $a['Identifiant']; ?>"><?= $a['Nom'] ?> <?= $a['Marque'] ?></a></li>
															<?php
																			}
																			?>
														</ul>
													</li>
												</ul>
											<?php
														} else {
															?>
												Aucun résultat pour: <?= $q ?>...
										<?php	}
												}	?>
										<?php
												if (empty($_POST['q'])) {
													?>
											Aucun recherche pour: ...
										<?php	}	?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Social -->
		<div class="header_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/selim_benaich/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="https://www.facebook.com/selim.benaich"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">
							
				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item has-children menu_mm">
						<a href="index.php">Téléphone<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.php">Smartphone<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="product.php">Tel fixe<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="cart.php">Cart<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="checkout.php">Checkout<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="contact.php">Contact<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.php">Tablette<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.php">Ordinateurs<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>					
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.php">Stockage<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>					
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.php">Image & son<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.php">EspaceClient<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item menu_mm"><a href="contact.php">Contact<i class="fa fa-angle-down"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/selim_benaich/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="https://www.facebook.com/selim.benaich"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.php">Téléphone</a></li>
										<li><a href="categories.php">Tablette</a></li>
										<li><a href="">Image & son</a></li>
										<li><a href="">EspaceClient</a></li>
										<li>Shopping Cart</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart Info -->
	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Product</div>
						<div class="cart_info_col cart_info_col_price">Price</div>
						<div class="cart_info_col cart_info_col_quantity">Quantity</div>
						<div class="cart_info_col cart_info_col_total">Total</div>
					</div>
				</div>
			</div>
			<?PHP


                                   /* $PanierC = new PanierC();
                                    $Liste_Panier = $PanierC->Afficher_Panier();*/
									?>
								
			<form method="POST" name="f" action="Core/AjouterPanier.php">
			<?php
                                        //foreach ($Liste_Panier as $row3) {
                                            ?>
			<div class="row cart_items_row">
				<div class="col">

					<!-- Cart Item -->
					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
							<div class="cart_item_image">
								<div><img src="attachment/<?php echo $row2["Prod_File"]; ?>" alt=""></div>
							</div>
							<div class="cart_item_name_container">
								<div class="cart_item_name"><input hidden type="text" name="nom" value="<?PHP echo $row2['Nom'] ?>"><a href="#"><?php echo $row2["Nom"]; ?></a></div>
								<div class="cart_item_edit"><a href="index">Edit Product</a></div>
							</div>
						</div>
						<!-- Price -->
						<div class="cart_item_price"><input hidden type="number" name="prix" value="<?PHP echo $row2['Prix'] ?>"><?php echo $row2["Prix"]; ?>Dt</div>
						<input hidden type="text" name="id_prodpanier" value="<?PHP echo $row2['Identifiant'] ?>">
						<!-- Quantity -->
						<div class="cart_item_quantity">
							<div class="product_quantity_container">
								<div class="product_quantity clearfix">
									<span>Qty</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Total -->
						<div class="cart_item_total"><?php echo $row2["Prix"]; ?>Dt</div>
					</div>

				</div>
			</div>
			<?php
									//	}
                                            ?>
			<div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="button continue_shopping_button"><a href="categories.php">Continue shopping</a></div>
						<div class="cart_buttons_right ml-lg-auto">
						<form method="POST" action="Core/SupprimerPanier.php">
                         <input type="submit" name="Submit" value="Clear cart" class="btn-shadow dropdown-toggle btn btn-info">
                           <input type="hidden" name="nom" value="<?PHP echo $row2['Nom']?>" name="nom">
                            </form>
						</div>
					</div>
				</div>
			</div>
			<input type="submit" value="Add to cart" class="btn-shadow dropdown-toggle btn btn-info" style="margin-top: 3%;">
			</form>
			<div class="row row_extra">
				<div class="col-lg-4">
					
					<!-- Delivery -->
					<div class="delivery">
						<div class="section_title">Shipping method</div>
						<div class="section_subtitle">Select the one you want</div>
						<div class="delivery_options">
							<label class="delivery_option clearfix">Next day delivery
								<input type="radio" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">$4.99</span>
							</label>
							<label class="delivery_option clearfix">Standard delivery
								<input type="radio" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">$1.99</span>
							</label>
							<label class="delivery_option clearfix">Personal pickup
								<input type="radio" checked="checked" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">Free</span>
							</label>
						</div>
					</div>

					<!-- Coupon Code -->
					<div class="coupon">
						<div class="section_title">Coupon code</div>
						<div class="section_subtitle">Enter your coupon code</div>
						<div class="coupon_form_container">
							<form action="#" id="coupon_form" class="coupon_form">
								<input type="text" class="coupon_input" required="required">
								<button class="button coupon_button"><span>Apply</span></button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-6 offset-lg-2">
					<div class="cart_total">
						<div class="section_title">Cart total</div>
						<div class="section_subtitle">Final info</div>
						<div class="cart_total_container">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Subtotal</div>
									<div class="cart_total_value ml-auto"><?php echo $row2["Prix"]; ?>Dt</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Shipping</div>
									<div class="cart_total_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Total</div>
									<div class="cart_total_value ml-auto"><?php echo $row2["Prix"]; ?>Dt</div>
								</li>
							</ul>
						</div>
						<div class="button checkout_button"><a href="#">Proceed to checkout</a></div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="#">Prodigy</a></div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com/selim_benaich/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="https://www.facebook.com/selim.benaich"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
</body>
</html>
<?php
}
}
else { 
	echo 'Veuillez vous connecter </br>';  
	echo '<a href="home1_2.php">Cliquer pour se connecter</a>';

}
?>