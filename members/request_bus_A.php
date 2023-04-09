<?php include 'header.php'; ?>
<?php include 'session.php'; ?>
<?php
require 'lib/phpmailer/PHPMailer.php';
require 'lib/phpmailer/SMTP.php';
require 'lib/phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>

<head>
  <script src="https://widget.northeurope.cloudapp.azure.com:9443/v0.1.0/mobile-money-widget-mtn.js"></script>
  <script src="TODO_REPLACE_WITH_PRODUCTION_PATH"></script>
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <style>
    .selected {
      background-color: blue;
      color: grey;
    }

    #seatsDiagram td.selected {
      background-color: blue;
    }

    #seatsDiagram td {
      width: 30px;
      height: 30px;
      text-align: center;
      background-color: #ccc;
      border: 1px solid #aaa;
      cursor: pointer;
    }

    #seatsDiagram td:hover {
      background-color: #888;
    }

    .seatsDiagram {
      background-color: #eee;
      border: 2px solid #ccc;
      padding: 5px;
      margin: 5x;
    }

    .seatsDiagram td {
      width: 10px;
      height: 10px;
      text-align: center;
      vertical-align: middle;
      font-size: 80px;
      background-color: #fff;
      border: 1px solid #ccc;
    }

    .seatsDiagram .space {
      background-color: transparent;
      border: none;
    }

    #seatsDiagram td i {
      font-family: 'Font Awesome';
      font-size: 24px;
      line-height: 30px;
    }

    #seatsDiagram td:not(.selected) i:before {
      content: attr(data-seat-number);
      font-size: 20px;
      font-weight: bold;
    }

    /* end seat */
    #destination td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: center;
    }

    #destination td:hover {
      background-color: #f5f5f5;
      cursor: pointer;
    }

    #destination td.active {
      background-color: #007bff;
      color: #fff;
    }

    .swing {
      display: inline-block;
      animation: swing 2s ease-in-out infinite;
    }

    @keyframes swing {
      0% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-10px);
      }

      100% {
        transform: translateY(0);
      }
    }

    .taken {
      background-color: #f1f1f1 !important;
      color: #999 !important;
      pointer-events: none;
    }

    .btn:hover {
      background-color: #007bff;
      color: #fff;
    }
  </style>
</head>

