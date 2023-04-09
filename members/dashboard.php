<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="St.Lukes Boys School management System">
    <meta name="author" content="Kithinji Godfrey">
	<link href="bootstrap/css/index_background.css" rel="stylesheet" media="screen"/>
    <script src="https://widget.northeurope.cloudapp.azure.com:9443/v0.1.0/mobile-money-widget-mtn.js"></script>
    <script src="TODO_REPLACE_WITH_PRODUCTION_PATH"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body style="background-image: url('faris-mohammed-d30sszrW7Vw-unsplash.jpg') ; background-repeat: no-repeat; background-size: cover;">
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
            <div id="sidebar">
                <?php include('sidebar.php'); ?>
            </div>	
                <div class="span9" id="content">
                    <div class="row-fluid">
         	         <?php $query= mysqli_query($conn,"select * from members where id = '$session_id'")or die(mysqli_error());
			         $row = mysqli_fetch_array($query);			
			         ?>
                    <div class="col-lg-12">
                      <div class="alert alert-success alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <img id="avatar1" class="img-responsive" src="<?php echo $row['thumbnail']; ?>"><strong> Welcome! <?php echo $user_row['fname']." ".$user_row['lname'];  ?></strong>
                      </div>
                    </div>
                      <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard </div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">	

            <div id="page-wrapper">
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid"><br/>
                                    <div class="span8 text-right"><br/>
                                    <div class="span3"><br/>
                                        <i class="fa fa-plane fa-3x"></i><br/>
                                    </div>
                                        <h3>Book a Trip</h3> <br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="request_bus_A.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Book to Accra or Tema </span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>		
          
     <!------------------------------ Pending trip ----------------------------->
    <div class="span6">
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span3"><br/>
                        <i class="fa fa-bus fa-3x"></i><br/> <!-- Displaying calendar icon -->
                    </div>
                    <div class="span8 text-right"><br/>
                        <h3>Booked</h3><br/>
                    </div>
                </div>
            </div>	
        </div>
        <a href="bus_reserved.php">							  
            <div class="modal-footer">
                <span class="pull-left">View</span>
                <span class="pull-right"><i class="icon-chevron-right"></i></span>
                <div class="clearfix"></div>
            </div>							  
        </a>
    </div>
</div>


<script>
  // Display calendar and highlight current date
  let today = new Date();
  let options = {weekday: 'short', year: 'numeric', month: 'short', day: 'numeric'};
  document.getElementById('calendar').innerHTML = today.toLocaleDateString('en-US', options);
  document.querySelector('td[data-day="' + today.getDate() + '"]').classList.add('current-date');
</script>

				 </div>
 </div> 				 			
		<div id="page-wrapper">

		<?php 
// 	     $count_members=mysqli_query($conn,"SELECT * 
// FROm  members WHERE  DATE_ADD(STR_TO_DATE(Birthday, '%Y-%m-%d'), INTERVAL YEAR(CURDATE())-YEAR(STR_TO_DATE(Birthday, '%Y-%m-%d')) YEAR) 
//             BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)");
// 	             $count = mysqli_num_rows($count_members);
		 ?>			
                    
				 </div>
 </div> 	
	    
				
			                 </div>
                            </div>
                        </div>
                        <!-- /block --> 	
                    </div>
                    </div>
                 <style>
                 .current-date {
                background-color: #f00;
                color: #fff;
                }

                </style>
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>
