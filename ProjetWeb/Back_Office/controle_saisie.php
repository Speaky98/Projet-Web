<?php 

function controleSaisie($compte)
{
    $bool=TRUE;

	if (isset($compte["user_name"])) {
	
		$u_name = $compte["user_name"];
		$email = $compte['user_email'];
		$password = $compte['user_pass'];
		$repassword = $compte['user_pass2'];
		$name = "/^[a-zA-Z ]+$/";
		$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
		$number = "/^[0-9]+$/";
	
	if(empty($u_name) || empty($email) || empty($password) || empty($repassword) ){
			
			echo "
				<div class='newsletter_title'>
					<b>Please fill all fields..!.<a href=\"authentification.php\"> Retry</a></b>
				</div>
			";
			$bool=FALSE;
			return $bool;
		} 
	
		else {
			if(!preg_match($name,$u_name)){
			echo "
				<div class='newsletter_title'>
					<b>this name: $u_name is not valid..!.<a href=\"authentification.php\"> Retry</a></b>
				</div>
			";
			$bool=FALSE;
			return $bool;
		}
		if(!preg_match($emailValidation,$email)){
			echo "
				<div class='newsletter_title'>
					<b>this email: $email is not valid..!.<a href=\"authentification.php\"> Retry</a></b>
				</div>
			";
			$bool=FALSE;
			return $bool;
		}
		if(strlen($password) < 9 ){
			echo "
				<div class='newsletter_title'>
					<b>Password is weak.<a href=\"authentification.php\"> Retry</a></b>
				</div>
			";
			$bool=FALSE;
			return $bool;
		}
		if(strlen($repassword) < 9 ){
			echo "
				<div class='newsletter_title'>
					<b>Password is weak.<a href=\"authentification.php\"> Retry</a></b>
				</div>
			";
			$bool=FALSE;
			return $bool;
		}
		if($password != $repassword){
			echo "
				<div class='newsletter_title'>
					<b>password is not same.<a href=\"authentification.php\"> Retry</a></b>
				</div>
			";
			$bool=FALSE;
			return $bool;
		}
		
		}
		
    }
    return $bool;
    }



?>
