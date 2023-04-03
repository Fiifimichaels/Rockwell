<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body style="background-image: url('faris-mohammed-d30sszrW7Vw-unsplash.jpg') ; background-size:auto;">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->

				<?php
	             $count_log=mysqli_query($conn,"select * from requestbus");
	             $count = mysqli_num_rows($count_log);
                 ?>
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-user"></i> Bus Reservation</div>
								<div class="muted pull-right">
								Number of Bus Booked: <span class="badge badge-info"><?php  echo $count; ?></span>
								</div>
                            </div>
							<div class="container-fluid">
  <div class="row-fluid">
     <div class="empty">
	     <div class="pull-right">
		   <a href="print_leave_report.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a>
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>
         </div>
      </div>
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
                    <th>Name</th>
                	<th>Level</th>
                    <th>Booked Date</th></th>
                    <th>Destination</th>
					<th>Amount </th>
					<th>seat No.</th>
                    <th>Status</th>
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
			if(isset($_POST['filter'])){
				$date = $_REQUEST['filter_by_date'];
				$query = mysqli_query($conn, "select * from requestbus where requested = '$date'");
				while($row = mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['fname']." ".$row['lname']; ?></td>
						<td><?php echo $row['level']; ?></td>
						<td><?php echo $row['time']; ?></td>
						<td><?php echo $row['destination']; ?></td>
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
				<td><?php echo $row['fname']." ".$row['lname']; ?></td>
				<td><?php echo $row['level']; ?></td>
				<td><?php echo $row['time']; ?></td>
				<td><?php echo $row['destination']; ?></td>
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
