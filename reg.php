<!DOCTYPE html>
<html lang="en" class="no-js"> 
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
    </head>
    <?php include('header.php'); ?>
    <body style="background-image: url('images/bg.jpg') ; background-size:100%;">
        <div class="container">
           
            <section>
                
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                    <div class="animate form">
                            <form  action="reg.php" method="POST" autocomplete="on" id="reg">
                                <h1>Sign Up</h1>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">First Name</label>
                                    <input id="usernamesignup" name="fname" required="required" type="text" placeholder="Fiifi" />
                                </p>
								<p> 
                                    <label for="usernamesignup" class="sname" data-icon="u">Last Name</label>
                                    <input id="usernamesignup" name="sname" required="required" type="text" placeholder="Michael" />
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="">Gender</label>
                                    
									 <select name="gender" id="usernamesignup" required="required" type="text">
                                    <option value="Select Gender">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    </select> 
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Residence</label>
                                    <input id="usernamesignup" name="residence" required="required" type="text" placeholder="Kasoa" />
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="">Year</label>
                                    <select name="ministry" id="usernamesignup" required="required" type="text">
                                    <option value="None"></option>
                                    <option value="None">100</option>
                                    <option value="Praise and Worship">200</option>
                                    <option value="Ushering">300</option>
                                    <option value="Hostessing">400</option>
                                    <option value="Media and IT">Staff</option>
                                    </select> 
                                </p>
								 <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="attknust@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Mobile Number </label>
                                    <input id="passwordsignup" name="mobile" required="required" type="text" placeholder="eg.+233******748"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Password </label>
                                    <input id="passwordsignup_confirm" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up" name="submit"/> 
								</p>
                                <p class="change_link">  
									Do you already have an account ?
									<a href="index.php" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<h3>About Us</h3>
					<p>ATT Transport provides safe, reliable, and affordable transportation for students across Ghana's tertiary institutions, prioritizing their comfort and safety.</p>
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
        <style>
          footer {
  margin-top: 50px;
}

form {
  margin-bottom: 50px;
}

           .container {
  display: flex;
  justify-content: center;
}
            .animate.form {
                margin-top: 50%;
  max-width: 400px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.animate.form h1 {
  font-size: 24px;
  font-weight: bold;
  color: #333;
  margin-bottom: 20px;
  text-align: center;
}

.animate.form p {
  margin-bottom: 15px;
  font-size: 16px;
  line-height: 1.5;
  color: #666;
}

.animate.form input[type="text"],
.animate.form input[type="email"],
.animate.form input[type="password"],
.animate.form select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  line-height: 1.5;
  color: #333;
  margin-bottom: 15px;
}

.animate.form input[type="submit"] {
  display: block;
  width: 100%;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px;
  font-size: 16px;
  cursor: pointer;
}

.animate.form input[type="submit"]:hover {
  background-color: #0069d9;
}

footer {
    position: fixed;
    left: 0;
    top: 100%;
    width: 100%;
    background-color: #333;
    color: #fff;
    text-align: center;
    z-index: 9999;
}


footer h3 {
    font-size: 24px;
    color: #fff;
    margin-bottom: 30px;
}
.animate.form .change_link {
  text-align: center;
  font-size: 16px;
  color: #666;
  margin-top: 15px;
}

.animate.form .change_link a {
  color: #007bff;
  text-decoration: none;
}

.animate.form .change_link a:hover {
  text-decoration: underline;
}

            .box {
  width: 100px;
  height: 100px;
  background-color: red;
  animation: color-change 2s infinite;
}

@keyframes color-change {
  0% {
    background-color: red;
  }
  50% {
    background-color: blue;
  }
  100% {
    background-color: red;
  }
}

    #reg {
  padding: 10px;
  transition: all 0.5s ease;
  margin: 100px auto 0;
}


        </style>
    </body>
</html>