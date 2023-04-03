<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body style="background-image: url('faris-mohammed-d30sszrW7Vw-unsplash.jpg') ; background-size:auto;">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i>  Book Trip</div>
						  </div>
                        <!-- block -->
            <main class="mn-inner">
                <div class="container-fluid">
                    <div class="col s12 m12 l8">
                        <div class="card">
                            <div class="card-content">
                                <form id="example-form" method="post" action="request_leave.php" name="addemp" enctype="multipart/form-data" >
                                
                            <h2>Payment Details</h2>
                            <label for="full_name">Name registered on Momo</label>
                            <input type="text" id="full_name" name="full_name" required><br>

                            <label for="phone_number">Phone Number</label>
                            <input type="text" id="phone_number" name="phone_number" required><br>

                            <label for="phone_number">Transaction ID</label>
                            <input type="text" id="phone_number" name="phone_number" required><br>

                            <label for="amount">Amount Paid</label>
                            <input type="number" id="amount" name="amount" required><br>

                            <input type="submit" value="Confirm Payment">
                            </form>

    </div>
        </div>

        
                        <!-- /block -->
                    </div>


                </div>
            </div>


		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>