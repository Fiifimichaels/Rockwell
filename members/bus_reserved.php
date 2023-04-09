<?php include('header.php'); ?>
<?php include('session.php'); ?>
<header>
<script src="https://widget.northeurope.cloudapp.azure.com:9443/v0.1.0/mobile-money-widget-mtn.js"></script>
  <script src="TODO_REPLACE_WITH_PRODUCTION_PATH"></script>
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</header>
    <body style="background-image: url('faris-mohammed-d30sszrW7Vw-unsplash.jpg') ; background-repeat: no-repeat; background-size: cover;">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->

				<?php
	            //  $count_log=mysqli_query($conn,"select * from requestbus  ");
	            //  $count = mysqli_num_rows($count_log);
				  // Execute SQL query to count the number of rows in the table
				$count_query = mysqli_query($conn, "SELECT COUNT(*) AS count FROM requestbus");

				// Fetch the count from the result
				$row = mysqli_fetch_assoc($count_query);
				$count = $row['count'];

				// Print the count
				echo "Total number of rows in the table: " . $count;
                 ?>
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-user"></i> Bus Reservation</div>
								<div class="muted pull-right">
								Number of Bus Booked: <span class="badge badge-info"><?php  echo  $count; ?></span>
								</div>
                            </div>
			
                            <div class="block-content collapse in">
		<form action="" method="post">
			<input type="date" name="filter_by_date" id="">
			<input type="submit" name="filter" value="Filter">
		</form>
		<form method="post">
			<input type="submit" value="Refresh" name="refresh">
			</form>

                                <div class="span12">
	<form action="" method="post">
  		<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
		<thead>
		    <tr>
                	<th>Level</th>
                    <th>Booked Date</th>
					<th>Departure Date</th>
                    <th>Destination</th>
					<th>Amount </th>
					<th>seat No.</th>
                    <th>Status</th>
					<th></th>
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
			if(isset($_POST['filter'])){
				$date = $_REQUEST['filter_by_date'];
				$query = mysqli_query($conn, "select * from requestbus where time = '$date'");
				while($row = mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['level']; ?></td>
						<td><?php echo $row['time']; ?></td>
						<td><?php echo $row['departure_date']; ?></td>
						<td><?php echo $row['actualdestination']; ?></td>
						<td><?php echo $row['amount']; ?></td>
						<td><?php echo $row['seatnum']; ?></td>
						<td >
							<?php 
							if ($row['Status'] == 'Pending') {
								echo "<span class='badge badge-warning'>Pending</span>";
								}
							else{
								echo "<span class='badge badge-success'>Approved</span>";
								}
							?>
						</td>
					</tr>
					<?php
				}
	
			}	
		else if(isset($_POST['refresh'])){
			echo("<meta http-equiv='refresh' content='0'>");
		}
		else{
				$get_user = $user_row['fname']." ".$user_row['lname'];
		$members_query = mysqli_query($conn,"select * from requestbus where concat(fname,' ',lname) = '$get_user'")or die(mysqli_error());
		while($row = mysqli_fetch_array($members_query)){
		$username = $row['id'];
		$id= $row['id'];
		// echo $get_user;
		?>
			<tr>
				<td><?php echo $row['level']; ?></td>
				<td><?php echo $row['time']; ?></td>
				<td><?php echo $row['departure_date']; ?></td>
				<td><?php echo $row['actualdestination']; ?></td>
				<td><?php echo $row['amount']; ?></td>
				<td><?php echo $row['seatnum']; ?></td>
			<td >
				<?php 
				if ($row['Status'] == 'Pending') {
					echo "<span class='badge badge-warning'>Pending</span>";
					}
				else{
					echo "<span class='badge badge-success'>Approved</span>";
					}
				?>
			</td>
        </tr>

	<?php }
			} ?>
	<script>
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
</tbody>
									</table>
								</form>
                                </div>
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
