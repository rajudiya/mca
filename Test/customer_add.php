<?php
    //include "validate_admin.php";
    include "header.php";
    //include "user_navbar.php";
    //include "admin_sidebar.php";
    include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_add_style.css">
     <script type="text/javascript" src="all.js"></script>
</head>

<body>
    <form class="add_customer_form" action="customer_add_action.php" method="post">
        <div class="reg">
        <div class="flex-container-form_header" align="center">
            <h1 id="form_header"> Registration</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>First Name :</label><br>
                <input name="fname" size="30" type="text" required style='text-transform:uppercase' />
            </div>
            <div  class=container>
                <label>Last Name :</b></label><br>
                <input name="lname" size="30" type="text" required style='text-transform:uppercase' />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Gender :</label>
            </div>
            <div class="flex-container-radio">
                <div class="container">
                    <input type="radio" name="gender" value="male" id="male-radio" checked>
                    <label id="radio-label" for="male-radio"><span class="radio">Male</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="gender" value="female" id="female-radio">
                    <label id="radio-label" for="female-radio"><span class="radio">Female</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="gender" value="others" id="other-radio">
                    <label id="radio-label" for="other-radio"><span class="radio">Others</span></label>
                </div>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Date of Birth :</label><br>
                <input name="dob" size="30" type="date" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Aadhar No :</label><br>
                <input name="aadhar" size="25" Maxlength="14" Minlength="14" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  id="aadhharno" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Email-ID :</label><br>
                <input name="email" size="30" type="text" required  style='text-transform:lowercase;'/>
            </div>
            <div  class=container>
                <label>Phone No. :</b></label><br>
                <input name="phno" size="30" Maxlength="10" Minlength="10" type="text"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Address :</label><br>
                <textarea name="address" required /></textarea>
            </div>
        </div>


        <div class="flex-container">
            <div class=container>
                <label>Account No :</label><br>
                <input name="acno" size="20" Maxlength="11" Minlength="11" type="text" id="a1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  required />
            </div>&nbsp;
            <div class="container">
                <label>Confom Account No :</label><br>
                <input name="acno" size="20" Maxlength="11" Minlength="11" type="text" id="a2"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required />
            </div>
        </div>

        <div class="flex-container">
          <!-- <div class=container>
                <label>Opening Balance :</label><br>
                <input name="o_balance" size="20" type="text" required />
            </div>  -->

            <div  class=container>               
                     <label> Wallet PIN(4 digit) :</b></label><br>
                <input name="pin" size="15" Maxlength="4" Minlength="4" type="text"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Username :</label><br>
                <input name="cus_uname" size="15" type="text" required />
            </div>
            <div  class=container>
                <label>Password :</b></label><br>
                <input name="cus_pwd" size="15" type="password" id="password" minlength="8" maxlength="16" required />
            </div>
            <div class="container">
                 <label>confirm password :</b></label><br>
                <input name="cus_pwd" size="15" type="password" id="confirm_password" minlength="8" maxlength="16" required />
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
    </div>
    </form>
</body>
</html>
