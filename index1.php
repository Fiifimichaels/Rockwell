<!DOCTYPE html>
<html lang="en" class="no-js"> 
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>ATT Transport</title>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Employee Manager" />
        <meta name="author" content="Codrops" />
        <link rel="icon" type="image/x-icon" href="images/attt.png">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    </head>
    <style>
            .navbar {
                position: fixed;
                top: 0;
                left: 0; /* Ensure that the navbar starts from the left edge of the screen */
                right: 0; /* Ensure that the navbar ends at the right edge of the screen */
                z-index: 9999;
                width: 100%;
            }
            section {
                margin-top: 50px;
            }
            footer {
                 margin-top: 100px;
            }
        </style>
        <div class="navbar">
             <?php include('header.php'); ?>
        </div>
    <body style="background-image: url('images/bg.jpg') ; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">

                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h2><span> </span</h2>
            </header>
            <section>
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" method="POST" autocomplete="on">
                                <h1>login</h1>
                                <p>
                                    <label for="username" class="uname" data-icon="u" > Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="username"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="password" />
                                </p>
                              <p class="login button">
                                    <br/>
                                    <input type="submit" value="Login"  name="login"/> 
                                    <br/>
                                
                                    <p class="change_link">
									Not a customer yet ?
									<a href="reg.php" class="to_register">Sign Up</a>
								    </p>
				                </p>
                            </form><br>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <h2></h2>
        	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<h3>About Us</h3>
                    ATT Transport provides safe, reliable, and affordable transportation for students across Ghana's tertiary institutions, prioritizing their comfort and safety.
                </div>
				<div class="col-lg-6 col-md-6">
					<h3>Contact info</h3>
					<p class="lead"><i class="fas fa-map-marker-alt"></i> KNUST Campus, Kumasi, Ghana</p>
					<p class="lead"><a href="tel:233548224452"><i class="fas fa-phone"></i> (+233) 0548224452 / 0507892821</a></p>
					<p><a href="#"><i class="fas fa-envelope"></i> asumahchristemmanuel2018@gmail.com</a></p>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2023 <a href="#">ATT Transport</a> Design By : 
					<a href="https://html.design/">KHomPaTech</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
    </body>
    <style>
#wrapper {
  margin: 0 auto;
  width: 400px;
}
footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
    z-index: 9999;
}


footer h3 {
    font-size: 24px;
    color: #fff;
    margin-bottom: 30px;
}

footer p {
    font-size: 14px;
    line-height: 24px;
    color: #fff;
}
#login {
  background: #fff;
  padding: 25px;
  margin-top: 50px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

h1 {
  text-align: center;
  margin-bottom: 25px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 5px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

input[type="submit"] {
  background: #4CAF50;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background: #3e8e41;
}

.to_register {
  color: #4CAF50;
}

        </style>
</html>
