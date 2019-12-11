<?php
session_start();
include "db.php";

function validerCompte($compte)
{
	$value=NULL;

	if (isset($compte["u_name"])) {
	
		$u_name = $compte["u_name"];
		$email = $compte['email'];
		$password = $compte['password'];
		$repassword = $compte['repassword'];
		$name = "/^[a-zA-Z ]+$/";
		$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
		$number = "/^[0-9]+$/";
	
	if(empty($u_name) || empty($email) || empty($password) || empty($repassword) ){
			
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
				</div>
			";
			$value=1;
			return $value;
		} 
	
		else {
			if(!preg_match($name,$u_name)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>this $u_name is not valid..!</b>
				</div>
			";
			$value=2;
			return $value;
		}
		if(!preg_match($emailValidation,$email)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>this $email is not valid..!</b>
				</div>
			";
			$value=3;
			return $value;
		}
		if(strlen($password) < 9 ){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Password is weak</b>
				</div>
			";
			$value=4;
			return $value;
		}
		if(strlen($repassword) < 9 ){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Password is weak</b>
				</div>
			";
			$value=5;
			return $value;
		}
		if($password != $repassword){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>password is not same</b>
				</div>
			";
			$value=6;
			return $value;
		}
		//existing email address in our database
		$sql = "SELECT user_idd FROM table_users WHERE user_email = '$email' LIMIT 1" ;
		$check_query = mysqli_query($con,$sql);
		$count_email = mysqli_num_rows($check_query);
		
		if($count_email > 0){
			echo "
				<div class='alert alert-danger'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Email Address is already available Try Another email address</b>
				</div>
			";
			$value=7;
			return $value;
		} 
		else {
			
			$sql = "INSERT INTO `table_users` 
			(`user_idd`, `user_name`, `user_email`, 
			`user_pass`) 
			VALUES (NULL, '$u_name','$email', 
			'$password')";
			$run_query = mysqli_query($con,$sql);
			$_SESSION["uid"] = mysqli_insert_id($con);
			$_SESSION["name"] = $u_name;
			$ip_add = getenv("REMOTE_ADDR");
			$sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";
			if(mysqli_query($con,$sql)){
				echo "register_success";
				echo "<script> location.href='store.php'; </script>";
				$value=8;
				return $value;
			}
		}
		}
		
	}
}



?>