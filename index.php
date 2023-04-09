<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
   
 <style>
    .container {
  display: flex;
  justify-content: center;
}

    /* Styles for the contact section */
section {
  margin-bottom: 4rem;
}

h2 {
  font-weight: bold;
  font-size: 2.5rem;
  text-align: center;
  margin-top: 4rem;
  margin-bottom: 1.5rem;
}

p {
  text-align: center;
  margin: 0 auto;
  max-width: 750px;
  margin-bottom: 5rem;
}

.row {
  margin: 0 -15px;
}

.col-md-9 {
  margin-bottom: 0;
}

.form-control {
  border-radius: 0;
  border: 1px solid #ccc;
  box-shadow: none;
}
form div {
  margin-bottom: 1em;
}
.btn-primary {
  border-radius: 0;
  background-color: #007bff;
  border: none;
}

.btn-primary:hover {
  background-color: #0069d9;
}

.status {
  margin-top: 2rem;
  text-align: center;
}

.text-md-left {
  text-align: left;
}

ul {
  list-style: none;
  padding-left: 0;
}

.fa-2x {
  font-size: 2rem;
}

.fa-map-marker-alt:before {
  content: "\f3c5";
}

.fa-phone:before {
  content: "\f095";
}

.fa-envelope:before {
  content: "\f0e0";
}

	/* Background Styles */
body {
    background-color: #f0f0f0;
    background-image: url('bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
.vertical-contact-info ul li {
    display: block;
    margin-bottom: 1rem;
}

header {
  background-color: #333;
  color: white;
}

.content {
  max-height: calc(100% - 60px); /* subtract the height of the header from the viewport height */
  overflow-y: scroll;
  padding: 20px;
}
/* Form Styles */
form {
    background-color: #fff;
    padding: 40px;
    margin: 0 auto;
    margin-top: 100px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    font-weight: bold;
    margin-top: 20px;
}

/* Heading Styles */
.heading-title {
    margin-top: 0;
    margin-bottom: 40px;
    text-align: center;
}

.heading-title h2 {
    font-size: 36px;
    font-weight: bold;
    color: #222;
}

.heading-title p {
    font-size: 16px;
    color: #666;
    line-height: 24px;
    margin-top: 15px;
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

/* Social Media Icons */
.f-social li {
    display: inline-block;
    margin-right: 15px;
}

.f-social li:last-child {
    margin-right: 0;
}

.f-social li a i {
    font-size: 24px;
    color: #fff;
}

.f-social li a:hover i {
    color: #00cc66;
}
element.style {
}
img {
    vertical-align: middle;
    border-style: none;
}
*, ::after, ::before {
    box-sizing: border-box;
}
img[Attributes Style] {
    width: 100%;
}
user agent stylesheet
/* img {
    overflow-clip-margin: content-box;
    overflow: clip;
} */
blockquote {
  margin: 20px 0;
  padding: 10px 20px;
  font-size: 1.2rem;
  line-height: 1.6;
  color: #666;
  border-left: 5px solid #ccc;
}

blockquote p {
  margin-bottom: 0;
}
h1.h1-responsive {
  text-decoration: underline;
}

 </style>
    <body>
    <?php include('header.php'); ?>
       <!-- Working area    -->
<div style="background-image: url('images/bg.jpg') ; background-repeat: no-repeat; background-size: cover;">
<img src="images/cn.png" width="100%">
<!-- Start Contact -->
	<div class="contact-box">
		<div class="container">
				<div class="col-lg-12">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
						<!--Section: Contact v.2-->
<section class="mb-4">
<!--Section heading-->
<h1 class="h1-responsive font-weight-bold text-center my-4">Contact us</h1>
<!--Section description-->
<blockquote>
  <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>
</blockquote>

<div class="row">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter full Name">
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Your email">
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your message"></textarea>
                    </div>
            </div>
            <!--Grid row-->


        <div class="text-center text-md-left">
         <a class="btn btn-primary" onclick="validateForm();">Send</a>
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->
</div>
</section>
</form>
<div class="m-5">
  <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31702.15463764733!2d-1.592642210780821!3d6.6754764159833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sknust!5e0!3m2!1sen!2sgh!4v1680958610750!5m2!1sen!2sgh" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--Section: Contact v.2-->
				</div>
			</div>
            </div>
            <?php
            // if(isset( $_POST['name']))
            // $name = $_POST['name'];
            // if(isset( $_POST['email']))
            // $email = $_POST['email'];
            // if(isset( $_POST['message']))
            // $message = $_POST['message'];
            // if(isset( $_POST['subject']))
            // $subject = $_POST['subject'];

            // $content="From: $name \n Email: $email \n Message: $message";
            // $recipient = "michaelquaicoe60@gmail.com";
            // $mailheader = "From: $email \r\n";
            // mail($recipient, $subject, $content, $mailheader) or die("Error!");
            // echo "Email sent!";
            ?>




	<!-- End Contact -->
<script>
    function validateForm() {
  var name =  document.getElementById('name').value;
  if (name == "") {
      document.querySelector('.status').innerHTML = "Name cannot be empty";
      return false;
  }
  var email =  document.getElementById('email').value;
  if (email == "") {
      document.querySelector('.status').innerHTML = "Email cannot be empty";
      return false;
  } else {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!re.test(email)){
          document.querySelector('.status').innerHTML = "Email format invalid";
          return false;
      }
  }
  var subject =  document.getElementById('subject').value;
  if (subject == "") {
      document.querySelector('.status').innerHTML = "Subject cannot be empty";
      return false;
  }
  var message =  document.getElementById('message').value;
  if (message == "") {
      document.querySelector('.status').innerHTML = "Message cannot be empty";
      return false;
  }
  document.querySelector('.status').innerHTML = "Sending...";
}
</script>
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
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
	</div>    
	</body>
</html>
