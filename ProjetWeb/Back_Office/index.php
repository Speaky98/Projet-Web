<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script language="javascript" src="Session/js/main.js"></script>
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="Session/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="Session/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
                <div id="dernieres-nouvelles1">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form class="register-form" id="register-form" method="POST" action="Core/AjouterUser.php" onsubmit="return myFunction(this)">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="user_name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="user_email" id="email" placeholder="Your Email"/>
                            </div>
                            <div hidden class="form-group">
                                    <label for="name"></label>
                                    <input type="text" name="role" id="role" value="Client" placeholder="Votre Role"/>
                                </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="user_pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree_term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" value="Register" class="form-submit" name="signup" id="signup">
                            </div>
            
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="Session/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#dernieres-nouvelles" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Sing in  Form -->
        <form id="form1" name="form1" method="POST" action="Session/connexion.php">
        <section class="sign-in">
                <div id="dernieres-nouvelles">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="Session/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#dernieres-nouvelles1" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="login" id="login" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pwd" id="pwd" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="button" id="button" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </form>
    </div>

    <!-- JS -->
    <script src="Session/vendor/jquery/jquery.min.js"></script>
    <script src="Session/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>