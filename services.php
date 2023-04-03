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
    <body style="background-image: url('bg.jpg') ; background-size:auto;">
       <!-- Working area    -->


       <!-- End Working area    -->
    </body>
    <?php include('footer.php'); ?>
</html>
