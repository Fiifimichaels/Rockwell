<!DOCTYPE html>
<html>
  <head>
    <title>Online Bus Receipt</title>
    <style>
   .trip {
  margin: auto;
  width: 25%;
  background-color: #f1f1f1;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #888888;
}

.receipt {
  padding: 20px;
}

.header,
.parent,
.footer {
  margin: 20px 0;
  padding: 10px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0px 0px 5px #888888;
}

.header h2,
.parent h2 {
  margin: 0;
  font-size: 20px;
}

.header p,
.parent p {
  margin: 5px 0;
  font-size: 16px;
}

.footer p {
  margin: 0;
  font-size: 16px;
  text-align: center;
}

    </style>
  </head>
  <body>
  <div class="trip">
    <h1>ATT Transport</h1>
    <h2>Official Receipt</h2>
    <table>
    <!-- <div class="receipt">
  <div class="header">
    <h2>Passenger Information</h2>
    <p>Name: Michael Quaicoe</p>
    <p>Contact: michaelquaicoe60@email.com</p>
  </div>
  
  
    <h2>Trip Information</h2>
    <p>Date and Time: April 12, 2023 9:00 AM</p>
    <p>Pick Up Point: Tech Junction</p>
    <p>Destination: Tema</p>
    <p>Seat Number: 15</p>
    <p>Fare Amount Paid: Gh&#162; 150.00</p>
  </div>
  
  <div class="parent">
    <h2>Parent Information</h2>
    <p>Phone Number:0243762748</p>
  </div>
  
  <div class="footer">
    <p>Thank you for choosing our bus service!</p>
  </div>
</div> -->

<div class="receipt">
            <?php
            // Make a MySQL Connection
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $database = 'atttravel';
            $conn = mysqli_connect($host, $user, $password, $database);

            // Check for Connection Error
            if (mysqli_connect_errno()) {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
            }

            // SQL Query to Select Data
            $query = "SELECT * FROM requestbus WHERE id = 1"; // Change the ID value as needed

            // Execute the Query
            $result = mysqli_query($conn, $query);

            // Check if Query was Successful
            if ($result) {
            // Loop through the Result Set
            while ($row = mysqli_fetch_assoc($result)) {
                // Output the Data into the Receipt Template
            ?>
          <div class="header">
            <h2>Passenger Information</h2>
            <p>Name: <?php echo $row['fullname']; ?></p>
            <p>Contact: <?php echo $row['fname']; ?></p>
          </div>
          <h2>Trip Information</h2>
          <p>Date and Time: <?php echo $row['time']; ?></p>
          <p>Pick Up Point: <?php echo $$row['pickup']; ?></p>
          <p>Date of Departure: <?php echo $$row['date']; ?></p>
          <p>Destination: <?php echo $$row['actualdestination']; ?></p>
          <p>Seat Number: <?php echo $$row['seatnum']; ?></p>
          <p>Fare Amount Paid: Gh&#162; <?php echo $$row['amount']; ?></p>
        </div>
        <div class="parent">
          <h2>Parent Information</h2>
          <p>Phone Number: <?php echo $$row['gmobiile']; ?></p>
        </div>
        <div class="footer">
          <p>Thank you for choosing our bus service!</p>
        </div>
      <?php
        }
        } else {
        // Handle Query Error
        echo "Error: " . mysqli_error($conn);
        }

        // Close Connection
        mysqli_close($conn);
        ?>
          <?php include 'session.php'; ?>
    </table>
    </div>
    <?php include 'script.php'; ?>
  </body>
</html>