<body style="background-image: url('faris-mohammed-d30sszrW7Vw-unsplash.jpg') ; background-size:auto;">
  <?php include 'navbar.php'; ?>
  <div class="container-fluid">
    <div class="row-fluid">
      <?php include 'sidebar.php'; ?>

      <div class="span9" id="content">
        <div class="row-fluid">

          <script type="text/javascript">
            $(document).ready(function() {
              $('#add').tooltip('show');
              $('#add').tooltip('hide');
            });
          </script>
          <div id="sc" align="center">
            <image src="images/sclogo.png" width="45%" height="45%" />
          </div>
          <div id="block_bg" class="block" style="width: auto">
            <div class="navbar navbar-inner block-header">
              <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Book Trip To Accra Or Tema</div>
            </div>
            <!-- block -->
            <main class="mn-inner">
              <div class="container-fluid">
                <div class="col s12 m12 l8">
                  <div class="card">
                    <div class="card-content">
                      <form method="post" action="" enctype="multipart/form-data">
                        <div class="container-fluid" id="toggle1">
                          <div class="col s12 m12 l8">
                            <h3 style="text-align: center; margin-bottom: 1rem;">Apply for Bus Reservation</h3>
                            <div class="card" style="width:auto;">
                              <div style="display: flex; justify-content: space-between;">
                                <!-- pick up details -->
                                <div style="width: 50%;">
                                  <div class="card-content">
                                    <div class="control-group">
                                      <p>
                                      <div class="controls">
                                        <p>
                                        <div class="input-field col m6 s12">
                                          <label for="fromdate" required="required">Level</label>
                                          <select class="input focused" name="level" id="focusedInput" required="required" type="text">
                                            <option value=""> </option>
                                            <option value="Level 100">Level 100</option>
                                            <option value="Level 200">Level 200</option>
                                            <option value="Level 300">Level 300 </option>
                                            <option value="Level 400">Level 400</option>
                                            <option value="None">None</option>
                                          </select>
                                        </div>
                                        </p>
                                      </div>
                                      </p>
                                    </div>
                                    <p>
                                    <div class="input-field col m6 s12">
                                      <label for="fromdate" required="required">Select Pick-up point</label>
                                      <select class="input focused" name="pickup" id="focusedInput" required="required" type="text">
                                        <option value=""> </option>
                                        <option value="Parade grounds">Parade grounds</option>
                                        <option value="Ayeduase gate">Ayeduase gate</option>
                                        <option value="Evandy (Newsite)">Evandy (Newsite) </option>
                                        <option value="Tech Junction">Tech Junction</option>
                                      </select>
                                    </div>
                                    </p>
                                    <div class="input-field col m6 s12">
                                      <!-- <label for="fromdate" required="required">Destination</label>
                                      <select class="input focused" name="actualdestination" id="focusedInput" required="required" type="text">
                                        <option value=""> </option>
                                        <option value="Accra">Accra</option>
                                        <option value="Tema">Tema</option>
                                      </select> -->
                                    </div>
                                  </div>
                                  <p>
                                  <div class="input-field col m12 s12">
                                    <label for="passwordsignup" class="youpasswd">Parent/Guardian's Number </label>
                                    <input id="passwordsignup" name="gmobile" required="required" min="15" type="text" placeholder="eg.+233*****8" />
                                  </div>
                                  </p>
                                </div>
                                <!-- end of pick up details -->

                                <!-- seats -->
                                <div class="container-fluid" style="width: 50%;">
                                  <div class="col s12 m12 l8">
                                    <div class="card">
                                      <div class="card-content">
                                        <div class="input-field col m6 s12">
                                          <label for="todate" required="required">
                                            <h4> Seat Reservation</h4>
                                          </label>
                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#seatModal"> Select seat number</button>
                                          <!-- Modal for Accra Or Tema Bus-->
                                          <div class="modal fade" id="seatModal" tabindex="-1" aria-labelledby="seatModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="seatModalLabel">Accra Or Tema Bus</h5><br>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <p>Select your seat number:</p>
                                                  <div class="input-field col m6 s12">
                                                    <div class="content-box">
                                                      <div class="mb-3">
                                                        <!-- <div class="seats-container"> -->
                                                        <table id="seatsDiagram" name="seatNumber" class="form-control" type="checkbox">
                                                          <!-- <table id="seatsDiagram" class="seat-table" name="seatNumber"> -->
                                                          <tr>
                                                            <?php
                                                            $result = mysqli_query($conn, "select seatnum from requestbus where (trip_status = 'active') and (destination = 'Accra Or Tema' and (CURRENT_DATE < departure_date))");
                                                            $seatnum = array();
                                                            if (mysqli_num_rows($result) > 0) {
                                                              while ($row = mysqli_fetch_assoc($result)) {
                                                                $seatnum[] = $row['seatnum'];
                                                              }
                                                            }
                                                            for ($i = 1; $i <= 15; $i++) {
                                                              if (in_array($i, $seatnum)) {
                                                                echo "<td class=\"seat taken\" id=\"seat-$i\" data-name=\"$i\"><span class=\"seat-number\">$i</span></td>";
                                                              } else {
                                                                echo "<td class=\"seat available\" id=\"seat-$i\" data-name=\"$i\"><span class=\"seat-number\">$i</span></td>";
                                                              }
                                                            }
                                                            ?>
                                                          </tr>
                                                          <tr>
                                                            <?php
                                                            $result = mysqli_query($conn, "select seatnum from requestbus where (trip_status = 'active') and (destination = 'Accra Or Tema' and (CURRENT_DATE < departure_date))");
                                                            $seatnum = array();
                                                            if (mysqli_num_rows($result) > 0) {
                                                              while ($row = mysqli_fetch_assoc($result)) {
                                                                $seatnum[] = $row['seatnum'];
                                                              }
                                                            }
                                                            for ($i = 16; $i <= 30; $i++) {
                                                              if (in_array($i, $seatnum)) {
                                                                echo "<td class=\"seat taken\" id=\"seat-$i\" data-name=\"$i\"><span class=\"seat-number\">$i</span></td>";
                                                              } else {
                                                                echo "<td class=\"seat available\" id=\"seat-$i\" data-name=\"$i\"><span class=\"seat-number\">$i</span></td>";
                                                              }
                                                            }
                                                            ?>
                                                          </tr>
                                                          <tr>
                                                            <?php
                                                            $result = mysqli_query($conn, "SELECT seatnum FROM requestbus WHERE (trip_status = 'active') and (destination = 'Accra Or Tema' and (CURRENT_DATE < departure_date))");
                                                            $seatnum = array();
                                                            if (mysqli_num_rows($result) > 0) {
                                                              while ($row = mysqli_fetch_assoc($result)) {
                                                                $seatnum[] = $row['seatnum'];
                                                              }
                                                            }
                                                            for ($i = 31; $i <= 45; $i++) {
                                                              if (in_array($i, $seatnum)) {
                                                                echo "<td class=\"seat taken\" id=\"seat-$i\" data-name=\"$i\"><span class=\"seat-number\">$i</span></td>";
                                                              } else {
                                                                echo "<td class=\"seat available\" id=\"seat-$i\" data-name=\"$i\"><span class=\"seat-number\">$i</span></td>";
                                                              }
                                                            }
                                                            ?>
                                                          </tr>
                                                          <tr>
                                                            <?php
                                                            $result = mysqli_query($conn, "select seatnum from requestbus where (trip_status = 'active') and (destination = 'Accra Or Tema' and (CURRENT_DATE < departure_date))");
                                                            $seatnum = array();
                                                            if (mysqli_num_rows($result) > 0) {
                                                              while ($row = mysqli_fetch_assoc($result)) {
                                                                $seatnum[] = $row['seatnum'];
                                                              }
                                                            }
                                                            for ($i = 46; $i <= 50; $i++) {
                                                              if (in_array($i, $seatnum)) {
                                                                echo "<td class=\"seat taken\" id=\"seat-$i\" data-name=\"$i\"><span class=\"seat-number\">$i</span></td>";
                                                              } else {
                                                                echo "<td class=\"seat available\" id=\"seat-$i\" data-name=\"$i\"><span class=\"seat-number\">$i</span></td>";
                                                              }
                                                            }
                                                            ?>
                                                          </tr>
                                                        </table>
                                                      </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <br>
                                          <br>
                                          <h3><span class="swing">Seat number is &#128071;</span></h3>
                                          <div class="control-group">
                                            <p>
                                            <div class="controls">
                                              <p>
                                              </p>
                                            </div>
                                            </p>
                                          </div>
                                        </div>
                                        <div class="col-auto">
                                          <input type="text" id="seatnum" class="form-control" name="seatnum" readonly style="width: 250px;" placeholder="choose from the above button">
                                        </div>
                                      </div>
                                      <br>
                                      <label for="departure_date">Please choose a departure date:</label>
                                      <input type="date" id="date" name="departure_date" min="2023-04-29" max="2023-04-30">
                                      <!-- <select class="input1 focused" name="departure_date" id="focusedInput" required="required" type="text">
                                        <option value=""></option>
                                        <option value="29th April 2023; 6AM">29th April 2023; 6AM</option>
                                        <option value="30th April 2023; 6AM">30th April 2023; 6AM</option>
                                      </select> -->
                                    </div>
                                    <div>
                                      <!-- other rows of seats -->
                                    </div>
                                    <script>
                                      // Get the table element
                                      // get all the cells in the table
                                      var cells = document.querySelectorAll('#destination td');
                                      // add event listeners to each cell
                                      cells.forEach(function(cell) {
                                        cell.addEventListener('click', function() {
                                          // remove any existing selection
                                          var selectedCell = document.querySelector('.selected');
                                          if (selectedCell) {
                                            selectedCell.classList.remove('selected');
                                          }
                                          // highlight the clicked cell
                                          cell.classList.add('selected');
                                          // display the text value in the input field
                                          var textValue = cell.textContent;
                                          var destinationInput = document.getElementById('destinationInput');
                                          destinationInput.value = textValue;
                                        });
                                      });
                                    </script>
                                    <script>
                                      const seatCells = document.querySelectorAll('#seatsDiagram td');
                                      seatCells.forEach(cell => {
                                        cell.addEventListener('click', selectSeat);
                                      });

                                      function selectSeat(event) {
                                        // Remove previous selection
                                        const selectedCell = document.querySelector('.selected');
                                        if (selectedCell) {
                                          selectedCell.classList.remove('selected');
                                        }
                                        // Mark new selection
                                        const cell = event.target;
                                        cell.classList.add('selected');
                                        // Update input text
                                        const input = document.getElementById('seatnum');
                                        input.value = cell.getAttribute('data-name');
                                      }
                                    </script>
                                    <br />
                                  </div>
                                  <br>
                                  <h3></h3>
                                  <button type="button" class="btn btn-primary" id="toggle2Btn" data-toggle="modal" data-target="#confirmSubmitModal">Submit</button>
                                  <!-- modal -->
                                  <div class="modal fade" id="confirmSubmitModal" tabindex="-1" role="dialog" aria-labelledby="confirmSubmitModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="confirmSubmitModalLabel">Confirm Submission</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Are you sure you want to submit the form?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="submit" name="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- End submit modal -->
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmModal"> Cancel</button>
                                  <!-- Modal -->
                                  <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="confirmModalLabel">Confirmation</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Are you sure you want to perform this action?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <a href="dashboard.php" class="btn btn-primary">Confirm</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div><br>
                                  <h3> </h3>
                                  <!-- End Modal -->
                                </div>
                                <!-- end of seats -->


                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                      <!-- Payment Form -->
                      <div>
                        <form action="" method="post" id="payment-form">
                          <label for="fromdate" required="required">Destination</label>
                          <select id="destination-select" class="input focused" name="actualdestination" id="focusedInput" required="required" type="text">
                            <option value="">Select destination</option>
                            <option value="Accra">Accra</option>
                            <option value="Tema">Tema</option>
                          </select>
                          <h4>PAYMENT</h4>
                          <input type="tel" id="phone-number" placeholder="Enter Momo number" name="phone-number" required>
                          <br>
                          <label for="amount">Amount:</label>
                          <input type="text" id="amount-field" name="amount" value="" readonly>
                          <br>
                          <button type="submit" name="make_payment">Pay Now</button>
                        </form>
                      </div>

                      <?php if (isset($_POST['make_payment'])) {
                        $amount = (float)$_POST['amount'];
                        $phone_number = $_POST['phone-number'];

                        echo $amount;
                        // $mobileNumber = "+233544910061";
                        $curl = curl_init();

                        $payload = array(
                          "amount" => "",
                          "title" => "string",
                          "description" => "string",
                          "clientReference" => "string",
                          "callbackUrl" => "http://example.com",
                          // "cancellationUrl" => "http://example.com",
                          // "returnUrl" => "http://example.com",
                          // "logo" => "http://example.com"
                        );

                        $payload['amount'] = $amount;

                        curl_setopt_array($curl, [
                          CURLOPT_HTTPHEADER => [
                            "Content-Type: application/json",
                            "Authorization: Basic " . base64_encode("zsutcgjj:doijdkvk")
                          ],
                          CURLOPT_POSTFIELDS => json_encode($payload),
                          CURLOPT_URL => "https://devp-reqsendmoney-230622-api.hubtel.com/request-money/" . $phone_number,
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_CUSTOMREQUEST => "POST",
                        ]);

                        $response = curl_exec($curl);
                        $error = curl_error($curl);

                        curl_close($curl);

                        if ($error) {
                          echo "cURL Error #:" . $error;
                        } else {
                          $responseObject = json_decode($response);
                          echo "<script>window.location.href='" . $responseObject->data->paylinkUrl . "'</script>";
                        }
                      
                      }
                      ?>

                      <script>
                        const mobileNumber = document.getElementById('phone-number').value;
                        const destinationSelect = document.getElementById("destination-select");
                        const amountField = document.getElementById("amount-field");

                        destinationSelect.addEventListener("change", () => {
                          if (destinationSelect.value === "Accra") {
                            amountField.value = "120";
                          } else if (destinationSelect.value === "Tema") {
                            amountField.value = "140";
                          }
                        });
                      </script>

                      <!-- End of Payment Form -->
                    </div>
                  </div>
                </div>
              </div>
            </main>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $tablename = "requestbus";
  $fname_column = "fname";
  $lname_column = "lname";
  $booked_date = "booked_date";
  $departure_date_column = "departure_date";
  $seatnum_column = "seatnum";
  $status_column = 'status';
  $level_column = "level";
  $fullname_column = "fullname";
  $pickup_column = "pickup";
  $actualdestination_column = "actualdestination";
  $destination_column = "destination";
  $gmobile_column = "gmobile";
  $amount_column = 'amount';
  $trip_status = 'trip_status';
  $cnt = 1;

  if (isset($_POST['submit'])) {

    // Retrieve form data
    $fname = $user_row['fname'];
    $lname = $user_row['lname'];
    $level = $_POST['level'];
    $pickup = $_POST['pickup'];
    $departure_date = $_POST['departure_date'];
    $destination = 'Accra Or Tema';
    $actualdestination = $_POST['actualdestination'];
    $gmobile = $_POST['gmobile'];
    $seatnum = $_POST['seatnum'];
    $fullname = $fname . ' ' . $lname;
    $amount = $_POST['amount'];
    $status = 'Pending';
    $book_date = date('Y-m-d H:i:s');
    $mobile = $user_row['mobile'];
    $active = 'actvie';

    // Insert data into database
    $sql = "INSERT INTO $tablename ($fname_column, $lname_column, $actualdestination_column, $status_column, $booked_date, $seatnum_column, $level_column, $fullname_column, $pickup_column, $destination_column, $gmobile_column, $amount_column, $trip_status,$departure_date_column) VALUES ('$fname', '$lname','$actualdestination', '$status' ,NOW(), '$seatnum', '$level', '$fullname', '$pickup', '$destination', '$gmobile', '$amount', '$active','$departure_date')";
    if ($conn->query($sql) === TRUE) {

      $user_email = $user_row['email'];
      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->Host = "smtp.gmail.com";
      $mail->SMTPAuth = "true";
      $mail->SMTPSecure = "tls";
      $mail->Port = "587";
      $mail->Username = "kiwijob3@gmail.com";
      $mail->Password = "mtbvhvsxtrupwjgw";
      $mail->Subject = 'ATT Travels - Receipt';
      $mail->setFrom("atttravels@gmail.com", "ATT Travels");
      $mail->isHTML(true);
      $mail->Body = "
      <div style=\"margin: auto; width: 50%; background-color: #f1f1f1; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px #888888;\">
      <h1>ATT Travels</h1>
      <h2>Official Receipt</h2>
      <table>
        <div style=\"padding: 20px;\">
          <div style=\"margin: 20px 0; padding: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0px 0px 5px #888888;\">
            <h2 style=\"margin: 0; font-size: 20px;\">Passenger Information</h2>
            <p style=\"margin: 5px 0; font-size: 16px;\">Name: $fullname</p>
            <p style=\"margin: 5px 0; font-size: 16px;\">Contact: $mobile</p>
            </div>
          <h2>Trip Information</h2>
          <p style=\"margin: 5px 0; font-size: 16px;\">Date and Time: $book_date</p>
          <p style=\"margin: 5px 0; font-size: 16px;\">Pick Up Point: $pickup</p>
          <p style=\"margin: 5px 0; font-size: 16px;\">Depature Date: $departure_date</p>
          <p style=\"margin: 5px 0; font-size: 16px;\">Destination: $actualdestination</p>
          <p style=\"margin: 5px 0; font-size: 16px;\">Seat Number: $seatnum</p>
          <p style=\"margin: 5px 0; font-size: 16px;\">Fare Amount Paid: $amount</p>
          </div>
        <div style=\"margin: 20px 0; padding: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0px 0px 5px #888888;\">
          <h2 style=\"margin: 0; font-size: 20px;\">Parent Information</h2>
          <p style=\"margin: 5px 0; font-size: 16px;\">Phone Number: $gmobile</p>
          </div>
        <div style=\"margin: 20px 0; padding: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0px 0px 5px #888888;\">
          <p style=\"margin: 0; font-size: 16px; text-align: center;\">Thank you for choosing our bus service!</p>
        </div>
      </table>
    </div>
      ";
      $mail->addAddress($user_email);
      if ($mail->send()) {
        echo '<script> alert("Receipt Sent to your email.") </script>';
      } else {
        echo '<script> alert("Error sending mail.") </script>';
      }

      $mail->smtpClose();
      echo '<script> alert("Bus Reserved ") </script>';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  ?>

  <?php include 'footer.php'; ?>
  </div>
  <?php include 'script.php'; ?>
</body>

</html>