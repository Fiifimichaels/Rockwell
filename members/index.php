<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<?php
  $public_key = "6LenwnUhAAAAAKztyWRyngZ-HVnidZtCkbxVUp_y";
  $private_key = "6LfXvXUhAAAAAJfKdRXeEa96m_P092E4xpYgPhSp";
  $url="https://www.google.com/recaptcha/api/siteverify";

  if (array_key_exists('login_form', $_POST))
  {
    echo "<prev>";print_r($_POST);echo "</prev>";
    $response_key = $_POST['g-recaptcha-response'];
    $response = file_get_contents($url. '?secret='. $private_key.'&response='.$response_key.'&remoteip='.$_SERVER['REMOTE_ADDR'] );
  }
 ?>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>ATT Travels</title>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Employee Manager" />
        <meta name="author" content="Codrops" />
        <link rel="icon" type="image/x-icon" href="members/images/favicon.jpeg">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body style="background-image: url('faris-mohammed-d30sszrW7Vw-unsplash.jpg') ; background-size:auto;">
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">


                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>ATT Travels <span>ACCESS POINT</span></h1>

            </header>
            <section>
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" method="POST" autocomplete="on">
                                <h1>Employee Log in</h1>
                                <p>
                                    <label for="username" class="uname" data-icon="u" > Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="username"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="password" />
                                </p>
                                <p class="keeplogin">
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button">
                                    <div class="g-recaptcha" data-sitekey="<?php print $public_key; ?>"></div>
                                    <br/>
                                    <input type="submit" value="Login"  name="login"/> 
                                    <br/>
                                    <a href="admin/index.php"><i class="icon-user"></i> Admin</a>
								</p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
