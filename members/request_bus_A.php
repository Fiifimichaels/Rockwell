<?php include 'header.php'; ?>
<?php include 'session.php'; ?>

<head>
  <script src="https://widget.northeurope.cloudapp.azure.com:9443/v0.1.0/mobile-money-widget-mtn.js"></script>
  <script src="TODO_REPLACE_WITH_PRODUCTION_PATH"></script>

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
              <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Book Trip To Accra & Tema</div>
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
                                    <h4>Select pick up details</h4>
                                    <div class="control-group">
                                      <p>
                                      <div class="controls">
                                        <p>
                                        <div class="input-field col m6 s12">
                                          <label for="fromdate" required="required">Year</label>
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
                                  </div>
                                  <div class="input-field col m12 s12">
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Parent/Guardian's Number </label>
                                    <input id="passwordsignup" name="gmobile" required="required" min="15" type="text" placeholder="eg.+233******748" />
                                  </div>
                                </div>
                                <!-- end of pick up details -->

                                <!-- seats -->
                                <div class="container-fluid" style="width: 50%;">
                                  <div class="col s12 m12 l8">
                                    <div class="card">
                                      <div class="card-content">
                                        <div class="input-field col m6 s12">
                                          <label for="todate" required="required">
                                            <h4> Select Destination</h4>
                                          </label>
                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#seatModal"> Select seat number</button>
                                          <!-- Modal for Accra & Tema Bus-->
                                          <div class="modal fade" id="seatModal" tabindex="-1" aria-labelledby="seatModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="seatModalLabel">Accra & Tema Bus</h5><br>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <p>Select your seat number:</p>
                                                  <div class="input-field col m6 s12">
                                                    <div class="content-box">
                                                      <div class="mb-3">
                                                        <table id="seatsDiagram" name="seatNumber" class="form-control">
                                                          <tr>
                                                            <?php
                                                             $result = mysqli_query($conn, "select seatnum from requestbus where destination = 'Accra & Tema'");
                                                             $seatnum = array();
                                                             if (mysqli_num_rows($result) > 0) {
                                                               while ($row = mysqli_fetch_assoc($result)) {
                                                                 $seatnum[] = $row['seatnum'];
                                                               }
                                                             } else {
                                                               echo "0 results";
                                                             }
                                                            for ($i = 1; $i <= 15; $i++) {
                                                              if (in_array($i, $seatnum)) {
                                                                echo "<td tabindex=\"-1\" disabled style=\"background-color: #f1f1f1; color: #999; pointer-events: none;\" id=\"seat-$i\" data-name=\"$i\">$i</td>";
                                                              } else {
                                                                echo "<td id=\"seat-$i\" data-name=\"$i\">$i</td>";
                                                              }
                                                            }
                                                            ?>
                                                          </tr>
                                                          <tr>
                                                            <?php 
                                                            $result = mysqli_query($conn, "select seatnum from requestbus where destination = 'Accra & Tema'");
                                                             $seatnum = array();
                                                             if (mysqli_num_rows($result) > 0) {
                                                               while ($row = mysqli_fetch_assoc($result)) {
                                                                 $seatnum[] = $row['seatnum'];
                                                               }
                                                             } else {
                                                               echo "0 results";
                                                             }
                                                            for ($i = 16; $i <= 30; $i++) {
                                                              if (in_array($i, $seatnum)) {
                                                                echo "<td tabindex=\"-1\" disabled style=\"background-color: #f1f1f1; color: #999; pointer-events: none;\" id=\"seat-$i\" data-name=\"$i\">$i</td>";
                                                              } else {
                                                                echo "<td id=\"seat-$i\" data-name=\"$i\">$i</td>";
                                                              }
                                                            }
                                                            ?>
                                                          </tr>
                                                          <tr>
                                                            <?php 
                                                            $result = mysqli_query($conn, "select seatnum from requestbus where destination = 'Accra & Tema'");
                                                             $seatnum = array();
                                                             if (mysqli_num_rows($result) > 0) {
                                                               while ($row = mysqli_fetch_assoc($result)) {
                                                                 $seatnum[] = $row['seatnum'];
                                                               }
                                                             } else {
                                                               echo "0 results";
                                                             }
                                                            for ($i = 31; $i <= 45; $i++) {
                                                              if (in_array($i, $seatnum)) {
                                                                echo "<td tabindex=\"-1\" disabled style=\"background-color: #f1f1f1; color: #999; pointer-events: none;\" id=\"seat-$i\" data-name=\"$i\">$i</td>";
                                                              } else {
                                                                echo "<td id=\"seat-$i\" data-name=\"$i\">$i</td>";
                                                              }
                                                            } 
                                                            ?>
                                                          </tr>
                                                          <tr>
                                                            <?php 
                                                            $result = mysqli_query($conn, "select seatnum from requestbus where destination = 'Accra & Tema'");
                                                             $seatnum = array();
                                                             if (mysqli_num_rows($result) > 0) {
                                                               while ($row = mysqli_fetch_assoc($result)) {
                                                                 $seatnum[] = $row['seatnum'];
                                                               }
                                                             } else {
                                                               echo "0 results";
                                                             }
                                                            for ($i = 46; $i <= 55; $i++) {
                                                              if (in_array($i, $seatnum)) {
                                                                echo "<td tabindex=\"-1\" disabled style=\"background-color: #f1f1f1; color: #999; pointer-events: none;\" id=\"seat-$i\" data-name=\"$i\">$i</td>";
                                                              } else {
                                                                echo "<td id=\"seat-$i\" data-name=\"$i\">$i</td>";
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
                                          <input type="text" id="seatnum" class="form-control" name="seatnum" readonly style="width: 250px;">
                                        </div>
                                        <div class="col-auto">
                                          <span id="seatInfo" class="form-text">
                                            Select from the above figure, Maximum 1 seat.
                                          </span>
                                        </div>
                                      </div>
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
                                  <h3> </h3><br>
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

                                <!-- Payment Form -->
                                <div>
                                  <link rel="stylesheet" href="https://devp-reqsendmoney-230622-api.hubtel.com/request-money/{0243762748}">
                                  <form id="payment-form" onsubmit="submitPayment(event)">
                                    <h4>PAYMENT GH&#162; 190</h4><br>
                                    <label for="phone-number">Phone Number:</label>
                                    <input type="tel" id="phone-number" name="phone-number" required>
                                    <br>
                                    <label for="amount">Amount:</label>
                                    <input type="number" id="amount" name="amount" min="190" max="190" required>
                                    <br>
                                    <button type="submit">Pay Now</button>
                                  </form>
                                  <script>
                                    // Replace with your own values
                                    const API_USER_ID = "233243762748";
                                    const PRIMARY_KEY = "db714f0828854468818b2ee337daa05f";
                                    const SECONDARY_KEY = "474ea445b7e64380a4bbff92e6518311";

                                    function submitPayment(event) {
                                      event.preventDefault();
                                      const phoneNumber = document.getElementById("phone-number").value;
                                      const amount = document.getElementById("amount").value;
                                      // Make request to MTN Mobile Money API
                                      axios
                                        .post(
                                          "https://ericssonbasicapi2.azure-api.net/collection/v1_0/requesttopay", {
                                            amount: amount,
                                            currency: "UGX",
                                            externalId: phoneNumber,
                                            payer: {
                                              partyIdType: "MSISDN",
                                              partyId: phoneNumber
                                            },
                                            payerMessage: "Payment from MTN Pay",
                                            payeeNote: "Thank you for your payment"
                                          }, {
                                            headers: {
                                              Authorization: `Basic ${btoa(
                                                `${PRIMARY_KEY}:${SECONDARY_KEY}`
                                              )}`,
                                              "X-Reference-Id": "my-unique-ref-id",
                                              "X-Target-Environment": "sandbox",
                                              "Ocp-Apim-Subscription-Key": API_USER_ID
                                            }
                                          }
                                        )
                                        .then(response => {
                                          console.log(response.data);
                                          alert("Payment successful!");
                                        })
                                        .catch(error => {
                                          console.log(error.response.data);
                                          alert("Payment failed.");
                                        });
                                    }
                                  </script>
                                </div>
                                <!-- End of Payment Form -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
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
  $time_column = "time";
  $seatnum_column = "seatnum";
  $status_column = 'status';
  $level_column = "level";
  $fullname_column = "fullname";
  $pickup_column = "pickup";
  $destination_column = "destination";
  $gmobile_column = "gmobile";
  $amount_column = 'amount';
  $cnt = 1;

  if (isset($_POST['submit'])) {

    // Retrieve form data
    $fname = $user_row['fname'];
    $lname = $user_row['lname'];
    $level = $_POST['level'];
    $pickup = $_POST['pickup'];
    $destination = 'Accra & Tema';
    $gmobile = $_POST['gmobile'];
    $seatnum = $_POST['seatnum'];
    $fullname = $fname . ' ' . $lname;
    $amount = $_POST['amount'];
    $status = 'Pending';

    // Insert data into database
    $sql = "INSERT INTO $tablename ($fname_column, $lname_column, $status_column, $time_column, $seatnum_column, $level_column, $fullname_column, $pickup_column, $destination_column, $gmobile_column, $amount_column) VALUES ('$fname', '$lname', '$status' ,NOW(), '$seatnum', '$level', '$fullname', '$pickup', '$destination', '$gmobile', '$amount')";
    if ($conn->query($sql) === TRUE) {
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