<?php

require_once 'include/boot.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register form</title>
    <link rel="stylesheet" href="style/css/main.css">
</head>
<body>

<!--Form for registration new user in data base-->
<form action="signup.php" method="post">
    <p><i><label>Fields marked with an * are required!</label></i></p>

    <label>First name*</label>
    <input type="text" name="first_name" placeholder="Enter first name">
    <label>Last name*</label>
    <input type="text" name="last_name" placeholder="Enter last name">
    <label>Email*</label>
    <input type="email" name="email" placeholder="Enter email">
    <label>Company name</label>
    <input type="text" name="company" placeholder="Enter company name">
    <label>Position in company</label>
    <input type="text" name="position" placeholder="Enter position in company">
    <label>Phone number 1</label>
    <input type="number" name="phone_1" placeholder="Enter  phone number">
    <label>Phone number 2</label>
    <input type="number" name="phone_2" placeholder="Enter  phone number">
    <label>Phone number 3</label>
    <input type="number" name="phone_3" placeholder="Enter  phone number">

    <button type="submit">Register</button>
    <button class="back" type="button"><a href="start.php">To main menu</a></button>

        <?php

            if ($_SESSION['msg']){
                echo '<p class="message">' . $_SESSION['msg'] . '</p>';
            }
            unset($_SESSION['msg']);

        ?>

</form>

</body>
</html>
