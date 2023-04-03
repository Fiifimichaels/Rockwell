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
        <title>ATT Transport</title>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Employee Manager" />
        <meta name="author" content="Codrops" />
        <link rel="icon" type="image/x-icon" href="members/images/favicon.jpeg">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <?php include('header.php'); ?>
    <body style="background-image: url('bg.jpg') ; background-size:100%;">
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
        <style>
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
  border: 10px solid #000;
  padding: 10px;
  transition: all 0.5s ease;
  margin: 100px auto 0;
}


#reg:hover {
  border-color: #fff;
  transform: scale(1.05);
}

        </style>
            <?php include('footer.php'); ?>
    </body>
</html>
