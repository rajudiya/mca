<?php
    include "validate_customer.php";
    include "header.php";
    //include "user_navbar.php";
    include "session_timeout.php";
    include "customer_navbar.php"
    //include "customer_sidebar.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_add_style.css">
</head>
<body>
    <form class="add_customer_form" action="customer_add_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header"> Wallet Link to Bank</h1>
        </div>
           <div class="flex-container">
            <div class=container>
                <label>Account No :</label><br>
                <input name="acno" size="25" Maxlength="10" Minlength="10" type="text" required />
            </div>
           </div>
           <div class="flex-container">
            <div class="container">
                <button type="submit">Submit</button>
            </div>

            <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </div>
        </div>

    </form>

    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>

</body>
</html>
