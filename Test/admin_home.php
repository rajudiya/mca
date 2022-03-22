<?php
    include "validate_admin.php";
    include "header.php";
    include "user_navbar.php";
    include "admin_sidebar.php";
    include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_home_style.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">
                Welcome Admin !
            </h1>
            <p id="customer" style="max-width:800px">
                <img src="images/radio_button_checked.png" >  Admin can manage all of core E-Wallet settings.<br>
                <img src="images/radio_button_checked.png" >  You can view their transactions, edit their
                     details and even delete them.<br> 
                <img src="images/radio_button_checked.png" >  You can also post news on the website.
            </p>
        </div>
    </div>

</body>
</html>


