<?php
    include "connect.php";

    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION['loggedIn_cust_id'])) {
        $sql0 = "SELECT * FROM customer WHERE cust_id=".$_SESSION['loggedIn_cust_id'];
        $result = $conn->query($sql0);
        $row = $result->fetch_assoc();
    }
    $id = $_SESSION['loggedIn_cust_id'];


    $sql1 = "SELECT * FROM passbook".$id." WHERE trans_id=(
                    SELECT MAX(trans_id) FROM passbook".$id.")";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    if ($row1["debit"] == 0) {
        $transaction = $row1["credit"];
        $type = "credit";
    }
    else {
        $transaction = $row1["debit"];
        $type = "debit";
    }

   
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_navbar_style.css">
    <script src="jquery-3.2.1.min.js"></script>
</head>

<body>
    <div class="nav-wrapper">
        <div class="topnav" id="theTopNav">
            <a href="javascript:void(0);" class="icon" onclick="openNav()" id="hamburger">
                &#9776;
            </a>
            <a id="user"> Welcome, &nbsp<?php echo $row["first_name"]; ?> !</a>

            <a id="logout" href="./logout_action.php" onclick="return confirm('Are you sure?')">Logout</a>
            <a id="profile" href="./customer_profile.php">My Profile</a>
            
            <a style="color:white;
                  background-color: #b71c1c;
                  float: right;
                  display: block;
                  color: white;
                  text-align: center;
                  padding: 17px 17px;
                  text-decoration: none;
                  font-size: 16.9px;
                  font-family: OpenSans-Bold;border-top-right-radius: 3px;">Wallet Balance :&nbsp&nbsp&nbsp   <?php echo number_format($row1["balance"]); ?> </a>
                   
                 <a style="color:white;
                  background-color: #b71c1c;
                  float: right;
                  display: block;
                  color: white;
                  text-align: center;
                  padding: 5px 5px;
                  text-decoration: none;
                  font-size: 16.9px;
                  font-family: OpenSans-Bold;border-top-left-radius: 7px;"><img  src="images/B.png" width="78.9" height="53"> </a>
        </div>
    </div>

<script>
// Function below is jquery-3 function used for making the navbar sticky
$(document).ready(function() {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 120) {
      $("#theTopNav").addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 121) {
      $("#theTopNav").removeClass('navbar-fixed');
  }
  });
});
</script>

</body>
</html>
