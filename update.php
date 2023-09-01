<?php
    include 'connect.php';

   if(isset($_POST['editById'])) {
        $userId = $_POST['editById'];

        $query = "SELECT * FROM users WHERE id = $userId";
        $result = mysqli_query($con, $query);
        $response = array();

        while($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
        echo json_encode($response);
   } else {
       $response['status'] = 200;
       $reponse['message'] = "Invalid or data not found";
   }

   //extract($_POST);

   if(isset($_POST['updateHiddenData']))
   {
       $uniqueRecord = $_POST['updateHiddenData'];
       $firstName = $_POST['updateUserFirstName'];
       $lastName = $_POST['updateUserLastName'];
       $email = $_POST['updateUserEmail'];
       $phone = $_POST['updateUserPhone'];
       $city = $_POST['updateUserCity'];
       $state = $_POST['updateUserState'];
       $country = $_POST['updateUserCountry'];
       $zip_code = $_POST['updateUserZipCode'];

       $query  =   "UPDATE `users`
                    SET first_name='$firstName', last_name='$lastName', email='$email', 
                        phone='$phone', city='$city', state='$state', country='$country', zip_code='$zip_code'
                    WHERE id=$uniqueRecord
                    ";
        $result = mysqli_query($con, $query);


   }