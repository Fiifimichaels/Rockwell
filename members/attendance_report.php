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
	             $count_log=mysqli_query($conn,"select * from leaves");
	             $count = mysqli_num_rows($count_log);
                 ?>
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-user"></i> Attendance History</div>
                            </div>
							<div class="container-fluid">
  <div class="row-fluid">
     <div class="empty">
	     <div class="pull-right">
		   <a href="print_leaves.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a>
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
                    <th>Check</th>
                	<th>Name</th>
					<th>Clock In</th>
					<th>Clock Out</th>
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php 
		if(isset($_POST['filter'])){
		$date = $_REQUEST['filter_by_date'];
		$members_query = mysqli_query($conn,"select * from clockin, clockout where time = '$date'");
		while($row = mysqli_fetch_array($members_query)){
		$username = $row['id'];
		$id= $row['id'];

		?>
		<tr>
		 <td width="70">
			<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
		    <td><?php echo $row['fname']." ".$row['lname']; ?></td>
			<td><?php echo $row['time']; ?></td>
			<td><?php echo $row['time2']; ?></td>
            </tr>
			<?php
				}
	
			}	
		else if(isset($_POST['refresh'])){
			echo("<meta http-equiv='refresh' content='0'>");
		}
		else{
		$get_user = $user_row['fname']." ".$user_row['lname'];
		$members_query = mysqli_query($conn,"select * from leaves where concat(fname,' ',lname) = '$get_user'")or die(mysqli_error());
		while($row = mysqli_fetch_array($members_query)){
		$username = $row['id'];
		$id= $row['id'];
		// echo $get_user;
		}
		?>
	<?php } ?>
	

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
