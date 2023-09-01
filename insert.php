<?php

    include 'connect.php';
    
extract($_POST);

if(isset($_POST['sendUserFirstName']) &&
   isset($_POST['sendUserLastName']) &&
   isset($_POST['sendUserEmail']) &&
   isset($_POST['sendUserPhone']) &&
   isset($_POST['sendUserCity']) &&
   isset($_POST['sendUserState']) &&
   isset($_POST['sendUserCountry']) &&
   isset($_POST['sendUserZipCode'])
   )
    {
       $insertQuery = "   INSERT INTO `users`(first_name, last_name, email, phone, city, state, country, zip_code, date_created) 
                    VALUES ('$sendUserFirstName','$sendUserLastName','$sendUserEmail','$sendUserPhone','$sendUserCity','$sendUserState','$sendUserCountry','$sendUserZipCode', CURRENT_TIMESTAMP() )";

        $result = mysqli_query($con, $insertQuery);

    }